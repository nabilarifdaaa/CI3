<?php
/**
*  
*/
class Model_tgs2 extends CI_Model
{
	public function getInformation(){
		$data=array(
				'name'=>array('firstname'=> "Nabila",'lastname' => "Rifda"),
				'address'=>"Jl Candi Mendut Selatan IV/4",
				'phone'=>"0341-474715",
				'hobby'=>"My Hobby",
				'city'=>"Malang, Indonesia",
				'email'=>"nabilarifdaaa@gmail.com"
			);
		return $data;
	}
}
?>