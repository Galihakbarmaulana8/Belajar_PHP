<?php 
    @$jari_jari = $_POST["jari-jari"];
    @$tinggi = $_POST["tinggi"];
    @$selimut = $_POST["selimut"];
    @$luas_alas = 22/7 * $jari_jari * $jari_jari;
    @$selimut1 = 22/7 *$jari_jari + $selimut;
    @$volume = 1/3 * $luas_alas * $tinggi;
?>
<form action="rumus-segitiga1.php" method="POST">
    <h1> Rumus Luas dan Volume Kerucut</h1>
    <table>
        <tr>
            <td>jari-jari</td>
            <td>=</td>
            <td><input type="text" name="jari-jari" value="<?php echo $jari_jari; ?>"/>cm<br/></td>
        </tr>
        <tr>
            <td>tinggi</td>
            <td>=</td>
            <td><input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/>cm<br/></td>
        </tr>
        <tr>
            <td>selimut</td>
            <td>=</td>
            <td><input type="text" name="selimut" value="<?php echo $selimut; ?>"/>cm<br/></td>
        </tr>
    </table>
    <?php 
        echo $jari_jari;
        echo $tinggi;
        echo $selimut;
    ?>
    <input type="submit" name="submit" value="HITUNG"/><br/><br/>
    <?php
        echo "Luas Alas = ".$luas_alas. "cm^2<br/>";
        echo "Luas selimut = ".$selimut1. "cm^2<br/>";
        echo "Volume Kerucut = ".$volume. "cm^3<br/>";
    ?>
</form>