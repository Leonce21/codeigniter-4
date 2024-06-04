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
                        <a href="cartegrise">
                            <button class="btn btn-secondary">Back </button>
                        </a>
                    </div>
                    
                    <h2 class="text-center text-primary mb-30">Enregistrez les informations de votre demande de CARTE GRISE</h2>
                </div>
                        
                <hr>

                <form action="<?php echo base_url('save_cartegrise') ?>" method="post" id="add_cartegrise_form" enctype="multipart/form-data">
                    
                    <div >
                        
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for=""><b>Noms<span class="text-red-50">*</span> </b></label>
                                <input required type="text" class="form-control" name="nom">
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
                                   
                                    <option value="male" <?= set_select('gender', 'homme'); ?>>Homme</option>
                                    <option value="female" <?= set_select('gender', 'femme'); ?>>Femme</option>
                                    <option value="personne morale" <?= set_select('gender', 'personne_morale'); ?>>Personne Morale</option>
                                </select>
                                <span class="text-danger text-sm">
                                    <?= isset($validation) ? display_error($validation, 'sex') : ''?>
                                </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label for=""><b>Telephone mobile <span class="text-red-50">*</span></b></label>
                                <input required type="text" class="form-control" name="phone">
                                
                            </div>

                            <div class="form-group col-md-6">
                                <label for=""><b>E-mail<span class="text-red-50">*</span></b></label>
                                <input required type="email" class="form-control" name="email">
                                
                            </div>

                            <div class="form-group col-md-6">
                                <label for=""><b>NIU</b></label>
                                <input required type="text" class="form-control" name="NIU">
                                <small>Votre NIU est fourni par l'admnistration fiscale'(exp:P458522222222M)</small>
                            </div>

                            <div class="form-group col-md-6">
                                <label for=""><b>Choose files (images, Word, PDF) up to 1MB each</b></label>
                                <input type="file" class="form-control" name="file" id="file">
                                
                                <span class="text-danger text-sm">
                                    <?= isset($validation) ? display_error($validation, 'file') : ''?>
                                </span>
                            </div>

                           
                        </div>

                        <h2 class="text-center text-secondary mb-30">Informations sur le vehicule</h2>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for=""><b>Châssis</b></label>
                                <input required type="text" class="form-control" name="IMCHASSIS">
                                
                            </div>

                            <div class="form-group col-md-6">
                                <label for=""><b>Marque</b></label>
                                <input required type="text" class="form-control" name="marque">
                                <span class="text-danger error-text cartegrise_name_error"></span>
                            </div>

                            <div class="form-group col-md-6">
                                <label for=""><b>Modele</b></label>
                                <input required type="text" class="form-control" name="IMMODEL">
                                
                            </div>

                            <div class="form-group col-md-6">
                                <label for="Genre">Genre</label>
                                <select name="genre" class="form-control">
                                    
                                    <option value="Bus" <?=set_select('genre', 'Bus' ); ?>>Bus</option>
                                    <option value="Tricycle" <?=set_select('genre', 'Tricycle' ); ?>>Tricycle</option>
                                    <option value="MiniBus" <?=set_select('genre', 'MiniBus' ); ?>>MiniBus</option>
                                    <option value="Camion" <?=set_select('genre', 'Camion' ); ?>>Camion</option>
                                    <option value="Camionnette" <?=set_select('genre', 'Camionnette' ); ?>>Camionnette
                                    </option>
                                    <option value="Motocyclette" <?=set_select('genre', 'Motocyclette' ); ?>
                                        >Motocyclette</option>
                                </select>
                                <span class="text-danger error-text cartegrise_name_error"></span>
                            </div>

                            <div class="form-group col-md-6">
                                <label for=""><b>Cylindrée</b></label>
                                <input required type="text" class="form-control" name="IMCYL">
                                
                            </div>

                            <div class="form-group col-md-6">
                                <label for="IMENERGIE">Source Energie</label>
                                <select name="IMENERGIE" class="form-control">
                                    <option value="essence" <?=set_select('IMENERGIE', 'essence' ); ?>>Essence</option>
                                    <option value="gasoil" <?=set_select('IMENERGIE', 'gasoil' ); ?>>Gasoil</option>
                                    <option value="autre" <?=set_select('IMENERGIE', 'autre' ); ?>>Autre</option>
                                </select>
                                
                            </div>

                           
                        </div>

                    </div>
                    <div class="modal-footer mt-30 float-left">

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