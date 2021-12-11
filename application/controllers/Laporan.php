<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('login'))
		{
			redirect('login');
		}
		
		 $this->data['judulhalaman']= "Laporan";
		 // $this->load->model('Obat_model');
		 $this->load->model('Dianogsa_model');


	}

	public function index()
	{	
		$this->load->view('temp/header');	
		$this->load->view('temp/sidebar',$this->data);			
		$this->load->view('laporan/laporan');	
		$this->load->view('temp/footer');	

	}

	public function cetak_laporan()
	{
		define('FPDF_FONTPATH', $this->config->item('fonts_path'));
		$range = $this->input->post('range_laporan');	
		$poli = $this->input->post('poli');		
		$id_proyek = $this->input->post('proyek');				

		$tgl_awal = substr($range,0,10);
		$tgl_awal = date("Y-m-d", strtotime($tgl_awal));

		$tgl_akhir = substr($range,13,24);
		$tgl_akhir = date("Y-m-d", strtotime($tgl_akhir));		
		
		 $keluar = $this->Dianogsa_model->get_all_laporan($tgl_awal,$tgl_akhir,$poli);
	//var_dump($keluar);
	//var_dump($id_proyek);

			
				
		$this->detail['pengguna'] = $keluar;
		$this->detail['poli'] = $poli;	

	 	$this->load->view('pasien/laporan',$this->detail);
	 }

		
}

?>