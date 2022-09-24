<h1>Tambah Data</h1>
<form action="kwu-tambah.php" method="POST">
    <label for="kodebarang"> Kode Barang :</label>
    <input type="number" name="kodebarang" placeholder="Ex. 1234567890" /><br>

    <label for="tanggal"> Tanggal :</label>
    <input type="date" name="tanggal" /><br>

    <label for="pembeli"> Pembeli :</label>
    <input type="text" name="pembeli" placeholder="Ex. GALIH" /><br>

    <label for="namabarang"> Nama Barang :</label>
    <input type="text" name="namabarang" placeholder="Ex. INDOMIE" /><br>

    <label for="qty"> QTY :</label>
    <input type="number" name="qty" placeholder="Ex. 10" /><br>

    <label for="hargabeli"> Harga Beli :</label>
    <input type="number" name="hargabeli" placeholder="Ex. 10.000" /><br>

    <label for="hargajual"> Harga Jual :</label>
    <input type="number" name="hargajual" placeholder="Ex. 20.000" /><br>

    <input type="submit" name="simpan" value="Simpan Data" />
    <a href="kwu.php">kembali</a>
</form>
<?php
    if( isset($_POST["simpan"])){
        $kodebarang = $_POST["kodebarang"];
        $tanggal= $_POST["tanggal"];
        $pembeli = $_POST["pembeli"];
        $namabarang = $_POST["namabarang"];
        $qty = $_POST["qty"];
        $hargabeli = $_POST["hargabeli"];
        $hargajual = $_POST["hargajual"];

        //CREATE - Menambahkan Data ke DataBase
        $query = "
            INSERT INTO transaksi VALUES
            ('$kodebarang', '$tanggal', '$pembeli', '$namabarang', '$qty', '$hargabeli', '$hargajual');
        ";
        include ('./kwu-config.php');
        $insert = mysqli_query($mysqli, $query);

        if ($insert){
            echo"
                <script>
                    alert('Data Berhasil ditambahkan');
                    window.location='kwu.php';
                </script>
            ";
        }
    }
?>