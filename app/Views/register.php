<?= $this->extend('layout/auth-layout.php') ?>
<?= $this->section('content') ?>


<div class="login-box bg-white box-shadow border-radius-10">

    <div class="login-title">
        <h2 class="text-center text-primary">Register</h2>

    </div>
    <div class="">

        <form class="" action="<?= base_url('save') ?>" method="post">

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
                <label for="name">Name</label>
                <input 
                    type="text" 
                    class="form-control" 
                    name="name" 
                    id="name" 
                    placeholder="Enter an Your name"
                    value="<?= set_value('name'); ?>"
                >
                <span class="text-danger text-sm">
                    <?= isset($validation) ? display_error($validation, 'name') : ''?>
                </span>

            </div>
           
            <div class="form-group">
                <label for="email">Email</label>
                <input 
                    type="email" 
                    class="form-control" 
                    name="email" 
                    id="email"
                    placeholder="Enter an Email" 
                    value="<?= set_value('email'); ?>"
                >
                <span class="text-danger text-sm">
                    <?= isset($validation) ? display_error($validation, 'email') : ''?>
                </span>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="">Select Gender</option>
                    <option value="male" <?= set_select('gender', 'male'); ?>>Male</option>
                    <option value="female" <?= set_select('gender', 'female'); ?>>Female</option>
                </select>
                <span class="text-danger text-sm">
                    <?= isset($validation) ? display_error($validation, 'gender') : ''?>
                </span>
            </div>
            
            <div class="form-group">
                <label for="phone_no">Phone No</label>
                <input 
                    type="text" 
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
                    type="text" 
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
            
            <div class="form-group">
                <label for="password_confirm">Confirm Password</label>
                <input 
                    type="password" 
                    class="form-control" 
                    name="password_confirm" 
                    id="password_confirm"
                    placeholder="confirm password"
                    value="<?= set_value('password_confirm'); ?>"
                >
                <span class="text-danger text-sm">
                    <?= isset($validation) ? display_error($validation, 'password_confirm') : ''?>
                </span>
            </div>

            <div class="form-group">
                <label for="password_confirm">Captcha:</label>
                <input 
                    type="text" 
                    class="form-control" 
                    name="captcha" 
                    id="captcha"
                    placeholder="confirm password"
                    
                >
                
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="input-group mb-0">

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                    </div>
                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
                        OR
                    </div>
                    <div class="input-group mb-0">
                        <a class="btn btn-outline-primary btn-lg btn-block" href="login">Login To your
                            Account</a>
                    </div>
                </div>
            </div>

        </form>
    </div>

</div>
<?=$this->endSection()?>