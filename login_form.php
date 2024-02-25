<?php
    include "koneksi.php";
    if(session_status() !== PHP_SESSION_ACTIVE){
        session_start();
    }
?>

<?php
    
    if(isset($_POST['btnLogin'])){
        $sql_login = "SELECT * FROM tb_pengguna WHERE
        email='".$_POST['username']."'OR username='".$_POST['username']."' AND password='".$_POST['password']."'";
        $query_login = mysqli_query($konek, $sql_login);
        $data_login = mysqli_fetch_array($query_login, MYSQLI_BOTH);
        $jumlah_login = mysqli_num_rows($query_login);
        if($jumlah_login >= 1){
            if(session_status() !== PHP_SESSION_ACTIVE){
                session_start();
            }
            $_SESSION["ses_username"] = $data_login["email"];
            // $_SESSION["ses_tipe"] = substr($_SESSION["ses_username"], 0, 3) === "adm" ? "admin" : "user"; // Menentukan tipe akun berdasarkan username
            $_SESSION["ses_tipe"] = $data_login["tipe"];
            echo "<script>alert('Login Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0 url=index.php'>";
        } else {
            echo "<script>alert('Login Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0 url=index.php?page=login'>";
        }
    }
?>
