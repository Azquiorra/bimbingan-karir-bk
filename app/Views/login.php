<?= $this->extend('templates/template-login'); ?>

<?= $this->section('content'); ?>
<!-- Content -->
<div class="overlay-white">
    <div class="container">
        <div class="wrapper-form">
            <div class="circle-wrapper">
                <div class="circle-image">
                    <img src="<?= base_url(); ?>/assets/images/user.png" width="100">
                </div>

            </div>
            <div class="form">
            <?php 
                echo form_open('login/auth');
            ?>
                <form action="" method="post">
                    <div class="text-center">
                        <label class="text-login text-uppercase">Login Form</label>
                    </div>
                    <div class="input-icon mt-1">
                        <i class="fa fa-user icon"></i>
                        <input type="text" class="form-control input-login" name="username" autocomplete="off" required placeholder="Username">
                    </div>
                    <div class="input-icon invalid-feedback col-12">
                        <?= session()->getFlashdata('pesan') ?>
                    </div>

                    <div class="input-icon mt-3">
                        <i class="fa fa-lock icon"></i>
                        <input type="password" class="form-control input-login" name="password" autocomplete="off" required placeholder="Password" id="password-field">
                        <!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
                    </div>
                    <div class="input-icon invalid-feedback col-12">
                        <?= session()->getFlashdata('pesan') ?>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Login</button>
                </form>
                <?php 
                    echo form_close();
                ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>