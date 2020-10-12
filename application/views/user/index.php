<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title"><?= $user['name']; ?></h2>
                    <h4 class="card-text"><?= $user['email']; ?></h4>
                    <h4 class="card-text"><small class="text-muted">Member Since
                            <?= date('d F Y', $user['date_created']); ?></small></h4>
                    <a href="<?= base_url('user/edit') ?>" class="btn btn-warning btn-icon-split mt-lg-5"><span
                            class="icon text-white-50">
                            <i class="fas fa-fw fa-edit"></i>
                        </span>
                        <span class="text">Edit Profile</span></a>
                    <a href="<?= base_url('user/changepassword') ?>" class="btn btn-danger btn-icon-split mt-lg-5"><span
                            class="icon text-white-50">
                            <i class="fas fa-fw fa-key"></i>
                        </span>
                        <span class="text">Change Password</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->