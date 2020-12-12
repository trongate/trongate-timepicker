<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="trongate.css">
	<title>Document</title>
</head>
<body>
	<h1>Timepicker</h1>

	<div id="timepicker">
		<table>
			<tr>
				<th colspan="2">Choose Time</th>
			</tr>
			<tr>
				<td>Time</td>
				<td id="time-guide">00:00</td>
			</tr>
			<tr>
				<td>Hour</td>
				<td><input type="range" id="hours" name="points" min="0" max="23" oninput="updateHour(this.value)" onchange="updateHour(this.value)"></td>
			</tr>
			<tr>
				<td>Minute</td>
				<td><input type="range" id="minutes" name="minutes" min="0" max="59" oninput="updateMinute(this.value)" onchange="updateMinute(this.value)"></td>
			</tr>
		</table>

<style>
	#timepicker th, #timepicker td {
		padding: 8px 4px;
		font-size: 15px;
	}

	#timepicker td:nth-child(1) {
        border-right: 0;
	}

	#timepicker td:nth-child(2) {;
        border-left: 0;
	}
</style>




		<form action="#">
			<label>Start Date</label>
			<input type="text" class="timepicker">





	<br>
	<label>Hour:</label>
	
	<br>
	<label>Minute:</label>
	


			<p>Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Omnis tempora eligendi repudiandae provident assumenda, illum temporibus ex magnam ducimus reiciendis ipsum quae? Atque praesentium vel quo, obcaecati nobis officiis rem.</p>
		</form>

	</div>

<script>
var today = new Date();
var time = today.getHours() + ":" + today.getMinutes();
var currentTime = time;
var currentHour = today.getHours();
var currentMinute = today.getMinutes();

currentHour = addZeroBefore(currentHour);
currentMinute = addZeroBefore(currentMinute);

var timepickers = document.getElementsByClassName("timepicker");
var targetEl = timepickers[0];
targetEl.value = currentTime;

var hourSlider = document.getElementById("hours");
var minuteSlider = document.getElementById("minutes");
var timeGuide = document.getElementById("time-guide");

timeGuide.innerHTML = currentTime;

function addZeroBefore(n) {
  return (n < 10 ? '0' : '') + n;
}

function updateTimepicker(el) {

	el.value = currentHour + ':' + currentMinute;
	timeGuide.innerHTML = currentHour + ':' + currentMinute;

}

function updateHour(newHour) {
	currentHour = addZeroBefore(newHour);
	console.log('newHour is ' + currentHour);
	updateTimepicker(targetEl);
}

function updateMinute(newMinute) {
	currentMinute = addZeroBefore(newMinute);
	console.log('newMinute is ' + currentMinute);
	updateTimepicker(targetEl);
}

function updateTimepickerSliders(hourSlider, minuteSlider) {
	hourSlider.value = currentHour;
	minuteSlider.value = currentMinute;
}

updateTimepickerSliders(hourSlider, minuteSlider);

console.log(currentTime);
console.log(currentHour);
console.log(currentMinute);
</script>

<style>
input[type=range] {
  -webkit-appearance: none;
  width: 100%;
}
input[type=range]:focus {
  outline: none;
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  background: SteelBlue;
  border-radius: 1.3px;
  border: 0.2px solid #010101;
}
input[type=range]::-webkit-slider-thumb {
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 18px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -4px;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #649ac6;
}
input[type=range]::-moz-range-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  background: SteelBlue;
  border-radius: 1.3px;
  border: 0.2px solid #010101;
}
input[type=range]::-moz-range-thumb {
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 18px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
  cursor: pointer;
}
input[type=range]::-ms-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  background: transparent;
  border-color: transparent;
  border-width: 16px 0;
  color: transparent;
}
input[type=range]::-ms-fill-lower {
  background: #2a6495;
  border: 0.2px solid #010101;
  border-radius: 2.6px;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
}
input[type=range]::-ms-fill-upper {
  background: #3071a9;
  border: 0.2px solid #010101;
  border-radius: 2.6px;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
}
input[type=range]::-ms-thumb {
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 18px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
  cursor: pointer;
}
input[type=range]:focus::-ms-fill-lower {
  background: #3071a9;
}
input[type=range]:focus::-ms-fill-upper {
  background: #649ac6;
}






#timepicker {
	width: 250px;
}
</style>






















</body>
</html>