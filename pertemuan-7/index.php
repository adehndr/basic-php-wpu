<?php
// global keyword is finding the variable outside the current scope
// in this case, outside the printingX function
$x = 10;
function printingX()
{
  global $x;
  echo $x;
}
echo "di luar";
echo "<br>";
echo $x;
echo "<br>";
// superglobals similar to constant, it reserved by PHP itself
// also each variable is Associative array
var_dump($_GET);
echo "<br>";
$_GET["name"] = "ade";
var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <ul>
    <li>
      <a href="detail.php?name=ade&age=20">Ade</a>
    </li>
    <li>
      <a href="detail.php?name=hendra&age=30">Hendra</a>
    </li>
  </ul>
  
</body>
</html>