<?php
require_once '../dbkoneksi.php'
?>
<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM vendor WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
?>

<table>
            <tbody>
        <tr>  <td>Nomor : </td><td><?=$row['nomor']?></td></tr>
        <tr>  <td>Nama : </td><td><?=$row['nama']?></td></tr>
        <tr>  <td>Kota : </td><td><?=$row['kota']?></td></tr>
        <tr>  <td>Kontak : </td><td><?=$row['kontak']?></td></tr>
            </tbody>
</table>
</div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>]