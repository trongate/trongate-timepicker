<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="trongate.css">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<h2 style="text-align: center;">Timepicker Example</h2>
		<form action="x">
			<label>First Name</label>
			<input type="text">
			<label>Last Name</label>
			<input type="text">
			<label>Arrive Date</label>
			<input type="text" name="arrive" class="timepicker">
			<label>Email Address</label>
			<input type="text">
			<label>Description</label>
			<textarea name="whatever" id="" cols="30" rows="10"></textarea>
			<button>Submit</button>
		</form>
	</div>

<style>
    body {
    	margin: 0;
    	background-color: SteelBlue;
    }

	.container {
		width: 90%;
		max-width: 700px;
		margin: 0 auto;
		padding: 34px;
		background-color: white;
		height: 100vh;
	}

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


















<script>

function initTimepicker(clickedEl) {
	//destroy other timepickers

	var timepicker = document.createElement("div");
    timepicker.setAttribute("id", "timepicker");

    //build the timepicker table
    var timepickerTbl = document.createElement("table");
    var timepickerTblTopTr = document.createElement("tr");
    timepickerTbl.appendChild(timepickerTblTopTr);
    var timepickerTblTopTh = document.createElement("th");
    timepickerTblTopTh.setAttribute("colspan", "2");
    var tblHeadline = document.createTextNode('Choose Time');
    timepickerTblTopTh.appendChild(tblHeadline);
    timepickerTblTopTr.appendChild(timepickerTblTopTh);
    timepickerTbl.appendChild(timepickerTblTopTr);



    //build the timepicker table body

// <tr>
// 				<td>Time</td>
// 				<td id="time-guide">00:00</td>
// 			</tr>
// 			<tr>
// 				<td>Hour</td>
// 				<td><input type="range" id="hours" name="points" min="0" max="23" oninput="updateHour(this.value)" onchange="updateHour(this.value)"></td>
// 			</tr>
// 			<tr>
// 				<td>Minute</td>
// 				<td><input type="range" id="minutes" name="minutes" min="0" max="59" oninput="updateMinute(this.value)" onchange="updateMinute(this.value)"></td>
// 			</tr>

	
	//first row
	var tblRow = document.createElement("tr");
	var tblCell = document.createElement("td");
	var tblCellTxt = document.createTextNode('Time');
	tblCell.appendChild(tblCellTxt);
	tblRow.appendChild(tblCell);

	tblCell = document.createElement("td");
	tblCell.setAttribute("id", "time-guide");
	tblCellTxt = document.createTextNode("00:00");
	tblCell.appendChild(tblCellTxt);
	tblRow.appendChild(tblCell);

	timepickerTbl.appendChild(tblRow);

	//second row
	tblRow = document.createElement("tr");
	tblCell = document.createElement("td");
	tblCellTxt = document.createTextNode('Hour');
	tblCell.appendChild(tblCellTxt);
	tblRow.appendChild(tblCell);

	tblCell = document.createElement("td");
	var formInput = document.createElement("input");
	formInput.setAttribute("type", "range");
	formInput.setAttribute("id", "hours");
	formInput.setAttribute("name", "points");
	formInput.setAttribute("min", "0");
	formInput.setAttribute("max", "23");
	formInput.setAttribute("oninput", "updateHour(this.value)");
	formInput.setAttribute("onchange", "updateHour(this.value)");
	tblCell.appendChild(formInput);



///   javascript dynamically create form input




	// tblCell.setAttribute("id", "time-guide");
	// tblCellTxt = document.createTextNode("hour slider here");
	// tblCell.appendChild(tblCellTxt);
	tblRow.appendChild(tblCell);

	timepickerTbl.appendChild(tblRow);


	//third row
	tblRow = document.createElement("tr");
	tblCell = document.createElement("td");
	tblCellTxt = document.createTextNode('Minute');
	tblCell.appendChild(tblCellTxt);
	tblRow.appendChild(tblCell);

	tblCell = document.createElement("td");

// 				<td><input type="range" id="minutes" name="minutes" min="0" max="59" oninput="updateMinute(this.value)" onchange="updateMinute(this.value)"></td>

	formInput = document.createElement("input");
	formInput.setAttribute("type", "range");
	formInput.setAttribute("id", "minutes");
	formInput.setAttribute("name", "minutes");
	formInput.setAttribute("min", "0");
	formInput.setAttribute("max", "59");
	formInput.setAttribute("oninput", "updateMinute(this.value)");
	formInput.setAttribute("onchange", "updateMinute(this.value)");
	tblCell.appendChild(formInput);


	// tblCell.setAttribute("id", "time-guide");
	// tblCellTxt = document.createTextNode("minute slider here");
	// tblCell.appendChild(tblCellTxt);
	tblRow.appendChild(tblCell);

	timepickerTbl.appendChild(tblRow);






















timepicker.appendChild(timepickerTbl);

    // var sampleTxt = document.createTextNode('timepicker ahoy!');
    // timepicker.appendChild(sampleTxt);

    clickedEl.parentNode.insertBefore(timepicker, clickedEl.nextSibling);


}

// function buildDatepickerCalendar(clickedEl) {
//     destroyDatepickerCalendars();

//     datepickerCalendar = document.createElement("div");
//     datepickerCalendar.setAttribute("class", "datepicker-calendar");

//     if (datepickerCanvas == 'large') {
//         clickedEl.parentNode.insertBefore(datepickerCalendar, clickedEl.nextSibling);
//     } else {
//         //create an overlay
//     }

//     var datepickerHead = buildDatepickerHead();
//     datepickerCalendar.appendChild(datepickerHead);

//     //build and populate calendar table
//     var datepickerTbl = buildAndPopulateDatepickerTbl();
//     datepickerCalendar.appendChild(datepickerTbl);

// //         if (calendarCanvas == 'small') {
// //             adjustCalendarHeight();
// //         }

// }

	
var timepickers = document.getElementsByClassName("timepicker");
for (var i = 0; i < timepickers.length; i++) {
	timepickers[i].addEventListener("click", (ev) => {
		initTimepicker(ev.target);
	});
}


</script>







	
</body>
</html>