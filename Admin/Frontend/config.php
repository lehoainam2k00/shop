<?php
$namesv='localhost';
$user='root';
$pass='';
$db='shopping';
$conn = mysqli_connect($namesv,$user,$pass,$db);
if (!$conn) {
	die("DB connection failed".mysql_connect_error());
}
$db_select=mysqli_select_db($conn,$db);
if (!$db_select) {
	die("DB selection failed: ".mysqli_error($conn));
}

?>