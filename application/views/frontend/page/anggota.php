<div role="main" class="main">

				<section class="section section-quaternary section-center section-no-border m-0">
					<div class="container">
						<div class="row justify-content-center mb-4 mb-md-0 mb-lg-5">
							<?php 
								$get_anggota = $this->db->get('user');
								foreach ($get_anggota->result() as $anggota) { ?>
									<div class="col-md-6 col-lg-3">
										<span class="thumb-info custom-thumb-info-2 thumb-info-hide-wrapper-bg">
											<span class="thumb-info-wrapper m-0">
												<img src="<?= base_url() ?>assets_backend/gambar/<?= $anggota->file ?>" style="width: 200px; height: 250px;" class="img-fluid" alt="">
											</span>
											<span class="thumb-info-caption bg-color-light text-center p-5">
												<h4 class="font-weight-bold text-color-quaternary mb-3"><?= $anggota->nama ?></h4>
												<p class="text-color-dark p-0">Personal Trainer</p>
												<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium" href="demo-gym-staff-detail.html" title="Learn More">View More</a>
											</span>
										</span>
									</div>
								<?php } ?>
						</div>
					</div>
				</section>

			</div>