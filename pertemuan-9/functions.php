<?php
  $conn = mysqli_connect("localhost", "root", "", "phpdasar");

  function querySQL(string $rawQuery) {
    global $conn;
    $result = mysqli_query($conn, $rawQuery);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;
  }
?>