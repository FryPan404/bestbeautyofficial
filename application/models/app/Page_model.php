<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model {
	var $table = 'tbl_page';
    var $column_order = array(null,'title','slug','content','image');
    var $column_search = array ('title','slug','content','image');
    var $order = array('id' => 'asc');


    public function save(){
        $this->load->helper('date');
		date_default_timezone_set('Asia/Jakarta');
        $time_format = "%h:%i";
		$date_format = "%Y-%m-%d";
        $time =  mdate($time_format);
        $date = mdate($date_format);
		$string = $this->input->post('title');
		$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        $title = $string;
        $content = $this->input->post('summernote');
        $created_by = $this->session->userdata('id');
        $data = array (
            'title' => $title,
            'slug' => $slug,
            'content' =>$content,
            'created_by' => $created_by,
            'created_time' => $time,
            'created_date' => $date
        );

        $save =  $this->db->insert('tbl_page', $data);
		if($save){
			$uploads = $this->_UploadImage('./uploads/',$slug);
       		if ($uploads) {
          		 return '1';
       		} else {
          		 return '0';
       		}
		}
    }

    private function _UploadImage($upload_dir='./uploads/',$slug){
        $number=0;
        $current_time = date('YmdHis');
        $ok=0;
		$name = $this->input->post('name');
        if (isset($_POST['image_data'])) {
            if ($_POST['image_data']!='') {
                $return = '1';
                foreach ($_POST['image_data'] as $val_data) {
                    $image_name = $slug.$current_time.'_'.$number.'.jpg';
                    $number ++;
                    $data_name['image'] = $image_name;
                    // $data_name[]=$sub_data;

                    //upload image
                    $img = str_replace('data:image/jpeg;base64,', '', $val_data);
                    $img = str_replace(' ', '+', $img);
                    $data = base64_decode($img);
                    $file = $upload_dir . $image_name;
                    $success = file_put_contents($file, $data);
                   if($success){
                       $ok = 1;
                   }else{
                       $ok = 0;
                   }
                }
                if($ok)
				{
					$this->db->where('slug',$slug);
                   return $this->db->update('tbl_page',$data_name);
                   
                }
            }else{
                return 1;
            }
        }else{
            return 1;
        }
    }

    private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    public function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function get_data($id)
    {
        $this->db->where('tbl_page.id',$id);
        return $this->db->get('tbl_page')->result();
    }
    public function get_image($id){
		$this->db->select('tbl_page.image');
		$this->db->where('id',$id);
		return $this->db->get('tbl_page')->result_array();
	}

    public function update(){
        $this->load->helper('date');
		date_default_timezone_set('Asia/Jakarta');
        $time_format = "%h:%i";
		$date_format = "%Y-%m-%d";
        $time =  mdate($time_format);
        $date = mdate($date_format);
		$string = $this->input->post('title');
		$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        $title = $string;
        $content = $this->input->post('summernote');
        $created_by = $this->session->userdata('id');
        $data = array (
            'title' => $title,
            'slug' => $slug,
            'content' =>$content,
            'created_by' => $created_by,
            'created_time' => $time,
            'created_date' => $date
        );
        $this->db->where('id',$this->input->post('user_id'));
        $save =  $this->db->update('tbl_page', $data);
		if($save){
			$uploads = $this->_UploadImage('./uploads/',$slug);
       		if ($uploads) {
          		 return '1';
       		} else {
          		 return '0';
       		}
		}
    }

    public function delete(){
        $where = $this->input->post('id');
        $this->db->where('id',$where);
        $result = $this->db->delete('tbl_page');
        if ($result) {
            return '1';
        } else {
            return '0';
        }
        
    }

}