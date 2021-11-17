<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Landing Page';
		$this->lib_template->load_frontend_view('page/anggota',$data);
	}

}

/* End of file Anggota.php */
/* Location: ./application/controllers/Anggota.php */