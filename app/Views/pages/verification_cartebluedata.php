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
                <h2 class="text-center text-primary mb-30">Les informations de votre demande de CARTE BLUE</h2>
                <hr>
               

                <p class="text-center mb-10 fs-1"> <?php echo $categorie; ?> <b>: NOUVELLE</b></p>
                
                <form>
                    
                        <div class="row">

                            <div class="form-group col-md-5">
                                <label for=""><b>Nom</b></label>
                                <input type="text" class="form-control" name="nom" value="<?php echo $nom; ?>" readonly>
                                
                            </div>

                            <div class="form-group col-md-5">
                                <label for=""><b>Prenom</b></label>
                                <input type="text" class="form-control" name="prenom" value="<?php echo $prenom; ?>" readonly>
                                
                            </div>

                            <div class="form-group col-md-5">
                                <label for="gender"><b>Sexe</b></label>
                                <input type="text" class="form-control" name="sex" value="<?php echo $sex; ?>" readonly>
                            </div>

                            <div class="form-group col-md-5">
                                <label for=""><b>Telephone mobile</b></label>
                                <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>" readonly>
                                
                            </div>

                            <div class="form-group col-md-5">
                                <label for=""><b>E-mail</b></label>
                                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" readonly>
                                
                            </div>

                            <div class="form-group col-md-5">
                                <label for="gender"><b>NIU</b></label>
                                <input type="email" class="form-control" name="NIU" value="<?php echo $NIU; ?>" readonly>
                              
                            </div>

                            <div class="form-group col-md-5">
                                <label for="gender"><b>identifiant.libelle</b></label>
                                <input type="email" class="form-control" name="immatriculation" value="<?php echo $immatriculation; ?>" readonly>
                                
                            </div>

                           
                        </div>

                </form>


                <div class="modal-footer">

                    <a href="<?php echo base_url('new-carteblue')?>">
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