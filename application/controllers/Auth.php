<?php

class Auth extends CI_Controller{

  public function index(){
    $this->load->view('login');
  }
  
  public function getLogin(){

    $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib diisi']);
    $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi']);
    $this->form_validation->set_rules('level', 'Level', 'required', ['required' => 'Level wajib diisi']);
    if($this->form_validation->run() == FALSE){
      $this->load->view('login');
    }
    else{
      $level    = $this->input->post('level');
      $username = $this->input->post('username', TRUE);
      $password = $this->input->post('password', TRUE);

      //$level_admin = $this->db->get('users')->row_array();

      $pass = md5($password);

      if($level == 'admin'){
        $cek_user = $this->UserModel->loginUser($username, $pass);
        if($cek_user){
          //jika data cocok dgn database
          $this->session->set_userdata('level', $level);
          $this->session->set_userdata('username', $cek_user->username);
          //$this->session->set_userdata('username', $cek_user->email);
          
          //login
          return redirect('Dashboard');
        }else{
          //jika gagal
          $this->session->set_flashdata(
            'pesan',
            'username atau password anda salah'
          );
          return redirect('auth');
        }
      }elseif($level == 'warga'){
        //LOGIN WARGA
        $cek_pdk = $this->UserModel->loginPenduduk($username, $pass);

        if($cek_pdk){
          //jika data cocok dgn database

           $this->session->set_userdata('level', $level);
           $this->session->set_userdata('username', $cek_pdk->no_ktp);
           $this->session->set_userdata('sess_nama', $cek_pdk->nama);
           $this->session->set_userdata('photo', $cek_pdk->photo);
          //var_dump($c);die();
          //login
          
          return redirect('Dashboard');
        }else{
          //jika gagal
          $this->session->set_flashdata(
            'pesan',
            'username atau password anda salah'
          );
          return redirect('auth');
        }

      }


    }
  }

  public function register()
  {
    $this->load->view('register');
  }

  public function registerAksi()
  {
    $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib diisi']);
    $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama wajib diisi']);
    $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi']);
    if($this->form_validation->run() == FALSE){
      $this->load->view('register');
    }
    else{
      $data = [
            'no_ktp' => $this->input->post('username', TRUE),
            'nama' => $this->input->post('nama', TRUE),
            'password' => md5($this->input->post('password', TRUE))
      ];

      $this->db->insert('penduduk',$data);
      $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Sukses!</h4>
              Registrasi berhasil, silahkan login!
            </div>');
    return redirect('Auth');

    }
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect('auth');
  }
}
