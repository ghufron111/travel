<?php

    include "koneksi.php";

    if(isset($_POST['regist'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $nama = $_POST['nama'];
        $password = $_POST['password'];
        $tipe = $_POST['tipe'];

        $sql_simpan = "INSERT INTO tb_pengguna(username, email, nama, phone, password, tipe) VALUES
        ('$username', '$email', '$nama', '$phone', '$password', '$tipe')";

        $query_simpan = mysqli_query($konek, $sql_simpan);

        
        if($query_simpan){
            echo "<script>alert('Registrasi Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=admin_panel'>";
        } else {
            echo "<script>alert('Registrasi Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=admin_panel'>";
        }
    } else {
        echo 'ada yang salah coba lagi nanti';
    }

?>