<?php 
$host="localhost";
$user="root";
$pass="";
$database="akademik";
$koneksi = mysqli_connect($host, $user, $pass);
 
// Check connection
if ($koneksi){
	$buka=mysqli_select_db($koneksi,$database);
	echo "Koneksi database berhasil";
	if(!$buka){
	echo"database tidak dapat terhubung";
}
}else{
	echo "Mysql tidak terhubung";
}
?>