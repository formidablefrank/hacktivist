<?php
/**
* Model for NGO information
*/
class Ngo extends CI_Model{

  function __construct(){
    parent::__construct();
  }

  function create($name, $details){
    return $this->db->insert('ngos', array('ngo_name' => $name, 'ngo_details' => $details));
  }

  function get($ngoid){
    return $this->db->get_where('ngos', array('ngo_id', $ngoid));
  }

	function get_events($ngoid){
		return $query = $this->db->query("SELECT * 
		FROM ngos NATURAL JOIN events WHERE ngo_id = $ngoid");
	}
}
?>
