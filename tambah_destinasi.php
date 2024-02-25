<div class="heading" style="background:url(images/header-img-3.jpg) no-repeat">
<h1></h1>
</div>

<!-- ubah destinasi section -->
<section class="register">
    
    <?php
        if($_SESSION["ses_tipe"] == "ADMIN" OR $_SESSION["ses_tipe"] == "SUPER ADMIN"){
    ?>

    <h1 class="heading-title">penambahan destinasi</h1>


    <form action="destinasi.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>Destinasi :</span>
                <input type="text" placeholder="masukkan tujuan destinasi" name="destinasi" required>
            </div>
            <div class="inputBox">
                <span>Harga :</span>
                <input type="text" placeholder="masukkan harga destinasi" name="harga" required>
            </div>
        </div>

        
        <input type="submit" value="submit" class="btn" name="regist">          

    </form>

    <?php
    } else {
        header("Location: error.php");
        exit;
    }
    ?>

</section>
<!-- ubah destinasi section end -->