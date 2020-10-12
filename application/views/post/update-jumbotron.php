<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- <?php echo var_dump($jumbotrons['id']);
            ?> -->
    <div class="row">
        <div class="col-lg-12">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $jumbotrons['id']; ?>">
                <?php ?>
                <h3 class="text-center">Image 1</h3>
                <hr>
                <div class="form-group">
                    <label for="title1">Title</label>
                    <input type="text" class="form-control" id="title1" name="title1"
                        value="<?= $jumbotrons['title1']; ?>">
                    <?= form_error('title1', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="description1">Description</label>
                    <textarea type="text" class="form-control" id="description1"
                        name="description1"><?= $jumbotrons['description1']; ?></textarea>
                    <?= form_error('description1', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Image 1</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/posting/jumbotron/') . $jumbotrons['image1'] ?>"
                                    class="img-thumbnail" alt="">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image1" name="image1">
                                    <label class="custom-file-label" for="image1">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="text-center">Image 2</h3>
                <hr>
                <div class="form-group">
                    <label for="title2">Title</label>
                    <input type="text" class="form-control" id="title2" name="title2"
                        value="<?= $jumbotrons['title2']; ?>">
                    <?= form_error('title2', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="description2">Description</label>
                    <textarea type="text" class="form-control" id="description2"
                        name="description2"><?= $jumbotrons['description2']; ?></textarea>
                    <?= form_error('description2', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Image 2</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/posting/jumbotron/') . $jumbotrons['image2'] ?>"
                                    class="img-thumbnail" alt="">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image2" name="image2">
                                    <label class="custom-file-label" for="image2">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="text-center">Image 3</h3>
                <hr>
                <div class="form-group">
                    <label for="title3">Title</label>
                    <input type="text" class="form-control" id="title3" name="title3"
                        value="<?= $jumbotrons['title3']; ?>">
                    <?= form_error('title3', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="description3">Description</label>
                    <textarea type="text" class="form-control" id="description3"
                        name="description3"><?= $jumbotrons['description3']; ?></textarea>
                    <?= form_error('description3', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Image 3</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/posting/jumbotron/') . $jumbotrons['image3'] ?>"
                                    class="img-thumbnail" alt="">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image3" name="image3">
                                    <label class="custom-file-label" for="image3">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-icon-split" name="submit">
                        <span class="icon text-white-50">
                            <i class="fas fa-fw fa-save"></i>
                        </span>
                        <span class="text">Update</span>
                    </button>
                    <a class="btn btn-danger btn-icon-split" href="<?= base_url('posting/jumbotron'); ?>">
                        <span class="icon text-white-50">
                            <i class="fas fa-fw fa-undo-alt"></i>
                        </span>
                        <span class="text">Back</span>
                    </a>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->