<?php
    include_once("../../config/crud.php");

    $crud = new Crud();
    
    //fetching data in descending order (lastest entry first)
    $query = "SELECT * FROM supplier ORDER BY id_supplier DESC";
    $result = $crud->getData($query);
?>
<html>
<head>
    <title>Add Barang</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form action="processaddbarang.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Barang</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td>
                    <input type="text" name="stok">
                </td>
            </tr>
            <tr> 
                <td>Nama Supplier</td>
                <td>
                    <select name="supplier" id="">
                    <?php foreach ( $result as $option ) : ?>
                        <option value="<?php echo $option['id_supplier']; ?>"><?php echo $option['nama_supplier']; ?></option>
                     <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>