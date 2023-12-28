<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Page</title>
</head>
<body>
  <?php
    var_dump($_POST);
    if (isset($_POST["submit"])) {
      echo "Selamat datang ". $_POST["nama"] ."";
    }
  ?>
  <form action="receiver.php" method="post">
    Masukkan nama: 
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim!</button>
  </form>
  <form action="" method="post">
    Masukkan nama: 
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim!</button>
  </form>  
</body>
</html>