<!-- Main content -->
<section class="content">
<div class="container-fluid">
  <?php echo $this->session->flashdata('pesan'); ?>
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-md-12">
      <!-- About Me Box -->
      <div class="card card-primary card-outline">
        <div class="card-header p-2">
          <div class="row">
            <div class="col-md-12">
              <h3 align="center" class="box-title">Pilih Surat</h3>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="container">
          <div class="row">
            
            <div class="col-3">
              <div class="card card-primary card-outline">
                <div class="card-header p-2">
                  <div class="row">
                    <div class="col-md-12">
                      <h5 align="center" class="box-title">Surat Keterangan</h5>
                    </div>
                  </div>
                  <div class="box-body">
                    <img style="width: 200px;" src="<?php echo base_url('assets/img/surat.png') ?>">
                    <button type="button" class="btn btn-primary col-md-12" data-toggle="modal" data-target="#modal-surat-keterangan"> Pilih
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-3">
              <div class="card card-primary card-outline">
                <div class="card-header p-2">
                  <div class="row">
                    <div class="col-md-12">
                      <h5 align="center" class="box-title">Surat Keterangan Lainnya</h5>
                    </div>
                  </div>
                  <div class="box-body">
                    <img style="width: 200px;" src="<?php echo base_url('assets/img/surat.png') ?>">
                    <button type="button" class="btn btn-primary col-md-12" data-toggle="modal" data-target="#modal-surat-keteranganLainnya"> Pilih
                    </button>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-3">
              <div class="card card-primary card-outline">
                <div class="card-header p-2">
                  <div class="row">
                    <div class="col-md-12">
                      <h5 align="center" class="box-title">Surat Kelahiran</h5>
                    </div>
                  </div>
                  <div class="box-body">
                    <img style="width: 200px;" src="<?php echo base_url('assets/img/surat.png') ?>">
                    <button type="button" class="btn btn-primary col-md-12" data-toggle="modal" data-target="#modal-surat-kelahiran"> Pilih
                    </button>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="col-3">
              <div class="card card-primary card-outline">
                <div class="card-header p-2">
                  <div class="row">
                    <div class="col-md-12">
                      <h5 align="center" class="box-title">Surat Kematian</h5>
                    </div>
                  </div>
                  <div class="box-body">
                    <img style="width: 200px;" src="<?php echo base_url('assets/img/surat.png') ?>">
                    <button type="button" class="btn btn-primary col-md-12" data-toggle="modal" data-target="#modal-surat-kematian"> Pilih
                    </button>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>

        <!-- /.box-body -->
      </div><br>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


    <!-- Modals Surat Keterangan -->
<div class="modal modal-info fade" id="modal-surat-keterangan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Buat Surat Keterangan</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('Template_surat/suratKeteranganAksi'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Anda" value="" required="">
                </div>
                <div class="form-group">
                  <label for="no_ktp">No KTP</label>
                  <input type="text" name="no_ktp" class="form-control" id="no_ktp" placeholder="Masukan Nomor KTP" value="" required="">
                </div>
                <div class="form-group">
                  <label for="tempat_lahir">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" value="" required="">
                </div>
                <div class="form-group">
                  <label for="tgl_lahir">Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="" required="">
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <option>-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-Laki"> Laki-Laki </option>
                    <option value="Perempuan"> Perempuan </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="pendidikan">Pendidikan</label>
                  <select class="form-control" name="pendidikan">
                    <option>-- Pilih Pendidikan --</option>
                    <option value="SD"> SD </option>
                    <option value="SLTP"> SLTP </option>
                    <option value="SLTA"> SLTA </option>
                    <option value="S1"> S1 </option>
                    <option value="S2"> S2 </option>
                    <option value="S3"> S3 </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="agama">Agama</label>
                  <input type="text" name="agama" class="form-control" id="agama" placeholder="Masukan Agama" value="" required="">
                </div>
                <div class="form-group">
                  <label for="pekerjaan">Pekerjaan</label>
                  <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan" value="" required="">
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" name="status">
                    <option>-- Pilih Status --</option>
                    <option value="Lajang"> Lajang </option>
                    <option value="Kawin"> Kawin </option>
                    <option value="Duda"> Duda </option>
                    <option value="Janda"> Janda </option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control" required=""></textarea>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea name="ket" class="form-control"></textarea>
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

    <!-- Modals Surat Keterangan Lainnya-->
