<?php
    include_once("../../config/crud.php");
    include_once("../../config/baseurl.php");
    
    $crud = new Crud();
    $barang = $_POST['barang'];
    $qty = $_POST['qty'];
    $transaksi = $_POST['id_transaksi'];
    $base_url =  home_base_url();
    $url = $base_url."views/pemesanan/detailpemesanan.php?id=$transaksi"; 
    $countQty = $crud->getData("SELECT * FROM barang WHERE id_barang = '$barang'");
    $created_at = date('Y-m-d');
    if((int)$countQty[0]['stok']-(int)$qty >= 0){
      $subtotal = (int) $countQty[0]['harga'] * (int) $qty;
      $query = $crud->execute("INSERT INTO `detailtransaksi`( `id_barang`, `id_transaksi`, `qty`, `subtotal`, `created_at`) VALUES ('$barang','$transaksi','$qty','$subtotal','$created_at')");   
      if($query){
        echo "<SCRIPT> //not showing me this
        alert('data berhasil ditambahkan')
        window.location.replace('$url');
       </SCRIPT>";
      }
    }
    var_dump($subtotal);
    exit();
?>