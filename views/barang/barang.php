
<?php
//including the database connection file
include_once("../../config/crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM barang as a INNER JOIN supplier as b on a.id_supplier = b.id_supplier ORDER BY id_barang DESC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="addbarang.php">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Nama Barang</td>
		<td>Harga</td>
		<td>Stok</td>
		<td>Nama Supplier</td>
        <td>Action</td>
	</tr>
	<?php 
	foreach ($result as $key => $res) {
	?>
        <tr>
            <td><?= $res['nama_barang']?></td>
            <td><?= $res['harga']?></td>
            <td><?= $res['stok']?></td>
            <td><?= $res['nama_supplier']?></td>
            <td><a href="editview.php?id=<?=$res['id_supplier']?>">Edit</a> | <a href="deletesupplier.php?id_supplier=<?=$res['id_supplier']?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
    <?php }?>
	</table>
</body>
</html>