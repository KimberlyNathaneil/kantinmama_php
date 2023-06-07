<?php 
include "connection.php";

$idproduk = mysqli_real_escape_string($con,$_POST['idproduk']);
$barcode = mysqli_real_escape_string($con,$_POST['barcode']);
$namaproduk = mysqli_real_escape_string($con,$_POST['namaproduk']);
$idk = mysqli_real_escape_string($con,$_POST['idk']);
$harga = mysqli_real_escape_string($con,$_POST['harga']);
$deskripsi = mysqli_real_escape_string($con,$_POST['deskripsi']);

//update data teks
$sql = "UPDATE produk SET barcode='$barcode', namaproduk='$namaproduk',
						  idk='$idk', harga='$harga', deskripsi='$deskripsi'
						  WHERE idproduk='$idproduk' ";
mysqli_query($con,$sql);

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

	//menghapus foto lama
	$qry = mysqli_query($con,"SELECT * FROM produk WHERE idproduk='$idproduk' ");
	$row = mysqli_fetch_array($qry);
	if(!empty($row['foto'])) { 
		unlink("./images/produk/$row[foto]"); //function utk menghapus file
	}

	//mengupdate foto baru
	$sql = "UPDATE produk SET foto='$foto' WHERE idproduk='$idproduk' ";
	mysqli_query($con,$sql);

}

$url   = "index.php?menu=produk";
$pesan = "Data berhasil diubah";

echo "<script>alert('$pesan'); location='$url';</script>";
