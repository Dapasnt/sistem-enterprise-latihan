<?php $this->extend('pemilik'); ?>
<?php $this->section('content'); ?>
<div class="container">
    <div class="col-md-8 offset-md-2">
        <h3 class="text-center mb-4">Form Ubah Data </h3>
        <hr>

        <form action="/user/update/<?= $user['kode_user']; ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>

            <div class="mb-3 row">
                <label for="kode_user" class="col-sm-2 col-form-label">kode_user</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= array_key_exists('kode_user', $error) ? 'is-invalid' : ''; ?>" id="kode_user" name="kode_user" autofocus value="<?= $user['kode_user']; ?>">
                    <div id="kode_userFeedback" class="invalid-feedback">
                        <?= array_key_exists('kode_user', $error) ? $error['kode_user'] : ''; ?>
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="username" class="col-sm-2 col-form-label">username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="password" name="password" value="<?= $user['password']; ?>">
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="role" class="col-sm-2 col-form-label">role</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="role" name="role" value="<?= $user['role']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php $this->endSection(); ?>