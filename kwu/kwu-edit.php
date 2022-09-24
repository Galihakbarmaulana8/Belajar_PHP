<?php
     if ( isset($_GET["kodebarang"]) ){
        $kodebarang = $_GET["kodebarang"];
        $check_nis = "SELECT * FROM transaksi WHERE kodebarang = '$kodebarang';";
        include('./kwu-config.php');
        $querry = mysqli_query($mysqli, $check_nis);
        $row = mysqli_fetch_array($querry);
    }
?>

<h1>Edit Data</h1>
<form action="kwu-edit.php" method="POST">
    <label for="kodebarang"> Kode Barang :</label>
    <input value="<?php echo $row["kodebarang"]; ?>" readonly type="number" name="kodebarang" placeholder="Ex. 1234567890" /><br>

    <label for="tanggal"> Tanggal :</label>
    <input value="<?php echo $row["tanggal"]; ?>" type="date" name="tanggal" /><br>

    <label for="pembeli"> Pembeli :</label>
    <input value="<?php echo $row["pembeli"]; ?>" type="text" name="pembeli" placeholder="Ex. GALIH" /><br>

    <label for="namabarang"> Nama Barang :</label>
    <input value="<?php echo $row["namabarang"]; ?>" type="text" name="namabarang" placeholder="Ex. INDOMIE" /><br>

    <label for="qty"> QTY:</label>
    <input value="<?php echo $row["qty"]; ?>" type="number" name="qty" placeholder="Ex. 10" /><br>

    <label for="hargabeli"> Harga Beli :</label>
    <input value="<?php echo $row["hargabeli"]; ?>" type="number" name="hargabeli" placeholder="Ex. 10.000" /><br>

    <label for="hargajual"> Harga Jual :</label>
    <input value="<?php echo $row["hargajual"]; ?>" type="number" name="hargajual" placeholder="Ex. 20.000" /><br>

    <input type="submit" name="simpan" value="Simpan Data" />
    <a href="kwu.php">kembali</a>
</form>
<?php
     if ( isset($_POST["simpan"])) {
        $kodebarang = $_POST["kodebarang"];
        $tanggal= $_POST["tanggal"];
        $pembeli = $_POST["pembeli"];
        $namabarang = $_POST["namabarang"];
        $qty = $_POST["qty"];
        $hargabeli = $_POST["hargabeli"];
        $hargajual = $_POST["hargajual"];


        //Edit - Memperbarui Data 
        $query ="
            UPDATE transaksi SET kodebarang = '$kodebarang',
            tanggal = '$tanggal',
            pembeli = '$pembeli',
            namabarang = '$namabarang',
            qty = '$qty',
            hargabeli = '$hargabeli',
            hargajual = '$hargajual'
            WHERE kodebarang = '$kodebarang';
        ";
        include ('./kwu-config.php');
        $update = mysqli_query($mysqli, $query);

        if($update){
            echo "
                <script>
                    alert('Data Berhasil Diperbaharui');
                    window.location='kwu.php';
                </script>
            ";
        }else{
            echo "
            <script>
                alert('Data Gagal diperbaharui');
                window.location='kwu-edit.php?nis=$nis';
            </script>
            ";
        }
    }
?>