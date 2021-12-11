<?php 

class Dianogsa_model extends CI_Model
{
	
	 private $primary_key = 'id_dianogsa';
     private $table_name  = 'dianogsa';

	function __construct() {
        parent::__construct();
    }

    function get_data($id) {
        $this->db->join('pasien','pasien.id_pasien=dianogsa.id_pasien');   
        $this->db->join('tindakan','tindakan.id_tindakan=dianogsa.id_tindakan');   
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

    function get_data_last() {
        $query = $this->db->query("SELECT $this->primary_key from $this->table_name order by $this->primary_key DESC LIMIT 1 ");
        return $query->row()->id_dianogsa;
    }

    function get_all_join($id) {
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->join('tindakan','tindakan.id_tindakan=dianogsa.id_tindakan');   
        $this->db->join('pasien','pasien.id_pasien=dianogsa.id_pasien');  
        $this->db->where("dianogsa.id_pasien", $id);
        $query = $this->db->get();
        return $query->result(); 
    }
    function get_all_kunjungan() {
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->join('tindakan','tindakan.id_tindakan=dianogsa.id_tindakan');   
        $this->db->join('pasien','pasien.id_pasien=dianogsa.id_pasien'); 
        $query = $this->db->get();
        return $query->result(); 
    }

    function get_all_join_data($id) {
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->join('tindakan','tindakan.id_tindakan=dianogsa.id_tindakan');   
        $this->db->join('pasien','pasien.id_pasien=dianogsa.id_pasien');   
        $this->db->where("dianogsa.id_pasien", $id);
        $query = $this->db->get();
        return $query->row();
    }
    function get_all_join1() {
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->join('tindakan','tindakan.id_tindakan=dianogsa.id_tindakan');   
        $this->db->join('pasien','pasien.id_pasien=dianogsa.id_pasien');
        $this->db->order_by($this->primary_key,"desc");
        $query = $this->db->get();
        return $query->result();
    }
    function get_all_pembayaran() {
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->join('tindakan','tindakan.id_tindakan=dianogsa.id_tindakan');   
        $this->db->join('pasien','pasien.id_pasien=dianogsa.id_pasien');
        $this->db->where("status_pembayaran", 0);
        $query = $this->db->get();
        return $query->result();
    }
    function get_all_laporan($tgl_awal,$tgl_akhir, $poli) {
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->join('tindakan','tindakan.id_tindakan=dianogsa.id_tindakan');   
        $this->db->join('pasien','pasien.id_pasien=dianogsa.id_pasien');
        $this->db->order_by($this->primary_key,"desc");
         $this->db->where("dianogsa.tanggal BETWEEN '$tgl_awal' and '$tgl_akhir'");  
        $query = $this->db->get();
        return $query->result();
    }

}
 ?>