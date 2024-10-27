<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterController extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('LaptopModel');
    }

	public function view()
	{
        $data['title'] = 'Master Laptop';
        $data['laptop'] = $this->LaptopModel->get_all();

        $data['content'] = $this->load->view('master', $data, TRUE);

        $this->load->view('template', $data);
	}
}
