<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Resto Ray</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    
    <!-- Favicons -->
    <link href="assets/halamandpn/assets/img/favicon.png" rel="icon">
    <link href="assets/halamandpn/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/halamandpn/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/halamandpn/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/halamandpn/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/halamandpn/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/halamandpn/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/halamandpn/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/halamandpn/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/halamandpn/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: OnePage
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">RESTO RAY</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>

                    <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
                   
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>RESTO RAY</h1>
                    <h2>Selamat Datang Di Website Resto     </h2>
                </div>
            </div>
            <div class="text-center">
                <a href="#menu" class="btn-get-started scrollto">Daftar Menu</a>
            </div>

            <div class="row icon-boxes">
            <?php
                    include("config/koneksi.php");
                    $querySelectKategori = $koneksi->query("SELECT * FROM kategori_menu");
                    while ($resultSelectKategori = $querySelectKategori->fetch_object()) {
                    ?>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                    <img class="w-100 hover-shadow" src="assets/images/kategori_menu/<?= $resultSelectKategori->photo_kategori_menu?>" width="100" height="150" viewBox="0 0 600 600">
                        <h4 class="title"><a href="view_menu.php?nama_kategori_menu=<?= $resultSelectKategori->nama_kategori_menu ?>"><?= $resultSelectKategori->nama_kategori_menu ?></a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>
                <?php
                    }
                    ?>
                

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">



        <!-- ======= Services Section ======= -->
        <section id="menu" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Daftar Menu Restoran</h2>
                    <p>Daftar - Daftar Menu Restoran</p>
                </div>

                <div class="row icon-boxes">
            <?php
                    include("config/koneksi.php");
                    $querySelectMenu = $koneksi->query("SELECT * FROM menu");
                    while ($resultSelectMenu = $querySelectMenu->fetch_object()) {
                    ?>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                    <img class="w-100 hover-shadow" src="assets/images/menu/<?= $resultSelectMenu->photo_menu?>" width="150" height="200" viewBox="0 0 600 600">
                        <h4 class="title"><a href=""><?= $resultSelectMenu->nama_menu ?></a></h4>
                        <p class="description"><?= $resultSelectMenu->deskripsi_menu ?></p><br>
                        <button class="btn btn-success">Rp. <?= number_format($resultSelectMenu->harga_menu) ?></button>
                    </div>
                </div>
                <?php
                    }
                    ?>
                

            </div>

            </div>
        </section><!-- End Sevices Section -->

       

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.47263401129!2d107.0185170746179!3d-6.201209260747598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69894f84a3223d%3A0xa099e776f6c9939a!2sJl.%20Serayu%205%20No.25%2C%20RT.001%2FRW.035%2C%20Tlk.%20Pucung%2C%20Kec.%20Bekasi%20Utara%2C%20Kota%20Bks%2C%20Jawa%20Barat%2017121!5e0!3m2!1sid!2sid!4v1701759857428!5m2!1sid!2sid" style="border:0; width: 100%; height: 270px;" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jl. Serayu 5 No.25, RT.001/RW.035, Tlk. Pucung, Kec. Bekasi Utara, Kota Bks, Jawa Barat 17121</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>rayhan.wahyudin21@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+62 8121 9236 130</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row gy-2 gx-md-3">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                                <div class="form-group col-12">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group col-12">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3 col-12">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center col-12"><button type="submit">Send Message</button></div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>OnePage</h3>
                        <p>
                        Jl. Serayu 5 No.25, RT.001/RW.035, <br>
                        RT.001/RW.035, Tlk. Pucung, Kec. Bekasi Utara,<br>
                         Kota Bks, Jawa Barat 17121 <br><br>
                            <strong>Phone:</strong> +62 8121 9236 130<br>
                            <strong>Email:</strong> rayhan.wahyudin21@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>

                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>OnePage</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/halamandpn/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/halamandpn/assets/vendor/aos/aos.js"></script>
    <script src="assets/halamandpn/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/halamandpn/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/halamandpn/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/halamandpn/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/halamandpn/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/halamandpn/assets/js/main.js"></script>

</body>

</html>