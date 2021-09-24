<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom_not_found extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Not Found';
		$this->load->view('app/custom-not-found', $data);
	}

}

/* End of file Custom_not_found.php */
/* Location: ./application/controllers/Custom_not_found.php */