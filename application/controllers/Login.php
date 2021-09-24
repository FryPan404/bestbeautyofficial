<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model','Login_model');
	}

	public function index()
	{
		$this->form_validation->set_rules('id_number', 'Nomor ID', 'trim|required|min_length[3]|max_length[25]',
		array('required' => 'Nomor ID harus diisi!'));
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|max_length[12]',
		array('required' => 'password harus diisi!'));

		if ($this->form_validation->run()) {
			$this->Login_model->g_login();
		} else {
			$data['title'] = 'Login';
			$this->load->view('auth/header', $data);
			$this->load->view('auth/login', $data);
			$this->load->view('auth/footer', $data);
		}
	}

	public function logout()
    {
        $data = [
            'id' => '',
            'name' => '',
            'role_id' => ''
        ];
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
        redirect('login');
    }

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */