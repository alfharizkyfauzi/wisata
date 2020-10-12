<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $submenu['id']; ?>">
                <?php ?>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title']; ?>">
                    <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="menu_id">Menu</label>
                    <select name="menu_id" id="menu_id" class="form-control custom-select">
                        <option value="" disabled>Select Menu</option>
                        <?php foreach ($menu as $m) : ?>
                        <?php if ($m['id'] == $submenu['menu_id']) : ?>
                        <option value="<?= $m['id']; ?>" selected><?= $m['menu']; ?></option>
                        <?php else : ?>
                        <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                        <?php endif; ?>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url']; ?>">
                    <?= form_error('url', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon']; ?>">
                    <?= form_error('icon', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group form-check">

                    <!-- <select name="is_active" id="is_active" class="form-control custom-select">
                        </option> -->
                    <?php if (1 == $submenu['is_active']) : ?>
                    <input type="checkbox" class="form-check-input" value="1" id="is_active" name="is_active" checked>
                    <label class="form-check-label" for="is_active">Deactive ?</label>
                    <!-- <option value="0" selected>Deactive ?</option> -->
                    <?php elseif (0 == $submenu['is_active']) : ?>
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
                    <a class="btn btn-danger btn-icon-split" href="<?= base_url('menu/submenu'); ?>">
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