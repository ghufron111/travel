<?php

    include "koneksi.php";

    if(isset($_POST['send'])){
        $username = $_POST['username'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $tipe = $_POST['tipe'];

        $sql_ubah = "UPDATE tb_pengguna SET
                    nama='".$_POST['name']."',
                    username='".$_POST['username']."',
                    phone='".$_POST['phone']."',
                    password='".$_POST['password']."',
                    tipe='".$_POST['tipe']."'
                    WHERE email='".$_POST['email']."'";

        $query_ubah = mysqli_query($konek, $sql_ubah);
        
        if($query_ubah){
            echo "<script>alert('Ubah Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=admin_panel'>";
        } else {
            echo "<script>alert('Ubah Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=admin_panel'>";
        }
    } else {
        echo 'ada yang salah coba lagi nanti';
    }

?>