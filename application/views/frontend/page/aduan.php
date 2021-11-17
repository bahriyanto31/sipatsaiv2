<div role="main" class="main">
	<section class="page-header page-header-modern bg-primary page-header-lg">
		<div class="container">
			<div class="row">
				<div class="col-md-12 align-self-center p-static order-2 text-center">
					<h1 class="text-dark font-weight-bold text-color-light">Daftar Pengaduan</h1>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-center section-no-border m-0">
		<div class="container">
			<?= show_alert_notif(); ?>
			<div class="row justify-content-center mb-4 mb-md-0 mb-lg-5">
				<?php 
				$this->db->select('user.*,pengaduan.*, pengaduan.file as file_aduan');
				$this->db->join('user', 'user.id = pengaduan.id_user', 'left');
				$get_aduan = $this->db->get('pengaduan');
				foreach ($get_aduan->result() as $aduan) { ?>
					<div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="padding: 10px;">
						<div class="card">
							<!-- <img class="card-img-top" src="https://betuah.com/assets/berita/original/64165371516-fb_img_1579589747886.jpg" alt="Card Image"> -->
							<img class="card-img-top" src="<?= base_url() ?>assets_backend/gambar/<?= $aduan->file_aduan ?>" alt="Card Image">
							<span class="col-6" style=" right: 2px; padding: 10px; float: left;"><?= $aduan->tgl_input ?></span>
							<div class="card-body" style="padding-top: 0;">
								<h4 class="card-title mb-1 text-4 font-weight-bold" style="color: gray;"><?= strtoupper($aduan->nama) ?></h4>
								<p class="card-text" style="color:darkgray;"><?= ucwords($aduan->pengaduan) ?></p>
								<!-- <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a> -->
								<?php 
									switch ($aduan->verifikasi) {
										case 0: echo '<span class="badge badge-warning p-2">Sedang Di Proses</span>'; break;
										case 1: echo '<span class="badge badge-success p-2">Di Terima</span>'; break;
										case 2: echo '<span class="badge badge-danger p-2">Di Tolak</span>'; break;
										default: echo "error"; break;
									}
								 ?>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>

</div>