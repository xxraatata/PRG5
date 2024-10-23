<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ReadKaryawanC extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ReadKaryawanM');
    }

    public function index() {
        $data['karyawan'] = $this->ReadKaryawanM->get_all_karyawan(); // Retrieve all employees
        $this->load->view('viewkaryawan', $data); 
    }

    public function show($id) {
        $data['karyawan'] = $this->ReadKaryawanM->get_karyawan_by_id($id); // Retrieve employee by ID
        if (!$data['karyawan']) {
            show_404(); // Show 404 if employee not found
        }
        $this->load->view('karyawan_detail_view', $data); // Load the view to display employee details
    }


}

?>
