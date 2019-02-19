<?php
$db='penjualan';
$user='postgres';
$pass='informatikasakti';
$host='localhost';
$s='app';
try{
	$con = new PDO("pgsql:dbname=$db;host=$host", $user, $pass);
} catch (Exception $e) {
	echo $e-> getMessage();
}
?>