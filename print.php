<?php
    include "koneksi.php";
?>

<link rel="stylesheet" href="css/table.css">
<h1 class="heading-title" style="text-align: center; margin-bottom: 10px; padding:2rem;">Laporan Transaksi</h1>
<table class="table-common" width="50%">
    <thead>
        <tr>
            <th rowspan="2">NO</th>
            <th rowspan="2">ID</th>
            <th rowspan="2">NAMA</th>
            <th rowspan="2">EMAIL</th>
            <th rowspan="2">NO. HP</th>
            <th rowspan="2">ALAMAT</th>
            <th rowspan="2">DESTINASI</th>
            <th rowspan="2">JUMLAH PEMESAN</th>
            <th rowspan="2">TANGGAL BERANGKAT</th>
            <th rowspan="2">TANGGAL PULANG</th>
            <th rowspan="2">TOTAL BIAYA</th>
        </tr>
    </thead>

    <tbody>
        <?php
        
        //Perintah untuk mwngambil data dari tb_buku
        $sql_tampil = "SELECT * FROM book_form";
        $query_tampil = mysqli_query($konek, $sql_tampil);
        $no = 1; //Nilai awal Nomor
        while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
        ?>
        <tr>
            <!--
                Perintah menampilkan data sesuai nama fieldnya
                Jumlah td sesuai dengan jumlah th diatas
            -->
            <td><?php echo $no; ?></td>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['phone']; ?></td>
            <td><?php echo $data['address']; ?></td>
            <td><?php echo $data['location']; ?></td>
            <td><?php echo $data['guests']; ?></td>
            <td><?php echo $data['arrivals']; ?></td>
            <td><?php echo $data['leaving']; ?></td>
            <td><?php echo $data['cost']; ?></td>
        </tr>
        <?php
            //auto increment no
            $no++;
            }
        ?>
    </tbody>
    <!-- <tr>
    <td colspan="10" style="text-align: right; font-weight: bold;">Jumlah Total Biaya:</td>
    <td>
        <?php
            // $sql_sum = "SELECT SUM(cost) AS total_biaya FROM book_form";
            // $query_sum = mysqli_query($konek, $sql_sum);
            // $result_sum = mysqli_fetch_assoc($query_sum);
            // echo $result_sum['total_biaya'];
        ?>
    </td>
    </tr> -->

</table>

<script>
    function cetak(){
        window.print();
    }
    window.onload = function() {
        cetak();
    };
</script>
