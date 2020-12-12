<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Timepicker</h1>

	<form action="#">
		<label>Start Date</label>
		<input type="text" class="timepicker">

<br>
<label>Hour:</label>
<input type="range" id="hours" name="points" min="0" max="23" oninput="updateHour(this.value)" onchange="updateHour(this.value)">
<br>
<label>Minute:</label>
<input type="range" id="minutes" name="minutes" min="0" max="59" oninput="updateMinute(this.value)" onchange="updateMinute(this.value)">


		<p>Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Omnis tempora eligendi repudiandae provident assumenda, illum temporibus ex magnam ducimus reiciendis ipsum quae? Atque praesentium vel quo, obcaecati nobis officiis rem.</p>
	</form>

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

function addZeroBefore(n) {
  return (n < 10 ? '0' : '') + n;
}

function updateTimepicker(el) {

	el.value = currentHour + ':' + currentMinute;

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
  margin: 18px 0;
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
  background: #3071a9;
  border-radius: 1.3px;
  border: 0.2px solid #010101;
}
input[type=range]::-webkit-slider-thumb {
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -14px;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #367ebd;
}
input[type=range]::-moz-range-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  background: #3071a9;
  border-radius: 1.3px;
  border: 0.2px solid #010101;
}
input[type=range]::-moz-range-thumb {
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 36px;
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
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
  cursor: pointer;
}
input[type=range]:focus::-ms-fill-lower {
  background: #3071a9;
}
input[type=range]:focus::-ms-fill-upper {
  background: #367ebd;
}
</style>






















</body>
</html>