
<?php 
$id=$this->session->userdata("data_admin");
$sess=$this->db->get_where("user", ["id"=>$id["id"]])->row_array();
?>

<!-- Modal -->
<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">My Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <form class="form-horizontal" action="../admin/Users" method='post' enctype="multipart/form-data">
      <div class="modal-body">
        <div class="card-body">
            <div class="form-group row">
                <label for="name" class="col-sm-3 text-right control-label col-form-label">Nama</label>
                <div class="col-sm-9">
                    <input type="hidden" name="id" value="<?=$sess['id']?>">
                    <input type="text" name="nama" class="form-control" id="name" value="<?=$sess['nama']?>" placeholder="Name Here" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" id="email1" value="<?=$sess['email']?>" placeholder="Email Name Here" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="notlp" class="col-sm-3 text-right control-label col-form-label">No. Telp</label>
                <div class="col-sm-9">
                    <input type="number" name="no_tlp" class="form-control" id="notlp" value="<?=$sess['no_tlp']?>" placeholder="No. Telp" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-3 text-right control-label col-form-label">Username</label>
                <div class="col-sm-9">
                    <input type="text" name="user" class="form-control" id="username" value="<?=$sess['username']?>" placeholder="Username Here" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-3 text-right control-label col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="text" name="pass" class="form-control" id="password" value="<?=base64_decode($sess['password'])?>" placeholder="Password Here" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="foto" class="col-sm-3 text-right control-label col-form-label">Foto</label>
                <div class="col-sm-9">
                    <input type="file" name="foto" class="form-control" id="foto" accept=".jpg, .jpeg, .png">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="editprofile">Simpan</button>
    </div>
