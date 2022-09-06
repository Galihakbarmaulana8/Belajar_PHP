<form action="rumus-persegi.php" method="POST">
    <h1> Rumus Luas dan Keliling Persegi</h1>
    <p>Sisi :</p>
    <input type="number" name="sisi" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas & Keliling" />
</form>

<?php
    if ( isset($_POST["proses"])) {
        echo "<hr>";
        $sisi = $_POST["sisi"];
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;

        echo "Sisi : $sisi <br>";
        echo "Luas Persegi : $luas <br>";
        echo "Keliling Persegi : $keliling <br>";
    }

?>