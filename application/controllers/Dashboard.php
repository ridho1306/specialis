<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('login'))
		{
			redirect('login');
		}	
		
		$this->data['extra'] = "Home";
		$this->data['judulhalaman'] = "Home";
		$this->load->model('Dashboard_model');
		 $this->id = $this->session->userdata('id');
		

	}

	public function index()
	{
		// $barang 	= 0;
		// $pegawai	= 0;
		// $pasien 	= 0;
		// $resep 		= 0;


		// $barang		=  $this->Dashboard_model->getAllbarang();
		// $pegawai 	=  $this->Dashboard_model->getAllpegawai();
		// $pasien 	=  $this->Dashboard_model->getAllpasien($this->id);
		// $resep 		=  $this->Dashboard_model->getAllresep();

		// $this->data['barang']	=$barang ;
		// $this->data['pegawai']	=$pegawai ;
		// $this->data['pasien']	=$pasien ;
		// $this->data['resep']	=$resep ;

		

		$this->load->view('temp/header');	
		$this->load->view('temp/sidebar',$this->data);			
		$this->load->view('temp/Dashboard');	
		$this->load->view('temp/footer');	

	}
	
}

?>