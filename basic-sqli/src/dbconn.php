<?php
  header("Content-Type: text/html; charset=UTF-8");
  session_start();
  $db=mysqli_connect($_ENV['MYSQL_HOST'],$_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD'],$_ENV['MYSQL_DATABASE']) or die("db connection error");
  mysqli_query($db,"set names utf8");
?>