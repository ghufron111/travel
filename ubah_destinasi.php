<div class="heading" style="background:url(images/header-img-3.jpg) no-repeat">
<h1></h1>
</div>

<!-- ubah destinasi section -->
<section class="register">

    <h1 class="heading-title">perubahan destinasi</h1>

    <?php
        if($_SESSION["ses_tipe"] == "ADMIN" OR $_SESSION["ses_tipe"] == "SUPER ADMIN"){
    ?>

    <form action="destinasi_action.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                        <span>id :</span>
                        <input type="text" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>" readonly>
                    </div>
            <div class="inputBox">
                <span>Destinasi :</span>
                <input type="text" placeholder="masukkan tujuan destinasi" name="destinasi" required>
            </div>
            <div class="inputBox">
                <span>Harga :</span>
                <input type="text" placeholder="masukkan harga destinasi" name="harga" required>
            </div>
        </div>

        
        <input type="submit" value="submit" class="btn" name="send">          

    </form>

    <?php
    } else {
        header("Location: error.php");
        exit;
    }
    ?>

</section>
<!-- ubah destinasi section end -->