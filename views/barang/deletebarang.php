<?php
//including the database connection file
include_once("../../config/crud.php");

$crud = new Crud();

//getting id of the data from url
$id = $crud->escape_string($_GET['id_supplier']);

//deleting the row from table

$result = $crud->delete($id, 'supplier','id_supplier');

if ($result) {
	//redirecting to the display page (index.php in our case)
	header("Location:../../views/supplier/supplier.php");
}
?>