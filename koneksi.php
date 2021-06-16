<?php
//isi nama host, username mysql, dan password mysql anda
$koneksi = mysqli_connect("localhost","root","","nusa_art");

if($koneksi){
echo "koneksi host dan database berhasil.<br />";
}else{
echo "koneksi gagal.<br />";
}
?>