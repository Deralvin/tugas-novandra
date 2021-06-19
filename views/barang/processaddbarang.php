<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("../../config/crud.php");

$crud = new Crud();

if(isset($_POST['Submit'])) {	
	$name = $crud->escape_string($_POST['name']);
	$harga = $crud->escape_string($_POST['harga']);
	$stok = $crud->escape_string($_POST['stok']);
	$supplier = $crud->escape_string($_POST['supplier']);

    $result = $crud->execute("INSERT INTO `barang`(`nama_barang`, `harga`, `stok`, `id_supplier`) VALUES ('$name','$harga','$stok','$supplier')");
		
    //display success message
    echo "<font color='green'>Data added successfully.";
    echo "<br/><a href='barang.php'>View Result</a>";

    
	// $msg = $validation->check_empty($_POST, array('name', 'age', 'email'));
	// $check_age = $validation->is_age_valid($_POST['age']);
	// $check_email = $validation->is_email_valid($_POST['email']);
	
	// checking empty fields
	// if($msg != null) {
	// 	echo $msg;		
	// 	//link to the previous page
	// 	echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	// } elseif (!$check_age) {
	// 	echo 'Please provide proper age.';
	// } elseif (!$check_email) {
	// 	echo 'Please provide proper email.';
	// }	
	// else { 
	// 	// if all the fields are filled (not empty) 
			
	// 	//insert data to database	
	// 	$result = $crud->execute("INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");
		
	// 	//display success message
	// 	echo "<font color='green'>Data added successfully.";
	// 	echo "<br/><a href='index.php'>View Result</a>";
	// }
}
?>
</body>
</html>