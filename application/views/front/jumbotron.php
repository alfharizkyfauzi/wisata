 <!-- ======= Hero Section ======= -->
 <section id="hero">
     <div class="hero-container">
         <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

             <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

             <?php foreach ($jumbotron as $j) : ?>
             <!-- Slide 1 -->
             <div class="carousel-inner" role="listbox">
                 <div class="carousel-item active" style=" width:100%; height: 500px !important;">
                     <img src="<?= base_url('assets/img/posting/jumbotron/') . $j['image1']; ?>" class="d-block w-100"
                         alt="">
                     <div class="carousel-container">
                         <div class="carousel-content container">
                             <h2 class="animate__animated animate__fadeInDown"><?= $j['title1'] ?></h2>
                             <p class="animate__animated animate__fadeInUp"><?= $j['description1'] ?></p>
                         </div>
                     </div>
                 </div>
                 <!-- Slide 2 -->
                 <div class="carousel-item" style="width:100%; height: 500px !important;">
                     <img src="<?= base_url('assets/img/posting/jumbotron/') . $j['image2']; ?>" class="d-block w-100"
                         alt="">
                     <div class="carousel-container">
                         <div class="carousel-content container">
                             <h2 class="animate__animated animate__fadeInDown"><?= $j['title2'] ?></h2>
                             <p class="animate__animated animate__fadeInUp"><?= $j['description2'] ?></p>
                         </div>
                     </div>
                 </div>

                 <!-- Slide 3 -->
                 <div class="carousel-item" style="width:100%; height: 500px !important;">
                     <img src="<?= base_url('assets/img/posting/jumbotron/') . $j['image3']; ?>" class="d-block w-100"
                         alt="">
                     <div class="carousel-container">
                         <div class="carousel-content container">
                             <h2 class="animate__animated animate__fadeInDown"><?= $j['title3'] ?></h2>
                             <p class="animate__animated animate__fadeInUp"><?= $j['description3'] ?></p>
                         </div>
                     </div>
                 </div>
                 <?php endforeach; ?>
             </div>

             <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
             </a>
             <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                 <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
             </a>

         </div>
     </div>
 </section><!-- End Hero -->