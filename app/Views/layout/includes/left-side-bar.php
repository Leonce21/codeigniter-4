<?php helper('Function_helper'); ?>
<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="<?= base_url("public/backend/vendors/images/deskapp-logo.svg"); ?>" alt="" class="dark-logo" />
				<img src="<?= base_url("public/backend/vendors/images/deskapp-logo-white.svg"); ?>" alt="" class="light-logo" />
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<div class="sidebar-small-cap">Application</div>
					</li>
					<li>
						<a href="<?= base_url('profile'); ?>" class="dropdown-toggle no-arrow <?= current_route_name() == 'profile' ? 'active' : '' ?>">
							<span class="micon bi bi-house"></span
							><span class="mtext">Home</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="<?= base_url('cartegrise') ?>" class="dropdown-toggle no-arrow <?= current_route_name() == 'cartegrise' ? 'active' : '' ?>">
							<span class="micon bi bi-textarea-resize"></span><span class="mtext">Carte Grise</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="<?= base_url('carteblue') ?>" class="dropdown-toggle no-arrow <?= current_route_name() == 'carteblue' ? 'active' : '' ?>">
							<span class="micon bi bi-textarea-resize"></span><span class="mtext">Carte Blue</span>
						</a>
					</li>
				
					<li class="dropdown">
						<a href="<?= base_url('demande') ?>" class="dropdown-toggle no-arrow <?= current_route_name() == 'demande' ? 'active' : '' ?>">
							<span class="micon bi bi-textarea-resize"></span><span class="mtext">Mes Demandes</span>
						</a>
						
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Account</div>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-archive"></span
							><span class="mtext"> Profile </span>
						</a>
						<ul class="submenu">
							<li><a href="<?= base_url('change_password_view') ?>" class="dropdown-toggle no-arrow <?= current_route_name() == 'change_password_view' ? 'active' : '' ?>">Change Password</a></li>
							
						</ul>
					</li>
					
					<li>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-gear"></span
							><span class="mtext">Settings</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>