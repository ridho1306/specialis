<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('login'))
		{
			redirect('login');
		}
		
		 $this->load->model('Pasien_model');
		 $this->load->model('Tindakan_model');
		 $this->load->model('Dianogsa_model');
		 $this->id = $this->session->userdata('id');
		


	}

	public function index()
	{	
		
			
		$judulhalaman = "Pasien";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Pasien_model->get_all_status_id($this->id);

		$this->load->view('temp/header');	
		$this->load->view('temp/sidebar',$this->data);			
		$this->load->view('Pasien/daftar');	
		$this->load->view('temp/footer');	

	} 

	public function daftar_pasien()
	{	
		
			
		$judulhalaman = "Daftar Pasien";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Pasien_model->get_all();

		$this->load->view('temp/header');	
		$this->load->view('temp/sidebar',$this->data);			
		$this->load->view('Pasien/daftar_pasien');	
		$this->load->view('temp/footer');	

	}
	public function history()
	{	
		
			
		$judulhalaman = "History";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Dianogsa_model->get_all_join1();
		$this->load->view('temp/header');	
		$this->load->view('temp/sidebar',$this->data);			
		$this->load->view('Pasien/history');	
		$this->load->view('temp/footer');	
		 $this->load->library('fungsi');

	}
	public function kunjungan()
	{	
		
			
		$judulhalaman = "kunjungan Pasien";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Dianogsa_model->get_all_kunjungan();
		$this->load->view('temp/header');	
		$this->load->view('temp/sidebar',$this->data);			
		$this->load->view('Pasien/kunjungan');	
		$this->load->view('temp/footer');	
		 $this->load->library('fungsi');

	}

	public function detail($id_pasien= null)
	{	
		
			
		$judulhalaman = "Daftar Pasien";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Dianogsa_model->get_all_join($id_pasien); 

		$this->load->view('temp/header');	
		$this->load->view('temp/sidebar',$this->data);			
		$this->load->view('Pasien/detail');	
		$this->load->view('temp/footer');	

	}
		public function kartu($id_pasien= null)
	{	
		
			
		$judulhalaman = "Daftar Pasien";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Pasien_model->get_data($id_pasien);
	
		$this->load->view('Pasien/kartu', $this->data);	

	}

	public function insert(){



		$tanggal=$this->input->post('tgl_lahir');
		$this->data_user['tgl_lahir'] = date("Y-m-d", strtotime($tanggal)) ;
		$this->data_user['tgl_pendaftaran'] = date("Y-m-d") ;
		$id_pasien =$this->Pasien_model->get_data_last();
		if ($id_pasien == null) {
			$id_pasien= 1;
		}
		else{
			$id_pasien= $id_pasien;
		}
		$tahun=date("Y"); 
		$bulan=date("m"); 
		$this->data_user['no_kartu'] = $id_pasien.".".$bulan.".".$tahun ;
		$this->data_user['nama_pasien']=$this->input->post('nama');
		$this->data_user['alamat']=$this->input->post('alamat');
		$this->data_user['pekerjaan']=$this->input->post('pekerjaan');
		$this->data_user['no_telp']=$this->input->post('no_hp');
		$this->data_user['no_ktp']=$this->input->post('no_ktp');
		//$this->data_user['resep_racikan']=$this->input->post('resep_racikan');
		$pasien=$this->Pasien_model->get_all();
			foreach ($pasien as $out) {
				//var_dump($this->data_user['no_ktp']);
				if ($out->no_ktp == $this->data_user['no_ktp']) {
				$this->session->set_flashdata('gagal', 'No KTP sudah terdaftar');
				redirect('Pasien/form');	
				
				}

			}

		$result=$this->Pasien_model->insert($this->data_user);

			 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Pasien Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}

		redirect('Pasien/form');
		
	}
	public function update($id_pasien = null){



		$tanggal=$this->input->post('tgl_lahir');
		$this->data_user['tgl_lahir'] = date("Y-m-d", strtotime($tanggal)) ;
		$this->data_user['nama_pasien']=$this->input->post('nama_pasien');
		$this->data_user['alamat']=$this->input->post('alamat');
		$this->data_user['pekerjaan']=$this->input->post('pekerjaan');
		$this->data_user['no_telp']=$this->input->post('no_telp');
		$this->data_user['no_ktp']=$this->input->post('no_ktp');
		//$this->data_user['resep_racikan']=$this->input->post('resep_racikan');

		$result=$this->Pasien_model->edit($id_pasien,$this->data_user);

			 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Pasien Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}

		redirect('Pasien/daftar_pasien');
		
	}

	public function form()
	{
		$judulhalaman = "Pendaftaran Pasien";
		$this->data['judulhalaman'] = $judulhalaman;
		
		$this->load->view('temp/header');	
		$this->load->view('temp/sidebar',$this->data);			
		$this->load->view('Pasien/form');	
		$this->load->view('temp/footer');		

	}

	public function delete($id_pasien= null)
	{
		$judulhalaman = "Data Pegawai";
			

		$this->data['judulhalaman'] = $judulhalaman;
		$this->Pasien_model->delete($id_pasien);

		$this->session->set_flashdata('berhasil', 'Data Pasien Berhasil Dihapus');			

		redirect('Pasien');	

	}

	// public function booking($id_pasien=null){
	// 	$judulhalaman = "Pasien";
	// 	$this->data['judulhalaman'] = $judulhalaman;
	// 	$this->data['pengguna'] = $this->Pasien_model->get_data($id_pasien);
	// 	$this->data['dokter'] = $this->Dokter_model->get_all();

	// 		$this->load->view('temp/header');	
	// 		$this->load->view('temp/sidebar',$this->data);			
	// 		$this->load->view('Pasien/book');	
	// 		$this->load->view('temp/footer');		

	// }
	public function pendaftaran($id_pasien=null){
		$this->update['status']=0;

		$result = $this->Pasien_model->edit($id_pasien, $this->update);
			 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Pendaftaran Pasien berhasil di Input');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}
			redirect('Pasien/daftar_pasien');	

	}
	public function delete_booking($id_pasien=null){
		$this->update['status']=2;
		$result = $this->Pasien_model->edit($id_pasien, $this->update);
			 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Booking Pasien dihapus');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}
			redirect('Pasien');	

	}

	public function dianogsa($id_pasien=null){
		$judulhalaman = "Pasien";
		$this->data['judulhalaman'] = $judulhalaman;
// input data dianogsa
		$this->data_user['id_pasien']=$id_pasien;
		$this->data_user['id_user']=$this->id;
		$this->data_user['dianogsa']=$this->input->post('dianogsa');
		$this->data_user['terapi']=$this->input->post('terapi');
		$this->data_user['biaya']=$this->input->post('biaya');
		$this->data_user['id_tindakan']=$this->input->post('id_tindakan');
		$this->data_user['tanggal'] = date("Y-m-d");

		$result=$this->Dianogsa_model->insert($this->data_user);
		// update status pasien
		$this->update['status']=1;
		$result = $this->Pasien_model->edit($id_pasien, $this->update);

		redirect('Pasien');	
	}

	public function dokter($id_pasien=null){
		$judulhalaman = "Data Pasien";
			

		$this->data['judulhalaman'] = $judulhalaman;

		
		 $this->data['tindakan']=$this->Tindakan_model->get_all();
		 $this->data['pengguna']=$this->Pasien_model->get_data_join1($id_pasien);

		$this->load->view('temp/header');	
		$this->load->view('temp/sidebar',$this->data);			
		$this->load->view('Pasien/edit');	
		$this->load->view('temp/footer');
	}

	public function edit($id_pasien=null){
		$judulhalaman = "Data Pasien";
			

		$this->data['judulhalaman'] = $judulhalaman;

		
		 // $this->data['penyakit']=$this->Penyakit_model->get_all();
		 $this->data['pengguna']=$this->Pasien_model->get_data($id_pasien);

		$this->load->view('temp/header');	
		$this->load->view('temp/sidebar',$this->data);			
		$this->load->view('Pasien/edit_pasien');	
		$this->load->view('temp/footer');
	}

// 		public function insert_resep(){
		
// 		$jumlah = $this->input->post('jumlah');
// 		$id_obat = $this->input->post('id_obat');
// 		$jumlahbaris = $this->input->post('jumlah_baris');
// 		$this->detail['id_dianogsa'] = $this->input->post('id_dianogsa');
		

// 			for($i = 0;$i<$jumlahbaris;$i++)
// 			{
// 				$this->detail['id_obat'] = $id_obat[$i];
// 				$stok =$this->Obat_model->get_stok($id_obat[$i]);
// 				$this->detail['jumlah'] = $jumlah[$i];
// 				$this->edit['stok'] =$stok - $jumlah[$i];
// 				$this->Obat_model->edit($id_obat[$i],$this->edit);	

// 				$this->Resep_model->insert($this->detail);

// 		}
	

// //var_dump($this->detail['jumlah']);
// 			redirect('Pasien');	
// 		}
} 

?>