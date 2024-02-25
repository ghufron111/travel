<div class="heading" style="background:url(images/header-img-2.jpg) no-repeat">
        <h1>login</h1>
    </div>

    <section class="login">
            <form action="login_form.php" method="post" class="book-form" enctype="multipart/form-data">
            <!-- form action="" method="POST" enctype="multipart/form-data" -->
                <div class="flex">
                    <div class="inputBox">
                        <span>username :</span>
                        <input type="text" placeholder="masukkan username anda" name="username"
                        required autofocus>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <span>password :</span>
                        <input type="password" placeholder="masukkan password anda" name="password"
                        required autofocus>
                    </div>
                </div>
                <input type="submit" value="submit" class="btn" name="btnLogin">
                <br><br>
                <p>Belum Punya Akun? <a href="?page=registrasi" class="register-link"> Registrasi</a></p>
            </form>
    </section>
