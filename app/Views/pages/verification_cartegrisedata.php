<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>
        <?= isset($pageTitle) ? $pageTitle : 'New Page Title'; ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(" public/backend/vendors/styles/core.css"); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(" public/backend/vendors/styles/icon-font.min.css"); ?>"
    />
    <link rel="stylesheet" type="text/css" href="<?= base_url(" public/backend/vendors/styles/style.css"); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url("
        public/backend/src/plugins/datatables/css/dataTables.bootstrap4.min.css"); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url("
        public/backend/src/plugins/datatables/css/responsive.bootstrap4.min.css"); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url("
        public/backend/src/plugins/sweetalert2/sweetalert2.css"); ?>"/>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <?= $this->renderSection('stylesheet') ?>
</head>

<body>

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="pd-20 card-box mb-30">
                <h2 class="text-center text-primary mb-30">Les informations de votre demande de CARTE GRISE</h2>
                <hr>
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
                   
            <?php if (isset($records)): ?>

<table border="1" class="table hover data-table-export nowrap">
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>Nom</td>
        <td>
            <?php echo $records['nom']; ?>
        </td>
    </tr>
    <tr>
        <td>Prénom</td>
        <td><?php echo $records['prenom']; ?></td>
    </tr>
    <tr>
        <td>Sexe</td>
        <td><?php echo $records['sex']; ?></td>
    </tr>
    <tr>
        <td>Numero du chasis</td>
        <td><?php echo $records['IMCHASSIS']; ?></td>
    </tr>
   
   
    
</table>

<?php else: ?>

<p>No Cartegrise information found.</p>

<?php endif; ?>

                <div class="modal-footer">

                    <a href="<?php echo base_url('new-cartegrise')?>">
                        <button class="btn btn-secondary">retour </button>
                    </a>

                    <a href="<?php echo site_url('payment')?>">
                        <button class="btn btn-primary">Suivant </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="<?= base_url(" public/backend/vendors/scripts/core.js"); ?>"></script>
    <script src="<?= base_url(" public/backend/vendors/scripts/script.min.js"); ?>"></script>
    <script src="<?= base_url(" public/backend/vendors/scripts/process.js"); ?>"></script>
    <script src="<?= base_url(" public/backend/vendors/scripts/layout-settings.js"); ?>"></script>
    <script src="<?= base_url(" public/backend/src/plugins/datatables/js/jquery.dataTables.min.js"); ?>"></script>
    <script src="<?= base_url(" public/backend/src/plugins/datatables/js/dataTables.bootstrap4.min.js"); ?>"></script>
    <script src="<?= base_url(" public/backend/src/plugins/datatables/js/dataTables.responsive.min.js"); ?>"></script>
    <script src="<?= base_url(" public/backend/src/plugins/datatables/js/responsive.bootstrap4.min.js"); ?>"></script>
    <script src="<?= base_url(" public/backend/vendors/scripts/datatable-setting.js"); ?>"></script>
    <script src="<?= base_url(" public/backend/src/plugins/sweetalert2/sweetalert2.all.js"); ?>"></script>
    <script src="<?= base_url(" public/backend/src/plugins/sweetalert2/sweet-alert.init.js"); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" ); ?>"></script>
    <script src="<?= base_url(" public/backend/src/plugins/datatables/js/dataTables.buttons.min.js"); ?>"></script>
    <script src="<?= base_url(" public/backend/src/plugins/datatables/js/buttons.bootstrap4.min.js"); ?>"></script>
    <script src="<?= base_url(" public/backend/src/plugins/datatables/js/buttons.print.min.js"); ?>"></script>
    <script src="<?= base_url(" public/backend/src/plugins/datatables/js/buttons.html5.min.js"); ?>"></script>
    <script src="<?= base_url(" public/backend/src/plugins/datatables/js/buttons.flash.min.js"); ?>"></script>
    <script src="<?= base_url(" public/backend/src/plugins/datatables/js/pdfmake.min.js"); ?>"></script>
    <script src="<?= base_url(" public/backend/src/plugins/datatables/js/vfs_fonts.js"); ?>"></script>
    <?= $this->renderSection('scripts') ?>
</body>

</html>