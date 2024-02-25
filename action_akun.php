<?php
    if (isset($_POST['btn'])){
        //Mulai proses ubah
        $sql_ubah = "UPDATE book_form SET
                    name='".$_POST['nama']."',
                    username='".$_POST['username']."',
                    email='".$_POST['email']."',
                    phone='".$_POST['phone']."'
                    password='".$_POST['password']."'
                    tipe='".$_POST['tipe']."'
                    WHERE id='".$_POST['id']."'";
        $query_ubah = mysqli_query($konek, $sql_ubah);
        if ($query_ubah){
            echo "<script>alert('Ubah Berhasil')</script>";
            echo "<meta http-equiv='refresh' content'0 url=index.php?page=admin_panel'>";
        } else {
            echo "<script>alert('Ubah Gagal')</script>";
            echo "<meta http-equiv='refresh' content'0 url=index.php?page=admin_panel'>";
        }
        //Selesai proses ubah
    } else {
        //Mulai proses hapus
        if (isset($_GET['email'])){
           $sql_hapus = "DELETE FROM tb_pengguna WHERE
           email='".$_GET['email']."'";
           $query_hapus = mysqli_query($konek, $sql_hapus);
           if ($query_hapus){
            echo "<script>alert('Hapus Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=admin_panel'>";
           } else {
            echo "<script>alert('Hapus Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=admin_panel'>";
           }
        }
        //Selesai proses hapus
    }
?>