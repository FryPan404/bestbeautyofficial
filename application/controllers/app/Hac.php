<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hac extends CI_Controller {

	public function index()
	{
		$data['title'] = 'HAC List';
		$data['css_file'] = array('app/hac/hac.css');
		$data['js_file'] = array('app/hac/hac.js');
		$this->load->view('app/hac/hac', $data);
	}

	public function add()
	{
		$data['title'] = 'Add HAC';
		$data['css_file'] = array('app/hac/hac.css');
		$data['js_file'] = array('app/hac/hac.js');
		$this->load->view('app/hac/hac-add', $data);
	}

	public function edit()
	{
		$data['title'] = 'Add HAC';
		$data['css_file'] = array('app/hac/hac.css');
		$data['js_file'] = array('app/hac/hac.js');
		$this->load->view('app/hac/hac-edit', $data);
	}

}

/* End of file Hac.php */
/* Location: ./application/controllers/app/Hac.php */