<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('login'))
		{
			redirect('login');
		}
		
		 $this->load->model('Tindakan_model');
	


	}

	public function index()
	{	
		
			
		 $judulhalaman = "Tindakan";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Tindakan_model->get_all();

		$this->load->view('temp/header');	
		$this->load->view('temp/sidebar',$this->data);			
		$this->load->view('Tindakan/daftar');	
		$this->load->view('temp/footer');	

	}

	public function insert(){


		$this->data_user['tindakan']=$this->input->post('tindakan');
		$this->data_user['keterangan']=$this->input->post('keterangan');

		$result=$this->Tindakan_model->insert($this->data_user);

			 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Tindakan Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}

		redirect('Tindakan');
		
	}

	public function form()
	{
		
		
			
		$judulhalaman = "Tindakan";
		$this->data['judulhalaman'] = $judulhalaman;
	
		$this->load->view('temp/header');	
		$this->load->view('temp/sidebar',$this->data);			
		$this->load->view('Tindakan/form');	
		$this->load->view('temp/footer');	

	}

	public function delete($id_tindakan= null)
	{
		$judulhalaman = "Data Tindakan";
			

		$this->data['judulhalaman'] = $judulhalaman;
		$this->Tindakan_model->delete($id_tindakan);

		$this->session->set_flashdata('berhasil', 'Data Tindakan Berhasil Dihapus');			

		redirect('Tindakan');	

	}

	public function data_edit($id_tindakan=null){
		$judulhalaman = "Data Tindakan";
			

		$this->data['judulhalaman'] = $judulhalaman;

		
		 $this->data['pengguna']=$this->Tindakan_model->get_data($id_tindakan);
		// $tanggal=$this->Tindakan_model->get_data_tanggal($id_tindakan);
		// echo date("d/F/Y", strtotime($tanggal));

		// //var_dump($tgl);
		// //var_dump($this->data);
		$this->load->view('temp/header');	
		$this->load->view('temp/sidebar',$this->data);			
		$this->load->view('Tindakan/edit');	
		$this->load->view('temp/footer');
	}

	public function edit($id_tindakan=null){
		$judulhalaman = "Tindakan";
			

		$this->data['judulhalaman'] = $judulhalaman;

		$this->data_user['tindakan']=$this->input->post('tindakan');
		$this->data_user['keterangan']=$this->input->post('keterangan');
		$result=$this->Tindakan_model->edit($id_tindakan,$this->data_user);

		 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Tindakan Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}
		redirect('Tindakan');
	}

	
	
}

?>