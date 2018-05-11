<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('mymodel');
		$this->load->model('kategoriModel');

	}

	public function index(){
		$data['result'] = $this->mymodel->GetArtikel();

		$limit_per_page = 4;

		// URI segment untuk mendeteksi "halaman ke berapa" dari URL
		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

		// Dapatkan jumlah data 
		$total_records = $this->mymodel->get_total();
		
		if ($total_records > 0) {
			// Dapatkan data pada halaman yg dituju
			$data['result'] = $this->mymodel->GetArtikel($limit_per_page, $start_index);
			
			// Konfigurasi pagination
			$config['base_url'] = base_url() . 'crud/index';
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config["uri_segment"] = 3;
			
			$this->pagination->initialize($config);
				
			// Buat link pagination
			$data["links"] = $this->pagination->create_links();
		}

		$this->load->view("templates/header");
		$this->load->view('artikel/home', $data);
		$this->load->view("templates/footer");
	} 

	public function do_preview($id=''){
		$this->load->model('mymodel');

		$data['isi'] = $this->mymodel->GetPreview($id);
		$this->load->view("templates/header");
		$this->load->view('artikel/preview', $data);
		$this->load->view("templates/footer");
	}

	public function add_data(){
		$this->load->model('kategoriModel');
		$kategori = $this->kategoriModel->getKategori();
		$data['kat'] = $kategori->result();

		$this->load->view("templates/header_form");
		$this->load->view('artikel/form_add',$data);
		$this->load->view("templates/footer_form");
	}

	public function do_insert(){
		//VALIDATION
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('judul', 'Judul', 'required|is_unique[artikel.judul]',
   			array(
		       'required'      => 'Judul Kosong, silahkan isi terlebih dahulu',
		       'is_unique'     => 'Judul ' .$this->input->post('judul'). ' sudah ada bosque.'
		  	));

		$this->form_validation->set_rules('author', 'Author', 'required',
   			array(
		       'required'      => 'Author Kosong, silahkan isi terlebih dahulu'
		 	));

		$this->form_validation->set_rules('isi', 'Isi', 'required',
   			array(
		       'required'      => 'Isi Kosong, silahkan isi terlebih dahulu'
		 	));

		 if ($this->form_validation->run() === FALSE)
	    {
	       	$this->load->view("templates/header_form");
			$this->load->view('artikel/form_add');
			$this->load->view("templates/footer_form");

	    } else {

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
	            $kategori 		=$_POST['kategori'];
				$tgl			= date("Y-m-d H:i:s");
				$author 		= $_POST['author'];
				$isi			= $_POST['isi'];
				$img			= $this->upload->data('file_name');
				
				$data_insert	= array(
										'judul' 	=> $judul,
										'idKategori'=> $kategori,
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
	}

	public function edit_data($id='',$img=''){
		$this->load->model('mymodel');
		$artikel = $this->mymodel->getedit($id);
		$data = array(
			"id" 		=> $artikel[0]['id'],
			"judul" 	=> $artikel[0]['judul'],
			"tgl"		=> $artikel[0]['tgl'],
			"author"	=> $artikel[0]['author'],
			"isi" 		=> $artikel[0]['isi'],
			"img"		=> $artikel[0]['img']
		);
		$this->load->view("templates/header");
		$this->load->view('artikel/form_edit',$data);
		$this->load->view("templates/footer");
	}

	public function do_update(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('judul', 'Judul', 'required|is_unique[artikel.judul]',
   			array(
		       'required'      => 'Judul Kosong, silahkan isi terlebih dahulu',
		       'is_unique'     => 'Judul ' .$this->input->post('judul'). ' sudah ada bosque.'
		  	));

		$this->form_validation->set_rules('author', 'Author', 'required',
   			array(
		       'required'      => 'Author Kosong, silahkan isi terlebih dahulu'
		 	));

		$this->form_validation->set_rules('isi', 'Isi', 'required',
   			array(
		       'required'      => 'Isi Kosong, silahkan isi terlebih dahulu'
		 	));

		 if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('form_edit');

	    } else {

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
				$result_upload=$this->upload->data();
					
				$id 			= $_POST['id'];
				$judul 			= $_POST['judul'];
				$tgl			= date("Y-m-d H:i:s");
				$author 		= $_POST['author'];
				$isi			= $_POST['isi'];
				$img			= $result_upload['file_name']; 
				$data_update 	= array(
					'judul' 		=> $judul,
					'tgl' 			=> $tgl,
					'author' 		=> $author,
					'isi' 			=> $isi,
					'img'			=> $img);
				$this->load->model('mymodel');
				$where = array('id' => $id);
				$res = $this->mymodel->UpdateData('artikel',$data_update,$where);
				if($res>=1){
					$this->session->set_flashdata('pesan','Update Data Sukses');
					redirect('crud/');
				}
			}
		}
	}

	public function do_delete($id){
		$this->load->model('mymodel');
		$where 	= array('id' => $id);
		$res 	= $this->mymodel->DeleteData('artikel',$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Delete Data Sukses');
			redirect('crud/');
			}
	}
}

