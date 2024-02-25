<div class="heading" style="background:url(images/header-img-2.jpg) no-repeat">
<h1>Admin Panel</h1>
</div>

<section class="transaksi">

    <div style="text-align: center;margin-bottom: 10px;">
        <h1 class="heading-title">MANAGE ACCOUNT</h1>
        <?php
            if($_SESSION["ses_tipe"] == "ADMIN" OR $_SESSION["ses_tipe"] == "SUPER ADMIN"){
        ?>
        <a href="?page=registrasi_admin" class="btn">Tambah</a>
    </div>

    <table class="table table-hover">
        
        
        <thead>
            <tr>
                <!--
                Perintah th untuk membuat header tabel    
                -->
                <th>No</th>
                <th>Username</th>
                <th>Email</th>
                <th>Nama</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Tipe</th>
                <th>Perubahan</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            
            //Perintah untuk mwngambil data dari tb_buku
            $sql_tampil = "SELECT * FROM tb_pengguna WHERE tipe IN ('USER','ADMIN')";
            $query_tampil = mysqli_query($konek, $sql_tampil);
            $no = 1; //Nilai awal Nomor
            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
            ?>
            <tr>
                <!--
                    Perintah menampilkan data sesuai nama fieldnya
                    Jumlah td sesuai dengan jumlah th diatas
                -->
                <td style="vertical-align: middle;"><?php echo $no; ?></td>
                <td style="vertical-align: middle;"><?php echo $data['username']; ?></td>
                <td style="vertical-align: middle;"><?php echo $data['email']; ?></td>
                <td style="vertical-align: middle;"><?php echo $data['nama']; ?></td>
                <td style="vertical-align: middle;"><?php echo $data['phone']; ?></td>
                <td style="vertical-align: middle;"><?php echo $data['password']; ?></td>
                <td style="vertical-align: middle;"><?php echo $data['tipe']; ?></td>
                <td>
                    <a href="?page=ubah_akun&email=<?php echo $data['email']; ?>" class="btn">Ubah</a>
                    <a href="?page=hapus_akun&email=<?php echo $data['email']; ?>" onclick="return confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn">Hapus</a>
                </td>

            </tr>

            <?php
                //auto increment no
                $no++;
            }
            ?>

        </tbody>

    </table>
            <?php
                } else {
                    echo '<h1 style="text-align: center;margin-bottom: 10px; margin-top: 10px;">Anda bukan admin</h1>';
                }
                ?>
                
</section>

<section class="transaksi">
    <div style="text-align: center;margin-bottom: 10px;">
        <h1 class="heading-title">Manage Destination</h1>
        <?php
            if($_SESSION["ses_tipe"] == "ADMIN" OR $_SESSION["ses_tipe"] == "SUPER ADMIN"){
        ?>
        <a href="?page=tambah_destinasi" class="btn">Tambah</a>
    </div>
<table class="table table-hover">
    
    <thead>
        <tr>
            <!--
            Perintah th untuk membuat header tabel    
            -->
            <th>No</th>
            <th>ID Tiket</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Perubahan</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        
        //Perintah untuk mwngambil data dari tb_buku
            $sql_tampil = "SELECT * FROM tb_destinasi";
        
        
        $query_tampil = mysqli_query($konek, $sql_tampil);
        $no = 1; //Nilai awal Nomor
        while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
        ?>
        <tr>
            <!--
                Perintah menampilkan data sesuai nama fieldnya
                Jumlah td sesuai dengan jumlah th diatas
            -->
            <td style="vertical-align: middle;"><?php echo $no; ?></td>
            <td style="vertical-align: middle;"><?php echo $data['id_destinasi']; ?></td>
            <td style="vertical-align: middle;"><?php echo $data['nm_destinasi']; ?></td>
            <td style="vertical-align: middle;"><?php echo $data['harga']; ?></td>
            <?php
                // if($_SESSION["ses_tipe"] == "ADMIN" OR $_SESSION["ses_tipe"] == "SUPER ADMIN"){
            ?>
                <td>
                    <a href="?page=ubah_destinasi&id=<?php echo $data['id_destinasi']; ?>" class="btn">Ubah</a>
                    <a href="?page=hapus_destinasi&id=<?php echo $data['id_destinasi']; ?>" onclick="return confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn">Hapus</a>
                </td>
            
        </tr>

        <?php
            //auto increment no
            $no++;
            }
        ?>
            
    </tbody>
</table>
    <?php
        } else {
            header("Location: error.php");
            exit;
        }
    ?>
</section>
