<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['title'] = 'About App';
		$data['css_file'] = array();
		$data['js_file'] = array();
		$this->load->view('app/about/about', $data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/app/About.php */