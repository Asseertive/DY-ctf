<?php
  include "../dbconn.php";
  if(preg_match('/prob|_|\.|\(\)/i', $_GET['pw'])) exit("해킹 금지~~"); 
  if(preg_match('/or|and/i', $_GET['pw'])) exit("어딜 ㅋㅋ"); 
  $query = "select id from prob_hard_sqli where id='guest' and pw='{$_GET['pw']}'"; 
  echo "<hr>query : <strong>{$query}</strong><hr><br>"; 
  $result = @mysqli_fetch_array(mysqli_query($db,$query)); 
  if($result['id']) echo "<h2>Hello {$result['id']}</h2>"; 
   
  $_GET['pw'] = addslashes($_GET['pw']); 
  $query = "select pw from prob_hard_sqli where id='admin' and pw='{$_GET['pw']}'"; 
  $result = @mysqli_fetch_array(mysqli_query($db,$query)); 
  if(($result['pw']) && ($result['pw'] == $_GET['pw'])) echo "<h2>{$result['pw']}</h2>"; 
  highlight_file(__FILE__);
?>