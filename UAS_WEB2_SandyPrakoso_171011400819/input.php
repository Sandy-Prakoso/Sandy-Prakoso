<?php
  include "index.php";
  $nkk  = $_REQUEST["nik"];
  $nm  = $_REQUEST["nama"];
  $tgllhr  = $_REQUEST["tgl_lahir"];
  $jk  = $_REQUEST["jenis_kelamin"];
  $almt  = $_REQUEST["alamat"];
  $tlp  = $_REQUEST["telepon"];
  $prov  = $_REQUEST["provinsi"];
  $kab  = $_REQUEST["kab/kota"];
  $kec  = $_REQUEST["kecamatan"];
  $faskea = $_REQUEST["faskes"];
  $nm_faskes  = $_REQUEST["nama_faskes"];
  
  
  $mysqli  = "INSERT INTO input_tabel (nikk, nama,tgl_lahir,jenis_kelamin,alamat,telepon,prov,kab,kec,faskea,nm_faskes,) 
  VALUES ("$nk","$nm","$tgl_lhr","$jk","$almt","$tlp","$prov","kab","$kec","faskes","$nm_faskes")";
  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }
  mysqli_close($koneksi);
?>