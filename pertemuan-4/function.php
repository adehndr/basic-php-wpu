<?php 
  function Salam(String $name = "Admin") : String {
    date_default_timezone_set('Asia/Bangkok');
    $currentSecond = date('s');
    if ($currentSecond % 2 == 0) {
      return "Selamat Pagi, $name!";
    }else {
      return "Selamat Siang, $name!";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Function</title>
</head>
<body>
  <h2><?= Salam("Ade");?></h2>  
  <h2><?= Salam();?></h2>  
</body>
</html>