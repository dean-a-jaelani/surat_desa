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
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <img style="width: 70px;" src="<?php echo base_url('assets/img/dlogo.png'); ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                <td width="400">&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $perihal; ?></td>
              </tr>
              <tr>
                <td>Tasikmalaya</td>
                <td width="">&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('Y-m-d'); ?></td>
              </tr>
            </table>

            <br>
            <!-- Bagian atas surat, sambutan surat -->
            <table align="center" >
              <tr>
                <td width="500">
                  <font>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sambutan; ?></font>
                </td>
              </tr>
            </table>

            <table align="center" >
              <tr>
                <td width="">Nama</td>
                <td width="370">: -</td>
              </tr>
              <tr>
                <td>No. KTP</td>
                <td width="">: -</td>
              </tr>
              <tr>
                <td>Tempat Tanggal Lahir</td>
                <td width="">: -</td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td width="">: -</td>
              </tr>
              <tr>
                <td>Pendidikan</td>
                <td width="">: -</td>
              </tr>
              <tr>
                <td>Agama</td>
                <td>: -</td>
              </tr>
              <tr>
                <td>Pekerjaan</td>
                <td>: -</td>
              </tr>
              <tr>
                <td>Status</td>
                <td>: -</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>: -</td>
              </tr>
              <tr>
                <td>Keterangan</td>
                <td>: -</td>
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
                <td class="text2">Yang Bersangkutan <br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama </td>

                <td></td>
                <td class="text2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kepala Desa Sukanagalih <br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Kades</td>
              </tr>
            </table>
            <br><br><br><br>
    </body>
</html>