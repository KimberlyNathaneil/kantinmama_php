
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manajemen Data Produk</h1>
                    <p class="mb-4 text-success">
                        Halaman ini digunakan untuk mengelola data produk
                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data</h6>
                        </div>
                        <form action="produk_insert.php" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Barcode:</label>
                                <input type="text" class="form-control" placeholder="Masukan Barcode" name="barcode" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Produk:</label>
                                <input type="text" class="form-control" placeholder="Masukan Nama Produk" name="namaproduk" required>
                            </div>
                            <div class="form-group">
                                <label>Kategori:</label>
                                <select class="form-control" name="idk">
                                <?php 
                                $qry=mysqli_query($con,"SELECT * FROM kategori");
                                while($row=mysqli_fetch_array($qry))
                                {
                                    echo "<option value='$row[idk]'>$row[kategori]</option>";
                                }
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Harga:</label>
                                <input type="number" class="form-control" placeholder="Masukan Harga" name="harga" required>
                            </div>
                            <div class="form-group">
                                <label>Foto: <sup class="text-danger">Kosongkan jika tidak ada foto</sup></label>
                                <input type="file" class="form-control" name="foto">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi:</label>
                                <textarea class="form-control" name="deskripsi" placeholder="Masukan deskripsi produk" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" name="btn"class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            <a href="index.php?menu=produk" class="btn btn-warning">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                        </form>

                    </div>

                </div>

