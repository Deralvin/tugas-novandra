<?php
    include_once("../../config/crud.php");

    $crud = new Crud();
    
    //fetching data in descending order (lastest entry first)
    $query = "SELECT * FROM pelanggan";
    $result = $crud->getData($query);
?>
<html>
<head>
    <title>Add Barang</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form action="processaddpesanan.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Supplier</td>
                <td>
                    <select name="nik" id="">
                    <?php foreach ( $result as $option ) : ?>
                        <option value="<?php echo $option['nik']; ?>"><?php echo $option['nama']; ?></option>
                     <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Buat Pesanan"></td>
            </tr>
        </table>
    </form>
</body>
</html>