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

    <div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo">
			</div>
			<div class="loader-progress" id="progress_div">
				<div class="bar" id="bar1"></div>
			</div>
			<div class="percent" id="percent1">0%</div>
			<div class="loading-text">Loading...</div>
		</div>
	</div>

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
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
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <a href="carteblue">
                            <button class="btn btn-secondary">Back </button>
                        </a>
                    </div>
                    
                    <h2 class="text-center text-primary mb-30">Enregistrez les informations de votre demande de CARTE BLUE</h2>
                </div>
                        
                <hr>

                <form action="<?php echo base_url('save_carteblue') ?>" method="post" id="add_carteblue_form">
                    
                    <div >
                        
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for=""><b>Noms<span class="text-red-50">*</span> </b></label>
                                <input required type="text" class="form-control" name="nom"
                                    placeholder="Entre votre noms">
                                    <span class="text-danger text-sm">
                                        <?= isset($validation) ? display_error($validation, 'nom') : ''?>
                                    </span>
                                
                            </div>

                            <div class="form-group col-md-6">
                                <label for=""><b>Prenoms</b></label>
                                <input required type="text" class="form-control" name="prenom">
                                
                            </div>

                            <div class="form-group col-md-6">
                                <label for="gender"><b>Sexe</b><span class="text-red-50">*</span> </label>
                                <select name="sex" id="sex" class="form-control">
                                    <option value="homme" <?= set_select('gender', 'male'); ?>>Homme</option>
                                    <option value="femme" <?= set_select('gender', 'female'); ?>>Femme</option>
                                    <option value="personne moral" <?= set_select('gender', 'personne moral'); ?>>personne moral</option>
                                </select>
                                <span class="text-danger text-sm">
                                    <?= isset($validation) ? display_error($validation, 'sex') : ''?>
                                </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label for=""><b>Telephone <span class="text-red-50">*</span> </b></label>
                                <input required type="text" class="form-control" name="phone">
                                
                            </div>

                            <div class="form-group col-md-6">
                                <label for=""><b>E-mail</b></label>
                                <input required type="email" class="form-control" name="email">
                                
                            </div>

                            <div class="form-group col-md-6">
                                <label for="prestation"><b>Type de prestation <span class="text-red-50">*</span></b> </label>
                                <select name="prestation" id="prestation" class="form-control">
                                    <option value="Nouvelle" <?= set_select('prestation', 'Nouvelle'); ?>>Nouvelle </option>
                                    <option value="Duplicata" <?= set_select('prestation', 'Duplicata'); ?>>Duplicata</option>
                                    <option value="Renouvellement" <?= set_select('prestation', 'Renouvellement'); ?>>Renouvellement</option>
                                    
                                 
                                </select>
                                <span class="text-danger text-sm">
                                    <?= isset($validation) ? display_error($validation, 'sex') : ''?>
                                </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="categorie"><b>Catégorie <span class="text-red-50">*</span></b> </label>
                                <select name="categorie" id="categorie" class="form-control">
                                    <option 
                                        value="Cat 1 - Urbain et peri-urbain (Maxi 10 places)" 
                                        <?= set_select('categorie', 'Cat 1 - Urbain et peri-urbain (Maxi 10 places)'); ?>>
                                        Cat 1 - Urbain et peri-urbain (Maxi 10 places) 
                                    </option>
                                    <option 
                                        value="Cat 2 - Inter Urbain voyageur" 
                                        <?= set_select('categorie', 'Cat 2 - Inter Urbain voyageur'); ?>>
                                        Cat 2 - Inter Urbain voyageur 
                                    </option>
                                    <option 
                                        value="S1 - Urbain par autocar ou autobus" 
                                        <?= set_select('categorie', 'S1 - Urbain par autocar ou autobus'); ?>>
                                        S1 - Urbain par autocar ou autobus
                                    </option>
                                    <option 
                                        value="S2 - Moto Taxi" 
                                        <?= set_select('categorie', 'S2 - Moto Taxi'); ?>>
                                        S2 - Moto Taxi
                                    </option>
                                 
                                </select>
                                <span class="text-danger text-sm">
                                    <?= isset($validation) ? display_error($validation, 'sex') : ''?>
                                </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label for=""><b>NIU</b></label>
                                <input required type="text" class="form-control" name="NIU">
                                <span class="text-danger text-sm">
                                    <?= isset($validation) ? display_error($validation, 'NIU') : ''?>
                                </span><br>
                                <small>Votre NIU est fourni par l'admnistration fiscale'(exp:P458522222222M)</small>
                            </div>

                            <div class="form-group col-md-6">
                                <label for=""><b>Immatriculation <span class="text-red-50">*</span></b></label>
                                <input required type="text" name="immatriculation" class="form-control">
                                <span class="text-danger text-sm">
                                    <?= isset($validation) ? display_error($validation, 'immatriculation') : ''?>
                                </span>
                            </div>

                        </div>

                        

                    </div>
                    <div class="modal-footer mt-30">

                        <button type="submit" class="btn btn-primary action">
                            Creer votre demande
                        </button>
                    </div>
                </form>
                
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