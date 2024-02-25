<div class="heading" style="background:url(images/header-img-3.jpg) no-repeat">
        <h1></h1>
    </div>

    <!-- booking section -->
        <section class="ubah">

        <?php
            if($_SESSION["ses_tipe"] == "ADMIN" OR $_SESSION["ses_tipe"] == "SUPER ADMIN"){
        ?>

            <h1 class="heading-title">Ubah Data Akun</h1>

            <form action="ubah_form_admin.php" method="post" class="book-form">

                <div class="flex">
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="text" name="email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>" readonly>
                    </div>
                    <div class="inputBox">
                        <span>username :</span>
                        <input type="text" placeholder="masukkan username baru anda" name="username" required>
                    </div>
                    <div class="inputBox">
                        <span>nama :</span>
                        <input type="text" placeholder="masukkan nama baru anda" name="name" required>
                    </div>
                    <div class="inputBox">
                        <span>no. hp :</span>
                        <input type="tel" pattern="[0-9]+" placeholder="masukkan nomor telepon baru anda" name="phone" title="Masukkan hanya angka (0-9)" required>
                    </div>
                    <div class="inputBox">
                        <span>Password :</span>
                        <input type="password" placeholder="masukkan password baru anda" name="password" required>
                    </div>
                    <div class="inputBox">
                        <!-- <input type="text" placeholder="tempat yang ingin dikunjungi" name="location"> -->
                        <span>tujuan :</span>
                        <select name="tipe">
                            <option>ADMIN</option>
                            <option>USER</option>
                        </select>
                </div>

                <?php
                if ($isLoggedIn) {
                    echo '<input type="submit" value="submit" class="btn" name="send" >';
                } else {
                    echo '<br><br>';
                    echo '<h1>untuk melanjutkan proses booking silahkan login dahulu</h1>';
                    echo '<a href="index.php?page=login" class="btn">Login</a>'; // Tombol login
                }
            ?>

                

            </form>

            <?php
    } else {
        header("Location: error.php");
        exit;
    }
    ?>

        </section>
    <!-- booking section end -->


    <script>

    // async function hargaTujuan(){
    //     // alert('sad')
    //     params = 
    //     const response = await fetch('api.php', {
    //         method: 'POST',
    //         body: {
    //             id_destinasi : document.getElementById("locationSelect").value
    //         }, // string or object
    //         headers: {
    //         'Content-Type': 'application/json'
    //         }
    //     });
    //     const myJson = await response.json();
    //     console.log(myJson)
    // }

    function daydiff(){
        let berangkat = new Date(document.getElementById("arrivals").value)
        let leaving = new Date(document.getElementById("leaving").value)

        var Difference_In_Time = leaving.getTime() - berangkat.getTime();
    
        // To calculate the no. of days between two dates
        var day_diff = Difference_In_Time / (1000 * 3600 * 24)
        return day_diff
    }
    
    // Fungsi untuk menghitung total biaya
    function calculateTotalCost() {
        var day = daydiff()
        var locationSelect = document.getElementById("locationSelect");
        var selectedOption = locationSelect.options[locationSelect.selectedIndex];
        var hargaPerTujuan = parseInt(selectedOption.getAttribute("data-harga"));
        var jumlahPengunjung = parseInt(document.getElementsByName("guests")[0].value);

        
        var totalBiaya = hargaPerTujuan * jumlahPengunjung * day;
        if(isNaN(totalBiaya)){
            totalBiaya = 0
            document.getElementsByName("send")[0].disabled = true
        }else{
            document.getElementsByName("send")[0].disabled = false
        }
        
        // Menambahkan tulisan "Rp." sebelum memformat total biaya
        var formattedTotalBiaya = "Rp" + totalBiaya.toLocaleString();

        document.getElementById("totalCostInput").value = formattedTotalBiaya;
    }



    // Memanggil fungsi calculateTotalCost saat jumlah pengunjung atau tujuan berubah
    var guestsInput = document.getElementsByName("guests")[0];
    var locationSelect = document.getElementById("locationSelect");
    guestsInput.addEventListener("change", calculateTotalCost);
    locationSelect.addEventListener("change", calculateTotalCost);

    // Memasukkan total biaya ke input "Total Biaya"
    // document.getElementById("totalCostInput").value = totalBiaya;

</script>

<a href="?page=ubah&id=<?php echo $data['id']; ?>" class="btn">Ubah</a>