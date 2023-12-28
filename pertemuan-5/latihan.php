<?php
// Array numeric, the index is using numeric/int
// Array associative, it should be using string as a key (i'm not sure, maybe
// it similar with map (?))
$mahasiswa = [
  ["Ade Hendra", "1706037106", "Teknik Elektro", "ade@email.com"],
  ["Setiawan Nugraha", "180112333", "Teknik Cuci piring", "ssss@email.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $key => $value): ?>
    <ul>
      <li><?= $value[0] ?></li>
      <li><?= $value[1] ?></li>
      <li><?= $value[2] ?></li>
      <li><?= $value[3] ?></li>
    </ul>
  <?php endforeach; ?>
</body>
</html>