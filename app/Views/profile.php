
<?= $this->extend("layout/pages-layout") ?>
<?= $this->section('content') ?>
  

<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">Welcome</div>
            <div class="panel-body">
                <?php if (session()->has('success')): ?>
                    <p><?= session('success') ?></p>
                <?php endif; ?>

                <h2>Welcome, <?= $user['name'] ?>!</h2>
                <!-- <p>Email: <?= esc($user['email']) ?></p> -->
            </div>
            <!-- <a href="<?= site_url('logout') ?>">Logout</a> -->
        </div>
    </div>
</div>

<?= $this->endSection() ?>