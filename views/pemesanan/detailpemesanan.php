<?php
    include_once("../../config/crud.php");
    $crud = new Crud();

    $id_transaksi = $_GET['id'];
    
    $query = "SELECT * FROM barang";
    $sqldetail = "SELECT * FROM detailtransaksi as a INNER JOIN barang as b on a.id_barang = b.id_barang WHERE id_transaksi='$id_transaksi'";

    $resultdetail = $crud ->getData($sqldetail);
    
    $result = $crud->getData($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pemesanan</title>
</head>
<body>
    <form action="adddetailprocess.php" method="POST">
        <input type="hidden" name="id_transaksi" value="<?= $id_transaksi?>">
        <table>
            <tr>
                <td>Pilih Barang</td>
                <td>
                    <select name="barang" id="">
                        <?php foreach ( $result as $option ) : ?>
                            <option value="<?php echo $option['id_barang']; ?>"><?php echo $option['nama_barang']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input type="number" name="qty" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
    
    <br>
    <br>
    <br>
    <br>
    
    <table>
        <tr>
            <td>No</td>
            <td>Nama Barang</td>
            <td>Quantity</td>
            <td>Subtotal</td>
            <td>Action</td>
        </tr>
        <?php 
            $count = 1;
	        foreach ($resultdetail as $key => $res) {
	    ?>
        <tr>
            <td><?= $count++?></td>
            <td><?= $res['nama_barang']?></td>
            <td><?= $res['qty']?></td>
            <td><?= $res['subtotal']?></td>
            <td><a href="editview.php?id=<?=$res['id_supplier']?>">Edit</a> | <a href="deletesupplier.php?id_supplier=<?=$res['id_supplier']?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
    <?php }?>
    </table>
</body>
</html>