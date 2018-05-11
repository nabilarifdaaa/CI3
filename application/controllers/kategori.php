<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('kategoriModel');
	}

	public function add_data(){
		$this->load->view("templates/header");
		$this->load->view("templates/header_form");
		$this->load->view('kategori/form_add');
		$this->load->view("templates/footer_form");
		$this->load->view("templates/footer");
	}

	public function do_insert(){
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
	       	$this->load->view("templates/header");
			$this->load->view("templates/header_form");
			$this->load->view('kategori/form_add');
			$this->load->view("templates/footer_form");
			$this->load->view("templates/footer");	

	    } else {

	        $namaKategori 	= $_POST['namaKategori'];
			$keterangan		= $_POST['keterangan'];
			$tanggalBuat 	= date("Y-m-d H:i:s");
			
			$data_insert	= array(
									'namaKategori' 	=> $namaKategori,
									'keterangan'	=> $keterangan,
									'tanggalBuat'	=> $tanggalBuat
								);
			
			$this->load->model('kategoriModel');
			$res = $this->kategoriModel->InsertData('kategori', $data_insert);
			
			if($res>=1){
				$this->session->set_flashdata('pesan','Tambah Data Sukses');
				redirect('kategori/preview');
			}else{
				echo "<h2>Insert Data Gagal</h2>";	
			}
		}
	}

	public function preview(){
		$this->load->model('kategoriModel');
		$data['result'] = $this->kategoriModel->GetAll();
		$this->load->view("templates/header");
		$this->load->view('kategori/all',$data);
		$this->load->view("templates/footer");
	}

	public function edit_data($id=''){
		$artikel = $this->kategoriModel->getedit($id);
		$data = array(
			"idKategori" 	=> $artikel[0]['idKategori'],
			"namaKategori"	=> $artikel[0]['namaKategori'],
			"keterangan"	=> $artikel[0]['keterangan'],
			"tanggalbuat"	=> $artikel[0]['tanggalbuat']
		);
		$this->load->view("templates/header");
		$this->load->view('kategori/form_edit',$data);
		$this->load->view("templates/footer");
	}

	public function do_update(){	
		$id 	= $_POST['id'];			
		$namaKategori 	= $_POST['namaKategori'];
		$keterangan		= $_POST['keterangan'];
		$tanggalbuat 	= date("Y-m-d H:i:s");
		$data_update 	= array(
						'idKategori' 	=> $id,
						'namaKategori' 	=> $namaKategori,
						'keterangan'	=> $keterangan,
						'tanggalbuat'	=> $tanggalbuat);
		$this->load->model('kategoriModel');
		$where = array('idKategori' => $id);
		$res = $this->kategoriModel->UpdateData('kategori',$data_update,$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Update Data Sukses');
			redirect('kategori/preview');
		}
	}

	public function lihat($id=''){

		$data['result'] = $this->kategoriModel->GetPreview($id);
		$this->load->view("templates/header");
		$this->load->view('kategori/preview', $data);
		$this->load->view("templates/footer");
	}

	public function datatable(){

		$data['result'] = $this->kategoriModel->GetAll();
		$this->load->view("templates/header");
		$this->load->view('kategori/datatables', $data);
		$this->load->view("templates/footer");
	}
}