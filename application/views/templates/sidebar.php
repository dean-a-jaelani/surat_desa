    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php 
            if($this->session->userdata('level') == 'admin') { ?>
            <img style="width: 50px;" src="<?php echo base_url('/assets/img/dlogo.png'); ?>" class="img elevation-2" alt="User Image">
          <?php }elseif($this->session->userdata('level') == 'warga' && $warga['photo'] == true) { ?>
            <img style="width: 50px;" src="<?php echo base_url('assets/img/uploads/'.$warga['photo']); ?>" class="img-circle elevation-2" alt="User Image">
          <?php }else{ ?>
            <img style="width: 50px;" src="<?php echo base_url('assets/img/default.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
          <?php } ?>
        </div>
        <div class="info">
          <?php 
            if($this->session->userdata('level') == 'admin') { ?>
          <b style="color: white; font-size: 18px;">Admin Desa</b>
          <?php } ?>
          <b><a href="#" class="d-block"><?php echo $this->session->userdata('sess_nama'); ?></a></b>
          <a href="#" class="d-block"><?php echo $this->session->userdata('username'); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?php echo base_url('Dashboard'); ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
        <?php 
          if($this->session->userdata('level') == 'admin') { ?>
         <li class="nav-item">
            <a href="<?php echo base_url('Penduduk'); ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Penduduk
              </p>
            </a>
          </li>
        <?php } ?>
          <li class="nav-item">
            <a href="<?php echo base_url('Template_surat'); ?>" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Buat Surat
              </p>
            </a>
          </li>
        <?php 
          if($this->session->userdata('level') == 'admin') { ?>
          <li class="nav-item">
            <a href="<?php echo base_url('Template_surat/arsip'); ?>" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Arsip Surat
              </p>
            </a>
          </li>
        <?php } ?>
        <?php 
          if($this->session->userdata('level') == 'warga') { ?>
          <li class="nav-item">
            <a href="<?php echo base_url('Template_surat/arsipWarga'); ?>" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Arsip Surat
              </p>
            </a>
          </li>
        <?php } ?>
        <!-- <?php 
          if($this->session->userdata('level') == 'admin') { ?>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
        <?php } ?> -->
          

          <li class="nav-header">USERS</li>
          <?php 
          if($this->session->userdata('level') == 'admin') { ?>
          <li class="nav-item">
            <a href="<?php echo base_url('User'); ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
               Data Admin
              </p>
            </a>
          </li>
          <?php }elseif($this->session->userdata('level') == 'warga') { ?>
          <li class="nav-item">
            <a href="<?php echo base_url('Myprofile'); ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
               Akun Saya
              </p>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a href="<?php echo base_url('Auth/logout'); ?>" class="nav-link" onclick="return confirm('Yakin Akan Keluar?')">
              <i class="nav-icon fa fa-sign-out-alt"></i>
              <p>
               Keluar
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->