<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_tgs2 extends CI_Controller {

	
	public function index()
	{
		$this->load->model('model_tgs2');
		$data=$this->model_tgs2->getInformation();
		$this->load->view('home',$data,FALSE);
	}
	
}
