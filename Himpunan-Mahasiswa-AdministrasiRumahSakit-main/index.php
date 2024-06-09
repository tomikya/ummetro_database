<?php
include "01-ummetro/konek.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrasi Rumah Sakit</title>
    <link rel="website icon" href="image/aaa-removebg.png" type="jpg/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="01-ummetro/css/main.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- AWS ANIMATION AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <!-- navbarrr -->
    <!--=============== HEADER ===============-->
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="01-ummetro/loginn.php" class="nav__logo">
                    <img src="image/navbar-icon.jpg" alt="">
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="index.php?page=home" class="nav__link">HOME</a></li>

                    <!-- dropdown 1 -->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            PROFILE <i class="ri-arrow-down-s-line 
                            dropdown__arrow"></i>
                        </div>

                        <!-- <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    Sambutan Kaprodi
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    Tentang kami
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    Video Pribadi
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    Visi dan Misi
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    Akreditasi
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    Daftar Dosen
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    Struktur Keprodian
                                </a>
                            </li>
                            
                        </ul> -->
                    </li>
                    <!-- dropdown 1 end-->

                    <!-- dropdown 2 -->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            <a href="index.php?page=berita">BERITA</a>
                            <!-- <i class="ri-arrow-down-s-line 
                            dropdown__arrow"></i> -->
                        </div>

                        <!-- <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    Renstra UM Metro
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    Renstra FIKES
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    Pedoman Akademik UM Metro
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    Standar Proses Pembelajaran UM 
                                    Metro
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    PPKI UM Metro
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    Kurikulum Prodi
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    Road Map PRODI
                                </a>
                            </li>
                        </ul> -->
                    </li>
                    <!-- dropdown 2 end -->

                    <!-- dropdown 3 -->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            KEMAHASISWAAN <i class="ri-arrow-down-s-line 
                            dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    Penmaru
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    HIMARS
                                </a>
                            </li>

                        </ul>
                    </li>
                    <!-- dropdown 3 end -->

                    <!-- Dropdown 4 -->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            AKADEMIK <i class="ri-arrow-down-s-line 
                            dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    Jadwal Perkuliahan
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    MOU
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    Pedoman PBL
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Dropdown 4 end-->
                </ul>
            </div>
        </nav>
    </header>
    <!-- navbarrr end -->

    <main class="content">
				<div class="container-fluid p-0">

                <?php 
                $page = isset($_GET['page']) ? $_GET['page'] : 'home';
                include $page . '.php';
                ?>
				</div>
			</main>

    <!-- footer -->
    <footer>
        <div class="footer_flex">
            <div class="footer_ket">
                <img src="image/img-navbar.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, nam, dolore tenetur nulla
                    molestiae corrupti ut assumenda cumque ullam quis sit! Magnam eaque non velit? Corporis, adipisci.
                    Molestiae, officia. Et.</p>
            </div>

            <div class="contact_footer">
                <h2>Contact:</h2>
                <ul>
                    <li>WA : 0812234455</li><br>
                    <li>Email: akagami@gmail.com</li><br>
                    <li>Alamat: <br>
                        jalan lala, dusun ikan, rt8/rw6, lampung tengah</li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- footer endd -->


    <script src="js/main.js" type="text/javascript"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>