</form>
</div>
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- customizer Panel -->
<!-- ============================================================== -->
<aside class="customizer">
    <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin fa-cog"></i></a>
    <div class="customizer-body">
        <ul class="nav customizer-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-wrench font-20"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="mdi mdi-message-reply font-20"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="mdi mdi-star-circle font-20"></i></a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="p-15 border-bottom">
                    <!-- Sidebar -->
                    <h5 class="font-medium m-b-10 m-t-10">Layout Settings</h5>
                    <div class="custom-control custom-checkbox m-t-10">
                        <input type="checkbox" class="custom-control-input" name="theme-view" id="theme-view">
                        <label class="custom-control-label" for="theme-view">Dark Theme</label>
                    </div>
                    <div class="custom-control custom-checkbox m-t-10">
                        <input type="checkbox" class="custom-control-input" name="sidebar-position" id="sidebar-position">
                        <label class="custom-control-label" for="sidebar-position">Fixed Sidebar</label>
                    </div>
                    <div class="custom-control custom-checkbox m-t-10">
                        <input type="checkbox" class="custom-control-input" name="header-position" id="header-position">
                        <label class="custom-control-label" for="header-position">Fixed Header</label>
                    </div>
                    <div class="custom-control custom-checkbox m-t-10">
                        <input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
                        <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <!-- Logo BG -->
                    <h5 class="font-medium m-b-10 m-t-10">Logo Backgrounds</h5>
                    <ul class="theme-color">
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a></li>
                    </ul>
                    <!-- Logo BG -->
                </div>
                <div class="p-15 border-bottom">
                    <!-- Navbar BG -->
                    <h5 class="font-medium m-b-10 m-t-10">Navbar Backgrounds</h5>
                    <ul class="theme-color">
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a></li>
                    </ul>
                    <!-- Navbar BG -->
                </div>
                <div class="p-15 border-bottom">
                    <!-- Logo BG -->
                    <h5 class="font-medium m-b-10 m-t-10">Sidebar Backgrounds</h5>
                    <ul class="theme-color">
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a></li>
                        <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a></li>
                    </ul>
                    <!-- Logo BG -->
                </div>
            </div>
            <!-- End Tab 1 -->
            <!-- Tab 2 -->
            <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                <ul class="mailbox list-style-none m-t-20">
                    <li>
                        <div class="message-center chat-scroll">
                            <a href="javascript:void(0)" class="message-item" id='chat_user_1' data-user-id='1'>
                                <span class="user-img"> <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle"> <span class="profile-status online pull-right"></span> </span>
                                <div class="mail-contnet">
                                    <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
                                    <span class="user-img"> <img src="assets/images/users/2.jpg" alt="user" class="rounded-circle"> <span class="profile-status busy pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
                                        <span class="user-img"> <img src="assets/images/users/3.jpg" alt="user" class="rounded-circle"> <span class="profile-status away pull-right"></span> </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                            <span class="user-img"> <img src="assets/images/users/4.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                            <div class="mail-contnet">
                                                <h5 class="message-title">Nirav Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                                <span class="user-img"> <img src="assets/images/users/5.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Sunil Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                                </a>
                                                <!-- Message -->
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                                    <span class="user-img"> <img src="assets/images/users/6.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                    <div class="mail-contnet">
                                                        <h5 class="message-title">Akshay Kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                                    </a>
                                                    <!-- Message -->
                                                    <!-- Message -->
                                                    <a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                                        <span class="user-img"> <img src="assets/images/users/7.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                        <div class="mail-contnet">
                                                            <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                                        </a>
                                                        <!-- Message -->
                                                        <!-- Message -->
                                                        <a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                                            <span class="user-img"> <img src="assets/images/users/8.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                            <div class="mail-contnet">
                                                                <h5 class="message-title">Varun Dhavan</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                                            </a>
                                                            <!-- Message -->
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End Tab 2 -->
                                            <!-- Tab 3 -->
                                            <div class="tab-pane fade p-15" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                <h6 class="m-t-20 m-b-20">Activity Timeline</h6>
                                                <div class="steamline">
                                                    <div class="sl-item">
                                                        <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                                                        <div class="sl-right">
                                                            <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                                            <div class="desc">you can write anything </div>
                                                        </div>
                                                    </div>
                                                    <div class="sl-item">
                                                        <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                                                        <div class="sl-right">
                                                            <div class="font-medium">Send documents to Clark</div>
                                                            <div class="desc">Lorem Ipsum is simply </div>
                                                        </div>
                                                    </div>
                                                    <div class="sl-item">
                                                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="assets/images/users/2.jpg"> </div>
                                                        <div class="sl-right">
                                                            <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                                            <div class="desc">Contrary to popular belief</div>
                                                        </div>
                                                    </div>
                                                    <div class="sl-item">
                                                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="assets/images/users/1.jpg"> </div>
                                                        <div class="sl-right">
                                                            <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                                            <div class="desc">Approve meeting with tiger</div>
                                                        </div>
                                                    </div>
                                                    <div class="sl-item">
                                                        <div class="sl-left bg-primary"> <i class="ti-user"></i></div>
                                                        <div class="sl-right">
                                                            <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                                            <div class="desc">you can write anything </div>
                                                        </div>
                                                    </div>
                                                    <div class="sl-item">
                                                        <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                                                        <div class="sl-right">
                                                            <div class="font-medium">Send documents to Clark</div>
                                                            <div class="desc">Lorem Ipsum is simply </div>
                                                        </div>
                                                    </div>
                                                    <div class="sl-item">
                                                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="assets/images/users/4.jpg"> </div>
                                                        <div class="sl-right">
                                                            <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                                            <div class="desc">Contrary to popular belief</div>
                                                        </div>
                                                    </div>
                                                    <div class="sl-item">
                                                        <div class="sl-left"> <img class="rounded-circle" alt="user" src="assets/images/users/6.jpg"> </div>
                                                        <div class="sl-right">
                                                            <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                                            <div class="desc">Approve meeting with tiger</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Tab 3 -->
                                        </div>
                                    </div>
                                </aside>
                                <div class="chat-windows"></div>
                                <!-- ============================================================== -->
                                <!-- All Jquery -->
                                <!-- ============================================================== -->
                            </body>

                            </html>