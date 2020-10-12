<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message'); ?>
    <!-- <?php echo var_dump($postings['id']);
            ?> -->
    <div class="row">
        <div class="col-lg-6">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $postings['id']; ?>">
                <?php ?>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $postings['title']; ?>">
                    <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="sub_title">Sub Title</label>
                    <input type="text" class="form-control" id="sub_title" name="sub_title"
                        value="<?= $postings['sub_title']; ?>">
                    <?= form_error('sub_title', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address"
                        value="<?= $postings['address']; ?>">
                    <?= form_error('address', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" id="description"
                        name="description"><?= $postings['description']; ?></textarea>
                    <?= form_error('description', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Image 1</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/posting/post/') . $postings['image1'] ?>"
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
                <div class="form-group row">
                    <div class="col-sm-2">Image 2</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/posting/post/') . $postings['image2'] ?>"
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
                <div class="form-group row">
                    <div class="col-sm-2">Image 3</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/posting/post/') . $postings['image3'] ?>"
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
                    <a class="btn btn-danger btn-icon-split" href="<?= base_url('posting'); ?>">
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