<?php 
$host='localhost';
$db2='e_ktp';
$user2='root';
$pass2='';

try {
	$db2=new PDO("mysql:dbname=$db2;host=$host",$user2,$pass2);
} catch (Exception $e) {
	echo $e->getMessage();
}
?>