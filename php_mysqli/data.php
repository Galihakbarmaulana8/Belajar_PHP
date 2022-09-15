<?php 
include "koneksiMysqli.php";
?>
<a href="form.php">Tambah</>
<table width="600" border="1">
    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>&nbsp</th>
        <th>&nbsp</th>
    </tr>
<?php
$sql=$conn->query("select * from siswa");
while($rs=$sql->fetch_object()) {
?>
    <tr>
        <td><?php echo $rs->nis;?></td>
        <td><?php echo $rs->nama;?></td>
        <td><?php echo $rs->kelas;?></td>
        <td><a href="Form.php?nis=<?php echo $rs->nis;?>">Edit</a></td>
        <td><a href="Hapus.php?nis=<?php echo $rs->nis;?>">Hapus</a></td>
    </tr> 
<?php } ?>
</table>