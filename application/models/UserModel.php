<?php

class UserModel extends CI_Model {

//Cek username dan password admin
	public function loginUser($username, $pass)
	{
		// $this->db->select('*');
		// $this->db->from('users');
		// $this->db->where(['username' => $username, 'password' => $pass]);
		// $query = $this->db->get()->result();
		// return $query;
		$username	= set_value('username');
		$password	= set_value('password');

		$result		= $this->db->where('username', $username)
							   ->where('password', $pass)
							   ->limit(1)
							   ->get('users');

		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

//cek nim dan password penduduk
	public function loginPenduduk($username, $pass)
	{
		$username	= set_value('username');
		$password	= set_value('password');

		$result		= $this->db->where('no_ktp', $username)
							   ->where('password', $pass)
							   ->limit(1)
							   ->get('penduduk');

		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

	public function tampilData($table)
	{
		return $this->db->get($table);
	}

	public function insertData($data, $table)
	{
		$this->db->insert($table, $data);
	}
}

