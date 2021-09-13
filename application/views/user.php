  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php echo $this->session->flashdata('pesan'); ?>
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-10">
                    <h3 class="card-title">Tabel Data Admin</h3>
                  </div>
                  <div class="col-2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                      <i class="fa fa-plus"></i> Admin
                    </button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Photo</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach($user as $row) { ?>
                  <tr>
                    <td style="width: 110px;">
                      <?php if($row->photo == NULL){ ?>
                        <img class="profile-user-img img-responsive" src="<?php echo base_url('assets/img/default.jpg'); ?>" alt="User profile picture">
                      <?php }else{ ?>
                        <img class="profile-user-img img-responsive" src="<?php echo base_url('assets/img/uploads/'.$row->photo); ?>" alt="User profile picture">
                      <?php } ?>
                    </td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->username; ?></td>
                    <td><?php echo $row->password; ?></td>
                    <td>
                      <a title="Edit Data" href="<?php echo base_url('User/edit/'.$row->id_user); ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                      
                      <a title="Delete Data" href="<?php echo base_url('User/delete/'.$row->id_user); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Data Akan Dihapus?')"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Modals Data Admin -->
<div class="modal modal-info fade" id="modal-primary">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Admin</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('User/add'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Lengkap" required="">
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" placeholder="username" required="">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
              </div>
              <!-- /.box-body -->
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/assets/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>/assets/adminlte/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

