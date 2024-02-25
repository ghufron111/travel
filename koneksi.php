<?php
$konek = mysqli_connect("localhost","root","","book_db");
if(!$konek){
    echo "Koneksi Error";
    mysqli_connect_error();
}
?>