<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myprofile extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Akun Saya';
		$data['warga'] = $this->M_warga->getData();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$data);
		$this->load->view('myprofile',$data);
		$this->load->view('templates/footer');
	}

	public function update($id)
	{
		$where = ['id_penduduk' => $id];

		$data = [
			'no_ktp' => $this->input->post('no_ktp'),
			'nama' => $this->input->post('nama'),
			'agama' => $this->input->post('agama'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jk' => $this->input->post('jk'),
			'golongan_darah' => $this->input->post('golongan_darah'),
			'warga_negara' => $this->input->post('warga_negara'),
			'pendidikan' => $this->input->post('pendidikan'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'status' => $this->input->post('status'),
			'alamat' => $this->input->post('alamat'),
			'updated_at' => date('Y-m-d')
		];

		$this->db->update('penduduk',$data,$where);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
	            Data Penduduk berhasil diupdate!
	          </div>');
		return redirect($_SERVER['HTTP_REFERER']);
	}


		public function updatePhoto($id)
	{
		$where = ['id_penduduk' => $id];

		$photo = $_FILES['photo']['name'];
				if($photo){
					$config['upload_path'] = './assets/img/uploads';
					$config['allowed_types'] = 'jpeg|jpg|png';

					$this->load->library('upload', $config);

					if($this->upload->do_upload('photo')){
						$photo = $this->upload->data('file_name');
						$this->db->set('photo', $photo);
					}else{
						echo "Photo gagal diupdate!";
					}
				}

		$data = array(
				'photo' => $photo,
		);

		//timpa data photo
		$item = $this->db->get_where('penduduk', $where)->row();

		if($item->photo != NULL){
			$target_file = './assets/img/uploads/'.$item->photo;
			unlink($target_file);
		}

		$this->db->update('penduduk', $data, $where);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
	            Photo berhasil diUpdate!
	          </div>');
		return redirect($_SERVER['HTTP_REFERER']);

	}

	public function updatePass($id)
	{
		$where = ['id_penduduk' => $id];

		$data = ['password' => md5($this->input->post('password'))];

		$this->db->update('penduduk',$data,$where);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
	            Password berhasil diUpdate!
	          </div>');
		return redirect($_SERVER['HTTP_REFERER']);
	}




}
