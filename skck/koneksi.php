<?php 
$db='skck';
$user='postgres';
$pass='informatikasakti';
$host='localhost';
$app='app_skck';
try {
	$db=new PDO("pgsql:dbname=$db;host=$host",$user,$pass);
} catch (Exception $e) {
	echo $e->getMessage();
}
?>