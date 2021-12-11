<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		

		$this->data['extra'] = "Login";
		$this->data['judulhalaman'] = "Login";
		$this->load->model('Pengguna_model');
		

	}

	public function index()
	{
			
		if(!$this->session->userdata('login'))
		{			
			$this->load->view('login');
		}
		else
		{
			redirect('dashboard');
		}
	

	}

	public function autentication()
	{
		$nip = $this->input->post('nip');
		$password = $this->input->post('password'); 
		
		$cek=$this->Pengguna_model->cek_login($nip, md5($password));
	
			
			if($cek!= null)
			{			
				$nama = $cek->nama_pegawai;
				$unit_pegawai = $cek->jabatan;
				$id = $cek->id_pegawai;
				$password = $cek->password;
				
					$this->session->set_userdata(array(
					'login' => true,
					'nama' => $nama,
					'id' => $id,
					'unit_pegawai' => $unit_pegawai,
					'password'=> $password));						
				
				redirect('dashboard');
			}
			else
			{
				$this->session->set_flashdata('login','login tidak berhasil <br> username dan password salah');
				redirect('login');
			}	
		
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');

	}
	
}

?>