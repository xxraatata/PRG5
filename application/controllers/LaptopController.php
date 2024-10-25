<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaptopController extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('LaptopModel');
    }

	public function view()
	{
		// Load the data for the karyawan (employees)
        $data['title'] = 'Dashboard';
        $data['laptop'] = $this->LaptopModel->get_all();
    
        // Load the content view into a variable and pass the karyawan data to the view
        $data['content'] = $this->load->view('dashboard', $data, TRUE); // Passing $data here so the 'view' page has access to 'karyawan'
    
        // Load the template and pass the content
        $this->load->view('template', $data);
	}
}
