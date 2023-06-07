<?php 
include "connection.php";
$idk   = $_GET['id'];

$sql   = "DELETE FROM kategori WHERE idk='$idk' ";
$query = mysqli_query($con,$sql);

$url   = "index.php?menu=kategori";
$pesan = "Data berhasil dihapus";

echo "<script>alert('$pesan'); location='$url';</script>";
