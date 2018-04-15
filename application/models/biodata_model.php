<?php 


class Biodata_Model extends CI_Model {
	
	public function get_biodata() {

		// $this->load->database();

		$query = $this->db->get('biodata');

		return $query->result();
	}

	public function get_biodata_array() {

		// $this->load->database();

		$query = $this->db->get('biodata');

		return $query->result_array();
	}
}