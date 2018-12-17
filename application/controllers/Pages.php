<?php
class Pages extends CI_Controller {

	public function view($page = 'home')
	{
	  // if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
	  // {
	  //   // Whoops, we don't have a page for that!
	  //   show_404();
	  // }

	  $data['title'] = ucfirst($page); // Capitalize the first letter

	  $this->load->view('pages/'.$page, $data);
	}
}


// class TheWorksPlumbingController extends CI_Controller {

//     public function home(){

//         $this->load->view('templates/header');
//         $this->load->view('home');
//         $this->load->view('templates/footer');
//     }

//     public function about(){

//         $this->load->view('templates/header');
//         $this->load->view('about');
//         $this->load->view('templates/footer');
//     }

//     public function services(){

//         $this->load->view('templates/header');
//         $this->load->view('services');
//         $this->load->view('templates/footer');
//     }
// }