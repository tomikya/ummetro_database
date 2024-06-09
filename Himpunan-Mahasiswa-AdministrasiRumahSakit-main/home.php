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
   

    <!-- banner -->
    <div class="bg_satuan">
        <!-- <div class="content-awal">
        <div class="judul">
            <h1>SEJARAH <br> PP MUHAMMADIYAH DAN PNF</h1>
        </div>
        <div class="btn-awal">
            <a href="profil.html">Selengkapnya</a>
        </div>
    </div> -->

        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="image/Welcome-to-HIMARS1.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="image/Welcome-to-HIMARS2.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="image/IMG_5443.JPG" style="width:100%">
            </div>
        </div>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>


        <!-- banner end -->

        <!-- <div data-aos="zoom-in" class="card_banner">
            <div class="card_banner_1">
                <h2> <strong>ADDRESS: </strong></h2>
                <p>Jl. Gatot Subroto No.100, Yosodadi</p>
            </div>
            <div class="card_banner_1">
                <h2><strong>EMAIL:</strong></h2>
                <p>arsummetro03@gmail.com </p>
            </div>
            <div class="card_banner_1">
                <h2><strong>CONTACT:</strong></h2>
                <p>0725 42445</p>
            </div>
            <div class="card_banner_1">
                <h2><strong>PENERIMAAN MAHASISWA BARU</strong></h2>
                <p></p>
            </div>
        </div> -->

        <!-- SAMBUTAN KETUA UMUM -->
        <div class="container_sambtn">
            <div class="tittle_smbutn">
                <h1>SAMBUTAN KETUA UMUM</h1>
            </div>
            <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" class="wrapper_sambtn_ketua">
                <div class="image_fpf_ketua">
                    <img src="image/user_fpf.jpg" alt="">
                </div>
                <div class="desk_ketua">
                    <h1>NAMA KETUA</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta possimus, cum deleniti rem
                        rerum,
                        inventore fuga eos, fugit non libero consequatur sequi accusamus consequuntur tempore eum
                        architecto
                        hic eaque recusandae. <br> <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum excepturi cum, ipsum nisi
                        facilis
                        deserunt amet corporis necessitatibus dolore ipsam quisquam tempore nam vel porro qui maxime?
                        Consequuntur, dignissimos a.</p> <br><br>
                </div>
            </div>
        </div>
    </div>
    <!-- SAMBUTAN KETUA UMUM END -->

    <!-- visi misi -->
    <div class="container_vismisi">
        <div class="flex_visimisi">
            <div class="visi">
                <h1>VISI</h1>
                <div data-aos="fade-up" data-aos-anchor-placement="center-center" class="card_visi">
                    <p>Pusat keunggulan profetis profesional ilmu administrasi rumah sakit yang modern dan pelayanan
                        prima</p>
                </div>

            </div>

            <div class="misi">
                <h1>MISI</h1>
                <div data-aos="fade-up" data-aos-anchor-placement="center-center" class="card_misi">
                    <p>1. Menyelenggarakan pendidikan bidang ilmu administrasi rumah sakit yang bermutu dengan pelayanan
                        prima,
                        menanamkan nilai-nilai islam dan pemanfaatan perkembangan IPTEK yang mutakhir.</p>
                </div>
                <div data-aos="fade-up" data-aos-anchor-placement="center-center" class="card_misi">
                    <p>2. Menyelenggarakan penelitian pendidikan administrasi rumah sakit yang bermutu dengan pelayanan
                        prima,
                        inovatif dan produktif guna menghasilkan publikasi ilmiah nasional atau internasional.</p>
                </div>
                <div data-aos="fade-up" data-aos-anchor-placement="center-center" class="card_misi">
                    <p>3. Menyelenggarakan pengabdian masyarakat dengan pelayanan prima,
                        berbasis penelitian dan dapat memberikan kontribusi nyata bagi kemajuan masyarakat di bidang
                        ilmu kesehatan.</p>
                </div>
                <div data-aos="fade-up" data-aos-anchor-placement="center-center" class="card_misi">
                    <p>4. Mengembangkan sumber daya manusia dalam bidang administrasi rumah sakit yang profetis
                        profesional.</p>
                </div>
                <div data-aos="fade-up" data-aos-anchor-placement="center-center" class="card_misi">
                    <p>5. Membangun jejaaring kerjasama kemitraan dengan institusi terkait dalam bidang caturdharma
                        perguruan tinggi secara berkelanjutan.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- visi misi end -->

    <!-- divisi -->
    <div class="container_divisi">
        <div class="tittle_divisi">
            <h1>DIVISI</h1>
        </div>
        <div class="flex_divisi">
            <?php
            $i = 1;
            $query = mysqli_query($konek, "SELECT*FROM divisi");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div data-aos="zoom-in-up" class="divisi_1">
                    <img width="100" height="120" src="01-ummetro/images_divisi/<?php echo $data['profile_divisi'];?>" alt="images" />
                    <h3><?php echo $data['nama'];?> <br> <?php echo $data['jabatan'];?></h3>
                </div>
            <?php
                $i++;
            }
            ?>
            
        </div>
    </div>
    <!-- divisi end -->

    <!-- beritaaaa  -->

    <div class="container_berita">
        <div class="tittle_berita">
            <h1>BERITA</h1>
        </div>

        <div class="wrapper_berita">
            <?php
            $i = 1;
            $query = mysqli_query($konek, "SELECT*FROM berita");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="card_berita">
                    <img width="100%" height="230px" src="01-ummetro/images/<?php echo $data['gambar_berita']; ?>" alt="image">
                    <p><?php echo $data['short_desk'];?></p>
                    <a href="">LAINNYA</a>
                </div>
            <?php
                $i++;
            }
            ?>

        </div>
        <span class="link_berita">
            <a class="berita_link" href="">BERITA LAINNYA</a>
        </span>
    </div>

    <!-- beritaaaa end -->

    <!-- INFORMASI -->
    <div class="container_infor">
        <div class="infor">
            <h1>INFORMASI</h1>
            <div class="card_infor">
                <img src="image/icon/clipboard.png" alt="">
                <div class="desk">
                    <h2>JUDULLL</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste ipsum totam expedita cumque illum
                        adipisci voluptatem quibusdam minima aliquam dolore impedit, consequatur distinctio voluptas
                        officia eius rerum harum repellendus assumenda.</p>
                </div>
            </div>
            <div class="card_infor">
                <img src="image/icon/clipboard.png" alt="">
                <div class="desk">
                    <h2>JUDULLL</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste ipsum totam expedita cumque illum
                        adipisci voluptatem quibusdam minima aliquam dolore impedit, consequatur distinctio voluptas
                        officia eius rerum harum repellendus assumenda.</p>
                </div>
            </div>
        </div>

        <div class="genda">
            <h1>AGENDA KEGIATAN</h1>
            <div class="card_genda">
                <img src="image/icon/clipboard.png" alt="">
                <div class="desk">
                    <h2>JUDULLLL</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium perspiciatis molestias
                        labore iusto aspernatur, voluptas fuga ex rerum facilis voluptatibus libero harum numquam porro
                        laborum minima ab laudantium ducimus quis.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- INFORMASI END -->



   

    <script src="js/main.js" type="text/javascript"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>