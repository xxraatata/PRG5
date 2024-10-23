<?php
    class KaryawanM extends CI_Model{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function insert_datakaryawan($data){
            return $this->db->insert('karyawan', $data);
        }
    }
?>