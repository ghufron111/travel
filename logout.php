<?php
    session_start();

    // Hapus semua data sesi
    session_unset();

    // Hancurkan sesi
    session_destroy();

    // Alihkan pengguna ke halaman login atau halaman lain yang sesuai
    echo "<script>
            window.location.href = 'index.php?page=login';
        </script>";
?>
