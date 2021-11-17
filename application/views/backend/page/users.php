
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Data Users</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                        <h4 class="card-title">Data Users</h4>
                        <h6 class="card-subtitle">Management data users</h6>
                        <?= show_alert_notif(); ?>
                        <div class="table-responsive">
                            <button class="btn btn-success" data-toggle="modal" data-target="#tambah_data" style="float: right; margin-left: 15px;">+ Tambah Users</button>
                            <!-- Modal -->
                            <div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <form class="form-horizontal" action="" method='post' enctype="multipart/form-data">
                                  <div class="modal-body">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 text-right control-label col-form-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="nama" class="form-control" id="name" placeholder="Name Here" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" name="email" class="form-control" id="email1" placeholder="Email Name Here" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="notlp" class="col-sm-3 text-right control-label col-form-label">No. Telp</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="no_tlp" class="form-control" id="notlp" placeholder="No. Telp" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="level" class="col-sm-3 text-right control-label col-form-label">Level</label>
                                            <div class="col-sm-9">
                                                <select name="level" id="level" class="form-control">
                                                    <option value="1">Administrator</option>
                                                    <option value="2">Pengadu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="username" class="col-sm-3 text-right control-label col-form-label">Username</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="user" class="form-control" id="username" placeholder="Username Here" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="pass" class="form-control" id="password" placeholder="Password Here" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="foto" class="col-sm-3 text-right control-label col-form-label">Foto</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="foto" class="form-control" id="foto" accept=".jpg, .jpeg, .png" required>
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
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>email</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php $no=1;
                            $get_data = $this->db->get('user');
                            foreach ($get_data->result() as $data) {  ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td>
                                        <img src="<?= base_url() ?>assets_backend/gambar/<?= $data->file ?>" style="width: 100px; height: 100px;">
                                    </td>
                                    <td><?= $data->nama ?></td>
                                    <td><?= $data->username ?></td>
                                    <td><?= $data->email ?></td>
                                    <td>
                                        <button class="btn btn-info" data-toggle="modal" data-target="#edit_data<?= $data->id ?>" ><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-danger" onclick="if(confirm('Apakah anda yakin menghapus data ini')){window.location.href='<?= base_url() ?>admin/users/delete?id=<?= $data->id ?>&filename_old=<?= $data->file ?>'}"><i class="fas fa-trash"></i></button>
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
<?php foreach ($get_data->result() as $xdata) { ?>
    <div class="modal fade" id="edit_data<?= $xdata->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data<?= $xdata->id ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <form class="form-horizontal" action="" method='post' enctype="multipart/form-data">
          <div class="modal-body">
            <div class="card-body">
                <input type="hidden" name="id" value="<?= $xdata->id ?>">
                <input type="hidden" name="filename_old" value="<?= $xdata->file ?>">
                <input type="hidden" name="username_old" value="<?= $xdata->username ?>">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama" class="form-control" id="name" placeholder="Name Here" value="<?= $xdata->nama ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" id="email1" placeholder="Email Name Here" value="<?= $xdata->email ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="notlp" class="col-sm-3 text-right control-label col-form-label">No. Telp</label>
                    <div class="col-sm-9">
                        <input type="number" name="no_tlp" class="form-control" id="notlp" placeholder="No. Telp" value="<?= $xdata->no_tlp?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="level" class="col-sm-3 text-right control-label col-form-label">Level</label>
                    <div class="col-sm-9">
                        <select name="level" id="level" class="form-control">
                            <option value="" disabled>Level Here</option>
                            <option value="1" <?=($xdata->id_grup==1)?"selected":""?>>Administrator</option>
                            <option value="2" <?=($xdata->id_grup==2)?"selected":""?>>Pengadu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-3 text-right control-label col-form-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" name="user" class="form-control" id="username" placeholder="Username Here" value="<?= $xdata->username ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-3 text-right control-label col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="text" name="pass" class="form-control" id="password" placeholder="Password Here" value="<?= base64_decode($xdata->password) ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-3 text-right control-label col-form-label">Foto</label>
                    <div class="col-sm-9">
                        <input type="file" name="foto" class="form-control" id="foto" accept=".jpg, .jpeg, .png" >
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