<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .warna-baris {
      background-color: #eee;
    }
  </style>
</head>
<body>

<?php
  echo "aa<br>";
  for ($i=1; $i <= 25; $i++) { 
    echo "$i <br>";
  }
  $a = 0;
  while ($a < 10) {
    $a = $a + 1;
    echo "$a <br>";
  }
?>
<table border="1" cellpadding="10" cellspacing="0">
  <?php
    for ($i=1; $i <= 3; $i++) { 
      echo "<tr>";
      for ($j=1; $j <= 5; $j++) { 
        echo "<td>$i,$j</td>";
      }
      echo "</tr>";
    }
  ?>
</table>

<table border="1" cellpadding="10" cellspacing="0">
  <?php for ($i=1; $i <= 3; $i++) :?>
    <?php if($i%2 != 0):?>
    <tr class="warna-baris">
    <?php else: ?>
    <tr>
    <?php endif;?>
  <?php for ($j=1; $j <= 5; $j++) :?>
    <td><?= "$i,$j"?></td>
  <?php endfor;?> 
    </tr>
  <?php endfor;?>

</table>
  
</body>
</html>