<?php

if(isset($_GET['page'])){
    if($_GET['page'] == "home"){
        include "home_new.php";
    }elseif($_GET['page'] == "about"){
        include "about_new.php";
    }elseif($_GET['page'] == "package"){
        include "package_new.php";
    }elseif($_GET['page'] == "book"){
        include "book_new.php";
    }elseif($_GET['page'] == "login"){
        include "login_new.php";
    }elseif($_GET['page'] == "registrasi"){
        include "register_new.php";
    }elseif($_GET['page'] == "panel"){
        include "panel_new.php";
    }elseif($_GET['page'] == "transaction"){
        include "transaction_new.php";
    }elseif($_GET['page'] == "admin_panel"){
        include "admin_panel.php";
    }elseif($_GET['page'] == "ubah"){
        include "ubah_new.php";
    }elseif($_GET['page'] == "hapus"){
        include "action.php";
    }elseif($_GET['page'] == "registrasi_admin"){
        include "registrasi_admin.php";
    }elseif($_GET['page'] == "tambah_destinasi"){
        include "tambah_destinasi.php";
    }elseif($_GET['page'] == "hapus_akun"){
        include "action_akun.php";
    }elseif($_GET['page'] == "ubah_akun"){
        include "ubah_akun_admin.php";
    }elseif($_GET['page'] == "ubah_destinasi"){
        include "ubah_destinasi.php";
    }elseif($_GET['page'] == "hapus_destinasi"){
        include "destinasi_action.php";
    }elseif($_GET['page'] == "konfirmasi"){
        include "konfirmasi.php";
    }
}else{
    include "home_new.php";
}

?>