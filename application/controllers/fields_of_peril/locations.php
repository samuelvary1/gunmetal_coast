<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class locations extends CI_Controller {

	public function __construct() {
    parent::__construct();
    $this->load->model('location_model');
  }
}
