<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_model extends CI_Model {
	var $table = 'tbl_seller';
    var $column_order = array(null,'id_number','name','email','username','is_active');
    var $column_search = array ('id_number','name','email','username','is_active');
    var $order = array('id' => 'asc');


	private function _is_duplicated($column='', $value='', $table_name='tbl_seller')
	{
		$this->db->select('id');
		$this->db->where($column, $value);
		$check_duplicate = $this->db->get($table_name)->num_rows();
		if ($check_duplicate>=1) {
			return '1';
		}else{
			return '0';
		}
	}

	public function save()
	{
		$id_number = $this->input->post('id_number');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$sub_district = $this->input->post('sub_district');
		$district = $this->input->post('district');
		$province = $this->input->post('province');
		$country = $this->input->post('country');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$facebook = $this->input->post('facebook');
		$instagram = $this->input->post('instagram');
		$bio = $this->input->post('bio');
		$password = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
		$created_by = $this->session->userdata('id');
		$upline_id = $this->session->userdata('id');
		$province_name = $this->input->post('province_name');
		$district_name = $this->input->post('district_name');
		$sub_district_name = $this->input->post('sub_district_name');

		if ($this->_is_duplicated('id_number', $id_number, 'tbl_seller')=='1') {
			return '2';
			exit();
		}

		if ($this->_is_duplicated('phone', $phone, 'tbl_seller')=='1') {
			return '3';
			exit();
		}

		if ($this->_is_duplicated('email', $email, 'tbl_seller')=='1') {
			return '4';
			exit();
		}

		$data = array(
			'name' => $name,
			'id_number' => $id_number,
			'address' => $address,
			'sub_district' => $sub_district,
			'sub_district_name' => $sub_district_name,
			'district' => $district,
			'district_name' => $district_name,
			'province' => $province,
			'province_name' => $province_name,
			'country' => $country,
			'phone' => $phone,
			'email' => $email,
			'facebook' => $facebook,
			'instagram' => $instagram,
			'bio' => $bio,
			'password' => $password,
			'created_by' => $created_by,
			'upline_id' => $upline_id,
		);

		$save =  $this->db->insert('tbl_seller', $data);
		if($save){
			$uploads = $this->_UploadImage('./uploads/',$id_number);
       		if ($uploads) {
          		 return '1';
       		} else {
          		 return '0';
       		}
		}
		
	}


	private function _UploadImage($upload_dir='./uploads/',$id_number){
        $number=0;
        $current_time = date('YmdHis');
        $ok=0;
		$name = $this->input->post('name');
        if (isset($_POST['image_data'])) {
            if ($_POST['image_data']!='') {
                $return = '1';
                foreach ($_POST['image_data'] as $val_data) {
                    $image_name = $name.$current_time.'_'.$number.'.jpg';
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
					$this->db->where('id_number',$id_number);
                   return $this->db->update('tbl_seller',$data_name);
                   
                }
            }else{
                return 1;
            }
        }else{
            return 1;
        }
    }


	public function get_new_id_number()
	{
		$this->db->select('id_number');
		$this->db->order_by('id', 'desc');
		$this->db->limit(1);
		$last_id_number = $this->db->get('tbl_seller')->row_array()['id_number'];
		$new_id_number = intval($last_id_number) + 1;
		return str_pad($new_id_number, 6, '0', STR_PAD_LEFT);
	}

	public function province(){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://pro.rajaongkir.com/api/province?",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "key: 1cb6ca038ddb281f174dbc4264474df0"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  return "cURL Error #:" . $err;
		} else {
		  return $response;
		  
		}
	}

	public function district($data){
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://pro.rajaongkir.com/api/city?province=".$data,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "key: 1cb6ca038ddb281f174dbc4264474df0"
		  ),
		));
		
		$response = curl_exec($curl);
		$err = curl_error($curl);
		
		curl_close($curl);
		
		if ($err) {
		  return "cURL Error #:" . $err;
		} else {
		  return $response;

		}
	}

	public function sub_district($data){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://pro.rajaongkir.com/api/subdistrict?city=".$data,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
		"key: 1cb6ca038ddb281f174dbc4264474df0"
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		return "cURL Error #:" . $err;
		} else {
		return $response;
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

	public function get_role($role_id){
		$this->db->select('tbl_role.name');
		$this->db->where('id',$role_id);
		$result = $this->db->get('tbl_role')->row_array();
		return $result['name'];
	}

	public function get_data($id)
    {
        $this->db->where('tbl_seller.id',$id);
        return $this->db->get('tbl_seller')->result();
    }

	public function get_image($id){
		$this->db->select('tbl_seller.image');
		$this->db->where('id',$id);
		return $this->db->get('tbl_seller')->result_array();
	}

	public function update(){
		$id_number = $this->input->post('id_number');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		// $sub_district = $this->input->post('sub_district_id');
		// $district = $this->input->post('district_id');
		// $province = $this->input->post('province_id');
		$country = $this->input->post('country');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$facebook = $this->input->post('facebook');
		$instagram = $this->input->post('instagram');
		$bio = $this->input->post('bio');
		$created_by = $this->session->userdata('id');
		$upline_id = $this->session->userdata('id');
		$province_name = $this->input->post('province_name');
		$district_name = $this->input->post('district_name');
		$sub_district_name = $this->input->post('sub_district_name');

		$data = array(
			'name' => $name,
			'id_number' => $id_number,
			'address' => $address,
			// 'sub_district' => $sub_district,
			'sub_district_name' => $sub_district_name,
			// 'district' => $district,
			'district_name' => $district_name,
			// 'province' => $province,
			'province_name' => $province_name,
			'country' => $country,
			'phone' => $phone,
			'email' => $email,
			'facebook' => $facebook,
			'instagram' => $instagram,
			'bio' => $bio,
			'created_by' => $created_by,
			'upline_id' => $upline_id,
		);
		$this->db->where('id',$this->input->post('user_id'));
		$save =  $this->db->update('tbl_seller', $data);
		if($save){
			$uploads = $this->_UploadImage('./uploads/',$id_number);
       		if ($uploads) {
          		 return '1';
       		} else {
          		 return '0';
       		}
		}
	}

	public function delete(){
		$this->db->where('id',$this->input->post('id'));
		$result = $this->db->delete('tbl_seller');
		if ($result) {
			return '1';
		} else {
			return '0';
		}
		
	}

}

/* End of file Seller_model.php */
/* Location: ./application/models/app/Seller_model.php */