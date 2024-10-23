<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UpdateKaryawanC extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('UpdateKaryawanM'); 
        $this->load->library('session'); 
    }

    public function index() {
        $data['karyawan'] = $this->UpdateKaryawanM->get_all_karyawan(); 
        $this->load->view('viewkaryawanU', $data); 
    }

    public function show($id) {
        $data['karyawan'] = $this->UpdateKaryawanM->get_karyawan_by_id($id); 
        if (!$data['karyawan']) {
            show_404(); 
        }
        $this->load->view('karyawan_detail_view', $data); 
    }

    public function edit($id) {
        $data['karyawan'] = $this->UpdateKaryawanM->get_karyawan_by_id($id); 
        if (!$data['karyawan']) {
            show_404(); 
        }
        $this->load->view('karyawan_edit_view', $data); 
    }

    public function update($id) {
        $this->load->model('UpdateKaryawanM');
    
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
    
        if ($this->form_validation->run() === FALSE) {
            $data['karyawan'] = $this->UpdateKaryawanM->get_karyawan_by_id($id);
            $this->load->view('karyawan_edit_view', $data);
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'jabatan' => $this->input->post('jabatan')
            );
    
            // Call the model to update the employee data
            $update_status = $this->UpdateKaryawanM->update_karyawan($id, $data);
    
            if ($update_status) {
                $this->session->set_flashdata('success', 'Data karyawan berhasil diperbarui!');
            } else {
                $this->session->set_flashdata('error', 'Terjadi kesalahan saat memperbarui data karyawan.');
            }
    
            redirect('UpdateKaryawanC/index');
        }
    }

    public function delete($id) {
        $this->load->model('UpdateKaryawanM'); 
        $this->UpdateKaryawanM->delete_karyawan($id); 
        redirect('UpdateKaryawanC');
    
    }
}