<?php
     include('./kwu-config.php');
     echo "<a href='kwu-tambah.php'>Tambah Data</a>";
     echo "<hr>";
     //Menampilkan data diri database
     $no = 1 ;
     $tabledata = "" ;
     $data = mysqli_query($mysqli, " SELECT * FROM transaksi ");
     while($row = mysqli_fetch_array($data)) {
        $totalhargabeli = ($row["qty"] * $row["hargabeli"]);
        $totalhargajual = ($row["qty"] * $row["hargajual"]);
        $laba = ($totalhargajual - $totalhargabeli);
         $tabledata .= "
             <tr>
                 <td>".$row["kodebarang"]."</td>
                 <td>".$row["tanggal"]."</td>
                 <td>".$row["pembeli"]."</td>
                 <td>".$row["namabarang"]."</td>
                 <td>".$row["qty"]."</td>
                 <td>".$row["hargabeli"]."</td>
                 <td>".$row["hargajual"]."</td>
                 <td>".$totalhargabeli."</td>
                 <td>".$totalhargajual."</td>
                 <td>".$laba."</td>
                 <td>
                     <a href='kwu-edit.php?kodebarang=".$row["kodebarang"]."'>Edit</a>
                     &nbsp;-&nbsp;
                     <a href='kwu-hapus.php?kodebarang=".$row["kodebarang"]."'
                     onclick='return confirm(\"Yakin Hapus\");'>Hapus</a>
                 </td>
             </tr>    
         ";
         $no++;
     }

     echo "
         <table cellpading=5 border=1 cellspacing=0
             <tr>
                 <th>kodebarang</th>
                 <th>tanggal</th>
                 <th>pembeli</th>
                 <th>namabarang</th>
                 <th>qty</th>
                 <th>hargabeli</th>
                 <th>hargajual</th>
                 <th>totalhargabeli</th>
                 <th>totalhargajual</th>
                 <th>laba</th>
                 <th>Aksi</th>
             </tr>
             $tabledata
         </table>
         ";
?>