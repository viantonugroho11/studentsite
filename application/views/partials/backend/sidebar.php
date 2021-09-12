<div id="layoutSidenav_nav">
	<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
		<div class="sb-sidenav-menu">

			<div class="nav">
				<a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
					<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
					Dashboard
				</a>
				<div class="sb-sidenav-menu-heading">Halaman Antarmuka</div>
				<a class="nav-link" href="<?php echo base_url('admin/admin') ?>">
					<div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
					Admin
				</a>

				<!-- START SANTRI -->
				<a class="nav-link collapsed" href="<?php echo base_url('admin/list-santri') ?>">
					<div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
					Santri
				</a>

				<!-- END SANTRI -->

				<!-- START SANTRI BARU -->
				<a class="nav-link collapsed" href="<?php echo base_url('admin/list_santribaru') ?>">
					<div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
					Santri Baru
				</a>

				<!-- START TEACHER -->
				<a class="nav-link collapsed" href="<?php echo base_url('admin/listteacher') ?>">
					<div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
					Guru
				</a>
				<!-- END TEACHER -->

				<!-- START POST -->
				<a class="nav-link collapsed" href="<?php echo base_url('admin/posts') ?>">
					<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
					Post
				</a>
				<!-- END POST -->
			</div>
	</nav>
</div>