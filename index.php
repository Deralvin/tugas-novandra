<?php
    include_once("config/crud.php");

    $crud = new Crud();
    
    //fetching data in descending order (lastest entry first)
    $query = "SELECT * FROM transaksi as a INNER JOIN pelanggan as b on a.nik = b.nik ORDER BY a.tanggal DESC";
    $result = $crud->getData($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan Barang</title>
</head>
<body>
    <?php
        include 'config/menu.php';
    ?>
    
    <table>
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
        
        <?php
            $count = 1; 
	        foreach ($result as $key => $res) {
	    ?>
        <tr>
            <td><?= $count++?></td>
            <td><?= $res['nama']?></td>
            <td><?= $res['tanggal']?></td>
            <td><?= $res['keterangan']?></td>
            <td><a href="views/pemesanan/detailpemesanan.php?id=<?= $res['id_transaksi']?>"><button>Detail</button></a></td>
        </tr>
    <?php }?>
    </table>
</body>
</html>