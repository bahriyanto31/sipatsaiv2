
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 54, 'stickySetTop': '-54px', 'stickyChangeLogo': false}">
				<div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column w-100">
								<div class="header-row justify-content-between">
									<div class="header-logo z-index-2 col-lg-2 px-0">
										<a href="demo-auto-services.html">
											<!-- <img alt="Porto" width="123" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="84" src="img/demos/auto-services/logo.png"> -->
											<h1 style="font-weight: bolder; margin-top: 30px;"><span style="color: #1c5fa8">SI</span>PATSAI</h1>
										</a>
									</div>
									<div class="header-nav header-nav-links justify-content-end pr-lg-4 mr-lg-3">
										<div class="header-nav-main header-nav-main-arrows header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li><a href="<?= base_url() ?>home" class="nav-link <?= active_menu('home') ?>">Home</a></li>
													<li><a href="<?= base_url() ?>about" class="nav-link <?= active_menu('about') ?>">About</a></li>
													<li class="dropdown">
														<a href="javascript:void(0)" class="nav-link <?= active_menu('pelayanan') ?> dropdown-toggle">Pelayanan</a>
														<ul class="dropdown-menu">
															<li><a href="<?= base_url() ?>pengaduan" class="dropdown-item">Pengaduan Tempat Sampah Ilegal</a></li>
														</ul>
													</li>
													<li><a href="<?= base_url() ?>aduan" class="nav-link <?= active_menu('aduan') ?>">Dafrat Pengaduan</a></li>
													<li><a href="<?= base_url() ?>pengaduan" class="nav-link <?= active_menu('contact') ?>">Contact</a></li>
													
													<li class="">
														<a href="<?= base_url() ?>login" target="_blank" title="Login Administrator"><i class="fas fa-user"></i></a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
									<button class="btn header-btn-collapse-nav ml-4" data-toggle="collapse" data-target=".header-nav-main nav">
										<i class="fas fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>