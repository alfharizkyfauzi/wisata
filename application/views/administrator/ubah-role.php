<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $role['id']; ?>">
                <div class="form-group">
                    <label for="menu">Role</label>
                    <input type="text" class="form-control" id="role" name="role" value="<?= $role['role']; ?>">
                    <?= form_error('role', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-icon-split" name="editMenu">
                        <span class="icon text-white-50">
                            <i class="fas fa-fw fa-save"></i>
                        </span>
                        <span class="text">Update</span>
                    </button>
                    <a class="btn btn-danger btn-icon-split" href="<?= base_url('administrator/role'); ?>">
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