<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('app/Seller_model','Seller_model');
	}

	public function index()
	{
		$data['title'] = 'Data Seller';
		$data['css_file'] = array('app/seller/seller.css');
		$data['js_file'] = array('app/seller/seller.js');
		$this->load->view('app/seller/seller', $data);
	}

	public function add()
	{
		$data['title'] = 'Tambah Seller';
		$data['css_file'] = array('libs/select2/css/select2.min.css','css/bootstrap.min.css','app/seller/seller-add.css');
		$data['js_file'] = array('libs/select2/js/select2.min.js','app/seller/seller-add.js');
		$data['id_number'] = $this->Seller_model->get_new_id_number();
		$this->load->view('app/seller/seller-add', $data);
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Seller';
		$data['css_file'] = array('libs/select2/css/select2.min.css','css/bootstrap.min.css','app/seller/seller-edit.css');
		$data['js_file'] = array('libs/select2/js/select2.min.js','app/seller/seller-edit.js');
		$data['image'] = $this->Seller_model->get_image($id);
		$data['data'] = $this->Seller_model->get_data($id);
		$this->load->view('app/seller/seller-edit', $data);
	}

	public function save()
	{
		echo $this->Seller_model->save();
	}

	public function province(){
		$this->output->set_content_type('application/json');
		echo $this->Seller_model->province();
		
		
	}

	public function district($value){
		$data = $value;
		// echo print_r($data);
		// die();
		// $this->output->set_content_type('application/json');
		echo $this->Seller_model->district($data);
	}

	public function sub_district($value){
		$data = $value;
		echo $this->Seller_model->sub_district($data);
	}

	public function ajax_list()
	{
		$list = $this->Seller_model->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $user) {			
                $no++;
				$role_id = $user->role_id;
				$status = $user->is_active;
                $row = array();
                $row[] = $no;
                $row[] =  $user->id_number;
                $row[] = $user->name;
                $row[] = $user->email;
				// $row[] = $user->username;
				$row[] = $this->Seller_model->get_role($role_id);
				$row[] = $this->status($status);
                $row[] = '<a class="btn btn-secondary btn-sm" href="'.base_url('portal/#app/seller/edit/').$user->id.'"><i class="fas fa-edit"></i></a> '.'<a class="btn btn-warning btn-sm" href="'. base_url('portal/#app/seller/detail/').$user->id.'"><i class="fas fa-eye"></i></a> '.'<a class="btn btn-danger btn-sm" data-id="'.$user->id.'" id="btn-user-delete"><i class="fas fa-trash-alt"></i></a>' ;
                $data[] = $row; 
            }
    
            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->Seller_model->count_all(),
                "recordsFiltered" => $this->Seller_model->count_filtered(),
                "data" => $data,
            );
            echo json_encode($output);
	}

	function status($status){
		if ($status == 1) {
			return 'active';
		} else {
			return 'inactive';
		}
		
	}

	public function detail($id)
	{
		$role_id = $id;
		$data['data'] = $this->Seller_model->get_data($id);
		$data['role'] = $this->Seller_model->get_role($role_id);
		$data['title'] = 'Detail User';
		$data['css_file'] = array('app/seller/seller.css');
		$data['js_file'] = array('app/seller/seller.js');
		$this->load->view('app/seller/seller-detail', $data);
	}

	public function update(){
		echo $this->Seller_model->update();
	}

	public function delete(){
		echo $this->Seller_model->delete();
	}

}

/* End of file User.php */
/* Location: ./application/controllers/app/seller.php */