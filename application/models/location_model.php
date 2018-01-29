<?php

class location_model extends MY_Model {

  public function get_all_locations() {
    $query = "select id, name, description, details from fields_of_peril.location;";
    return $this->db->query($query)->result_array();
  }


  public function __construct() {
  	parent::__construct();
		$this->db = $this->load->database('default',true);
	}
   
}
