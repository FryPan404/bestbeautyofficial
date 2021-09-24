<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feed extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Feed';
		$data['css_file'] = array('app/feed/feed.css');
		$data['js_file'] = array('app/feed/feed.js');
		$this->load->view('app/feed/feed', $data);
	}

	public function detail($feed_id='')
	{
		$data['title'] = 'Detail Feed';
		$data['css_file'] = array('app/feed/feed.css');
		$data['js_file'] = array('app/feed/feed.js');
		$this->load->view('app/feed/feed-detail', $data);
	}

	public function add()
	{
		$data['title'] = 'Add Feed';
		$data['css_file'] = array('app/feed/feed.css');
		$data['js_file'] = array('app/feed/feed.js');
		$this->load->view('app/feed/feed-add', $data);
	}

	public function edit()
	{
		$data['title'] = 'Edit Feed';
		$data['css_file'] = array('app/feed/feed.css');
		$data['js_file'] = array('app/feed/feed.js');
		$this->load->view('app/feed/feed-edit', $data);
	}

	public function my_daily()
	{
		$data['title'] = 'My Daily Feed';
		$data['css_file'] = array('app/feed/feed.css');
		$data['js_file'] = array('app/feed/feed.js');
		$this->load->view('app/feed/feed-my-daily', $data);
	}

}

/* End of file Feed.php */
/* Location: ./application/controllers/app/Feed.php */