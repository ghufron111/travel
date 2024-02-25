<?php
    session_start();
    $connection = mysqli_connect('localhost','root','','book_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_SESSION["ses_username"];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location']; // Menambahkan pengambilan nilai 'location'
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];
        $cost = $_POST['cost']; // Menambahkan pengambilan nilai 'cost'


        $sql_simpan = "INSERT INTO book_form(name, email, phone, address, location, guests, arrivals, leaving, cost) VALUES
        ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving', '$cost')";

        $query_simpan = mysqli_query($connection, $sql_simpan);

        
        if($query_simpan){
            echo "<script>alert('Simpan Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=transaction'>";
        } else {
            echo "<script>alert('Simpan Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; 
            url=dashboard.php?page=transaction'>";
        }
    } else {
        echo 'ada yang salah coba lagi nanti';
    }

?>