<?= $this->session->flashdata('message'); ?>
<div class="card text-center">
    <div class="card-header">
        <h3><b><?= $title; ?></b></h3>
    </div>
    <!-- JUMBOTRON -->
    <div class="card-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style=" width:100%; height: 500px !important;">
                <div class="carousel-item active">
                    <img src="<?= base_url('assets/img/posting/jumbotron/') . $jumbotron['image1']; ?>"
                        class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/posting/jumbotron/') . $jumbotron['image2']; ?>"
                        class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/posting/jumbotron/') . $jumbotron['image3']; ?>"
                        class="d-block w-100" alt="">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- CARD -->

        <div class="card-group mt-3">
            <div class="card">
                <img src="<?= base_url('assets/img/posting/jumbotron/') . $jumbotron['image1']; ?>" class="card-img-top"
                    style=" width:100%; height: 200px !important;" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $jumbotron['title1']; ?></h5>
                    <p class="card-text"><?= $jumbotron['description1']; ?></p>
                </div>
            </div>
            <div class="card">
                <img src="<?= base_url('assets/img/posting/jumbotron/') . $jumbotron['image2']; ?>" class="card-img-top"
                    style=" width:100%; height: 200px !important;" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $jumbotron['title2']; ?></h5>
                    <p class="card-text"><?= $jumbotron['description2']; ?></p>
                </div>
            </div>
            <div class="card">
                <img src="<?= base_url('assets/img/posting/jumbotron/') . $jumbotron['image3']; ?>" class="card-img-top"
                    style=" width:100%; height: 200px !important;" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $jumbotron['title3']; ?></h5>
                    <p class="card-text"><?= $jumbotron['description3']; ?></p>
                </div>
            </div>
        </div>

        <!-- BUTTON -->
        <a href="<?= base_url() ?>posting/editjumbotron/<?= $jumbotron['id'] ?>"
            class="mt-3 btn btn-warning btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-fw fa-edit"></i>
            </span>
            <span class="text">Change</span> </a>
    </div>
</div>