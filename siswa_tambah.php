<h1>Tambah Data</h1>
<form action="siswa_tambah.php" method="POST">
    <label for="nis"> Nomor Induk siswa :</label>
    <input type="number" name="nis" placeholder="Ex. 12001142" /><br>

    <label for="nama"> Nama Lengkap :</label>
    <input type="text" name="nama" placeholder="Ex. David Lutfhi" /><br>

    <label for="kelas"> Kelas :</label>
    <input type="text" name="Kelas" placeholder="Ex. XI RPL 1" /><br>

    <label for="kehadiran"> Kehadiran :</label>
    <input type="number" name="kehadiran" placeholder="Ex. 80" /><br>
    <label for="tugas"> Tugas :</label>
    <input type="number" name="tugas" placeholder="Ex. 80" /><br>
    <label for="uts"> UTS :</label>
    <input type="number" name="uts" placeholder="Ex. 80" /><br>
    <label for="uas"> UAS :</label>
    <input type="number" name="uas" placeholder="Ex. 80" /><br>

    <input type="submit" name="simpan" value="Simpan Data" />
    <a href="nilai_siswa.php">kembali</a>
</form>

<?php
    if( isset($_POST["simpan"])){
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $kelas = $_POST["kelas"];
        $kehadiran = $_POST["kehadiran"];
        $tugas = $_POST["tugas"];
        $uas = $_POST["uts"];
        $uas = $_POST["uas"];

        //CREATE - Menambahkan Data ke DataBase
        $query = "
            INSERT INTO siswa_nilai VALUES
            ('$nis', '$nama', '$kelas', '$kehadiran', '$tugas', '$uts', '$uas');
        ";
        include ('./config_siswa.php');
        $insert = mysqli_query($mysqli, $query);

        if ($insert){
            echo"
                <script>
                    alert('Data Berhasil ditambahkan');
                    window.location='nilai_siswa.php';
                </script>
            ";
        }
    }
?>