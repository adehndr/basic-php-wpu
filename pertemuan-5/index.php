<?php
// Before PHP 5.4
$oldArray = array("Senin", "Selasa", "Rabu", "Kamis");
$newArray = ["Senin", "Selasa", "Rabu", "Kamis"];
var_dump($oldArray);
$months = ["Januari","Februari", "Maret"];
echo "<br>";
print_r($months);
echo "<br>";
echo $months[2];

// add new element on array
echo "<br>";
$newArray[] = "Jum'at";
print_r($newArray);

?>