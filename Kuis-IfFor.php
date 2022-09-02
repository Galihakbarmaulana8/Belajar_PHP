<?php
    //Nama : Galih Akbar Maulana
    //Kelas : 11 RPL 1
    $star=10;
    for( $a=$star;$a>0;$a--){
        for($i=1; $i<=$a; $i++){
           echo "&nbsp";
    }
    for($a1=$star;$a1>=$a;$a1--){
      echo "*";
    }
      echo"<br>";
    }
    echo "<hr>";
    for($x = 1; $x <=9; $x++) {
        for ($y = 1; $y <= $x; $y++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    for($x = 9; $x >=1; $x--) {
        for ($y = 1; $y <= $x; $y++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    $star=10;
         for($a=$star;$a>0;$a--){
                for($i=1; $i<=$a; $i++){
                    echo " &nbsp";
                }
                for($a1=$star;$a1>=$a;$a1--){
                    echo"*";
                }
            echo"<br>";
       }
       echo "<hr>";
       $star=10;
       for($a=1; $a<=$star; $a++){
            for($i=1; $i<=$a; $i++){
                  echo " &nbsp";
             }
             for($c=$star; $c>=$a; $c-=1){
                    echo "*";
             }
            echo "<br>";
       }
       echo "<hr>";
       $star=10;
       for($a=1; $a<=$star; $a++){
             for($b=1; $b<=$a; $b++){
                  echo "&nbsp";
        }
             for($c=$star; $c>=$a; $c-=1){
                   echo "*";
           }
           echo "<br>";
     }
    echo "<hr>";
    $star=10;
    for($a=1; $a<=$star; $a++){
          for($b=$star; $b>=$a; $b-=1){
                 echo "&nbsp";
          }
          for($c=1; $c<=$a; $c++){
                 echo "*";
          }
                echo "<br>";
                }
                for($a=1; $a<=$star; $a++){
                for($b=1; $b<=$a; $b++){
                     echo "&nbsp";
                }
                for($c=$star; $c>=$a; $c-=1){
                     echo "*";
                }
         echo "<br>";
   }
   echo "<hr>";
   for ($i=1;$i<=5;$i++){
    for ($j=$i;$j>=1;$j--){
        echo $j;
    }
    echo "<br>";
}
    for($x = 5; $x <=1; $x++) {
        for ($y = 5; $y >= $x; $y++){
            echo $y;
        }
        echo "<br>";
    }
    echo "<hr>";
    for($x = 5; $x >=1; $x--) {
        for ($y = 1; $y <= $x; $y++){
            echo $y;
        }
        echo "<br>";
    }
    echo "<hr>";
    $h = 9;
$a = 0;
for($i=0;$i<$h;$i++){
    for($j=$h;$j>$a;$j--){
        echo "&nbsp;";
    }
    for($k=0;$k<=$a;$k++){
        if($i==(int)($h/2)){
            echo "+&nbsp;";
        }else{
            if($k==0 || $k==$a || $k==(int)($a/2)){
                echo "+&nbsp;";
            }else{
                echo"&nbsp;&nbsp;";
            }
        }
    }
    if($i<4){
        $a+=2;
    }else{
        $a-=2;
    }
    echo "<br/>";
}
?>