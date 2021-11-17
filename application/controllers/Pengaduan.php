<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['judul'] = 'Form Pengaduan';
		$this->lib_template->load_frontend_view('page/pengaduan',$data);
	}
	public function input()
	{
		if ($this->Simpan_user() && $this->Simpan_pengaduan()) {
			alert_notif_success("Berhasil mengirim laporan pengaduan"); redirect(base_url().'aduan');
		} else {
			alert_notif_danger("Gagal mengirim pengaduan"); redirect(base_url().'pengaduan');
		}
	}

	function Simpan_user(){
		$object['id']       = $this->input->post('id_user');
		$cek_exist          = $this->db->get_where('user',$object)->num_rows();
		$object['username'] = $this->input->post('name');
		$object['nama']     = $this->input->post('name');
		$object['password'] = base64_encode($this->input->post('name'));
		$object['no_tlp']   = $this->input->post('notlp');
		$object['id_grup']  = 2;
		$object['file']  = "default.jpg";
		if ($cek_exist == 0 ) {
			if ($this->db->insert('user', $object)) {
				return true;
			} else {
				return false;
			}
		} else {
			return true;
		}
	}
	function Simpan_pengaduan(){
		$object['id_user'] 		= $this->input->post('id_user');
		$object['pengaduan'] 	= $this->input->post('pengaduan');
		$object['latlong'] 		= $this->input->post('latlng');
		$object['lokasi'] 		= $this->input->post('lokasi');
		$object['verifikasi'] 	= "0";
		$file_name = rand();
		$object['file']	 	= $file_name.'.png';
		if ($this->db->insert('pengaduan', $object)) {
			if(!empty($_FILES['bukti']['name'])){ 
				$up = $this->upload_foto('bukti',$file_name);
				if (!$up['status']) {
					return true;
				} else {
					echo "<pre>";
					print_r ($up['error']);
					echo "</pre>";
					exit();
				}
			}
		} else {
			return false;
		}
	}

	private function upload_foto($file,$file_name){
		$config['upload_path']      = 'assets_backend/gambar';
		$config['allowed_types']    = 'gif|jpg|jpeg|png';
		$config['file_name'] 		= $file_name.'.png'; 
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload($file)){
			$status_upload['status'] = true;
			$status_upload['error'] = array('error' => $this->upload->display_errors());
			return $status_upload;
		}else{
			$status_upload['status'] = false;
			$status_upload['error'] = array('upload_data' => $this->upload->data());
			return $status_upload;
		}
	}

}

/* End of file Pengaduan.php */
/* Location: ./application/controllers/Pengaduan.php */