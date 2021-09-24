<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Dashboard';
		if ($this->agent->is_mobile())
		{
			$data['css_file'] = array('app/dashboard/m_dashboard.css');
			$data['js_file'] = array('app/dashboard/m_dashboard.js');
			$this->load->view('app/dashboard/m_dashboard', $data);
		}
		else
		{
		    $data['css_file'] = array('app/dashboard/dashboard.css');
			$data['js_file'] = array('app/dashboard/dashboard.js');
			$this->load->view('app/dashboard/dashboard', $data);
		}
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */