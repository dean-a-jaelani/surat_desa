<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template_surat extends CI_Controller {

	public function index()
	{	
		$data['title'] = '';
		$data['warga'] = $this->M_warga->getData();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$data);
		$this->load->view('index_surat');
		$this->load->view('templates/footer');
	}

	public function arsip()
	{	
		$data['title'] = 'Arsip Surat Yang Pernah Dibuat';
		$data['warga'] = $this->M_warga->getData();
		$data['arsip'] = $this->M_warga->getDataSurat();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$data);
		$this->load->view('arsip_surat',$data);
		$this->load->view('templates/footer');
	}

//SESSION SURAT BELUM TERAMBIL.. PERLU DIPERBAIKI
	public function arsipWarga()
	{	
		$warga = $this->M_warga->getData();
		$data['title'] = 'Arsip Surat Yang Pernah Dibuat';
		$data['warga'] = $this->M_warga->getData();
		$data['arsip'] = $this->M_warga->getSurat($warga['id_penduduk'])->result();
		//session surat
		//$data['arsip'] = $this->M_warga->getDataSurat()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$data);
		$this->load->view('arsip_surat',$data);
		$this->load->view('templates/footer');
	}


	public function suratKeterangan()
	{
		$data['title'] = 'Surat';
		$data['warga'] = $this->M_warga->getData();
		$data['perihal'] = 'SURAT KETERANGAN';
		$data['sambutan'] = 'Yang bertanda tangan dibawah ini , Kepala Desa Sukanagalih, Kecamatan Rajapolah, Kabupaten Tasikmalaya menerangkan dengan sebenarnya bahwa orang tersebut dibawah ini :';
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$data);
		$this->load->view('template_surat',$data);
		$this->load->view('templates/footer');
	}

