<?php

    include "koneksi.php";

    if(isset($_POST['regist'])){
        $destinasi = $_POST['destinasi'];
        $harga = $_POST['harga'];

        // $sql_simpan = "INSERT INTO tb_pengguna(username, email, nama, phone, password, tipe) VALUES
        // ('$username', '$email', '$nama', '$phone', '$password',
        // CASE
        //     WHEN LEFT('$username', 3) = 'adm' THEN 'admin'
        //     ELSE 'user'
        // END)";

        $sql_simpan = "INSERT INTO tb_destinasi(nm_destinasi, harga) VALUES
        ('$destinasi', '$harga')";

        $query_simpan = mysqli_query($konek, $sql_simpan);

        
        if($query_simpan){
            echo "<script>alert('Registrasi Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=admin_panel'>";
        } else {
            echo "<script>alert('Simpan Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; 
            url=index.php?page=admin_panel'>";
        }
    } else {
        echo 'ada yang salah coba lagi nanti';
    }

?>