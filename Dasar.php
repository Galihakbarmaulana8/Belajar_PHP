<?php
    //variable
    // $1nama; contoh salah (Karena diawali angka)
    // $#nama; contoh salah (Karena diawali simbol)
    // nama; contoh salah (karena tidak ada simbol dolar) 
    $nama = "Rizki";
    $usia = 16;
    echo "Nama saya $nama <br>";
    echo "Usia saya $usia tahun";
    //Tipe data (Integer, Float, String)
    //(Boolean, array)
    $namalengkap = "Rizki Giant 90"; //Boolean
    $umur = 15; //Integer
    $nilai = 76.65; //Float
    $jomblo = TRUE; //Boolean (TRUE/FALSE)

    //Arrat String
    $namarpl1 = array("Alya", "Dwi", "Eben");

    echo "Nama Lengkap : $namalengkap <br>";
    echo "Umur : $umur <br>";
    echo "Nilai : $nilai <br>";
    echo "Jomblo : $jomblo <br>";
    echo "<hr>";
    echo "Array 0 : $namarpl1[0] <br>"; //Alya
    echo "Array 1 : $namarpl1[1] <br>"; //Dwi
    echo "Array 2 : $namarpl1[2] <br>"; //Eben
    echo "<hr>";

    //Aritmatika (+ - / * %)
    
    echo "Angka1: " . $angka1 = 10; echo "<br>";
    echo "Angka1: " . $angka2 = 5; echo "<hr>";

    echo "Tambah :" . $tambah = $angka1 + $angka2 . "<br>";
    echo "Kurang :" . $kurang = $angka1 - $angka2 . "<br>";
    echo "Bagi :" . $bagi = $angka1 / $angka2 . "<br>";
    echo "Kali :" . $kali = $angka1 * $angka2 . "<br>";
    echo "Sisa Bagi :" . $sisabagi = $angka1 % $angka2 . "<br>";
    echo "<hr>";

    //Operator Perbandingan (=, >, <, !=, ==, ===)
    //Return TRUE(1), FALSE(NULL / KOSONG)
    $a = 10;
    $b = 5;
    $c = "10";

    echo "== :"; echo $a == $b; echo "<br>";
    echo "> :"; echo $a > $b; echo "<br>";
    echo "< :"; echo $a < $b; echo "<br>";
    echo "!= :"; echo $a != $b; echo "<br>";
    echo "=== :"; echo $a === $b; echo "<br>";
    echo "<hr>";

    //Operator Logika (AND, OR, &&, ||)
    //IF 

    $x = 10;
    $y = 20;

    if($x == 10 AND $y == 20){ echo "Terpenuhi 2 Variable <br>"; }
    if($x == 10 OR $y == 10){ echo "Salah satu Variable terpenuhi <hr>"; }
    ?>