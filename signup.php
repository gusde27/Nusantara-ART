<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$username = $_POST['username'];
$pass1 = $_POST['pass'];
$pass2 = $_POST['pass-repeat'];

if($pass1 == $pass2){
    // menginput data ke database
    mysqli_query($koneksi,"insert into user values('','','$username','$pass1')");

    header("location:login.php?pesan=berhasil");
} else {
    header("location:login.php?pesan=gagal");
}

?>