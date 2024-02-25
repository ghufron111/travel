<?php
    session_start();
    $isLoggedIn = isset($_SESSION["ses_username"]); // Periksa apakah pengguna sudah login
    // $isAdmin = isset($_SESSION["ses_username"]) && $_SESSION["ses_tipe"] === "ADMIN" OR "SUPER ADMIN"; // Periksa apakah pengguna adalah admin
    // $isUser = isset($_SESSION["ses_username"]) && $_SESSION["ses_tipe"] === "USER"; // Periksa apakah pengguna adalah admin
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- header section -->
    <section class="header">

        <a href="?page=home" class="logo">travel.</a>

        <?php
            require_once "menu.php";
        ?>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section end -->

    
    <?php
        require_once "isi.php";
    ?>

    

    <!-- footer section -->
    <section class="footer">

        <div class="box-container">
            <div class="box">
            <h3>Quick Links</h3>
            <a href="?page=home"><i class="fas fa-angle-right"></i>Home</a>
            <a href="?page=about"><i class="fas fa-angle-right"></i>About</a>
            <a href="?page=package"><i class="fas fa-angle-right"></i>Package</a>
            <a href="?page=book"><i class="fas fa-angle-right"></i>Book</a>
            </div>

            <div class="box">
            <h3>Extra Links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>Ask question</a>
            <a href="#"><i class="fas fa-angle-right"></i>about us</a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>term of use</a>
            </div>

            <div class="box">
            <h3>Contact Info</h3>
            <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
            <a href="#"><i class="fas fa-envelope"></i>moonfrost@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>UMK, Kudus</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="http://www.twitter.com"><i class="fab fa-twitter"></i>twitter</a>
                <a href="http://www.instagram.com"><i class="fab fa-instagram"></i> instagram</a>
                <a href="http://www.linkedin.com"><i class="fab fa-linkedin"></i> linkedin</a>
            </div>
        </div>

        <div class="credit">created by <span>202153111</span> | Ghufron Tamami</div>

    </section>

    
    


    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js -->
    <script src="js/script.js"></script>

</body>
</html>