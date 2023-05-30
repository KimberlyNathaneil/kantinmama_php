<?php
@include 'connection/config.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> Kantin Mama </title>
        <link rel="stylesheet" type="text/css" href="css/order.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>

        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        
        <header>
            <a href="#" class="logo"> Kantin Mama </a>
            <div class="bx bx-menu" id="icon_menu"> </div>

            <ul class="navbar">
                <li><a href="index.php"> Beranda </a></li>
                <li><a href="index.php"> Tentang Kami </a></li>
                <li><a href="index.php"> Menu </a></li>
                <!-- <li><a href="#services"> Service Kami </a></li> -->
                <li><a href="index.php"> Kontak </a></li>
                <li><a href=""> Hello,  </a></li>
            </ul>
        </header>

        <section class="menu_order" id="menu_order">

            <div class="menu_container_order">
                <div class="box_order">
                    <div class="box-img-order">
                        <img src="image/nasi ayam geprek.jpeg">
                    </div>
                    <h2>Nasi Ayam Geprek</h2>
                    <h3> Nasi dengan ayam geprek menggunakan sambal hijau </h3>
                    <span> Rp. 15.000 </span>
                    <a href="order_cart_insert.php" class="menu_btn"> <i class='bx bx-cart-alt'></i></a>
                </div>

                <div class="box">
                    <div class="box-img">
                        <img src="image/nasi goreng.jpeg">
                    </div>
                    <h2>Nasi Goreng</h2>
                    <h3> Nasi yang digoreng ciri khas Kantin Mama </h3>
                    <span> Rp. 15.000 </span>
                    <a href="order_cart_insert.php" class="menu_btn"> <i class='bx bx-cart-alt'></i> </a>
                </div>

                <div class="box">
                    <div class="box-img">
                        <img src="image/nasi ayam karage.jpeg">
                    </div>
                    <h2>Nasi Ayam Karage</h2>
                    <h3> Nasi dengan ayam berbalur saos karage </h3>
                    <span> Rp. 15.000 </span>
                    <a href="order_cart_insert.php" class="menu_btn"> <i class='bx bx-cart-alt'></i> </a>
                </div>

                <div class="box">
                    <div class="box-img">
                        <img src="image/nasi ayam.jpeg">
                    </div>
                    <h2>Koipeng</h2>
                    <h3> Nasi dengan ayam kecap tradisional dan timun, menggunakan kuah kental yang disediakan </h3>
                    <span> Rp. 15.000 </span>
                    <a href="order_cart_insert.php" class="menu_btn"> <i class='bx bx-cart-alt'></i> </a>
                </div>

                <div class="box">
                    <div class="box-img">
                        <img src="image/cheesy chicken.jpeg">
                    </div>
                    <h2>Cheesy Chicken</h2>
                    <h3> Nasi dengan ayam menggunakan saos keju diatasnya </h3>
                    <span> Rp. 15.000 </span>
                    <a href="order_cart_insert.php" class="menu_btn"> <i class='bx bx-cart-alt'></i> </a>
                </div>
            </div>
        </section>

            <section id="kontak">
                <div class="footer">
                    <div class="main">
                        <div class="col">
                            <h4> Menu Links </h4>
                            <ul>
                                <li><a href="#beranda">Beranda</a></li>
                                <li><a href="#tentang">Tentang Kami</a></li>
                                <li><a href="#menu">Menu</a></li>
                                <!-- <li><a href="#">Service Kami</a></li> -->
                                <li><a href="#kontak">Kontak</a></li>
                                <li><a href="">Profil</a></li>
                            </ul>
                        </div>

                        <div class="col">
                            <h4> Jam Operasional </h4>
                            <div class="jam">
                                <li> <a> 07.00-14.00 </a> </li>
                            </div>
                        </div>

                        <!-- <div class="col">
                            <h4> Menu Links </h4>
                            <ul>
                                <li><a href="#">Beranda</a></li>
                                <li><a href="#">Tentang Kami</a></li>
                                <li><a href="#">Menu</a></li>
                                <li><a href="#">Service Kami</a></li>
                                <li><a href="#">Kontak</a></li>
                            </ul>
                        </div> -->

                        <div class="col">
                            <h4> Kontak Kami </h4>
                            <div class="social">
                                <a href="https://api.whatsapp.com/send/?phone=6281254003747&text&type=phone_number&app_absent=0" target="_blank"><i class='bx bxl-whatsapp'></i></a>
                                <a href="https://www.instagram.com/kantin_mama/" target="_blank"><i class='bx bxl-instagram'></i></a>
                                <!--<a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-telegram'></i></a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </body>
</html>