function init() {

}


function 	preprocessing(sudoku) {
}

function line(input, lineNr) {
  var length = input.length;
  var storageLine = "";
  for (var i = 1; i < input.length; i++) {
    if (input[i] == "") {
      continue;
    }
    else {
      storageLine += i;
    }
  }
  return storageLine;
}

isIn = ["", "", 2, 5, 1, 7, 3, "", 8];
