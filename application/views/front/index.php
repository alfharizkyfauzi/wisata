<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <?php foreach ($about as $ab) : ?>
            <div class="row no-gutters">
                <div class="col-lg-6 video-box">
                    <img src="<?= base_url('assets/img/posting/about/') . $ab['image']; ?>" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                    <div class="section-title">
                        <h2>About Us</h2>
                        <p><?= $ab['description'] ?></p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="">Address</a></h4>
                        <p class="description"><?= $ab['address'] ?></p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-gift"></i></div>
                        <h4 class="title"><a href="">Social Media</a></h4>
                        <p class="description">
                            <!--Facebook-->
                            <a href="<?= $ab['facebook']; ?>" class="btn-floating btn-lg btn-fb" type="button"
                                role="button"><i class="fab fa-facebook-f"></i></a>
                            <!--Twitter-->
                            <a href="<?= $ab['twitter']; ?>" class="btn-floating btn-lg btn-tw" type="button"
                                role="button"><i class="fab fa-twitter"></i></a>
                            <!--Linkedin-->
                            <a href="<?= $ab['linkedin']; ?>" class="btn-floating btn-lg btn-li" type="button"
                                role="button"><i class="fab fa-linkedin-in"></i></a>
                            <!--Instagram-->
                            <a href="<?= $ab['instagram']; ?>" class="btn-floating btn-lg btn-ins" type="button"
                                role="button"><i class="fab fa-instagram"></i></a>
                            <!--Youtube-->
                            <a href="<?= $ab['youtube']; ?>" class="btn-floating btn-lg btn-yt" type="button"
                                role="button"><i class="fab fa-youtube"></i></a>
                            <!--Github-->
                            <a href="<?= $ab['github']; ?>" class="btn-floating btn-lg btn-git" type="button"
                                role="button"><i class="fab fa-github"></i></a>
                        </p>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->


    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="section-title">
                <h2>Wisata</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row portfolio-container">
                <?php foreach ($posting as $p) : ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?php if ($p['image1'] != NULL) {
                                            echo base_url('assets/img/posting/post/') . $p['image1'];
                                        } elseif ($p['image1'] == NULL) {
                                            echo base_url('assets/img/posting/post/') . $p['image2'];
                                        } elseif ($p['image2'] != NULL) {
                                            echo base_url('assets/img/posting/post/') . $p['image2'];
                                        } elseif ($p['image2'] == NULL) {
                                            echo base_url('assets/img/posting/post/') . $p['image3'];
                                        } elseif ($p['image3'] != NULL) {
                                            echo base_url('assets/img/posting/post/') . $p['image3'];
                                        } else {
                                            echo base_url('assets/img/posting/post/default1.jpg');
                                        } ?>" class="img-fluid" alt="" style="width: 100%; height:300px; !important">
                        <div class="portfolio-info">
                            <h4><?= $p['title'] ?></h4>
                            <p><?= $p['sub_title'] ?></p>
                            <div class="portfolio-links">
                                <a href="<?= base_url('assets/img/posting/post/') . $p['image1']; ?>"
                                    data-gall="portfolioGallery" class="venobox" title="<?= $p['title'] ?>"><i
                                        class="icofont-eye"></i></a>
                                <a href="<?= base_url('front/detail/') . $p['id']; ?>" title="More Details"><i
                                        class="icofont-external-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php echo $this->pagination->create_links(); ?>

        </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title">
                <h2>Our Team</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>
            </div>

            <div class="row">

                <div class="col-md-4 col-sm-4" data-aos="fade-up">
                    <div class="member">
                        <div class="pic"><img src="<?= base_url('assets/img/profile/team/widya.jpg'); ?>"
                                class="img-fluid" alt="" style="width:270px; height:270px !important;"></div>
                        <div class="member-info">
                            <h4>Widyanti Mei Landa</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="pic"><img src="<?= base_url('assets/img/profile/team/alfha.jpg'); ?>"
                                class="img-fluid" alt="" style="width:270px; height:270px !important;"></div>
                        <div class="member-info">
                            <h4>Alfharizky Fauzi</h4>
                            <span>Fullstack Developer</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="pic"><img src="<?= base_url('assets/img/profile/team/fadhilah.jpg'); ?>"
                                class="img-fluid" alt="" style="width:270px; height:270px !important;"></div>
                        <div class="member-info">
                            <h4>Fadhilah Anggriani</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact Us</h2>
            </div>

            <div class="row">

                <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                </div>

                <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>info@example.com<br>contact@example.com</p>
                    </div>
                </div>

                <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-box ">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Contact Us Section -->

</main><!-- End #main -->