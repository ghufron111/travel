<?php

    include "koneksi.php";

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];
        $cost = $_POST['cost']; // Menambahkan pengambilan nilai 'cost'
        $id = $_POST['id'];


        $sql_ubah = "UPDATE book_form SET
                    name='".$_POST['name']."',
                    phone='".$_POST['phone']."',
                    address='".$_POST['address']."',
                    location='".$_POST['location']."',
                    guests='".$_POST['guests']."',
                    arrivals='".$_POST['arrivals']."',
                    leaving='".$_POST['leaving']."',
                    cost='".$_POST['cost']."'
                    WHERE id='".$_POST['id']."'";

        $query_ubah = mysqli_query($konek, $sql_ubah);

        
        if($query_ubah){
            echo "<script>alert('Simpan Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=transaction'>";
        } else {
            echo "<script>alert('Simpan Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=transaction'>";
        }
    } else {
        echo 'ada yang salah coba lagi nanti';
    }

?>