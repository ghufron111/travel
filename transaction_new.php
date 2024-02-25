<div class="heading" style="background:url(images/header-img-2.jpg) no-repeat">
<h1>Transaksi</h1>
</div>

<section class="transaksi" id="contentToPrint">
<table class="table table-hover">
    <thead>
        <tr>
            <!--
            Perintah th untuk membuat header tabel    
            -->
            <th rowspan="2">No</th>
            <th rowspan="2">ID Tiket</th>
            <th rowspan="2">Nama</th>
            <th rowspan="2">Email</th>
            <th rowspan="2">Phone</th>
            <th rowspan="2">Alamat</th>
            <th rowspan="2">Destinasi</th>
            <th rowspan="2">Jumlah Pemesan</th>
            <th rowspan="2">Tanggal Berangkat</th>
            <th rowspan="2">Tanggal Pulang</th>
            <th rowspan="2">Total Biaya</th>
            <th rowspan="2">Status</th>
            <?php
                echo ($_SESSION["ses_tipe"] == "ADMIN" OR $_SESSION["ses_tipe"] == "SUPER ADMIN") ? "<th>Perubahan</th>" : "";
            ?>
            
        </tr>
    </thead>
    <tbody>
        <?php
        
        //Perintah untuk mwngambil data dari tb_buku
        if($_SESSION["ses_tipe"] == "ADMIN" OR $_SESSION["ses_tipe"] == "SUPER ADMIN"){
            $sql_tampil = "SELECT * FROM book_form ORDER BY status='Belum Konfirmasi'";
        }else{
            $sql_tampil = "SELECT * FROM book_form WHERE email = '".$_SESSION["ses_username"]."' ORDER BY status='Belum Konfirmasi'";
        }
        
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
            <td style="vertical-align: middle;"><?php echo $data['id']; ?></td>
            <td style="vertical-align: middle;"><?php echo $data['name']; ?></td>
            <td style="vertical-align: middle;"><?php echo $data['email']; ?></td>
            <td style="vertical-align: middle;"><?php echo $data['phone']; ?></td>
            <td style="vertical-align: middle;"><?php echo $data['address']; ?></td>
            <td style="vertical-align: middle;"><?php echo $data['location']; ?></td>
            <td style="vertical-align: middle;"><?php echo $data['guests']; ?></td>
            <td style="vertical-align: middle;"><?php echo $data['arrivals']; ?></td>
            <td style="vertical-align: middle;"><?php echo $data['leaving']; ?></td>
            <td style="vertical-align: middle;"><?php echo $data['cost']; ?></td>
            <?php
            if($_SESSION["ses_tipe"] == "ADMIN" OR $_SESSION["ses_tipe"] == "SUPER ADMIN"){
                    ?>
                <td style="vertical-align: middle;">
                    <form method="POST" action="konfirmasi.php?id=<?php echo $data['id']; ?>">
                        <select name="status" id="status" onchange="this.form.submit()">
                            <option value="Belum Konfirmasi" <?php if ($data['status'] == 'Belum Konfirmasi') echo 'selected'; ?>>Belum Konfirmasi</option>
                            <option value="Berhasil" <?php if ($data['status'] == 'Berhasil') echo 'selected'; ?>>Berhasil</option>
                        </select>
                    </form>
            </td>
            <?php
                } else {
            ?>
                <td style="vertical-align: middle;"><?php echo $data['status']; ?></td>
            <?php
                }
            ?>
            <?php
                if($_SESSION["ses_tipe"] == "ADMIN" OR $_SESSION["ses_tipe"] == "SUPER ADMIN"){
            ?>
                <td>
                    <!--
                        Perintah ubah data menuju file buku_ubah.php dengan
                        acuan kode yang berisi data kode_buku
                        Perintah hapus data menuju file buku_hapus.php dengan
                        acuan kode yang berisi data kode_buku
                    -->
                    <a href="?page=ubah&id=<?php echo $data['id']; ?>" class="btn">Ubah</a>
                    <a href="?page=hapus&id=<?php echo $data['id']; ?>" onclick="return confirm('Apakah anda yakin untuk menghapus data ini ?')" class="btn">Hapus</a>
                </td>
            <?php
                }
            ?>
        </tr>
        <?php
            //auto increment no
            $no++;
            }
        ?>

            
    </tbody>
</table>

            <?php
                if($_SESSION["ses_tipe"] == "ADMIN" OR $_SESSION["ses_tipe"] == "SUPER ADMIN"){
            ?>
            <div style="text-align: center;margin-bottom: 10px;">
                <a href="print.php" class="btn">Cetak</a>
            </div>
                
            <?php
                }
            ?>

</section>



