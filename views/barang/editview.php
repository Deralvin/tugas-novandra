<?php
include_once("../../config/crud.php");

$crud = new Crud();

//getting id from url
$id = $crud->escape_string($_GET['id']);

//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM supplier WHERE id_supplier=$id");


foreach ($result as $res) {
	$name = $res['nama_supplier'];
	$notlp = $res['no_telp'];
	$alamat = $res['alamat'];
    $ket = $res['keterangan'];
}

?>
<html>
<head>
    <title>Edit Supplier</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form method="post" action="editaction.php" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Supplier</td>
                <td><input type="text" name="name" value=<?= $name?>></td>
            </tr>
            <tr> 
                <td>No Telpon</td>
                <td><input type="text" name="notelp"value=<?= $notlp?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" id="" cols="30" rows="10" ><?= $alamat?></textarea>
                </td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td>
                    <textarea name="keterangan" id="" cols="30" rows="10" placeholder="Contoh : Penyuplai Monitor"><?= $ket?></textarea>
                </td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>