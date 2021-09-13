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
                    <h3 align="center" class="card-title">Data Surat</h3>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 3px;">No</th>
                    <th>Jenis Surat</th>
                    <th>Nama Pembuat</th>
                    <th>Keterangan</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1;
                    foreach($arsip as $row) { ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row->surat; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->ket; ?></td>
                    <td><?php echo $row->created_at; ?></td>
                    <td>
                      <a title="Print Surat" href="<?php echo base_url('Pdf/index/'.$row->id_surat); ?>" class="btn btn-sm btn-primary"><i class="fa fa-print"></i></a>
                      <a title="Edit Surat" href="<?php echo base_url('Template_surat/edit/'.$row->id_surat); ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                      <a title="Delete Surat" href="<?php echo base_url('Template_surat/delete/'.$row->id_surat); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Data Akan Dihapus?')"><i class="fa fa-trash"></i></a>
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

