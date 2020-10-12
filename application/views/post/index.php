<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">

            <?= form_error('posting', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-success mb-3 tombolTambahData btn-icon-split" data-toggle="modal"
                data-target="#newPostModal "><span class="icon text-white-50">
                    <i class="fas fa-fw fa-plus"></i>
                </span>
                <span class="text">Add New</span></a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Subtitle</th>
                        <th scope="col">Description</th>
                        <th scope="col">Address</th>
                        <th scope="col">Image 1</th>
                        <th scope="col">Image 2</th>
                        <th scope="col">Image 3</th>
                        <!-- <th scope="col">Created</th> -->
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($posting as $p) : ?>
                    <tr>
                        <th scope="row"><?= ++$start; ?></th>
                        <td><?= substr($p['title'], 0, 8) . '...'; ?></td>
                        <td><?= substr($p['sub_title'], 0, 5) . '...'; ?></td>
                        <td><?= substr($p['description'], 0, 10) . '...'; ?></td>
                        <td><?= substr($p['address'], 0, 10) . '...'; ?></td>
                        <td> <img src="<?php
                                            if ($p['image1'] != NULL) {
                                                echo base_url('assets/img/posting/post/') . $p['image1'];
                                            } else {
                                                echo base_url('assets/img/posting/post/default1.jpg');
                                            } ?>" width="70px" height="70px" alt="">
                        </td>
                        <td> <img src=" <?php
                                            if ($p['image2'] != NULL) {
                                                echo base_url('assets/img/posting/post/') . $p['image2'];
                                            } else {
                                                echo base_url('assets/img/posting/post/default1.jpg');
                                            } ?>" width="70px" height="70px" alt="">
                        </td>
                        <td> <img src="<?php
                                            if ($p['image3'] != NULL) {
                                                echo base_url('assets/img/posting/post/') . $p['image3'];
                                            } else {
                                                echo base_url('assets/img/posting/post/default1.jpg');
                                            } ?>" width="70px" height="70px" alt="">
                        </td>
                        <!-- <td> <?= date('H:i:s a (d F Y)', $p['date_created']); ?></td> -->
                        <td>
                            <a href="<?= base_url() ?>posting/update/<?= $p['id'] ?>"
                                class="btn btn-warning btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-fw fa-edit"></i>
                                </span>
                                <span class="text">edit</span> </a>
                            <a href="<?= base_url() ?>posting/deletepost/<?= $p['id'] ?>"
                                class="btn btn-danger btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                </span>
                                <span class="text">delete</span> </a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal Add-->
<div class="modal fade" id="newPostModal" tabindex="-1" aria-labelledby="newPostModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newPostModalLabel">Add New Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('posting/create') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="title" name="title"
                            placeholder="Title">
                        <?= form_error('title', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="sub_title" name="sub_title"
                            placeholder="Sub Title">
                        <?= form_error('sub_title', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="address" name="address"
                            placeholder="Address">
                    </div>
                    <div class=" form-group">
                        <textarea type="text" class="form-control form-control-user" id="description" name="description"
                            placeholder="Description"></textarea>
                        <?= form_error('description', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">Image 1</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image1" name="image1">
                                        <label class="custom-file-label" for="image1">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">Image 2</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image2" name="image2">
                                        <label class="custom-file-label" for="image2">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">Image 3</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image3" name="image3">
                                        <label class="custom-file-label" for="image3">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-icon-split" data-dismiss="modal"><span
                            class="icon text-white-50">
                            <i class="fas fa-fw fa-undo-alt"></i>
                        </span>
                        <span class="text">Close</span></button>
                    <button type="submit" name="submit" class="btn btn-primary btn-icon-split"><span
                            class="icon text-white-50">
                            <i class="fas fa-fw fa-plus"></i>
                        </span>
                        <span class="text">Add</span></button>
                </div>
            </form>
        </div>
    </div>
</div>