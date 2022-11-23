<?php
require('../settings/core.php');
require('../controllers/product_controller.php');
check_login();
?>

<!doctype html>
<html lang="en">

<head>
    <title>CART</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Selecao - v4.9.1
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

</head>

<body>

    <!-- ======= Header ======= -->
    <!--     <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.php">The Writing Center</a></h1>

            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">HOME</a></li>
                    <li><a class="nav-link scrollto" href="#about">ABOUT</a></li>
                    <li><a class="nav-link scrollto" href="#services">SERVICES</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">CLIENTS</a></li>
                    <li><a class="nav-link scrollto " href="#pricing">PRICING</a></li>
                    <li><a class="nav-link scrollto" href="#team">TEAM</a></li>
                    <li><a href="./view/cart.php"><span>CART</span></i></a></li>
                    <li class="nav-link scrollto">
                        <a href="./view/login.php"><span>LOGIN</span></i></a>

                        <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

    <!--         </div>
    </header><!-- End Header -->


    <!--     <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

 -->
    <!-- Slide 1 -->
    <!--             <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Welcome to <span>The Writing Center</span></h2>
                    <p class="animate__animated fanimate__adeInUp">Where students and faculty members to request academic writing services such as CV writing, cover letter writing, thesis proofreading, editing of articles, et cetera.</p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
            </div> -->

    <!-- Slide 2 -->
    <!--             <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">TWC</h2>
                    <p class="animate__animated animate__fadeInUp">Communicate With Impact. Ensure Everything You Write Comes Across The Way You Intend. Present Your Best Self Every Time You Type. Make Your Writing Clear and Engaging. Eliminate grammar errors. Easily improve any text.</p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
            </div> -->
    <!-- 
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>

        </div> -->
    <!-- 
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <p>Hello</p>
    <div class="container">
        <!-- <form action="../actions/search.php" method="get">
            <div class="row" style="margin-bottom:50px;">
                <div class="col-md-6">
                    <input class="form-control" type="search" name="querry" placeholder="Search">
                </div>
                <div class="col-md-6">
                    <button type="submit" name="search" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form> -->
        <p>The Cart</p>

        <div class="row" style="padding-top: 20px;">
            <?php
            $services = select_all_products_controller();
            foreach ($services as $service) {
                echo "
                <div class='col-md-6 col-lg-4 col-xl-3'>
                <input type='hidden' name='service_id' value={$service['service_id']}>
                    <div class= 'card text-center  card-product'>
                         <div class='card-product_img'>
                            <img class='card-img' src='../images/products/{$service["service_image"]}' alt='Testing' style='height:200px'>
                        </div>
                        <div class ='card-body'>
                            <h4 class='card-product__title'><a href='../view/product_detail.php?service_id={$service["service_id"]}'>{$service['service_desc']}</a></h4>
                          <p class='card-product__price'>GHS{$service['service_price']}</p>
                          <button name = \"addToCart\" type = \"submit\" class='btn 
                          btn-success' button onclick=\"window.location.href='../view/product_detail.php?service_id={$service["service_id"]}';\">Add to cart</button>
                         </div>
                     </div>
                </div>
                ";
            }

            ?>
        </div>
    </div>

</body>

</html>