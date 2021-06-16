<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = $_POST['pass'];
 
mysqli_query($koneksi, "UPDATE user SET nama='$nama', username='$username', password='$pass' WHERE id='$id'");
 
header("location:dashboard.php?pesan=update");
?>