<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?php var_dump($users1) ?>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $users1['id']; ?>">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control form-control-user" id="name" name="name"
                        placeholder="Full Name" value="<?= $users1['name'] ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control form-control-user" id="email" name="email"
                        placeholder="Email Address" value="<?= $users1['email'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="role_id">Role</label>
                    <select name="role_id" id="role_id" class="form-control custom-select">
                        <option value="" disabled>Select Menu</option>
                        <?php foreach ($role as $r) : ?>
                        <?php if ($r['id'] == $users1['role_id']) : ?>
                        <option value="<?= $r['id']; ?>" selected><?= $r['role']; ?></option>
                        <?php else : ?>
                        <option value="<?= $r['id']; ?>"><?= $r['role']; ?></option>
                        <?php endif; ?>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Picture</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/profile/') . $users1['image'] ?>"
                                    class="img-thumbnail" alt="">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group form-check">

                    <!-- <select name="is_active" id="is_active" class="form-control custom-select">
                        </option> -->
                    <?php if (1 == $users1['is_active']) : ?>
                    <input type="checkbox" class="form-check-input" value="1" id="is_active" name="is_active" checked>
                    <label class="form-check-label" for="is_active">Deactive ?</label>
                    <!-- <option value="0" selected>Deactive ?</option> -->
                    <?php elseif (0 == $users1['is_active']) : ?>
                    <input type="checkbox" class="form-check-input" value="1" id="is_active" name="is_active">
                    <label class="form-check-label" for="is_active">Active ?</label>
                    <?php else : ?>
                    <input type="checkbox" class="form-check-input" value="0" id="is_active" name="is_active">
                    <label class="form-check-label" for="is_active">Active ?</label>
                    <?php endif; ?>
                    <!-- </select> -->
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-icon-split" name="editSubMenu">
                        <span class="icon text-white-50">
                            <i class="fas fa-fw fa-save"></i>
                        </span>
                        <span class="text">Update</span>
                    </button>
                    <a class="btn btn-danger btn-icon-split" href="<?= base_url('administrator/users'); ?>">
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