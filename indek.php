<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Heroic Features - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/landingpage/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/landingpage/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#kategori_menu">Our Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div style="background-image: url('assets/images/THIS-or-THAT.jpg');background-repeat:no-repeat;background-position:center" 
                class="p-4 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">A warm welcome!</h1>
                        <p class="fs-4">Bootstrap utility classes are used to create this jumbotron since the old component has been removed from the framework. Why create custom CSS when you can use utilities?</p>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4" id="kategori_menu">
            <h2 class="text-center mb-5">Our Menu</h2>
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">

                    <!-- Isi Page Features -->
                    <?php
                    include("config/koneksi.php");
                    $querySelectKategori = $koneksi->query("SELECT * FROM kategori_menu");
                    while ($resultSelectKategori = $querySelectKategori->fetch_object()) {
                    ?>
              
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-success bg-opacity-25 border-0 h-100">
                <a href="menu.php?nama_kategori_menu=<?= $resultSelectKategori->nama_kategori_menu ?>">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-success bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <h2 class="fs-4 fw-bold"><?= $resultSelectKategori->nama_kategori_menu ?></h2>
                                <!-- <p class="mb-0">With Bootstrap 5, we've created a fresh new layout for this template!</p> -->
                                <img class="img-fluid" src="assets/images/kategori_menu/<?= $resultSelectKategori->photo_kategori_menu ?>" alt="gambar-kategori">
                            </div>
                </a>
                        </div>
                    </div>
                
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/landingpage/js/scripts.js"></script>
    </body>
</html>
