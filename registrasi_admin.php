<div class="heading" style="background:url(images/header-img-3.jpg) no-repeat">
<h1></h1>
</div>

<!-- register section -->
<section class="register">

    <h1 class="heading-title">Registrasi</h1>

    <?php
        if($_SESSION["ses_tipe"] == "ADMIN" OR $_SESSION["ses_tipe"] == "SUPER ADMIN"){
    ?>

    <form action="registrasi_admin_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>username :</span>
                <input type="text" placeholder="masukkan username anda" name="username" required>
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="masukkan email anda" name="email" required>
            </div>
            <div class="inputBox">
                <span>nama :</span>
                <input type="text" placeholder="masukkan nama anda" name="nama" required>
            </div>
            <div class="inputBox">
                <span>no. hp :</span>
                <input type="tel" pattern="[0-9]+" placeholder="masukkan nomor telepon anda" name="phone" title="Masukkan hanya angka (0-9)" required>
            </div>
            <div class="inputBox">
                <span>password :</span>
                <input type="password" placeholder="masukkan password anda" name="password" required>
            </div>
            <div class="inputBox">
                <span>tipe :</span>
                <select name="tipe" id="tipeSelect">
                    <option>USER</option>
                    <option>ADMIN</option>
                </select>
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
<!-- register section end -->