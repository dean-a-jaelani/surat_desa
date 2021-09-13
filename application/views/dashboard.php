    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php 
          if($this->session->userdata('level') == 'warga') {
            if($warga['agama'] == NULL || $warga['jk'] == NULL || $warga['pendidikan'] == NULL ){ ?>
              <div class="row">
                <div class="col-12">
                  <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Perhatian!</h4>
                    Mohon segera lengkapi informasi Anda, supaya admin dapat mudah memproses data penduduk!
                  </div>
                </div>
              </div>
            <?php } ?>
        <?php }  ?>
         
        <!-- Small boxes (Stat box) -->
        <div class="row">
                <div class="col-12">
                  <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Selamat Datang Di Aplikasi Surat Online</h4>
                  </div>
                </div>
              </div>
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $this->db->get('penduduk')->num_rows(); ?></h3>

                <p>Jumlah Warga</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $this->db->get('surat')->num_rows(); ?></h3>

                <p>Total Surat Terbuat</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
