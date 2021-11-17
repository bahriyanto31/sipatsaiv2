<div role="main" class="main">
	
	<div class="container my-5 pt-md-0 pt-xl-0">
		<div class="row align-items-center justify-content-center pb-4 mb-5">
			<div class="col-lg-6 pb-sm-4 pb-lg-0 mb-5 mb-lg-0">
				<div class="overflow-hidden" style="padding-bottom: 10px;">
					<h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Form Pengaduan</h2>
				</div>
				<div class="custom-divider divider divider-primary divider-small my-3">
					<hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="700">
				</div>
				<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">
					<?= show_alert_notif(); ?>
					<form class="form-horizontal" action="<?php echo base_url('Pengaduan/input') ?>" method='post' enctype="multipart/form-data">
						<div class="form-group row">
							<label for="name" class="col-sm-3 text-right control-label col-form-label">NIK</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" name="id_user" placeholder="NIK Here" value="" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="name" class="col-sm-3 text-right control-label col-form-label">Nama</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="name" placeholder="Name Here" value="" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="notlp" class="col-sm-3 text-right control-label col-form-label">No. Telp</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" name="notlp" placeholder="No. Telp" value="" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="username" class="col-sm-3 text-right control-label col-form-label">Aduan Anda</label>
							<div class="col-sm-9">
								<textarea name="pengaduan" class="form-control" name="pengaduan" placeholder="Pengaduan Here" rows="8" required></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="bukti" class="col-sm-3 text-right control-label col-form-label">Bukti</label>
							<div class="col-sm-9">
							    <input id="max_id" type="hidden" name="MAX_FILE_SIZE" value="250000000" />
								<input type="file" onchange="upload_check()" name="bukti" class="form-control" id="bukti" accept=".jpg, .jpeg, .png" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="bukti" class="col-sm-3 text-right control-label col-form-label">Lokasi</label>
							<div class="col-sm-9">
								<div id="mapid" style="height: 200px;"></div>
								<input type="text" class="form-control" name="latlng" id="mapid_val" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label for="bukti" class="col-sm-3 text-right control-label col-form-label">Keterangan Lokasi</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="lokasi" placeholder="Keterangan Lokasi">
							</div>
						</div>
						<button type="submit" class="btn btn-primary" style="float: right;" name="simpan">Laporkan</button>
					</form>
				</div>
			</div>
			<div class="col-10 col-md-9 col-lg-6 pl-lg-5 pr-5 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1450" data-plugin-options="{'accY': -200}">
				<div class="position-relative">
					<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
						<img src="pngtree-young-guy-throwing-trash-bags-into-container-vector-isolated-illustration-png-image_1847614.jpg" alt="" />
					</div>
					<div class="position-absolute transform3dxy-n50" style="top: 25%; left: 7%;">
						<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.5, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': false}">
							<img src="gelembung.png" style="width: 100px; height: 100px;" class="appear-animation" alt="" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1700" />
						</div>
					</div>
					<div class="position-absolute transform3dxy-n50 ml-5 pb-5 ml-xl-0" style="top: 32%; left: 85%;">
						<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 1, 'transition': true, 'transitionDuration': 1500, 'isInsideSVG': false}">
							<img src="gelembung.png" style="width: 100px; height: 100px;" class="appear-animation" alt="" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1900" />
						</div>
					</div>
					<div class="position-absolute transform3dxy-n50" style="top: 90%; left: 19%;">
						<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 2, 'transition': true, 'transitionDuration': 2500, 'isInsideSVG': false}">
							<img src="gelembung.png" style="width: 100px; height: 100px;" class="appear-animation" alt="" data-appear-animation="fadeInDownShorterPlus" data-appear-animation-delay="2100" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view('frontend/page/tool'); ?>
	</div>

	<section class="section bg-transparent position-relative border-0 z-index-1 m-0 p-0">
		<svg class="custom-svg-3" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 193 495">
			<path fill="#1C5FA8" d="M193,25.73L18.95,247.93c-13.62,17.39-10.57,42.54,6.82,56.16L193,435.09V25.73z"/>
			<path fill="none" stroke="#FFF" stroke-width="1.5" stroke-miterlimit="10" d="M196,53.54L22.68,297.08c-12.81,18-8.6,42.98,9.4,55.79L196,469.53V53.54z"/>
		</svg>
	</section>

</div> 
<script>
	function upload_check()
	{
		var upl = document.getElementById("bukti");
		var max = document.getElementById("max_id").value;
		console.log(upl.files[0].size);
		if(upl.files[0].size > max)
		{
			alert("File too big!");
			upl.value = "";
		}
	};
    // set lokasi latitude dan longitude, lokasinya kota palembang 
    var mymap = L.map('mapid').setView([0.6605383462350679,122.8920364379883], 12);   
    //setting maps menggunakan api mapbox bukan google maps, daftar dan dapatkan token      
    L.tileLayer(
    	'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibmFiaWxjaGVuIiwiYSI6ImNrOWZzeXh5bzA1eTQzZGxpZTQ0cjIxZ2UifQ.1YMI-9pZhxALpQ_7x2MxHw', {
    		attribution: '',
    		maxZoom: 20,
            id: 'mapbox/streets-v11', //menggunakan peta model streets-v11 kalian bisa melihat jenis-jenis peta lainnnya di web resmi mapbox
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'your.mapbox.access.token'
        }).addTo(mymap);
    var marker  = {};


    function onMapClick(e) {
    	if (marker != undefined) {
    		mymap.removeLayer(marker);
    	};

    	$('#mapid_val').val(e.latlng.lat+','+e.latlng.lng);
    	marker = L.marker(e.latlng).addTo(mymap);

    }
    mymap.on('click', onMapClick);
</script>