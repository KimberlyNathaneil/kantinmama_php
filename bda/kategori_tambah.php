
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manajemen Data Kategori</h1>
                    <p class="mb-4 text-success">
                        Halaman ini digunakan untuk mengelola data kategori
                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data</h6>
                        </div>
                        <form action="kategori_insert.php" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="kategori">Kategori:</label>
                                <input type="text" class="form-control" placeholder="Masukan nama kategori" name="kategori" required>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" name="btn"class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            <a href="index.php?menu=kategori" class="btn btn-warning">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                        </form>

                    </div>

                </div>

