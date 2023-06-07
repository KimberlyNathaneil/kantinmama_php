<?php 
include "connection.php";

$idproduk = mysqli_real_escape_string($con,$_GET['id']);

//hapus foto produk
$qry = mysqli_query($con,"SELECT * FROM produk WHERE idproduk='$idproduk' ");
$row = mysqli_fetch_array($qry);
if(!empty($row['foto'])) { 
	unlink("./images/produk/$row[foto]");
}

$sql   = "DELETE FROM produk WHERE idproduk='$idproduk' ";
$query = mysqli_query($con,$sql);

$url   = "index.php?menu=produk";
$pesan = "Data berhasil dihapus";

echo "<script>alert('$pesan'); location='$url';</script>";
