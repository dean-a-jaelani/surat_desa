<?php if($isi['surat'] == 'SURAT KETERANGAN') { ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title_pdf;?></title>
    </head>
    <body>
            <table align="center">
              <tr>
                <td>
                  <br><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <img style="width: 70px;" src="<?php echo base_url('assets/img/dlogo.png'); ?>">
                </td>
                <td>
                  <center>
                    <b><font size="4">PEMERINTAH KABUPATEN TASIKMALAYA</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <font size="4">KECAMATAN RAJAPOLAH</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <font size="4">DESA SUKANAGALIH</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></b>
                    <font size="2">Sukanagalih, Rajapolah, Tasikmalaya. Telp. 00999787763</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </center>
                </td>
              </tr>
              <tr>
                <td colspan="2"><hr></td>
              </tr>
            </table>

            <br>
              <table align="center">
              <tr>
                <td>Perihal</td>
                <td width="400">&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $isi['surat']; ?></td>
              </tr>
              <tr>
                <td>Tasikmalaya</td>
                <td width="">&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $isi['created_at']; ?></td>
              </tr>
            </table>     

            <br>
            <!-- Bagian atas sambutan surat -->
            <table align="center" >
              <tr>
                <td width="400">
                  <font>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sambutan; ?></font>
                </td>
              </tr>
            </table>

            <table align="center" >
              <tr>
                <td width="">Nama</td>
                <td width="370">: <?php echo $isi['nama']; ?></td>
              </tr>
              <tr>
                <td>No. KTP</td>
                <td width="">: <?php echo $isi['no_ktp']; ?></td>
              </tr>
              <tr>
                <td>Tempat Tanggal Lahir</td>
                <td width="">: <?php echo $isi['tempat_lahir']; ?>, <?php echo $isi['tgl_lahir']; ?></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td width="">: <?php echo $isi['jk']; ?></td>
              </tr>
              <tr>
                <td>Pendidikan</td>
                <td width="">: <?php echo $isi['pendidikan']; ?></td>
              </tr>
              <tr>
                <td>Agama</td>
                <td>: <?php echo $isi['agama']; ?></td>
              </tr>
              <tr>
                <td>Pekerjaan</td>
                <td>: <?php echo $isi['pekerjaan']; ?></td>
              </tr>
              <tr>
                <td>Status</td>
                <td>: <?php echo $isi['status']; ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>: <?php echo $isi['alamat']; ?></td>
              </tr>
              <tr>
                <td>Keterangan</td>
                <td>: <?php echo $isi['ket']; ?></td>
              </tr>
            </table>
            <table align="center">
              <tr>
                <td width="500">
                  <font>Demikian Surat Keterangan ini diberikan, untuk dapat digunakan sebagaimana mestinya.</font>
                </td>
              </tr>
            </table>
            <br><br><br>
            <table align="center">
              <tr>
                <td></td>
                <td class="text2">Yang Bersangkutan <br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $isi['nama']; ?> </td>

                <td></td>
                <td class="text2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kepala Desa Sukanagalih <br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Kades</td>
              </tr>
            </table>
            <br><br><br><br>
    </body>
</html>
<?php }elseif($isi['surat'] == 'SURAT KELAHIRAN') { ?>
  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title_pdf;?></title>
    </head>
    <body>
            <table align="center">
              <tr>
                <td>
                  <br><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <img style="width: 70px;" src="<?php echo base_url('assets/img/dlogo.png'); ?>">
                </td>
                <td>
                  <center>
                    <b><font size="4">PEMERINTAH KABUPATEN TASIKMALAYA</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <font size="4">KECAMATAN RAJAPOLAH</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <font size="4">DESA SUKANAGALIH</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></b>
                    <font size="2">Sukanagalih, Rajapolah, Tasikmalaya. Telp. 00999787763</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </center>
                </td>
              </tr>
              <tr>
                <td colspan="2"><hr></td>
              </tr>
            </table>

            <br>
            <table align="center">
              <tr>
                <td>Perihal</td>
                <td width="400">&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $isi['surat']; ?></td>
              </tr>
              <tr>
                <td>Tasikmalaya</td>
                <td width="">&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $isi['created_at']; ?></td>
              </tr>
            </table>            

            <br>
            <!-- Bagian atas sambutan surat -->
            <table align="center" >
              <tr>
                <td width="400">
                  <font>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sambutan; ?></font>
                </td>
              </tr>
            </table>

            <table align="center" >
              <tr>
                <td width="">Nama</td>
                <td width="370">: <?php echo $isi['nama']; ?></td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td width="">: <?php echo $isi['tgl_lahir']; ?></td>
              </tr>
              <tr>
                <td>DI</td>
                <td width="">: <?php echo $isi['tempat_lahir']; ?></td>
              </tr>
              <tr>
                <td><b>TELAH LAHIR SEORANG ANAK </b></td>
                <td><b>: "<?php echo $isi['jk']; ?>"</b></td>
              </tr>
              <tr>
                <td>Ibu</td>
                <td>: <?php echo $isi['nama_ibu']; ?></td>
              </tr>
              <tr>
                <td>Ayah</td>
                <td>: <?php echo $isi['nama_ayah']; ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>: <?php echo $isi['alamat']; ?></td>
              </tr>
              <tr>
                <td>Keterangan</td>
                <td>: <?php echo $isi['ket']; ?></td>
              </tr>
            </table>
            <table align="center">
              <tr>
                <td width="500">
                  <font>Demikian Surat Kelahiran ini diberikan, untuk dapat digunakan sebagaimana mestinya.</font>
                </td>
              </tr>
            </table>
            <br><br><br>
            <table align="center">
              <tr>
                <td></td>
                <td class="text2">Nama Ayah <br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $isi['nama_ayah']; ?> </td>

                <td></td>
                <td class="text2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kepala Desa Sukanagalih <br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Kades</td>
              </tr>
            </table>
            <br><br><br><br>   
    </body>
</html>
<?php }elseif($isi['surat'] == 'SURAT KEMATIAN') { ?>
  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title_pdf;?></title>
    </head>
    <body>
            <table align="center">
              <tr>
                <td>
                  <br><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <img style="width: 70px;" src="<?php echo base_url('assets/img/dlogo.png'); ?>">
                </td>
                <td>
                  <center>
                    <b><font size="4">PEMERINTAH KABUPATEN TASIKMALAYA</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <font size="4">KECAMATAN RAJAPOLAH</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <font size="4">DESA SUKANAGALIH</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></b>
                    <font size="2">Sukanagalih, Rajapolah, Tasikmalaya. Telp. 00999787763</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </center>
                </td>
              </tr>
              <tr>
                <td colspan="2"><hr></td>
              </tr>
            </table>

            <br>
            <table align="center">
              <tr>
                <td>Perihal</td>
                <td width="400">&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $isi['surat']; ?></td>
              </tr>
              <tr>
                <td>Tasikmalaya</td>
                <td width="">&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $isi['created_at']; ?></td>
              </tr>
            </table>            

            <br>
            <!-- Bagian atas sambutan surat -->
            <table align="center" >
              <tr>
                <td width="400">
                  <font>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sambutan; ?></font>
                </td>
              </tr>
            </table>

            <table align="center" >
              <tr>
                <td width="">Nama</td>
                <td width="370">: <?php echo $isi['nama']; ?></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td width="">: <?php echo $isi['jk']; ?></td>
              </tr>
              <tr>
                <td>Umur</td>
                <td width="">: <?php echo $isi['umur']; ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td width="">: <?php echo $isi['alamat']; ?></td>
              </tr>
              <tr>
                <td></td>
                <td><b>"TELAH MENINGGAL DUNIA" Pada : </b></td>
              </tr>
              <tr>
                <td>Hari</td>
                <td>: <?php echo $isi['hari']; ?></td>
              </tr>
              <tr>
                <td>Tanggal</td>
                <td>: <?php echo $isi['tgl_lahir']; ?></td>
              </tr>
              <tr>
                <td>Di</td>
                <td>: <?php echo $isi['tempat_lahir']; ?></td>
              </tr>
              <tr>
                <td>Keterangan/Penyebab</td>
                <td>: <?php echo $isi['ket']; ?></td>
              </tr>
            </table>
            <table align="center">
              <tr>
                <td width="500">
                  <font>Demikian Surat Kelahiran ini diberikan, untuk dapat digunakan sebagaimana mestinya.</font>
                </td>
              </tr>
            </table>
            <br><br><br>
            <table align="center">
              <tr>
                <td></td>

                <td></td>
                <td class="text2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kepala Desa Sukanagalih <br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Kades</td>
              </tr>
            </table>
            <br><br><br><br>   
    </body>
</html>
<?php }else{ ?>
  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title_pdf;?></title>
    </head>
    <body>
            <table align="center">
              <tr>
                <td>
                  <br><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <img style="width: 70px;" src="<?php echo base_url('assets/img/dlogo.png'); ?>">
                </td>
                <td>
                  <center>
                    <b><font size="4">PEMERINTAH KABUPATEN TASIKMALAYA</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <font size="4">KECAMATAN RAJAPOLAH</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <font size="4">DESA SUKANAGALIH</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></b>
                    <font size="2">Sukanagalih, Rajapolah, Tasikmalaya. Telp. 00999787763</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </center>
                </td>
              </tr>
              <tr>
                <td colspan="2"><hr></td>
              </tr>
            </table>

            <br>
              <table align="center">
              <tr>
                <td>Perihal</td>
                <td width="400">&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $isi['surat']; ?></td>
              </tr>
              <tr>
                <td>Tasikmalaya</td>
                <td width="">&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $isi['created_at']; ?></td>
              </tr>
            </table>     

            <br>
            <!-- Bagian atas sambutan surat -->
            <table align="center" >
              <tr>
                <td width="400">
                  <font>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sambutan; ?></font>
                </td>
              </tr>
            </table>

            <table align="center" >
              <tr>
                <td width="">Nama</td>
                <td width="370">: <?php echo $isi['nama']; ?></td>
              </tr>
              <tr>
                <td>No. KTP</td>
                <td width="">: <?php echo $isi['no_ktp']; ?></td>
              </tr>
              <tr>
                <td>Tempat Tanggal Lahir</td>
                <td width="">: <?php echo $isi['tempat_lahir']; ?>, <?php echo $isi['tgl_lahir']; ?></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td width="">: <?php echo $isi['jk']; ?></td>
              </tr>
              <tr>
                <td>Pendidikan</td>
                <td width="">: <?php echo $isi['pendidikan']; ?></td>
              </tr>
              <tr>
                <td>Agama</td>
                <td>: <?php echo $isi['agama']; ?></td>
              </tr>
              <tr>
                <td>Pekerjaan</td>
                <td>: <?php echo $isi['pekerjaan']; ?></td>
              </tr>
              <tr>
                <td>Status</td>
                <td>: <?php echo $isi['status']; ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>: <?php echo $isi['alamat']; ?></td>
              </tr>
              <tr>
                <td>Keterangan</td>
                <td>: <?php echo $isi['ket']; ?></td>
              </tr>
            </table>
            <table align="center">
              <tr>
                <td width="500">
                  <font>Demikian Surat Keterangan ini diberikan, untuk dapat digunakan sebagaimana mestinya.</font>
                </td>
              </tr>
            </table>
            <br><br><br>
            <table align="center">
              <tr>
                <td></td>
                <td class="text2">Yang Bersangkutan <br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $isi['nama']; ?> </td>

                <td></td>
                <td class="text2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kepala Desa Sukanagalih <br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Kades</td>
              </tr>
            </table>
            <br><br><br><br>
    </body>
</html>

<?php } ?>