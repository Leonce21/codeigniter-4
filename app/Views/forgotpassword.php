<?= $this->extend('layout/auth-layout.php') ?>
<?= $this->section('content') ?>

<div class="login-box bg-white box-shadow border-radius-10">
    <div class="login-title">
        <h2 class="text-center text-primary">Forgot Password</h2>
    </div>
    <h6 class="mb-20">
        Enter your email address to reset your password
    </h6>
    <form action="<?= base_url("passwordresetlink") ?>" method="post">

        <?= csrf_field(); ?>
        <?php if(!empty(session()->getFlashdata('success'))) : ?>

            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php endif; ?>
        <?php if(!empty(session()->getFlashdata('fail'))) : ?>

            <div class="alert alert-danger">
                <?= session()->getFlashdata('fail') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php endif; ?>

        <div class="form-group">
            <label for="email">Email</label>
            <input 
                type="email" 
                class="form-control form-control-lg" 
                placeholder="Email" 
                value="<?= set_value('email'); ?>"
            />
            <span class="text-danger text-sm">
                <?= isset($validation) ? display_error($validation, 'email') : ''?>
            </span>
        </div>

        <div class="row align-items-center">
            <div class="col-5">
                <div class="input-group mb-0">
               
					<input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
										
                </div>
            </div>
            <div class="col-2">
                <div class="font-16 weight-600 text-center" data-color="#707373">
                    OR
                </div>
            </div>
            <div class="col-5">
                <div class="input-group mb-0">
                    <a class="btn btn-outline-primary btn-lg btn-block" href="login">Login</a>
                </div>
            </div>
        </div>
    </form>
</div>

<?=$this->endSection()?>