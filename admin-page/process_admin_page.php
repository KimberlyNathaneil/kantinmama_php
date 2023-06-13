<?php 
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin = $_POST['admin'];
    $password = $_POST['password'];


    // Query untuk memeriksa keberadaan pengguna dengan username dan password yang sesuai
    $query = "SELECT * FROM admins WHERE nama_admin = '$admin' AND password = '$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login berhasil, simpan informasi pengguna dalam session
        $_SESSION['admin'] = $admin;

        // Redirect ke halaman lain (misalnya halaman beranda)
        header("location: index.php");
    } else {
        // Login gagal, tampilkan pesan kesalahan
        ?>
        <script>
        alert('Username atau password salah');
        window.location.href = "admin_page.php";
        </script>
        
        <?php
        
    }

    // Tutup koneksi ke database
    mysqli_close($con);
}
?>