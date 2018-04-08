<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

	
	public function index()
	{
		$this->load->model('biodata_model');

		$data['biodata_mhs'] = $this->biodata_model->get_biodata();

		$this->load->view('welcome_message', $data);
	}
	
}
