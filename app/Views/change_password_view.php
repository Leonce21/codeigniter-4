<?= $this->extend('layout/pages-layout.php') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
        <div class="card-box height-100-p overflow-hidden">
            <div class="profile-tab height-100-p">
                <div class="tab height-100-p">
                    <ul class="nav nav-tabs customtab" role="tablist">
                       
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tasks" role="tab">change password</a>
                        </li>
                        
                    </ul>
                    <div class="tab-content">
                    
                        <!-- change password Tab start -->
                        <div class="tab-pane fade show active" id="tasks" role="tabpanel">
                            <div class="pd-20 profile-task-wrap">

                                <form method="POST" action="<?= base_url('change_password') ?>" id="change_password_form">
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
                                        <label for="email">Old Password</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            name="current_password" 
                                            id="current_password"
                                            placeholder="Enter Old Password" 
                                            
                                        >
                                        <span class="text-danger text-sm">
                                            <?= isset($validation) ? display_error($validation, 'current_password') : ''?>
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">New Password</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            name="new_password" 
                                            id="new_password"
                                            placeholder="Enter New Password" 
                                            
                                        >
                                        <span class="text-danger text-sm">
                                            <?= isset($validation) ? display_error($validation, 'new_password') : ''?>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Confirm New Password</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            name="confirm_password" 
                                            id="confirm_password"
                                            placeholder="Enter New Password" 
                                            
                                        >
                                        <span class="text-danger text-sm">
                                            <?= isset($validation) ? display_error($validation, 'confirm_password') : ''?>
                                        </span>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="input-group mb-0">
                        
                                                <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
                                            </div>
                                            
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <!-- change password Tab End -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    //change_password_form
    $('#change_password_form').on('submit', function(e) {
        e.preventDefault();
        alert('Submit...');
    })
</script>

<?=$this->endSection()?>