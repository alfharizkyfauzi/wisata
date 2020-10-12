<?= $this->session->flashdata('message'); ?>
<div class="card text-center">
    <div class="card-header">
        <h3><b><?= $title; ?></b></h3>
    </div>
    <div class="card-body">
        <img src="<?= base_url('assets/img/posting/about/') . $about['image']; ?>" class="rounded-circle mb-3"
            alt="Cinque Terre" height="150px" width="150px">
        <h5 class="card-title"><?= $about['name']; ?></h5>
        <h5 class="card-title"><?= $about['subtitle']; ?></h5>
        <p class="card-title"><?= $about['address']; ?></p>
        <p class="card-text"><?= $about['description']; ?></p>
        <p>
            <!--Facebook-->
            <a href="<?= $about['facebook']; ?>" class="btn-floating btn-lg btn-fb" type="button" role="button"><i
                    class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a href="<?= $about['twitter']; ?>" class="btn-floating btn-lg btn-tw" type="button" role="button"><i
                    class="fab fa-twitter"></i></a>
            <!--Linkedin-->
            <a href="<?= $about['linkedin']; ?>" class="btn-floating btn-lg btn-li" type="button" role="button"><i
                    class="fab fa-linkedin-in"></i></a>
            <!--Instagram-->
            <a href="<?= $about['instagram']; ?>" class="btn-floating btn-lg btn-ins" type="button" role="button"><i
                    class="fab fa-instagram"></i></a>
            <!--Youtube-->
            <a href="<?= $about['youtube']; ?>" class="btn-floating btn-lg btn-yt" type="button" role="button"><i
                    class="fab fa-youtube"></i></a>
            <!--Github-->
            <a href="<?= $about['github']; ?>" class="btn-floating btn-lg btn-git" type="button" role="button"><i
                    class="fab fa-github"></i></a>
        </p>
        <a href="<?= base_url() ?>posting/editabout/<?= $about['id'] ?>" class="btn btn-warning btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-fw fa-edit"></i>
            </span>
            <span class="text">Change</span> </a>
    </div>
    <div class="card-footer text-muted">
        Updated at <?= date('d F Y', $about['date_created']); ?>
    </div>
</div>