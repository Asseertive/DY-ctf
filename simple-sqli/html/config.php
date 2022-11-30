<?php
function dbconnect(){
  header("Content-Type: text/html; charset=UTF-8");
  session_start();
  $mysql_hostname="db:10000";
  $mysql_user="admin";
  $mysql_password="pw";
  $mysql_database="dyhs";
  $db=mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("db connection error");
  mysql_select_db($mysql_database,$db) or die("db connection error2");
  mysql_query("set names utf8",$db);
}
?>