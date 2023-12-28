<?php
  // to set the timezone
  date_default_timezone_set('Asia/Bangkok');
  echo date("l - jS");
  echo "<br>";
  echo date("\\t\o\d\a\y l - jS");
  echo "<br>";
  $today = gmdate("F j, Y, g:i a"); 
  echo "$today";
  echo "<br>";
  $today = date("F j, Y, g:i a"); 
  echo "$today";
  echo "<br>";
  echo time();
  echo "<br>";
  echo date("l - g:i");
  echo "<br>";
  // date could receive the second parameter which is the unix timestamp
  echo date("l - g:i", time()+60*60);
  echo "<br>";
  echo date("l - g:i", time()+60*60*24);
  echo "<br>";
  // date also could receive the second from the mktime function
  $birthDate = mktime(0,0,0,8,9,1998); 
  echo "$birthDate\t";
  echo date("l - g:i", mktime(0,0,0,8,9,1998));
  // string to second
  echo "<br>";
  echo strtotime("9 aug 1998");
?>