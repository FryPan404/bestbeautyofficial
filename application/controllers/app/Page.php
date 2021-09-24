<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('app/Page_model','Page_model');
	}

	public function index(){
		$data['title'] = 'Page';
		$data['css_file'] = array('app/page/page.css');
		$data['js_file'] = array('app/page/page.js');
		$this->load->view('app/page/page', $data);
	}

    public function add(){
        $data['title'] = 'Page';
		$data['css_file'] = array('app/page/page-add.css');
		$data['js_file'] = array('app/page/page-add.js');
		$this->load->view('app/page/page-add', $data);
    }

	public function edit($id){
        $data['title'] = 'Page';
		$data['data'] = $this->Page_model->get_data($id);
		$data['image'] = $this->Page_model->get_image($id);
		$data['css_file'] = array('app/page/page-edit.css');
		$data['js_file'] = array('app/page/page-edit.js');
		$this->load->view('app/page/page-edit', $data);
    }

	public function detail($id){
		$data['data'] = $this->Page_model->get_data($id);
		$data['title'] = 'Detail Page';
		$data['css_file'] = array('app/page/page.css');
		$data['js_file'] = array('app/page/page.js');
		$this->load->view('app/page/page-detail', $data);
	}

	public function save(){
		echo $this->Page_model->save();
	}

	public function ajax_list()
	{
		$list = $this->Page_model->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $user) {			
                $no++;
                $row = array();
                $row[] = $no;
                $row[] =  $user->title;
                $row[] = $user->slug;
                $row[] = $user->content;
				// $row[] = $user->username;
                $row[] = '<a class="btn btn-secondary btn-sm" href="'.base_url('portal/#app/page/edit/').$user->id.'"><i class="fas fa-edit"></i></a> '.'<a class="btn btn-warning btn-sm" href="'. base_url('portal/#app/page/detail/').$user->id.'"><i class="fas fa-eye"></i></a> '.'<a class="btn btn-danger btn-sm" data-id="'.$user->id.'" id="btn-page-delete"><i class="fas fa-trash-alt"></i></a>' ;
                $data[] = $row; 
            }
    
            $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->Page_model->count_all(),
                "recordsFiltered" => $this->Page_model->count_filtered(),
                "data" => $data,
            );
            echo json_encode($output);
	}

	public function update(){
		echo $this->Page_model->update();
	}

	public function delete(){
		echo $this->Page_model->delete();
	}

}