<?php
    include 'koneksi.php';

    $name=$_FILES['file_video']['name'];
    $type=$_FILES['file_video']['type'];
    $size=$_FILES['file_video']['size'];
    //replace tanda spasi pada nama file dengan _
    $nama_file=str_replace(" ","_",$name);
    $tmp_name=$_FILES['file_video']['tmp_name'];
    $nama_folder="videos/";
    $nama_file_baru=$nama_folder.basename($nama_file);
    //Filter jenis file video dan ukuran file
    if ((($type == "video/mp4") || ($type == "video/3gpp")  || ($type == "video/x-flv")) && ($size < 50000000 ))
    {
        //cek jika nama dile sudah ada
        if (file_exists($nama_file_baru))
        {
            $msg="File dengan nama $nama_file sudah ada!\n";
        }
        else
        {  
            //pindah file dari temporari ke alamat tujuan
            if(move_uploaded_file($tmp_name,$nama_file_baru))
            {
                $msg="File video $nama_file sudah berhasil diupload";

                mysqli_query($koneksi,"insert into video values('','$nama_file_baru')");

                header("location:dashboard.php?pesan=berhasil");
            }
        }
    }
    else
    {
        $msg="Jenis file tidak sesuai atau ukuran file terlalu besar!";
    }
    echo "<p align=\"center\">$msg</p>";

 
 ?>