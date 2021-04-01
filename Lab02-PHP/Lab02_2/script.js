function maxNumberDayOfMonth(month, year) {
  var arr = [1, 3, 5, 7, 8, 10, 12];
  if (arr.includes(month, 0)) {
    return 31;
  }

  if (month == 2) {
    if (year % 400 == 0 || (year % 4 == 0 && year % 100 != 0)) {
      return 29;
    }
    return 28;
  }
  return 30;
}

function solve() {
  var op = document.getElementById("day").getElementsByTagName("option");
  var month = parseInt(document.getElementById("month").value);
  var year = parseInt(document.getElementById("year").value);
  var tmp = maxNumberDayOfMonth(month, year);

  for (var i = 29; i <= 31; ++i) {
    if (i > tmp) {
      op[i - 1].disabled = true;
    } else {
      op[i - 1].disabled = false;
    }
  }
}