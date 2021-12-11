<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('login'))
		{
			redirect('login');
		}
		
		 $this->load->model('Pasien_model');
		 $this->load->model('Dianogsa_model');
		 $this->id = $this->session->userdata('id');
		


	}

	public function index()
	{	
		
			
		$judulhalaman = "Pembayaran";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Dianogsa_model->get_all_pembayaran();

		$this->load->view('temp/header');	
		$this->load->view('temp/sidebar',$this->data);			
		$this->load->view('Pembayaran/daftar');	
		$this->load->view('temp/footer');	

	} 
	public function resi($id_dianogsa=null){
		$judulhalaman = "Pembayaran";
			

		$this->data['judulhalaman'] = $judulhalaman;

		 $this->data['pengguna']=$this->Dianogsa_model->get_data($id_dianogsa);

		$this->load->view('temp/header');	
		$this->load->view('temp/sidebar',$this->data);			
		$this->load->view('Pembayaran/resi');	
		$this->load->view('temp/footer');
	}
	public function bayar($id_dianogsa=null){
		// update pembayaran
		$pasien=$this->Dianogsa_model->get_data($id_dianogsa);
		$this->update['status_pembayaran']=1;
		$result = $this->Dianogsa_model->edit($id_dianogsa, $this->update);

		// update pasien
		$this->pasien['status']=2;
		$result = $this->Pasien_model->edit($pasien->id_pasien, $this->pasien);
			 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Pendaftaran Pasien berhasil di Input');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}
			redirect('Pembayaran/resi/'.$id_dianogsa);	

	}

} 

?>