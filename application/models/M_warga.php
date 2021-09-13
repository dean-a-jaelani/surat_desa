<?php

class M_warga extends CI_Model {

//AMBIL DATA WARGA BERDASARKAN SESI LOGIN
	public function getData()
	{
		$this->db->select('*');
		$this->db->from('penduduk');
		$this->db->where('penduduk.no_ktp', $this->session->userdata('username'));
		$query = $this->db->get()->row_array();
		return $query;
	}

//AMBIL DATA SURAT BERDASARKAN SESI LOGIN
	public function getSurat($id_penduduk)
	{
		$this->db->select('*');
		$this->db->from('surat');
		$this->db->join('penduduk', 'penduduk.id_penduduk = surat.id_penduduk', 'left');
		$this->db->where('surat.id_penduduk', $id_penduduk);
		$query = $this->db->get();
		return $query;
	}

	public function getDataSurat()
	{
		$this->db->select('*');
		$this->db->from('surat');
		$this->db->order_by('created_at','ASC');
		$query = $this->db->get()->result();
		return $query;
	}





}