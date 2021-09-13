<!-- Main content -->
<?php if($surat['surat'] == 'SURAT KETERANGAN') { ?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-1"></div>
      <div class="col-10">
        <div class="card card-primary card-outline">
          <div class="card-header p-2">
            <div class="row">
              <div class="col-md-12">
                <h3 class="box-title">Update <?php echo $surat['surat']; ?></h3>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="container">
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('Template_surat/suratKeteranganUpdate/'.$surat['id_surat']); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Anda" value="<?php echo $surat['nama']; ?>" required="">
                </div>
                <div class="form-group">
                  <label for="no_ktp">No KTP</label>
                  <input type="text" name="no_ktp" class="form-control" id="no_ktp" placeholder="Masukan Nomor KTP" value="<?php echo $surat['no_ktp']; ?>" required="">
                </div>
                <div class="form-group">
                  <label for="tempat_lahir">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $surat['tempat_lahir']; ?>" required="">
                </div>
                <div class="form-group">
                  <label for="tgl_lahir">Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?php echo $surat['tgl_lahir']; ?>" required="">
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <?php $j = $surat['jk']; ?>
                    <option>-- Pilih Jenis Kelamin --</option>
                    <option <?php echo ($j == 'Laki-Laki')? "selected": "" ?>> Laki-Laki </option>
                    <option <?php echo ($j == 'Perempuan')? "selected": "" ?>> Perempuan </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="pendidikan">Pendidikan</label>
                  <select class="form-control" name="pendidikan">
                    <?php $srt = $surat['pendidikan']; ?>
                    <option>-- Pilih Pendidikan --</option>
                    <option <?php echo ($srt == 'SD')? "selected": "" ?>> SD </option>
                    <option <?php echo ($srt == 'SLTP')? "selected": "" ?>> SLTP </option>
                    <option <?php echo ($srt == 'SLTA')? "selected": "" ?>> SLTA </option>
                    <option <?php echo ($srt == 'S1')? "selected": "" ?>> S1 </option>
                    <option <?php echo ($srt == 'S2')? "selected": "" ?>> S2 </option>
                    <option <?php echo ($srt == 'S3')? "selected": "" ?>> S3 </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="agama">Agama</label>
                  <input type="text" name="agama" class="form-control" id="agama" placeholder="Masukan Agama" value="<?php echo $surat['agama']; ?>" required="">
                </div>
                <div class="form-group">
                  <label for="pekerjaan">Pekerjaan</label>
                  <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo $surat['pekerjaan']; ?>" required="">
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" name="status">
                    <?php $stt = $surat['status']; ?>
                    <option>-- Pilih Status --</option>
                    <option <?php echo ($stt == 'Lajang')? "selected": "" ?> value="Lajang"> Lajang </option>
                    <option <?php echo ($stt == 'Kawin')? "selected": "" ?> value="Kawin"> Kawin </option>
                    <option <?php echo ($stt == 'Duda')? "selected": "" ?> value="Duda"> Duda </option>
                    <option <?php echo ($stt == 'Janda')? "selected": "" ?> value="Janda"> Janda </option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control" required=""><?php echo $surat['alamat']; ?></textarea>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea name="ket" class="form-control"><?php echo $surat['ket']; ?></textarea>
                </div>
              </div>
              <!-- /.box-body -->
            
            <hr>
            <p align="center"><button type="submit" class="btn btn-primary">Update</button></p>
            </form>
          </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <div class="col-1"></div>
    </div>
  </div>
</section>
<?php }elseif($surat['surat'] == 'SURAT KELAHIRAN') { ?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-1"></div>
      <div class="col-10">
        <div class="card card-primary card-outline">
          <div class="card-header p-2">
            <div class="row">
              <div class="col-md-12">
                <h3 class="box-title">Update <?php echo $surat['surat']; ?></h3>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="container">
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('Template_surat/suratKelahiranUpdate/'.$surat['id_surat']); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama Bayi Lahir</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Anda" value="<?php echo $surat['nama']; ?>" required="">
                </div>
                <div class="form-group">
                  <label for="tempat_lahir">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $surat['tempat_lahir']; ?>" required="">
                </div>
                <div class="form-group">
                  <label for="tgl_lahir">Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?php echo $surat['tgl_lahir']; ?>" required="">
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <?php $j = $surat['jk']; ?>
                    <option>-- Pilih Jenis Kelamin --</option>
                    <option <?php echo ($j == 'Laki-Laki')? "selected": "" ?> value="Laki-Laki"> Laki-Laki </option>
                    <option <?php echo ($j == 'Perempuan')? "selected": "" ?> value="Perempuan"> Perempuan </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nama_ibu">Nama Ibu</label>
                  <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Nama Ibu" value="<?php echo $surat['nama_ibu']; ?>" required="">
                </div>
                <div class="form-group">
                  <label for="nama_ayah">Nama Ayah</label>
                  <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Nama Ayah" value="<?php echo $surat['nama_ayah']; ?>" required="">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control" required=""><?php echo $surat['alamat']; ?></textarea>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea name="ket" class="form-control"><?php echo $surat['ket']; ?></textarea>
                </div>
              </div>
              <!-- /.box-body -->
              <hr>
            <p align="center"><button type="submit" class="btn btn-primary">Update</button></p>
            </form>
          </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <div class="col-1"></div>
    </div>
  </div>
</section>
<?php }elseif($surat['surat'] == 'SURAT KEMATIAN') { ?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-1"></div>
      <div class="col-10">
        <div class="card card-primary card-outline">
          <div class="card-header p-2">
            <div class="row">
              <div class="col-md-12">
                <h3 class="box-title">Update <?php echo $surat['surat']; ?></h3>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="container">
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('Template_surat/suratKematianUpdate/'.$surat['id_surat']); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama" required="" value="<?php echo $surat['nama']; ?>">
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <?php $j = $surat['jk']; ?>
                    <option>-- Pilih Jenis Kelamin --</option>
                    <option <?php echo ($j == 'Laki-Laki')? "selected": "" ?>> Laki-Laki </option>
                    <option <?php echo ($j == 'Perempuan')? "selected": "" ?>> Perempuan </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="umur">Umur</label>
                  <input type="number" name="umur" class="form-control" id="umur" placeholder="Masukan Umur" required="" value="<?php echo $surat['umur']; ?>">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control"><?php echo $surat['alamat']; ?></textarea>
                </div>
                <div class="form-group">
                  <label><b>"TELAH MENINGGAL DUNIA" Pada :</b></label>
                </div>
                <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <input type="date" name="tanggal" class="form-control" id="tanggal" required=""value="<?php echo $surat['tgl_lahir']; ?>">
                </div>
                <div class="form-group">
                  <label for="hari">Hari</label>
                  <select class="form-control" name="hari">
                    <?php $h = $surat['hari']; ?>
                    <option>-- Pilih Hari --</option>
                    <option <?php echo ($h == 'Senin')? "selected": "" ?> value="Senin"> Senin </option>
                    <option <?php echo ($h == 'Selasa')? "selected": "" ?> value="Selasa"> Selasa </option>
                    <option <?php echo ($h == 'Rabu')? "selected": "" ?> value="Rabu"> Rabu </option>
                    <option <?php echo ($h == 'Kamis')? "selected": "" ?> value="Kamis"> Kamis </option>
                    <option <?php echo ($h == 'Jumat')? "selected": "" ?> value="Jumat"> Jumat </option>
                    <option <?php echo ($h == 'Sabtu')? "selected": "" ?> value="Sabtu"> Sabtu </option>
                    <option <?php echo ($h == 'Minggu')? "selected": "" ?> value="Minggu"> Minggu </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="di">Di</label>
                  <input type="text" name="di" class="form-control" id="di" required="" value="<?php echo $surat['tempat_lahir']; ?>">
                </div>
                <div class="form-group">
                  <label>Keterangan/Penyebab</label>
                  <textarea name="ket" class="form-control"><?php echo $surat['ket']; ?></textarea>
                </div>
              </div>
              <!-- /.box-body -->
              <hr>
            <p align="center"><button type="submit" class="btn btn-primary">Update</button></p>
            </form>
          </div>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <div class="col-1"></div>
    </div>
  </div>
</section>
<?php }else{ ?>
  <section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-1"></div>
      <div class="col-10">
        <div class="card card-primary card-outline">
          <div class="card-header p-2">
            <div class="row">
              <div class="col-md-12">
                <h3 class="box-title">Update Surat Keterangan Lainnya (<?php echo $surat['surat']; ?>)</h3>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="container">
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('Template_surat/suratKeteranganLainnyaUpdate/'.$surat['id_surat']); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="surat">Jenis Surat</label>
                  <select class="form-control" name="surat" required="">
                    <?php $s = $surat['surat']; ?>
                    <option <?php echo ($s == 'SURAT DOMISILI')? "selected": "" ?> value="SURAT DOMISILI"> Domisili </option>
                    <option <?php echo ($s == 'SURAT USAHA')? "selected": "" ?> value="SURAT USAHA"> Usaha </option>
                    <option <?php echo ($s == 'SURAT PINDAH')? "selected": "" ?> value="SURAT PINDAH"> Pindah </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Anda" value="<?php echo $surat['nama']; ?>" required="">
                </div>
                <div class="form-group">
                  <label for="no_ktp">No KTP</label>
                  <input type="text" name="no_ktp" class="form-control" id="no_ktp" placeholder="Masukan Nomor KTP" value="<?php echo $surat['no_ktp']; ?>" required="">
                </div>
                <div class="form-group">
                  <label for="tempat_lahir">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $surat['tempat_lahir']; ?>" required="">
                </div>
                <div class="form-group">
                  <label for="tgl_lahir">Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?php echo $surat['tgl_lahir']; ?>" required="">
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select class="form-control" name="jk">
                    <?php $j = $surat['jk']; ?>
                    <option>-- Pilih Jenis Kelamin --</option>
                    <option <?php echo ($j == 'Laki-Laki')? "selected": "" ?>> Laki-Laki </option>
                    <option <?php echo ($j == 'Perempuan')? "selected": "" ?>> Perempuan </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="pendidikan">Pendidikan</label>
                  <select class="form-control" name="pendidikan">
                    <?php $srt = $surat['pendidikan']; ?>
                    <option>-- Pilih Pendidikan --</option>
                    <option <?php echo ($srt == 'SD')? "selected": "" ?>> SD </option>
                    <option <?php echo ($srt == 'SLTP')? "selected": "" ?>> SLTP </option>
                    <option <?php echo ($srt == 'SLTA')? "selected": "" ?>> SLTA </option>
                    <option <?php echo ($srt == 'S1')? "selected": "" ?>> S1 </option>
                    <option <?php echo ($srt == 'S2')? "selected": "" ?>> S2 </option>
                    <option <?php echo ($srt == 'S3')? "selected": "" ?>> S3 </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="agama">Agama</label>
                  <input type="text" name="agama" class="form-control" id="agama" placeholder="Masukan Agama" value="<?php echo $surat['agama']; ?>" required="">
                </div>
                <div class="form-group">
                  <label for="pekerjaan">Pekerjaan</label>
                  <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo $surat['pekerjaan']; ?>" required="">
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" name="status">
                    <?php $stt = $surat['status']; ?>
                    <option>-- Pilih Status --</option>
                    <option <?php echo ($stt == 'Lajang')? "selected": "" ?> value="Lajang"> Lajang </option>
                    <option <?php echo ($stt == 'Kawin')? "selected": "" ?> value="Kawin"> Kawin </option>
                    <option <?php echo ($stt == 'Duda')? "selected": "" ?> value="Duda"> Duda </option>
                    <option <?php echo ($stt == 'Janda')? "selected": "" ?> value="Janda"> Janda </option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea name="alamat" class="form-control" required=""><?php echo $surat['alamat']; ?></textarea>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea name="ket" class="form-control"><?php echo $surat['ket']; ?></textarea>
                </div>
              </div>
              <!-- /.box-body -->
            
            <hr>
            <p align="center"><button type="submit" class="btn btn-primary">Update</button></p>
            </form>
            </div>
            <br>
          </div>

          <!-- /.box-body -->
        </div>
      </div>
      <div class="col-1"></div>
    </div>
  </div>
</section>
<?php } ?>