//SURAT KETERANGAN
	public function suratKeteranganAksi()
	{	
		$warga = $this->M_warga->getData();

		if($warga['level'] == 'warga'){
		$data = [
			'id_penduduk' => $warga['id_penduduk'],
			'surat' => 'SURAT KETERANGAN',
			'nama' => $this->input->post('nama'),
			'no_ktp' => $this->input->post('no_ktp'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jk' => $this->input->post('jk'),
			'pendidikan' => $this->input->post('pendidikan'),
			'agama' => $this->input->post('agama'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'status' => $this->input->post('status'),
			'alamat' => $this->input->post('alamat'),
			'ket' => $this->input->post('ket'),
			'created_at' => date('Y-m-d')
		];

			$this->db->insert('surat', $data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
		            Surat <b>KETERANGAN</b> Berhasil Dibuat!. Silahkan Cetak Atau Print
		          </div>');
			return redirect('Template_surat/arsipWarga');
		}else{
			$data = [
			'surat' => 'SURAT KETERANGAN',
			'nama' => $this->input->post('nama'),
			'no_ktp' => $this->input->post('no_ktp'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jk' => $this->input->post('jk'),
			'pendidikan' => $this->input->post('pendidikan'),
			'agama' => $this->input->post('agama'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'status' => $this->input->post('status'),
			'alamat' => $this->input->post('alamat'),
			'ket' => $this->input->post('ket'),
			'created_at' => date('Y-m-d')
		];

			$this->db->insert('surat', $data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
		            Surat <b>KETERANGAN</b> Berhasil Dibuat!. Silahkan Cetak Atau Print
		          </div>');
			return redirect('Template_surat/arsip');
		}
	}


//SURAT KETERANGAN LAINNYA
	public function suratKeteranganLainnyaAksi()
	{	
		$warga = $this->M_warga->getData();

		if($warga['level'] == 'warga'){
		$data = [
			'id_penduduk' => $warga['id_penduduk'],
			'surat' => $this->input->post('surat'),
			'nama' => $this->input->post('nama'),
			'no_ktp' => $this->input->post('no_ktp'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jk' => $this->input->post('jk'),
			'pendidikan' => $this->input->post('pendidikan'),
			'agama' => $this->input->post('agama'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'status' => $this->input->post('status'),
			'alamat' => $this->input->post('alamat'),
			'ket' => $this->input->post('ket'),
			'created_at' => date('Y-m-d')
		];

			$this->db->insert('surat', $data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
		            Surat <b>KETERANGAN LAINNYA</b> Berhasil Dibuat!. Silahkan Cetak Atau Print
		          </div>');
			return redirect('Template_surat/arsipWarga');
		}else{
			$data = [
			'surat' => $this->input->post('surat'),
			'nama' => $this->input->post('nama'),
			'no_ktp' => $this->input->post('no_ktp'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jk' => $this->input->post('jk'),
			'pendidikan' => $this->input->post('pendidikan'),
			'agama' => $this->input->post('agama'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'status' => $this->input->post('status'),
			'alamat' => $this->input->post('alamat'),
			'ket' => $this->input->post('ket'),
			'created_at' => date('Y-m-d')
		];

			$this->db->insert('surat', $data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
		            Surat <b>KETERANGAN LAINNYA</b> Berhasil Dibuat!. Silahkan Cetak Atau Print
		          </div>');
			return redirect('Template_surat/arsip');
		}
	}

//SURAT KELAHIRAN
	public function suratKelahiranAksi()
	{
		$warga = $this->M_warga->getData();
		if($warga['level'] == 'warga'){
			$data = [
				'id_penduduk' => $warga['id_penduduk'],
				'surat' => 'SURAT KELAHIRAN',
				'nama' => $this->input->post('nama'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'jk' => $this->input->post('jk'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'alamat' => $this->input->post('alamat'),
				'ket' => $this->input->post('ket'),
				'created_at' => date('Y-m-d')
			];

			$this->db->insert('surat', $data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
		            Surat <b>KELAHIRAN</b> Berhasil Dibuat!. Silahkan Cetak Atau Print
		          </div>');
			return redirect('Template_surat/arsipWarga');
		}else{
			$data = [
				'surat' => 'SURAT KELAHIRAN',
				'nama' => $this->input->post('nama'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'jk' => $this->input->post('jk'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'alamat' => $this->input->post('alamat'),
				'ket' => $this->input->post('ket'),
				'created_at' => date('Y-m-d')
			];

			$this->db->insert('surat', $data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
		            Surat <b>KELAHIRAN</b> Berhasil Dibuat!. Silahkan Cetak Atau Print
		          </div>');
			return redirect('Template_surat/arsip');
		}
	}


//SURAT KEMATIAN
	public function suratKematianAksi()
	{
		$warga = $this->M_warga->getData();
		if($warga['level'] == 'warga'){
			$data = [
				'id_penduduk' => $warga['id_penduduk'],
				'surat' => 'SURAT KEMATIAN',
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'umur' => $this->input->post('umur'),
				'alamat' => $this->input->post('alamat'),
				'hari' => $this->input->post('hari'),
				'tgl_lahir' => $this->input->post('tanggal'),
				'tempat_lahir' => $this->input->post('di'),
				'ket' => $this->input->post('ket'),
				'created_at' => date('Y-m-d')
			];

			$this->db->insert('surat', $data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
		            Surat <b>KEMATIAN</b> Berhasil Dibuat!. Silahkan Cetak Atau Print
		          </div>');
			return redirect('Template_surat/arsipWarga');
		}else{
			$data = [
				'surat' => 'SURAT KEMATIAN',
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'umur' => $this->input->post('umur'),
				'alamat' => $this->input->post('alamat'),
				'hari' => $this->input->post('hari'),
				'tgl_lahir' => $this->input->post('tanggal'),
				'tempat_lahir' => $this->input->post('di'),
				'ket' => $this->input->post('ket'),
				'created_at' => date('Y-m-d')
			];

			$this->db->insert('surat', $data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
		            Surat <b>KEMATIAN</b> Berhasil Dibuat!. Silahkan Cetak Atau Print
		          </div>');
			return redirect('Template_surat/arsip');
		}
	}

//EDIT SURAT 
	public function edit($id_surat)
	{
		$where = ['id_surat' => $id_surat];
		
		$data['warga'] = $this->M_warga->getData();
		$data['surat'] = $this->db->get_where('surat', $where)->row_array();
		$data['title'] = "Edit Surat";
		//var_dump($data['surat']);die();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$data);
		$this->load->view('edit_surat',$data);
		$this->load->view('templates/footer');
	}

		public function suratKeteranganUpdate($id_surat)
	{
		$where = ['id_surat' => $id_surat];
		$warga = $this->M_warga->getData();

		if($warga['level'] == 'warga'){
		$data = [
			'id_penduduk' => $warga['id_penduduk'],
			'nama' => $this->input->post('nama'),
			'no_ktp' => $this->input->post('no_ktp'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jk' => $this->input->post('jk'),
			'pendidikan' => $this->input->post('pendidikan'),
			'agama' => $this->input->post('agama'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'status' => $this->input->post('status'),
			'alamat' => $this->input->post('alamat'),
			'ket' => $this->input->post('ket'),
			'created_at' => date('Y-m-d')
		];

			$this->db->update('surat', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
		            Surat <b>KETERANGAN</b> Berhasil DiUpdate!. Silahkan Cetak Atau Print
		          </div>');
			return redirect('Template_surat/arsipWarga');
		}else{
			$data = [
			'nama' => $this->input->post('nama'),
			'no_ktp' => $this->input->post('no_ktp'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jk' => $this->input->post('jk'),
			'pendidikan' => $this->input->post('pendidikan'),
			'agama' => $this->input->post('agama'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'status' => $this->input->post('status'),
			'alamat' => $this->input->post('alamat'),
			'ket' => $this->input->post('ket'),
			'created_at' => date('Y-m-d')
		];

			$this->db->update('surat', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
		            Surat <b>KETERANGAN</b> Berhasil DiUpdate!. Silahkan Cetak Atau Print
		          </div>');
			return redirect('Template_surat/arsip');
		}
	}

	public function suratKeteranganLainnyaUpdate($id_surat)
	{
		$where = ['id_surat' => $id_surat];
		$warga = $this->M_warga->getData();

		if($warga['level'] == 'warga'){
		$data = [
			'id_penduduk' => $warga['id_penduduk'],
			'surat' => $this->input->post('surat'),
			'nama' => $this->input->post('nama'),
			'no_ktp' => $this->input->post('no_ktp'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jk' => $this->input->post('jk'),
			'pendidikan' => $this->input->post('pendidikan'),
			'agama' => $this->input->post('agama'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'status' => $this->input->post('status'),
			'alamat' => $this->input->post('alamat'),
			'ket' => $this->input->post('ket'),
			'created_at' => date('Y-m-d')
		];

			$this->db->update('surat', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
		            Surat <b>KETERANGAN LAINNYA</b> Berhasil DiUpdate!. Silahkan Cetak Atau Print
		          </div>');
			return redirect('Template_surat/arsipWarga');
		}else{
			$data = [
			'surat' => $this->input->post('surat'),
			'nama' => $this->input->post('nama'),
			'no_ktp' => $this->input->post('no_ktp'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jk' => $this->input->post('jk'),
			'pendidikan' => $this->input->post('pendidikan'),
			'agama' => $this->input->post('agama'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'status' => $this->input->post('status'),
			'alamat' => $this->input->post('alamat'),
			'ket' => $this->input->post('ket'),
			'created_at' => date('Y-m-d')
		];

			$this->db->update('surat', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
		            Surat <b>KETERANGAN LAINNYA</b> Berhasil DiUpdate!. Silahkan Cetak Atau Print
		          </div>');
			return redirect('Template_surat/arsip');
		}
	}

	public function suratKelahiranUpdate($id_surat)
	{
		$where = ['id_surat' => $id_surat];
		$warga = $this->M_warga->getData();
		if($warga['level'] == 'warga'){
			$data = [
				'id_penduduk' => $warga['id_penduduk'],
				'surat' => 'SURAT KELAHIRAN',
				'nama' => $this->input->post('nama'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'jk' => $this->input->post('jk'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'alamat' => $this->input->post('alamat'),
				'ket' => $this->input->post('ket'),
				'created_at' => date('Y-m-d')
			];

			$this->db->update('surat', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
		            Surat <b>KELAHIRAN</b> Berhasil DiUpdate!. Silahkan Cetak Atau Print
		          </div>');
			return redirect('Template_surat/arsipWarga');
		}else{
			$data = [
				'surat' => 'SURAT KELAHIRAN',
				'nama' => $this->input->post('nama'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'jk' => $this->input->post('jk'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'alamat' => $this->input->post('alamat'),
				'ket' => $this->input->post('ket'),
				'created_at' => date('Y-m-d')
			];

			$this->db->update('surat', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
		            Surat <b>KELAHIRAN</b> Berhasil DiUpdate!. Silahkan Cetak Atau Print
		          </div>');
			return redirect('Template_surat/arsip');
		}
	}

	public function suratKematianUpdate($id_surat)
	{
		$where = ['id_surat' => $id_surat];
		$warga = $this->M_warga->getData();
		if($warga['level'] == 'warga'){
			$data = [
				'id_penduduk' => $warga['id_penduduk'],
				'surat' => 'SURAT KEMATIAN',
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'umur' => $this->input->post('umur'),
				'alamat' => $this->input->post('alamat'),
				'hari' => $this->input->post('hari'),
				'tgl_lahir' => $this->input->post('tanggal'),
				'tempat_lahir' => $this->input->post('di'),
				'ket' => $this->input->post('ket'),
				'created_at' => date('Y-m-d')
			];

			$this->db->update('surat', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
		            Surat <b>KEMATIAN</b> Berhasil DiUpdate!. Silahkan Cetak Atau Print
		          </div>');
			return redirect('Template_surat/arsipWarga');
		}else{
			$data = [
				'surat' => 'SURAT KEMATIAN',
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'umur' => $this->input->post('umur'),
				'alamat' => $this->input->post('alamat'),
				'hari' => $this->input->post('hari'),
				'tgl_lahir' => $this->input->post('tanggal'),
				'tempat_lahir' => $this->input->post('di'),
				'ket' => $this->input->post('ket'),
				'created_at' => date('Y-m-d')
			];

			$this->db->update('surat', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
		            Surat <b>KEMATIAN</b> Berhasil DiUpdate!. Silahkan Cetak Atau Print
		          </div>');
			return redirect('Template_surat/arsip');
		}
	}



	public function delete($id_surat)
	{
		$where = ['id_surat' => $id_surat];

		$this->db->delete('surat', $where);
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
	            Data Surat Berhasil DiHapus!
	          </div>');
		return redirect($_SERVER['HTTP_REFERER']);
	}




}
