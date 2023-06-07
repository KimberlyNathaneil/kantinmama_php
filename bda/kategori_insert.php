<?php 
include "connection.php";
$kategori = $_POST['kategori'];

$sql   = "INSERT INTO kategori (kategori) VALUES('$kategori')";
$query = mysqli_query($con,$sql);

$url   = "index.php?menu=kategori";
$pesan = "Data berhasil disimpan";

echo "<script>alert('$pesan'); location='$url';</script>";
