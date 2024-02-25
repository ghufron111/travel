<?php
    if (isset($_POST['btn'])){
        //Mulai proses ubah
        $sql_ubah = "UPDATE book_form SET
                    name='".$_POST['nama']."',
                    email='".$_POST['email']."',
                    phone='".$_POST['phone']."'
                    address='".$_POST['address']."'
                    location='".$_POST['location']."'
                    guests='".$_POST['guests']."'
                    arrivals='".$_POST['arrivals']."'
                    leaving='".$_POST['leaving']."'
                    WHERE id='".$_POST['id']."'";
        $query_ubah = mysqli_query($konek, $sql_ubah);
        if ($query_ubah){
            echo "<script>alert('Ubah Berhasil')</script>";
            echo "<meta http-equiv='refresh' content'0 url=index.php?page=transaction'>";
        } else {
            echo "<script>alert('Ubah Gagal')</script>";
            echo "<meta http-equiv='refresh' content'0 url=index.php?page=transaction'>";
        }
        //Selesai proses ubah
    } else {
        //Mulai proses hapus
        if (isset($_GET['id'])){
           $sql_hapus = "DELETE FROM book_form WHERE
           id='".$_GET['id']."'";
           $query_hapus = mysqli_query($konek, $sql_hapus);
           if ($query_hapus){
            echo "<script>alert('Hapus Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=transaction'>";
           } else {
            echo "<script>alert('Hapus Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=transaction'>";
           }
        }
        //Selesai proses hapus
    }
?>