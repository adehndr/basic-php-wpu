<?php
// create a new connection
require 'functions.php';
// get the data from the table
$mahasiswa = querySQL("SELECT * FROM mahasiswa");

// get the data (fetch) from the result object
// there should be 4 ways to do it
// result object, will query the row
// example, after invoke the fetch_row -> it will return the first row
// after invoke the fetch_assoc -> it will return the second row
// let say there's only 2 record available, then the third or so on will 
// return null
// 1. get the result as numeric array
// 2. get the result as associative array
// 3. get the result as array (actually the array will have double index,
// the index as numeric and the index as associative)
// 4. get the resutl as an object / objects
/* 
  var_dump($result);
  $firstResult = mysqli_fetch_row($result);
  echo "<br>";
  var_dump($firstResult[1]);
  
  echo "<br>";
  $secondResult = mysqli_fetch_assoc($result);
  var_dump($secondResult["nrp"]);
  var_dump($secondResult["nama"]);

  // invoke the result again to re-query
  $result = mysqli_query($conn,"select * from mahasiswa");
  echo "<br>";
  $thirdResult = mysqli_fetch_array($result);
  var_dump($thirdResult);
  
  $result = mysqli_query($conn,"select * from mahasiswa");
  echo "<br>";
  $fourthResult = mysqli_fetch_object($result);
  var_dump($fourthResult);
*/

// the correct way to fetch the results
/* 
while ($mhw = mysqli_fetch_assoc($result)) {
  var_dump($mhw);
  echo "<br>";
}
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>

    <?php
      $number = 0;
      foreach ($mahasiswa as $mhs) :
      $number++;
    ?>
        <tr>
        <!-- Number -->
        <td> <?= $number; ?> </td>
        <td>
          <a href="">ubah</a> | 
          <a href="">hapus</a>
        </td>
        <!-- Image -->
        <td>
          <img src="img/<?= $mhs["gambar"]; ?>" alt="">
        </td>
        <!-- NPM -->
        <td> <?= $mhs["nrp"]; ?> </td>
        <!-- Name -->
        <td> <?= $mhs["nama"]; ?> </td>
        <!-- Email -->
        <td> <?= $mhs["email"]; ?> </td>
        <!-- Major -->
        <td> <?= $mhs["jurusan"]; ?> </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>