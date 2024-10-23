<?php
class ReadKaryawanM extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_karyawan() {
        $query = $this->db->get('karyawan'); 
        return $query->result_array(); 
    }

    public function get_karyawan_by_id($id) {
        $this->db->where('id', $id); 
        $query = $this->db->get('karyawan');
        return $query->row_array(); 
    }


}
?>
