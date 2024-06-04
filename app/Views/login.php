<?= $this->extend('layout/auth-layout.php') ?>
<?= $this->section('content') ?>

<div class="login-box bg-white box-shadow border-radius-10">

    <div class="login-title">
        <h2 class="text-center text-primary">Login</h2>
        <?php if (session()->has('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->get('success') ?>
                </div>
            <?php endif; ?>
    </div>
    <div class="">
        <form class="" action="<?= base_url("userlogin") ?>" method="post">

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
                <label for="email">Phone number</label>
                <input 
                    type="phone" 
                    class="form-control" 
                    name="phone" 
                    id="phone"
                    placeholder="Enter a phone number" 
                    value="<?= set_value('phone'); ?>"
                >
                <span class="text-danger text-sm">
                    <?= isset($validation) ? display_error($validation, 'phone') : ''?>
                </span>
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input 
                    type="password" 
                    class="form-control" 
                    name="password" 
                    id="password"
                    placeholder="Enter password"
                    value="<?= set_value('password'); ?>"
                >
                <span class="text-danger text-sm">
                    <?= isset($validation) ? display_error($validation, 'password') : ''?>
                </span>
            </div>

            <div class="row pb-30">
                <div class="col-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" />
                        <label class="custom-control-label" for="customCheck1">Remember</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="forgot-password">
                        <a href="<?= base_url("forgotpassword") ?>">Forgot Password</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="input-group mb-0">

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                    </div>
                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
                        OR
                    </div>
                    <div class="input-group mb-0">
                        <a class="btn btn-outline-primary btn-lg btn-block" href="register">Register To Create Account</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>

<?=$this->endSection()?>