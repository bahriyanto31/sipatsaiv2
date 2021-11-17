<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['judul'] = 'Landing Page';
		$this->lib_template->load_frontend_view('page/home',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */