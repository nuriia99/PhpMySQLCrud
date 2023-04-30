<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'phpmysql'
) or die(mysqli_erro($mysqli));

?>