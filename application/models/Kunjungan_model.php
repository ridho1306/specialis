<?php 

class Kunjungan_model extends CI_Model
{
	
	 private $primary_key = 'id_kunjungan';
     private $table_name  = 'kunjungan';

	function __construct() {
        parent::__construct();
    }

   function cek_login($nip,$password){

        $query=$this->db->query ("SELECT * From kunjungan where nip ='{$nip}' AND password ='{$password}' ");
        return $query->row();
   }

    function get_data($id) {
        $this->db->where($this->primary_key, $id);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

    function get_all() {
        $this->db->order_by($this->primary_key,"desc");
        $query = $this->db->get($this->table_name);
        return $query->result();
    }
  

    function count_all() {
        return $this->db->count_all($this->table_name);
    }

    function insert($data) {
        return $this->db->insert($this->table_name, $data);
    }

    function edit($id, $data) {
        $this->db->where($this->primary_key, $id);
        return $this->db->update($this->table_name, $data);
    }

    function delete($id) {
        return $this->db->delete($this->table_name, array($this->primary_key => $id));
    }
    
    function get_data_tanggal($id) {
        $this->db->select('tgl_lahir');
        $this->db->where($this->primary_key, $id);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }
    function get_all_join() {
        $this->db->select('*');
        $this->db->from($this->table_name);
        // $this->db->join('pasien','pasien.id_pasien=kunjungan.id_pasien');
        $this->db->join('dianogsa','dianogsa.id_kunjungan=kunjungan.id_kunjungan');
        $this->db->order_by($this->primary_key,"desc");
        $query = $this->db->get();
        return $query->result(); 
    }

    function get_all_kunjungan() {
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->join('pasien','pasien.id_pasien=kunjungan.id_pasien');
        $this->db->where("status", 0);
        //$this->db->join('penyakit','penyakit.id_penyakit=dianogsa.id_penyakit');
        $this->db->order_by($this->primary_key,"desc");
        $query = $this->db->get();
        return $query->result();
    }
   
}
 ?> 