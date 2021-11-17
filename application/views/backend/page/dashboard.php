
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Temp - Earnings -->
    <!-- ============================================================== -->
    <div class="card gredient-info-bg m-t-0 m-b-0">
        <div class="card-body">
            <h4 class="card-title text-white">Selamat Datang <?= $this->session->userdata('data_admin')['nama']; ?></h4>
            <h5 class="card-subtitle text-white op-5">Dashboard</h5>
            <div class="row m-t-30 m-b-20">
                <!-- col -->
                <div class="col-sm-12 col-lg-4">
                    <div class="temp d-flex align-items-center flex-row">
                        <div class="display-5 text-white"><i class="fas fa-calendar-alt"></i> <span><?= date('d') ?><sup style="font-size: 12px;"><?= date(
                            'M') ?></sup></span></div>
                            <div class="m-l-10">
                                <h3 class="m-b-0 text-white"><?= date('l') ?></h3><small class="text-white op-5"><?= date('l, F jS, Y') ?></small>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-sm-12 col-lg-8">
                        <div class="row">
                            <!-- col -->
                            <div class="col-sm-12 col-md-4">
                                <div class="info d-flex align-items-center">
                                    <div class="m-r-10">
                                        <i class="mdi mdi-wallet text-white display-5 op-5"></i>
                                    </div>
                                    <div>
                                        <?php  if ($this->session->userdata('data_admin')['id_grup']!=1) { $this->db->where('id_user', $this->session->userdata('data_admin')['id']); } ?>
                                        <h3 class="text-white m-b-0"><?= $this->db->get('pengaduan')->num_rows(); ?></h3>
                                        <span class="text-white op-5">Jumlah Aduan</span>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-sm-12 col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="profile-pic m-b-20 m-t-20">
                            <img src="<?= base_url() ?>assets_backend/gambar/<?= $this->session->userdata('data_admin')['file'] ?>" width="150" class="rounded-circle" alt="user" style='width: 150px; height: 200px;' />
                            <h4 class="m-t-20 m-b-0"><?= ucwords($this->session->userdata('data_admin')['nama']) ?></h4>
                            <a href="mailto:<?= ($this->session->userdata('data_admin')['email']) ?>"><?= ($this->session->userdata('data_admin')['email']) ?></a>
                        </div>
                        <div class="badge badge-pill badge-light font-16">Level :</div>
                        <div class="badge badge-pill badge-info font-16" data-toggle="tooltip" data-placement="top" title="Level Akun">
                            <?php  switch ($this->session->userdata('data_admin')['id_grup']  ) {
                                case 1: echo "Administrator"; break;
                                case 2: echo "Client"; break;
                                default: echo "-"; break;
                            } ?>
                        </div>
                    </div>
                </div>
                <!-- Card with image -->
                        <!-- <div class="card">
                            <img class="card-img-top" src="../../assets/images/big/img1.jpg" alt="card">
                            <div class="card-body">
                                <h4 class="card-title">Business development of rules 2018</h4>
                                <span class="label label-danger">Technology</span>
                                <p class="p-t-20">I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div> -->
                    </div>
                    <!-- Column -->
                    <div class="col-sm-12 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Informasi</h4>
                                <div class="profiletimeline">
                                    <?php  $get_pengaduan = $this->db->get('info');
                                    foreach ($get_pengaduan->result() as $aduan) {  ?>
                                        <div class="sl-item">
                                            <div class="sl-left"> <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" /> </div>
                                            <div class="sl-right">
                                                <div><a href="javascript:void(0)" class="link">Administrator</a> <span class="sl-date"><?= $aduan->tgl_terbit ?></span>
                                                    <blockquote class="m-t-10">
                                                        <?= $aduan->info_aplikasi ?>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer text-center" style="position: fixed; bottom: 0; width: 85%;">
                   SIPATSAI © 2021. All Rights Reserved.
               </footer>
               <!-- ============================================================== -->
               <!-- End footer -->
               <!-- ============================================================== -->
           </div>
           <!-- ============================================================== -->
           <!-- End Page wrapper  -->
           <!-- ============================================================== -->
