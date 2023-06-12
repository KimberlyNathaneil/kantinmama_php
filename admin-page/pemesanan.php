                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Daftar Menu</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

<?php 
$no  = 1;
$sql = "SELECT * FROM produk 
            LEFT JOIN kategori USING(idk)";
$query = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($query))
{
    $link_edit  = "index.php?menu=produk&aksi=edit&id=$row[idproduk]";
    $link_hapus = "produk_delete.php?id=$row[idproduk]";

    $foto = "default.jpg";
    if(!empty($row['foto'])) { $foto = $row['foto']; }

    $link_foto  = "../image/$foto";
?>                        
                        <div class="col-sm-3 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="text-primary" align="center">
                                        <b><?=$row['namaproduk'];?></b>
                                    </div>

                                    <img src="<?=$link_foto;?>" class="col-sm-12" height="150">

                                    <div class="text-success" align="center">
                                        IDR <?=number_format($row['harga'],0,',','.');?>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="col-sm-12 btn btn-info">
                                        <i class="fas fa-shopping-cart"></i> Order
                                    </a>
                                </div>
                            </div>
                        </div>
<?php
$no++;
}
?>
                    </div>



                </div>