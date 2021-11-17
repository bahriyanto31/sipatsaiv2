<?php
/*

	PESERTA DIGITAL TALENT SCHOLARSHIP 2021
	PELATIHAN & SERTIFIKASI
	BERBASIS SKKNI BIDANG TIK
	TAHUN 2021

	author : Bahriyanto B. Anang
	skema  : Junior Web Developer (JWD)
	addres : Gorontalo

*/
defined('BASEPATH') OR exit('No direct script access allowed');

// ini library custom sendiri dibuat untuk menejement template 
class Lib_template
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function load_custom_view($lokasi,$data)
	{		
		$this->ci->load->view($lokasi,$data);		
	}
	
	public function load_frontend_view($lokasi,$data)
	{
		$this->ci->load->view('frontend/template/mainhead',$data);
		$this->ci->load->view('frontend/template/header');
		$this->ci->load->view('frontend/'.$lokasi,$data);
		$this->ci->load->view('frontend/template/footer');
	}

	public function load_backend_view($lokasi,$data)
	{
		auth_app('admin');
		$this->ci->load->view('backend/template/mainhead',$data);		
		$this->ci->load->view('backend/template/header');		
		$this->ci->load->view('backend/template/menu');		
		$this->ci->load->view('backend/'.$lokasi,$data);		
		$this->ci->load->view('backend/template/footer');
	}
}

/* End of file lib_template.php */
/* Location: ./application/libraries/lib_template.php */
