<?php
$sess = $this->session->userdata("data_admin");
$level = $sess["id_grup"];
?>

<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Application</span></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?= base_url() ?>admin" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="">Dashboard </span></a>
                </li>
                <?php if($level==1) {?>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?= base_url() ?>admin/users" aria-expanded="false"><i class="fas fa-users"></i><span class="">Users </span></a>
                </li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?= base_url() ?>admin/Info" aria-expanded="false"><i class="fas fa-info-circle"></i><span class="">Info Aplikasi </span></a>
                    </li>
                <?php }?>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?= base_url() ?>admin/Pengaduan" aria-expanded="false"><i class="fas fa-comment"></i><span class=""><?=($level==1)?"Pengaduan":"Buat Pengaduan"?> </span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->