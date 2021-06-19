<html>
<head>
    <title>Add Supplier</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form action="processaddsupplier.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Supplier</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>No Telpon</td>
                <td><input type="text" name="notelp"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" id="" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td>
                    <textarea name="keterangan" id="" cols="30" rows="10" placeholder="Contoh : Penyuplai Monitor"></textarea>
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