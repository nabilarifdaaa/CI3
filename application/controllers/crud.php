<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	
	public function index(){
		$this->load->model('mymodel');

		$data['result'] = $this->mymodel->GetArtikel();

		$this->load->view('home', $data);
		//$this->load->template('body');
	} 

	public function do_preview($id=''){
		$this->load->model('mymodel');

		$data['isi'] = $this->mymodel->GetPreview($id);
		 
		// echo "<pre>";
		// print_r($data);die();

		$this->load->view('preview', $data);
	}

	public function add_data(){
		$this->load->view('form_add');
	}

	public function do_insert(){
		$config['upload_path']          = 'images/uploaded/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());

               print_r($error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $judul 			= $_POST['judul'];
			$tgl			= date("Y-m-d H:i:s");
			$author 		= $_POST['author'];
			$isi			= $_POST['isi'];
			$img			= $this->upload->data('file_name');
			
			$data_insert	= array(
									'judul' 	=> $judul,
									'tgl'		=> $tgl,
									'author'	=> $author,
									'isi' 		=> $isi,
									'img'		=> $img
								);

			$this->load->model('mymodel');
			$res = $this->mymodel->InsertData('artikel', $data_insert);
			
			if($res>=1){
				$this->session->set_flashdata('pesan','Tambah Data Sukses');
				redirect('crud/index');
			}else{
				echo "<h2>Insert Data Gagal</h2>";	
			}
        }
	}
	
	public function upload(){
	 	$this->load->view('upload_form', array('error' => ' ' ));
	}

	public function do_upload()
        {
                $config['upload_path']          = 'images/uploaded/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('sukses', $data);
                }
        }
	
}
