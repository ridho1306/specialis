<?php 

class Dashboard_model extends CI_Model
{
	
	 

	function __construct() {
        parent::__construct();
    }


    function getAllpasien($id)
    {
        $query = $this->db->query("SELECT Count(*) as pasien FROM `pasien` where status=0 and id_dokter=$id");
        return $query->row()->pasien;               
    }

    function getAllresep()
    {
        $query = $this->db->query("SELECT Count(*) as resep FROM `resep` join dianogsa on resep.id_dianogsa = dianogsa.id_dianogsa join pasien on dianogsa.id_pasien = pasien.id_pasien where status = 1");
        return $query->row()->resep;               
    }


    function getAllpegawai()
    {
        $query = $this->db->query("SELECT Count(*) as pegawai FROM `pegawai` where jabatan != 'Manager'");
        return $query->row()->pegawai;               
    }
    function getAllbarang()
    {
        $query = $this->db->query("SELECT Count(*) as obat FROM `obat`");
        return $query->row()->obat;               
    }

}
 ?>