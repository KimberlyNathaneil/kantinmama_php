<?php 
include "connection.php";

$barcode = mysqli_real_escape_string($con,$_POST['barcode']);
$namaproduk = mysqli_real_escape_string($con,$_POST['namaproduk']);
$idk = mysqli_real_escape_string($con,$_POST['idk']);
$harga = mysqli_real_escape_string($con,$_POST['harga']);
$deskripsi = mysqli_real_escape_string($con,$_POST['deskripsi']);

$foto = "";
$foto_cek = $_FILES['foto']['name'];
if(!empty($foto_cek))
{
	$folder = "./images/produk";
	$tmp_name = $_FILES["foto"]["tmp_name"];
	$cek  = explode(".", $foto_cek); //membagi nama file berdasarkan titik
	$ext  = end($cek); //mengambil ekstensi file
	$name = md5(date("YmdHis")).".$ext";
	move_uploaded_file($tmp_name, "$folder/$name");
	$foto = $name;
}

$sql   = "INSERT INTO 
			produk (barcode,namaproduk,idk,harga,deskripsi,foto) 
			VALUES
			('$barcode','$namaproduk','$idk','$harga','$deskripsi','$foto')";
$query = mysqli_query($con,$sql);

$url   = "index.php?menu=produk";
$pesan = "Data berhasil disimpan";

echo "<script>alert('$pesan'); location='$url';</script>";
