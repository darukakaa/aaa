<?php
$server=”localhost”;
$namauser=”morfiuhw_skuit”;
$password=”1bgo!6Z15″;
$database=”morfiuhw_zekolaweb1”;
$koneksi=mysql_connect($server,$namauser,$password) or die(“koneksi gagal”);
$data=mysql_select_db($database,$koneksi) or die(“database tidak ada”);
?>