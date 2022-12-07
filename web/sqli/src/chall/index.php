<?php
  include "../dbconn.php";
  if(preg_match('/dy|_|\.|\(\)/i', $_GET['id'])) exit("No Hack haha");
  if(preg_match('/dy|_|\.|\(\)/i', $_GET['pw'])) exit("No Hack haha");
  $query = "select pw from dy_sqli where id='{$_GET['id']}' and pw='{$_GET['pw']}'";
  echo "<hr>query : <strong>{$query}</strong><hr><br>";
  $result = @mysqli_fetch_array(mysqli_query($db,$query));
  if($result['pw']) echo "<h2>{$result['pw']}</h2>";
  highlight_file(__FILE__);
?>
