<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Dashboard';
		$this->lib_template->load_backend_view('page/dashboard',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/admin/Dashboard.php */