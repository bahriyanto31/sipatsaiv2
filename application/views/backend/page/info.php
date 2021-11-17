
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Data <?=$judul?></h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?=$judul?></li>
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
                        <h4 class="card-title">Data <?=$judul?></h4>
                        <h6 class="card-subtitle">Management data <?=$judul?></h6>
                        <?= show_alert_notif(); ?>
                        <div class="table-responsive">

                            <button class="btn btn-success" data-toggle="modal" data-target="#tambah_data" style="float: right; margin-left: 15px;">+ Tambah <?=$judul?></button>
                            <!-- Modal -->
                            <div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Buat <?=$judul?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <form class="form-horizontal" action="../admin/Info/Simpan" method='post' enctype="multipart/form-data">
                                  <div class="modal-body">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 text-right control-label col-form-label">Informasi Aplikasi</label>
                                            <div class="col-sm-9">
                                                <textarea rows="8" class="form-control" id="name" name="info" placeholder="Info Here" required></textarea>
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
                            <th>ID</th>
                            <th>Informasi</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php $no=1;
                            foreach ($data->result() as $dt) {  ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $dt->id_info ?></td>
                                    <td><?= $dt->info_aplikasi ?></td>
                                    <td>
                                        <button class="btn btn-info" data-toggle="modal" data-target="#edit_data<?=$dt->id_info?>" ><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-danger" onclick="if(confirm('Apakah anda yakin menghapus data ini')){window.location.href='<?= base_url() ?>admin/Info/delete?id=<?= $dt->id_info?>'}"><i class="fas fa-trash"></i></button>
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

<?php foreach ($data->result() as $xdata) { ?>
    <!-- <div class="alert alert-danger">hihi</div> -->
    <div class="modal fade" id="edit_data<?= $xdata->id_info ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit <?=$judul?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <form class="form-horizontal" action="../admin/Info/Edit" method='post' enctype="multipart/form-data">
          <div class="modal-body">
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Informasi Aplikasi</label>
                    <div class="col-sm-9">
                        <textarea rows="8" class="form-control" id="name" name="info" placeholder="Info Here" required><?=$xdata->info_aplikasi?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="edit">Ubah</button>
        </div>
    </form>
</div>
</div>
</div>
<?php } ?>

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