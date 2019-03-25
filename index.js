'use strict';

function getDate() {
  let today = new Date();
  let year = today.getFullYear();
  return year;
}

function displayDate() {
  $('#year').text(getDate());
}

displayDate();
