<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Master extends CI_Model {

	public function auth_login()
	{
		$username = $this->input->post('username');
		$password =  base64_encode($this->input->post('password'));
		$cek_exist = $this->db->get_where('user',['username'=>$username,'password'=>$password]);
		if ($cek_exist->num_rows() > 0) {
			$data['status'] = true; 
			$data['data'] 	= $cek_exist->row_array(); 
		} else {
			$data['status'] = false; 
		}
		return $data;
	}
	

}

/* End of file Model_Master.php */
/* Location: ./application/models/Model_Master.php */