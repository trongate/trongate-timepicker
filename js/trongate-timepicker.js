/*! Trongate Timepicker - v1.0.0
* https://trongate.io
* Copyright (c) 2020 David Connelly; Licensed DBAD */
var today = new Date();
var time = today.getHours() + ":" + today.getMinutes();
var currentTime = time;
var currentHour = today.getHours();
var currentMinute = today.getMinutes();
var targetEl;

currentHour = addZeroBefore(currentHour);
currentMinute = addZeroBefore(currentMinute);

function addZeroBefore(n) {
  return (n < 10 ? '0' : '') + n;
}

function updateTimepicker() {
    //get the 'name' of the clicked element
    var elName = targetEl.name;
    var popupId = 'timepicker-popup-' + elName;

    //get the time-guide cell
    var timeGuideCell = document.querySelector("#" + popupId + " > table > tr:nth-child(2) > td:nth-child(2)");
    var timeValue = currentHour + ':' + currentMinute;
    timeGuideCell.innerHTML = timeValue;
    targetEl.value = timeValue;
}

function updateHour(newHour) {
    currentHour = addZeroBefore(newHour);
    updateTimepicker();
}

function updateMinute(newMinute) {
    currentMinute = addZeroBefore(newMinute);
    updateTimepicker();
}

function updateTimepickerSliders(hourSlider, minuteSlider) {
    hourSlider.value = currentHour;
    minuteSlider.value = currentMinute;
}

function initTimepicker(clickedEl) {
    //destroy other timepickers
    var elName = clickedEl.name;
    var popupId = 'timepicker-popup-' + elName;
    var currentOpenTimepicker = document.getElementById(popupId);
    var timepickerPopups = document.getElementsByClassName("timepicker-popup");
    for (var i = 0; i < timepickerPopups.length; i++) {
        if (timepickerPopups[i] !== currentOpenTimepicker) {
            timepickerPopups[i].remove();
        }
    }

    targetEl = clickedEl;

    var timepicker = document.createElement("div");
    timepicker.setAttribute("id", popupId);
    timepicker.setAttribute("class", "timepicker-popup");

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
    
    //first row
    var tblRow = document.createElement("tr");
    var tblCell = document.createElement("td");
    var tblCellTxt = document.createTextNode('Time');
    tblCell.appendChild(tblCellTxt);
    tblRow.appendChild(tblCell);

    tblCell = document.createElement("td");
    tblCellTxt = document.createTextNode(currentTime);
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
    formInput.setAttribute("min", "0");
    formInput.setAttribute("max", "23");
    formInput.setAttribute("oninput", "updateHour(this.value)");
    formInput.setAttribute("onchange", "updateHour(this.value)");
    formInput.setAttribute("value", currentHour);

    tblCell.appendChild(formInput);
    tblRow.appendChild(tblCell);
    timepickerTbl.appendChild(tblRow);

    //third row
    tblRow = document.createElement("tr");
    tblCell = document.createElement("td");
    tblCellTxt = document.createTextNode('Minute');
    tblCell.appendChild(tblCellTxt);
    tblRow.appendChild(tblCell);

    tblCell = document.createElement("td");
    formInput = document.createElement("input");
    formInput.setAttribute("type", "range");
    formInput.setAttribute("min", "0");
    formInput.setAttribute("max", "59");
    formInput.setAttribute("oninput", "updateMinute(this.value)");
    formInput.setAttribute("onchange", "updateMinute(this.value)");
    formInput.setAttribute("value", currentMinute);
    tblCell.appendChild(formInput);
    tblRow.appendChild(tblCell);
    timepickerTbl.appendChild(tblRow);

    //timepicker buttons row
    tblRow = document.createElement("tr");
    tblRow.setAttribute("class", "timepicker-btns");
    tblCell = document.createElement("td");
    var timepickerBtn1 = document.createElement("button");
    timepickerBtn1.setAttribute("class", "alt");
    timepickerBtn1.setAttribute("type", "button");
    var btn1Txt = document.createTextNode("Now");
    timepickerBtn1.setAttribute("onclick", "setToNow()")

    timepickerBtn1.appendChild(btn1Txt);
    tblCell.appendChild(timepickerBtn1);
    tblRow.appendChild(tblCell);

    tblCell = document.createElement("td");
    var timepickerBtn2 = document.createElement("button");
    timepickerBtn2.setAttribute("class", "alt");
    timepickerBtn2.setAttribute("type", "button");
    timepickerBtn2.setAttribute("onclick", "closeTimepicker()")
    var btn2Txt = document.createTextNode("Done");
    timepickerBtn2.appendChild(btn2Txt);
    tblCell.appendChild(timepickerBtn2);
    tblCell.setAttribute("style", "text-align: right;");
    tblRow.appendChild(tblCell);

    timepickerTbl.appendChild(tblRow);
    timepicker.appendChild(timepickerTbl);
    clickedEl.parentNode.insertBefore(timepicker, clickedEl.nextSibling);
}

function closeTimepicker() {
    var elName = targetEl.name;
    var popupId = 'timepicker-popup-' + elName;
    var timepickerPopup = document.getElementById(popupId);
    timepickerPopup.remove();
}

function setToNow() {
    currentTime = time;
    currentHour = today.getHours();
    currentMinute = today.getMinutes();
    currentHour = addZeroBefore(currentHour);
    currentMinute = addZeroBefore(currentMinute);

    var elName = targetEl.name;
    var popupId = 'timepicker-popup-' + elName;
    var timepickerPopup = document.getElementById(popupId);
    var hourSlider = document.querySelector("#" + popupId + " > table > tr:nth-child(3) > td:nth-child(2) > input[type=range]");
    var minuteSlider = document.querySelector("#" + popupId + " > table > tr:nth-child(4) > td:nth-child(2) > input[type=range]");
    updateTimepickerSliders(hourSlider, minuteSlider);
    updateTimepicker();
}

var timepickers = document.getElementsByClassName("timepicker");
for (var i = 0; i < timepickers.length; i++) {
    timepickers[i].addEventListener("click", (ev) => {
        initTimepicker(ev.target);
    });
}

function childOf( node, ancestor ) {
    var child = node;
    while (child !== null) {
        if (child === ancestor) return true;
        child = child.parentNode;
    }
    return false;   
}

var pageBody = document.getElementsByTagName("body")[0];
pageBody.addEventListener("click", (ev) => {

    var timepickerPopups = document.getElementsByClassName("timepicker-popup");

    if (timepickerPopups.length>0) {

        var clickedEl = ev.target;

        //does the clickedEl contain the datepicker class?
        if ((clickedEl.classList.contains("timepicker-popup")) || (clickedEl.classList.contains("timepicker"))) {
            return;
        } else {

            for (var i = 0; i < timepickerPopups.length; i++) {
                var targetAncestor = timepickerPopups[i];
                var isChild = childOf(clickedEl, targetAncestor);

                if (isChild !== true) {
                    timepickerPopups[i].remove();
                }

            }

        }

    }

});