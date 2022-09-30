<?php 
include ('./input-config.php');
if ($_SESSION["login"] !=TRUE){
    header('location:login.php');
}
if ($_SESSION["role"] !="admin"){
    echo"
        <script>
            alert('Akses tidak diberikan, Kamu bukan admin');
            window.location='input-datadiri.php';
        </script>
    ";
}
if (isset($_GET["nis"]) && $_SESSION["role"] == "admin"){
    $nis =$_GET["nis"];
}
?>