    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php echo $this->session->flashdata('pesan'); ?>
        <!-- Small boxes (Stat box) -->
        <div class="row">

    <div class="col-md-3">
      <!-- Profile Image -->
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <form method="post" action="<?php echo base_url('Myprofile/updatePhoto/'.$warga['id_penduduk']); ?>" enctype="multipart/form-data">
            <?php if($warga['photo'] == NULL) { ?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/default.jpg'); ?>" alt="User profile picture">
            <?php }else{ ?>
            <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/uploads/'.$warga['photo']); ?>" alt="User profile picture">
            <?php } ?>
            <h3 class="profile-username text-center"><?php echo $warga['nama'] ?></h3>

            <p class="text-muted text-center"><?php echo $warga['no_ktp'] ?></p>

            <input type="file" name="photo" class="form-control" placeholder="Update Photo" required="">
            <button type="submit" class="btn btn-primary btn-block">Update Photo</button>
          </form>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <!-- About Me Box -->
      <div class="card card-primary card-outline">
        <div class="card-header p-2">
          <div class="row">
            <div class="col-md-7">
              <h3 class="box-title">Detil Data</h3>
            </div>
            <div class="col-md-5">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary"> Update Data
              </button>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#pass"> Update Password
              </button>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-striped">
            <tr>
              <td style="width: 150px;">No KTP</td>
              <td style="width: 30px;"> : </td>
              <td> <?php echo $warga['no_ktp']; ?></td>
            </tr>
            <tr>
              <td>Nama Lengkap</td>
              <td> : </td>
              <td> <?php echo $warga['nama']; ?></td>
            </tr>
            <tr>
              <td>Agama</td>
              <td> : </td>
              <td> <?php echo $warga['agama']; ?></td>
            </tr>
            <tr>
              <td>Tempat Lahir</td>
              <td> : </td>
              <td> <?php echo $warga['tempat_lahir']; ?></td>
            </tr>
            <tr>
              <td>Tanggal Lahir</td>
              <td> : </td>
              <td> <?php echo $warga['tgl_lahir']; ?></td>
            </tr>
            <tr>
              <td>Jenik Kelamin</td>
              <td> : </td>
              <td> <?php echo $warga['jk']; ?></td>
            </tr>
            <tr>
              <td>Golongan Darah</td>
              <td> : </td>
              <td> <?php echo $warga['golongan_darah']; ?></td>
            </tr>
            <tr>
              <td>Warga Negara</td>
              <td> : </td>
              <td> <?php echo $warga['warga_negara']; ?></td>
            </tr>
            <tr>
              <td>Pendidikan</td>
              <td> : </td>
              <td> <?php echo $warga['pendidikan']; ?></td>
            </tr>
            <tr>
              <td>Pekerjaan</td>
              <td> : </td>
              <td> <?php echo $warga['pekerjaan']; ?></td>
            </tr>
            <tr>
              <td>Status</td>
              <td> : </td>
              <td> <?php echo $warga['status']; ?></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td> : </td>
              <td> <?php echo $warga['alamat']; ?></td>
            </tr>
          </table>
          <br>
          <hr>
          
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


    <!-- Modals Update Password -->
<div class="modal modal-info fade" id="pass">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Password</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('Myprofile/updatePass/'.$warga['id_penduduk']); ?>">
              <div class="box-body">
                <p>Masukan password baru, password lama akan tertimpa!</p>
                <div class="form-group">
                  <label for="password">Password Baru</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password Baru" required="">
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

    <!-- Modals Data Penduduk -->
<div class="modal modal-info fade" id="modal-primary">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Data Saya</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('Penduduk/update/'.$warga['id_penduduk']); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="no_ktp">No. KTP</label>
                  <input type="text" name="no_ktp" class="form-control" id="no_ktp" placeholder="Masukan No KTP" value="<?php echo $warga['no_ktp'] ?>">
                </div>
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Lengkap" value="<?php echo $warga['nama'] ?>">
                </div>
                <div class="form-group">
                  <label for="agama">Agama</label>
                  <select class="form-control" name="agama">
                    <option>-- Agama --</option>
                    <?php $a = $warga['agama']; ?>
                    <option <?php echo ($a == 'Islam')? "selected": ""?>> Islam </option>
                    <option <?php echo ($a == 'Kristen')? "selected": ""?>> Kristen </option>
                    <option <?php echo ($a == 'Hindu')? "selected": ""?>> Hindu </option>
                    <option <?php echo ($a == 'Budha')? "selected": ""?>> Budha </option>
                    <option <?php echo ($a == 'Lainnya')? "selected": ""?>> Lainnya </option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" placeholder="Kota/Kabupaten" value="<?php echo $warga['tempat_lahir'] ?>">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" class="form-control" placeholder="Kota/Kabupaten" value="<?php echo $warga['tgl_lahir'] ?>">
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <option>--Pilih Jenis Kelamin--</option>
                    <?php $jk = $warga['jk']; ?>
                    <option <?php echo ($jk == 'Laki-Laki')? "selected": ""?>> Laki-Laki </option>
                    <option <?php echo ($jk == 'Perempuan')? "selected": ""?>> Perempuan </option>
                    <option <?php echo ($jk == 'Lainnya')? "selected": ""?>> Lainnya </option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Golongan Darah</label>
                  <input type="text" name="golongan_darah" class="form-control" placeholder="A/B/O/..." value="<?php echo $warga['golongan_darah'] ?>">
                </div>
                <div class="form-group">
                  <label for="warga_negara">Warga Negara</label>
                  <select class="form-control" name="warga_negara">
                    <option>--Pilih Warga Negara--</option>
                    <?php $w = $warga['warga_negara'] ?>
                    <option <?php echo ($w == 'WNI')? "selected" : "" ?>> WNI </option>
                    <option <?php echo ($w == 'WNA')? "selected" : "" ?>> WNA </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="pendidikan">Pendidikan</label>
                  <select class="form-control" name="pendidikan">
                    <option>--Pilih Pendidikan--</option>
                    <?php $p = $warga['pendidikan']; ?>
                    <option <?php echo ($p == 'SD')? "selected": ""?>> SD </option>
                    <option <?php echo ($p == 'SMP')? "selected": ""?>> SMP </option>
                    <option <?php echo ($p == 'SMA/SMK')? "selected": ""?>> SMA/SMK </option>
                    <option <?php echo ($p == 'S1')? "selected": ""?>> S1 </option>
                    <option <?php echo ($p == 'S2')? "selected": ""?>> S2 </option>
                    <option <?php echo ($p == 'S3')? "selected": ""?>> S3 </option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" value="<?php echo $warga['pekerjaan'] ?>">
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" name="status">
                    <option>--Pilih Status--</option>
                    <?php $s = $warga['status']; ?>
                    <option <?php echo ($s == 'Lajang')? "selected": ""?>> Lajang </option>
                    <option <?php echo ($s == 'Kawin')? "selected": ""?>> Kawin </option>
                    <option <?php echo ($s == 'Janda')? "selected": ""?>> Janda </option>
                    <option <?php echo ($s == 'Duda')? "selected": ""?>> Duda </option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control"><?php echo $warga['alamat'] ?></textarea>
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