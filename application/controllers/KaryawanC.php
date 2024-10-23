<?php
    defined('BASEPATH') or exit('No direct script acces allowed');

    class KaryawanC extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('KaryawanM');
        }


        public function index(){
            $this->load->view('viewkaryawanC');
        }

        
        public function save()
        {
            $data = [
                'id' => $this->input->post('id'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' => $this->input->post('alamat'),
                'jabatan' => $this->input->post('jabatan'),
            ];
    
            // Simpan data ke model
            if ($this->KaryawanM->insert_datakaryawan($data)) {
                $message = "Data berhasil disimpan!";
                $status = "success";
            } else {
                $message = "Terjadi kesalahan saat menyimpan data.";
                $status = "error"; 
            }
    
            // Load view dan kirim data pesan dan status ke view
            $this->load->view('karyawan_view', ['message' => $message, 'status' => $status]);
        }
    }
?>