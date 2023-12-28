<?php 
$numbers = [20,30,40,50,60,70,80];
// using for each

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For Each</title>
  <style>
    .kotak {
      width: 50px;
      height: 50px;
      background-color: salmon;
      text-align: center;
      line-height: 50px;
      margin: 3px;
      float: left;
    }
    .clear {
      clear: both;
    }
    
  </style>
</head>
<body>
  <?php for ($i=0; $i < count($numbers); $i++) :?>
    <div class="kotak"> <?= $numbers[$i] ?></div>
  <?php endfor; ?>
  <div class="clear"></div>
  <?php foreach ($numbers as $number) :?>
    <div class="kotak"><?= $number?></div>
  <?php endforeach; ?>
</body>
</html>