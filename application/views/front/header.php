<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Wisata - Index</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/') ?>mamba/img/favicon.png" rel="icon">
    <link href="<?= base_url('assets/') ?>mamba/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/') ?>mamba/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>mamba/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>mamba/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>mamba/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>mamba/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>mamba/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>mamba/vendor/aos/aos.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/') ?>mamba/css/style.css" rel="stylesheet">

    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    <!-- =======================================================
  * Template Name: Mamba - v2.4.0
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container clearfix">
            <div class="contact-info float-left">
                <i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@example.com</a>
                <i class="icofont-phone"></i> +1 5589 55488 55
            </div>
            <?php foreach ($about as $ab) : ?>
            <div class="social-links float-right">
                <!--Facebook-->
                <a href="<?= $ab['facebook']; ?>" class="btn-floating btn-lg btn-fb" type="button" role="button"><i
                        class="fab fa-facebook-f"></i></a>
                <!--Twitter-->
                <a href="<?= $ab['twitter']; ?>" class="btn-floating btn-lg btn-tw" type="button" role="button"><i
                        class="fab fa-twitter"></i></a>
                <!--Linkedin-->
                <a href="<?= $ab['linkedin']; ?>" class="btn-floating btn-lg btn-li" type="button" role="button"><i
                        class="fab fa-linkedin-in"></i></a>
                <!--Instagram-->
                <a href="<?= $ab['instagram']; ?>" class="btn-floating btn-lg btn-ins" type="button" role="button"><i
                        class="fab fa-instagram"></i></a>
                <!--Youtube-->
                <a href="<?= $ab['youtube']; ?>" class="btn-floating btn-lg btn-yt" type="button" role="button"><i
                        class="fab fa-youtube"></i></a>
                <!--Github-->
                <a href="<?= $ab['github']; ?>" class="btn-floating btn-lg btn-git" type="button" role="button"><i
                        class="fab fa-github"></i></a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light"><a href="<?= base_url(); ?>"><span>Wisata</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#topbar">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#portfolio">Posting</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->