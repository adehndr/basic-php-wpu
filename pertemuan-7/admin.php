<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
</head>
<body>
  <?php
    if (!isset($_POST["username"]) || !isset($_POST["password"]) || !isset($_POST["submit"]) || $_POST["username"] == "" || $_POST["password"] == "") {
      header("Location: login.php");
      exit;
    }
    echo "Selamat datang ".$_POST["username"];
  ?>
  <a href="login.php">Logout</a>
  
</body>
</html>