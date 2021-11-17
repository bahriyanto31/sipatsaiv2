<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aduan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['judul'] = 'Daftar Pengaduan';
		$this->lib_template->load_frontend_view('page/aduan',$data);
	}

}

/* End of file Aduan.php */
/* Location: ./application/controllers/Aduan.php */