<?php
class UpdateKaryawanM extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_karyawan() {
        $query = $this->db->get('karyawan'); 
        return $query->result_array(); 
    }

    public function get_karyawan_by_id($id) {
        $query = $this->db->get_where('karyawan', array('id' => $id));
        return $query->row_array();
    }

    public function update_karyawan($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('karyawan', $data); 
    }

    public function delete_karyawan($id) {
        $this->db->where('id', $id);
        return $this->db->delete('karyawan');
    }
}
?>
