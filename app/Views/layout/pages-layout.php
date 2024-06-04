<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<title><?= isset($pageTitle) ? $pageTitle : 'New Page Title'; ?></title>

	<!-- Site favicon -->
	<!-- <link rel="apple-touch-icon" sizes="180x180" href="/backend/vendors/images/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="/backend/vendors/images/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="/backend/vendors/images/favicon-16x16.png" /> -->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
		rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url("public/backend/vendors/styles/core.css"); ?>" />
	<link rel="stylesheet" type="text/css" href="<?= base_url("public/backend/vendors/styles/icon-font.min.css"); ?>" />
	<link rel="stylesheet" type="text/css" href="<?= base_url("public/backend/vendors/styles/style.css"); ?>" />
	<link rel="stylesheet" type="text/css" href="<?= base_url("public/backend/src/plugins/datatables/css/dataTables.bootstrap4.min.css"); ?>"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url("public/backend/src/plugins/datatables/css/responsive.bootstrap4.min.css"); ?>"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url("public/backend/src/plugins/sweetalert2/sweetalert2.css"); ?>"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

	<?= $this->renderSection('stylesheet') ?>
</head>

<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo">
				<!-- <img src="/backend/vendors/images/deskapp-logo.svg" alt="" /> -->
			</div>
			<div class="loader-progress" id="progress_div">
				<div class="bar" id="bar1"></div>
			</div>
			<div class="percent" id="percent1">0%</div>
			<div class="loading-text">Loading...</div>
		</div>
	</div>

	<?php include('includes/header.php') ?>

	<?php include('includes/right-sidebar.php') ?>

	<?php include('includes/left-side-bar.php') ?>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				<div>
					<?= $this->renderSection('content') ?>
				</div>
			</div>
			<?php include('includes/footer.php') ?>
		</div>
	</div>

	<!-- js -->
	<script src="<?= base_url("public/backend/vendors/scripts/core.js"); ?>"></script>
	<script src="<?= base_url("public/backend/vendors/scripts/script.min.js"); ?>"></script>
	<script src="<?= base_url("public/backend/vendors/scripts/process.js"); ?>"></script>
	<script src="<?= base_url("public/backend/vendors/scripts/layout-settings.js"); ?>"></script>
	<script src="<?= base_url("public/backend/src/plugins/datatables/js/jquery.dataTables.min.js"); ?>"></script>
	<script src="<?= base_url("public/backend/src/plugins/datatables/js/dataTables.bootstrap4.min.js"); ?>"></script>
	<script src="<?= base_url("public/backend/src/plugins/datatables/js/dataTables.responsive.min.js"); ?>"></script>
	<script src="<?= base_url("public/backend/src/plugins/datatables/js/responsive.bootstrap4.min.js"); ?>"></script>
	<script src="<?= base_url("public/backend/vendors/scripts/datatable-setting.js"); ?>"></script>
	<script src="<?= base_url("public/backend/src/plugins/sweetalert2/sweetalert2.all.js"); ?>"></script>
	<script src="<?= base_url("public/backend/src/plugins/sweetalert2/sweet-alert.init.js"); ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"); ?>"></script>
	<script src="<?= base_url("public/backend/src/plugins/datatables/js/dataTables.buttons.min.js"); ?>"></script>
	<script src="<?= base_url("public/backend/src/plugins/datatables/js/buttons.bootstrap4.min.js"); ?>"></script>
	<script src="<?= base_url("public/backend/src/plugins/datatables/js/buttons.print.min.js"); ?>"></script>
	<script src="<?= base_url("public/backend/src/plugins/datatables/js/buttons.html5.min.js"); ?>"></script>
	<script src="<?= base_url("public/backend/src/plugins/datatables/js/buttons.flash.min.js"); ?>"></script>
	<script src="<?= base_url("public/backend/src/plugins/datatables/js/pdfmake.min.js"); ?>"></script>
	<script src="<?= base_url("public/backend/src/plugins/datatables/js/vfs_fonts.js"); ?>"></script>
	<?= $this->renderSection('scripts') ?>
</body>

</html>