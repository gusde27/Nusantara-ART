<!-- cek apakah sudah login -->
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}

    $username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Nusanta Art</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="SignUpstyle.css">
</head>

<body>

    <header>
        <div class="logo">
            <img src="img/NusantaArt.png">
        </div>
    </header>
    <div class="login-container">

        <div class="log-container">
            <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "update"){
                    echo "Data berhasil diupdate!";
                } 
            }
            ?>
            <!-- form update -->
            <h2 style="color: white;">Update Data User</h2>
            <br>
            <?php 
            include "koneksi.php";
            $user = mysqli_query($koneksi, "SELECT * FROM user where username='$username'");
            while($data = mysqli_fetch_array($user)){
            ?>
            <form action="update_user.php" method="post">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <label for="uname"><b style="color: white;">Nama</b></label>
                <input type="text" value="<?php echo $data['nama']; ?>" placeholder="Enter Name" name="nama" required>

                <label for="uname"><b style="color: white;">Username</b></label>
                <input type="text" value="<?php echo $data['username']; ?>" placeholder="Enter Username" name="username"
                    required>

                <label for="psw"><b style="color: white;">Password</b></label>
                <input type="text" value="<?php echo $data['password']; ?>" placeholder="Enter Password" name="pass"
                    required>

                <button type="submit">Update</button>
            </form>
            <?php } ?>
            <!-- end form update -->

            <!-- form update -->
            <h2 style="color: white;">Add Video</h2>
            <br>
            <form action="add_video.php" enctype='multipart/form-data' method="post">
                <label for="uname"><b style="color: white;">Upload Video</b></label>
                <input type="file" placeholder="Enter Name" name="file_video" required>

                <button type="submit">Upload</button>
            </form>
            <!-- end form update -->
        </div>

    </div>

</body>

</html>