<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Controller {
    public function index($id_surat)
    {
        $where = ['id_surat' => $id_surat];
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');
        
        //$kop = $this->db->get_where('surat', $where)->row_array();
       
        // title dari pdf
        $this->data['title_pdf'] = 'Surat Desa Sukanagalih';
        //$data['perihal'] = $kop['surat'];
         //var_dump($data['perihal']);die();
        $this->data['sambutan'] = 'Yang bertanda tangan dibawah ini , Kepala Desa Sukanagalih, Kecamatan Rajapolah, Kabupaten Tasikmalaya menerangkan dengan sebenarnya bahwa orang tersebut dibawah ini :';
        $this->data['isi'] = $this->db->get_where('surat', $where)->row_array();
        
        // filename dari pdf ketika didownload
        $file_pdf = 'Surat-Desa-Sukanagalih';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		$html = $this->load->view('laporan_pdf',$this->data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }
}