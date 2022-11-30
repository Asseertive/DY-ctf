<?php
  include "./config.php";
  $db = dbconnect();
  if(preg_match('/prob|_|\.|\(\)/i', $_GET[id])) exit("No Hack haha");
  if(preg_match('/prob|_|\.|\(\)/i', $_GET[pw])) exit("No Hack haha");
  $query = "select pw from simple_sqli where id='{$_GET[id]}' and pw='{$_GET[pw]}'";
  echo "<hr>query : <strong>{$query}</strong><hr><br>";
  $result = @mysqli_fetch_array(mysqli_query($db,$query));
  if($result['pw']) echo $result['pw'];
  highlight_file(__FILE__);
?>