<?php
$host="localhost";
$user="root";
$pass="";
$dbName="lambung";
$koneksi=mysqli_connect($host,$user,$pass);
if (!$koneksi) {
    error_log("	Koneksi MySQL gagal: " . mysqli_error($koneksi));
    die('Internal server error');
}
$db=mysqli_select_db($koneksi,$dbName);
if(!$koneksi){
	echo"<center><font color='#ff0000'>Koneksi Gagal</font></center>";
	}
?>