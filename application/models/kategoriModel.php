<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriModel extends CI_Model {
	public function InsertData($tabelNama,$data){
		$res = $this->db->insert($tabelNama,$data);
		return $res;
	}

	public function UpdateData($tabelNama,$data,$where){
		$res = $this->db->update($tabelNama,$data,$where);
		return $res;
	}

	public function getKategori(){
		$query = $this->db->get('kategori');
		return $query;
	}

	public function GetAll(){
		
		$this->db->select('*');
		$this->db->from('kategori');
		$data=$this->db->get();
	
		return $data->result_array();
	}

	public function getedit($id=''){
		$data = $this->db->query('SELECT * FROM kategori where idKategori = '.$id);
		return $data->result_array();
	}

	public function GetPreview($id=''){
		$isi = $this->db->query('SELECT * FROM artikel as a join kategori as k on a.idKategori = k.idKategori where k.idKategori = '.$id);
		return $isi->result_array();
	}
}