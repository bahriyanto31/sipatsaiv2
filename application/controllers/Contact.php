<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['judul'] = 'Contact';
		$this->lib_template->load_frontend_view('page/contact',$data);
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */