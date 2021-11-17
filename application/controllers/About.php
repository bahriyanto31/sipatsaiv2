<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['judul'] = 'About';
		$this->lib_template->load_frontend_view('page/about',$data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */