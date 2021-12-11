<?php 

class Pasien_model extends CI_Model
{
	
	 private $primary_key = 'id_pasien';
     private $table_name  = 'pasien';

	function __construct() {
        parent::__construct();
    }

    function get_data($id) {
        $this->db->where($this->primary_key, $id);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }
    function get_data_join1($id) {
        $this->db->where("pasien.id_pasien", $id);
        // $this->db->join('kunjungan','kunjungan.id_pasien=pasien.id_pasien');
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

    function get_all() {
        $this->db->order_by($this->primary_key,"desc");
        $query = $this->db->get($this->table_name);
        return $query->result();
    }
    function get_all_status() {
        $this->db->select('*');
        $this->db->from($this->table_name); 
        $this->db->where("status", 0);
        $query = $this->db->get();
        return $query->result();
    }
    function get_data_last() {
        $query = $this->db->query("SELECT $this->primary_key from $this->table_name order by $this->primary_key DESC LIMIT 1 ");
        return $query->row()->id_pasien;
    }

    function get_all_status_id() {
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->where("status", 0);
        $query = $this->db->get();
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
   
}
 ?>