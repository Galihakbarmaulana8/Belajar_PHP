<?php
include ('./nilai_siswa.php');
$data=mysqli_query($mysqli,"DELETE FROM siswa_nilai WHERE nis='".$_GET["nis"]."'");
header("location:nilai_siswa.php")
?>