<div class="modal modal-info fade" id="modal-surat-keteranganLainnya">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Buat Surat Keterangan Lainnya</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('Template_surat/suratKeteranganLainnyaAksi'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="surat">Jenis Surat</label>
                  <select class="form-control" name="surat" required="">
                    <option>-- Pilih Jenis Surat --</option>
                    <option value="SURAT DOMISILI"> Domisili </option>
                    <option value="SURAT USAHA"> Usaha </option>
                    <option value="SURAT PINDAH"> Pindah </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Anda" value="" required="">
                </div>
                <div class="form-group">
                  <label for="no_ktp">No KTP</label>
                  <input type="text" name="no_ktp" class="form-control" id="no_ktp" placeholder="Masukan Nomor KTP" value="" required="">
                </div>
                <div class="form-group">
                  <label for="tempat_lahir">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" value="" required="">
                </div>
                <div class="form-group">
                  <label for="tgl_lahir">Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="" required="">
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <option>-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-Laki"> Laki-Laki </option>
                    <option value="Perempuan"> Perempuan </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="pendidikan">Pendidikan</label>
                  <select class="form-control" name="pendidikan">
                    <option>-- Pilih Pendidikan --</option>
                    <option value="SD"> SD </option>
                    <option value="SLTP"> SLTP </option>
                    <option value="SLTA"> SLTA </option>
                    <option value="S1"> S1 </option>
                    <option value="S2"> S2 </option>
                    <option value="S3"> S3 </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="agama">Agama</label>
                  <input type="text" name="agama" class="form-control" id="agama" placeholder="Masukan Agama" value="" required="">
                </div>
                <div class="form-group">
                  <label for="pekerjaan">Pekerjaan</label>
                  <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan" value="" required="">
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" name="status">
                    <option>-- Pilih Status --</option>
                    <option value="Lajang"> Lajang </option>
                    <option value="Kawin"> Kawin </option>
                    <option value="Duda"> Duda </option>
                    <option value="Janda"> Janda </option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control" required=""></textarea>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea name="ket" class="form-control"></textarea>
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


    <!-- Modals Surat Kelahiran -->
<div class="modal modal-info fade" id="modal-surat-kelahiran">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Buat Surat Kelahiran</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('Template_surat/suratKelahiranAksi'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama Bayi Lahir</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Anda" value="" required="">
                </div>
                <div class="form-group">
                  <label for="tempat_lahir">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" value="" required="">
                </div>
                <div class="form-group">
                  <label for="tgl_lahir">Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="" required="">
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <option>-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-Laki"> Laki-Laki </option>
                    <option value="Perempuan"> Perempuan </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nama_ibu">Nama Ibu</label>
                  <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Nama Ibu" value="" required="">
                </div>
                <div class="form-group">
                  <label for="nama_ayah">Nama Ayah</label>
                  <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Nama Ayah" value="" required="">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control" required=""></textarea>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea name="ket" class="form-control"></textarea>
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

    <!-- Modals Surat Kematian -->
<div class="modal modal-info fade" id="modal-surat-kematian">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Buat Surat Kematian</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('Template_surat/suratKematianAksi'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama" required="">
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <option>-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-Laki"> Laki-Laki </option>
                    <option value="Perempuan"> Perempuan </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="umur">Umur</label>
                  <input type="number" name="umur" class="form-control" id="umur" placeholder="Masukan Umur" required="">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label><b>"TELAH MENINGGAL DUNIA" Pada :</b></label>
                </div>
                <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <input type="date" name="tanggal" class="form-control" id="tanggal" required="">
                </div>
                <div class="form-group">
                  <label for="hari">Hari</label>
                  <select class="form-control" name="hari">
                    <option>-- Pilih Hari --</option>
                    <option value="Senin"> Senin </option>
                    <option value="Selasa"> Selasa </option>
                    <option value="Rabu"> Rabu </option>
                    <option value="Kamis"> Kamis </option>
                    <option value="Jumat"> Jumat </option>
                    <option value="Sabtu"> Sabtu </option>
                    <option value="Minggu"> Minggu </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="di">Di</label>
                  <input type="text" name="di" class="form-control" id="di" required="">
                </div>
                <div class="form-group">
                  <label>Keterangan/Penyebab</label>
                  <textarea name="ket" class="form-control"></textarea>
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


