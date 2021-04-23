<!DOCTYPE html>
<html>
<head>
  <script src="../data/functions.js" type="text/javascript"></script>
  <script type="text/javascript">
  var feld = document.getElementById("output");
  function ausgabe() {
    feld.innerHTML = line(isIn, 1);
  }
  </script>
</head>
<body>
  <div width="50%" height="25%" background-color="orange" onclick="ausgabe()" id="output"></div>
</body>
</html>
