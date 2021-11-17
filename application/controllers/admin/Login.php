<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// if (auth_app('admin')) {
		// 	alert_notif_success("session sudah ada"); redirect(base_url().'admin/dashboard');
		// }
	}
	public function index()
	{
		if (!isset($_POST['login'])) {
			$data['judul'] = 'Login Page';
			$this->lib_template->load_custom_view('backend/page/login',$data);
		} else {
			$ceklogin = $this->Model_master->auth_login();
			if ($ceklogin['status']) {
				$data_sesi = $ceklogin['data']; 
				$data_sesi['level'] = 'admin';
				
				$set_sesi = $this->session->set_userdata(['data_admin'=>$data_sesi]);
				alert_notif_success("Berhasil Login"); 
				redirect(base_url().'admin/dashboard');
			} else {
				alert_notif_danger("Username dan Password Salah"); 
				redirect(base_url().'admin/login');
			}		
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(),'refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */