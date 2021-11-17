
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Data Pengaduan</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pengaduan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Pengaduan</h4>
                        <h6 class="card-subtitle">Management data pengaduan</h6>
                        <?= show_alert_notif(); ?>
                        <div class="table-responsive">

                            <?php if($user["id_grup"]==2){?>
                                <button class="btn btn-success" data-toggle="modal" data-target="#tambah_data" style="float: right; margin-left: 15px;">+ Buat Pengaduan</button>
                            <?php }?>
                            <!-- Modal -->
                            <div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Buat Pengaduan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <form class="form-horizontal" action="../admin/Pengaduan/Simpan" method='post' enctype="multipart/form-data">
                                  <div class="modal-body">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 text-right control-label col-form-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="hidden" name="id_user" value="<?=$user['id']?>">
                                                <input type="text" class="form-control" id="name" placeholder="Name Here" value="<?=$user['nama']?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="notlp" class="col-sm-3 text-right control-label col-form-label">No. Telp</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="notlp" placeholder="No. Telp" value="<?=$user['no_tlp']?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="username" class="col-sm-3 text-right control-label col-form-label">Aduan Anda</label>
                                            <div class="col-sm-9">
                                                <textarea name="pengaduan" class="form-control" id="pengaduan" placeholder="Pengaduan Here" rows="8" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="bukti" class="col-sm-3 text-right control-label col-form-label">Bukti</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="bukti" class="form-control" id="bukti" accept=".jpg, .jpeg, .png" required>
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
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <table id="tampil_data" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengadu</th>
                            <th>No. Telp</th>
                            <th>Pengaduan</th>
                            <th>Tanggal Input</th>
                            <th>Bukti</th>
                            <th>Status</th>
                            <th width="150px;">Aksi</th>
                        </thead>
                        <tbody>
                            <?php $no=1;
                            foreach ($data as $dt) {  ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $dt->nama ?></td>
                                    <td><?= $dt->no_tlp ?></td>
                                    <td><?= $dt->pengaduan ?></td>
                                    <td><?= $dt->tgl_input ?></td>
                                    <td>
                                        <a href="<?= base_url() ?>assets_backend/gambar/<?= $dt->file ?>" target="_blank">
                                            <img src="<?= base_url() ?>assets_backend/gambar/<?= $dt->file ?>" style="width: 100px; height: 100px;">
                                        </a>
                                    </td>
                                    <td>
                                        <?php 
                                        if($dt->verifikasi==1){
                                            echo "<div class='alert alert-success'>Diterima</div>";
                                        }elseif ($dt->verifikasi==2) {
                                            echo "<div class='alert alert-danger'>Ditolak</div>";
                                        }else{
                                            echo "<div class='alert alert-warning'>Belum diverifikasi</div>";
                                        }
                                        ?>
                                    </td>
                                    <td style="width: 150px;">
                                        <?php if($user["id_grup"]==2){?>
                                            <button class="btn btn-info" data-toggle="modal" data-target="#edit_data<?= $dt->id_pengaduan ?>" ><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-danger" onclick="if(confirm('Apakah anda yakin menghapus data ini')){window.location.href='<?= base_url() ?>admin/Pengaduan/delete?id=<?= $dt->id_pengaduan ?>&fileold=<?= $dt->file ?>'}"><i class="fas fa-trash"></i></button>
                                        <?php }else{?>
                                           <button class="btn btn-info" data-toggle="modal" data-target="#lokasi<?= $dt->id_pengaduan ?>" ><i class="fas fa-map"></i></button>
                                           <button class="btn btn-success" onclick="if(confirm('Apakah anda yakin menerima pengaduan ini')){window.location.href='<?= base_url() ?>admin/Pengaduan/Accept?id=<?= $dt->id_pengaduan ?>'}"><i class="fas fa-check"></i></button>
                                           <button class="btn btn-danger" onclick="if(confirm('Apakah anda yakin menolak pengaduan ini')){window.location.href='<?= base_url() ?>admin/Pengaduan/Refuse?id=<?= $dt->id_pengaduan ?>'}"><i class="fas fa-times"></i></button>
                                           <button class="btn btn-danger" onclick="if(confirm('Apakah anda yakin menghapus data ini')){window.location.href='<?= base_url() ?>admin/Pengaduan/delete?id=<?= $dt->id_pengaduan ?>&fileold=<?= $dt->file ?>'}"><i class="fas fa-trash"></i></button>
                                       <?php }?>
                                   </td>
                               </tr>
                           <?php } ?>
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
   </div>
</div>
<?php if($user["id_grup"]==2){?>
<?php foreach ($data as $xdata) { ?>
    <!-- <div class="alert alert-danger">hihi</div> -->
    <div class="modal fade" id="edit_data<?= $xdata->id_pengaduan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pengaduan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form class="form-horizontal" action="../admin/Pengaduan/Edit" method='post' enctype="multipart/form-data">
              <div class="modal-body">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id_pengaduan" value="<?=$xdata->id_pengaduan?>">
                            <input type="hidden" name="id_user" value="<?=$xdata->id_user?>">
                            <input type="text" class="form-control" id="name" placeholder="Name Here" value="<?=$xdata->nama?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="notlp" class="col-sm-3 text-right control-label col-form-label">No. Telp</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="notlp" placeholder="No. Telp" value="<?=$xdata->no_tlp?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-3 text-right control-label col-form-label">Aduan Anda</label>
                        <div class="col-sm-9">
                            <textarea name="pengaduan" class="form-control" id="pengaduan" placeholder="Pengaduan Here" rows="8" required><?=$xdata->pengaduan?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bukti" class="col-sm-3 text-right control-label col-form-label">Bukti</label>
                        <div class="col-sm-9">
                            <input type="file" value="<?=$xdata->file?>" name="bukti" class="form-control" id="bukti" accept=".jpg, .jpeg, .png">
                            <input type="hidden" name="fileold" value="<?=$xdata->file?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bukti" class="col-sm-3 text-right control-label col-form-label">Lokasi</label>
                        <div class="col-sm-9">
                            <div id="mapid_<?= $xdata->id_pengaduan ?>" style="height: 200px;"></div>
                            <input type="text" class="form-control" name="latlng" id="mapid_val_<?= $xdata->id_pengaduan ?>" value="<?=$xdata->latlong?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bukti" class="col-sm-3 text-right control-label col-form-label">Keterangan Lokasi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="lokasi" placeholder="Keterangan Lokasi" value="<?=$xdata->lokasi?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
            </div>
        </form>
    </div>
</div>
</div>
<script>
    // set lokasi latitude dan longitude, lokasinya kota palembang 
    var mymap_<?= $xdata->id_pengaduan ?> = L.map('mapid_<?= $xdata->id_pengaduan ?>').setView([0.5583855, 123.0603324], 12);   
    //setting maps menggunakan api mapbox bukan google maps, daftar dan dapatkan token      
    L.tileLayer(
        'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibmFiaWxjaGVuIiwiYSI6ImNrOWZzeXh5bzA1eTQzZGxpZTQ0cjIxZ2UifQ.1YMI-9pZhxALpQ_7x2MxHw', {
            attribution: '',
            maxZoom: 20,
            id: 'mapbox/streets-v11', //menggunakan peta model streets-v11 kalian bisa melihat jenis-jenis peta lainnnya di web resmi mapbox
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'your.mapbox.access.token'
        }).addTo(mymap_<?= $xdata->id_pengaduan ?>);
    var marker_<?= $xdata->id_pengaduan ?>  = {};

    var lokasi = $('#mapid_val_<?= $xdata->id_pengaduan ?>').val();
    if (lokasi != '') {
        var lokasi_x = lokasi.split(',');
        marker_<?= $xdata->id_pengaduan ?> = L.marker(lokasi_x).addTo(mymap_<?= $xdata->id_pengaduan ?>);
    }

    function onMapClick_<?= $xdata->id_pengaduan ?>(e) {
        if (marker_<?= $xdata->id_pengaduan ?> != undefined) {
            mymap_<?= $xdata->id_pengaduan ?>.removeLayer(marker_<?= $xdata->id_pengaduan ?>);
        };
        
        $('#mapid_val_<?= $xdata->id_pengaduan ?>').val(e.latlng.lat+','+e.latlng.lng);
        marker_<?= $xdata->id_pengaduan ?> = L.marker(e.latlng).addTo(mymap_<?= $xdata->id_pengaduan ?>);
        console.log(e.latlong)
    }
    mymap_<?= $xdata->id_pengaduan ?>.on('click', onMapClick_<?= $xdata->id_pengaduan ?>);
</script>
<?php }
    } else { ?>
    <?php foreach ($data as $xdata) { ?>
        <!-- <div class="alert alert-danger">hihi</div> -->
        <div class="modal fade" id="lokasi<?= $xdata->id_pengaduan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Lokasi Pengaduan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div id="mapid_<?= $xdata->id_pengaduan ?>" style="height: 500px;"></div>
              <input type="text" class="form-control" name="latlng" id="mapid_val_<?= $xdata->id_pengaduan ?>" value="<?=$xdata->latlong?>" readonly>
              <input type="text" class="form-control" name="a" value="<?= $xdata->lokasi ?>" readonly>
          </div>
      </div>
  </div>
  <script>
    
    var mymap_<?= $xdata->id_pengaduan ?> = L.map('mapid_<?= $xdata->id_pengaduan ?>').setView([0.6605383462350679,122.8920364379883], 12);   
    //setting maps menggunakan api mapbox bukan google maps, daftar dan dapatkan token      
    L.tileLayer(
        'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibmFiaWxjaGVuIiwiYSI6ImNrOWZzeXh5bzA1eTQzZGxpZTQ0cjIxZ2UifQ.1YMI-9pZhxALpQ_7x2MxHw', {
            attribution: '',
            maxZoom: 20,
            id: 'mapbox/streets-v11', //menggunakan peta model streets-v11 kalian bisa melihat jenis-jenis peta lainnnya di web resmi mapbox
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'your.mapbox.access.token'
        }).addTo(mymap_<?= $xdata->id_pengaduan ?>);
    var marker_<?= $xdata->id_pengaduan ?>  = {};

    var lokasi = $('#mapid_val_<?= $xdata->id_pengaduan ?>').val();
    if (lokasi != '') {
        var lokasi_x = lokasi.split(',');
        marker_<?= $xdata->id_pengaduan ?> = L.marker(lokasi_x).addTo(mymap_<?= $xdata->id_pengaduan ?>);
    }
</script>
<?php } ?>
<?php }?>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<script type="text/javascript">
    $('#tampil_data').DataTable();
</script>

<style type="text/css">
    .leaflet-control-attribution a {
        display: none;
    }
</style>
<script>
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