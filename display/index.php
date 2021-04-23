<!DOCTYPE html>
<html onload="ausgabe()">
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
  <div id="output"></div>
</body>
</html>
