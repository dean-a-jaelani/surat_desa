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
                    <h3 class="card-title">Tabel Data Penduduk</h3>
                  </div>
                  <div class="col-2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                      <i class="fa fa-plus"></i> Penduduk
                    </button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 3px;">No</th>
                    <th>No. KTP</th>
                    <th>Nama</th>
                    <th>Agama</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1;
                    foreach($penduduk as $row) { ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row->no_ktp; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->agama; ?></td>
                    <td><?php echo $row->pendidikan; ?></td>
                    <td><?php echo $row->pekerjaan; ?></td>
                    <td><?php echo $row->status; ?></td>
                    <td>
                      <a href="<?php echo base_url('Penduduk/detil/'.$row->id_penduduk); ?>" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                      <a href="<?php echo base_url('Penduduk/delete/'.$row->id_penduduk); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Data Akan Dihapus?')"><i class="fa fa-trash"></i></a>
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

<!-- Modals Data Dosen -->
<div class="modal modal-info fade" id="modal-primary">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Penduduk</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('Penduduk/add'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="no_ktp">No. KTP</label>
                  <input type="text" name="no_ktp" class="form-control" id="no_ktp" placeholder="Masukan No KTP" required="">
                </div>
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Lengkap" required="">
                </div>
                <div class="form-group">
                  <label for="agama">Agama</label>
                  <select class="form-control" name="agama" required="">
                    <option>-- Agama --</option>
                    <option value="Islam"> Islam </option>
                    <option value="Kristen"> Kristen </option>
                    <option value="Hindu"> Hindu </option>
                    <option value="Budha"> Budha </option>
                    <option value="Lainnya"> Lainnya </option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" placeholder="Kota/Kabupaten">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" class="form-control" placeholder="Kota/Kabupaten">
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <option>--Pilih Jenis Kelamin--</option>
                    <option value="Laki-Laki"> Laki-Laki </option>
                    <option value="Perempuan"> Perempuan </option>
                    <option value="Lainnya"> Lainnya </option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Golongan Darah</label>
                  <input type="text" name="golongan_darah" class="form-control" placeholder="A/B/O/...">
                </div>
                <div class="form-group">
                  <label for="warga_negara">Warga Negara</label>
                  <select class="form-control" name="warga_negara">
                    <option>--Pilih Warga Negara--</option>
                    <option value="WNI"> WNI </option>
                    <option value="WNA"> WNA </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="pendidikan">Pendidikan</label>
                  <select class="form-control" name="pendidikan">
                    <option>--Pilih Pendidikan--</option>
                    <option value="SD"> SD </option>
                    <option value="SMP"> SMP </option>
                    <option value="SMA/SMK"> SMA/SMK </option>
                    <option value="S1"> S1 </option>
                    <option value="S2"> S2 </option>
                    <option value="S3"> S3 </option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" name="status">
                    <option>--Pilih Status--</option>
                    <option value="Lajang"> Lajang </option>
                    <option value="Kawin"> Kawin </option>
                    <option value="Janda"> Janda </option>
                    <option value="Duda"> Duda </option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Input Password" required="">
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

