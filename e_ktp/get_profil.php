<?php
include 'koneksi.php';
$nik=$_GET['nik'];
$q=$db2->prepare("select * from data_penduduk where nik=?");
$q->execute(array($nik));
$data=array();
if($q->rowCount()>0){
	$q->setFetchMode(PDO::FETCH_OBJ);
	foreach($q as $v){
		$data["profil"]=$v;
	}
	$data['status']='sukses';
}else{
	$data['status']='gagal';
	$data['ket']='nik'.$nik.'tidak ditemukan';
}
	echo json_encode($data);

?>