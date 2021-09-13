<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Admin';

		$data['user'] = $this->db->get('users')->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$data);
		$this->load->view('user',$data);
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
		];

		$this->db->insert('users', $data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
	            Data admin berhasil ditambahkan!
	          </div>');
		return redirect('User');
	}

	public function edit($id)
	{
		$where = ['id_user' => $id];
		$data['title'] = 'Edit Data Admin';

		$data['user'] = $this->db->get_where('users',$where)->row_array();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar',$data);
		$this->load->view('edit_user',$data);
		$this->load->view('templates/footer');
	}

	public function updatePass($id)
	{
		$where = ['id_user' => $id];

		$data = [
			'password' => md5($this->input->post('password')), 
		];

		$this->db->update('users',$data,$where);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
	            Password berhasil diupdate!
	          </div>');
		return redirect($_SERVER['HTTP_REFERER']);
	}

	public function updatePhoto($id)
	{
		$where = ['id_user' => $id];

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
		$item = $this->db->get_where('users', $where)->row();

		if($item->photo != NULL){
			$target_file = './assets/img/uploads/'.$item->photo;
			unlink($target_file);
		}

		$this->db->update('users', $data, $where);
		$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
	            Photo berhasil diUpdate!
	          </div>');
		return redirect($_SERVER['HTTP_REFERER']);


	}


	public function delete($id)
	{
		$where = ['id_user' => $id];

		$this->db->delete('users',$where);
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            <h4><i class="icon fa fa-check"></i> Sukses!</h4>
	            Data Admin berhasil dihapus!
	          </div>');
		return redirect('User');
	}




}
