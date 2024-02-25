<nav class="navbar">
    <?php
        include "koneksi.php";
        if($isLoggedIn){
            if( ($_SESSION["ses_tipe"] == "ADMIN") OR ($_SESSION["ses_tipe"] == "SUPER ADMIN") ){
            ?>
                    <a href="?page=home">Home </a>
                    <a href="?page=about">Aboutme</a>
                    <a href="?page=admin_panel">Admin Panel</a>
                    <a href="?page=transaction">transaction</a>
                    <a href="#" onclick="logout()">Logout</a>
            <?php
                }else{
            ?>
                    <a href="?page=home">Home</a>
                    <a href="?page=about">Aboutme</a>
                    <a href="?page=package">Packages</a>
                    <a href="?page=book">Book</a>
                    <a href="?page=transaction">transaction</a>
                    <a href="#" onclick="logout()">Logout</a>
            <?php
                }
        }else{
            ?>
                <a href="?page=home">Home</a>
                <a href="?page=about">Aboutme</a>
                <a href="?page=login">Login</a>
            <?php
        }
       
    ?>
    
</nav>
<script>
    function logout(){
        if (confirm('Apakah Anda yakin ingin logout?')) {
            window.location.href = 'logout.php';
        }
    }
    
</script>
