<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$data['judul'] = 'Pengaduan';
		$sess=$this->session->userdata("data_admin");
		if ($sess["id_grup"]!="1") {
			$this->db->where("b.id", $sess["id"]);
		}
		$this->db->select("b.nama, b.no_tlp, a.*");
		$this->db->from("pengaduan a");
		$this->db->join("user b", "b.id=a.id_user", "LEFT");
		$data['data'] = $this->db->get()->result();
		$data['user']= $this->session->userdata("data_admin");
		$this->lib_template->load_backend_view('page/pengaduan',$data);
	}

	function Simpan(){
		$object['id_user'] 	= $this->input->post('id_user');
		$object['pengaduan'] 	= $this->input->post('pengaduan');
		$object['latlong'] 		= $this->input->post('latlng');
		$object['lokasi'] 		= $this->input->post('lokasi');
		$object['verifikasi'] 	= "0";
		$file_name = rand();
		$object['file']	 	= $file_name.'.png';
		if ($this->db->insert('pengaduan', $object)) {
			if(!empty($_FILES['bukti']['name'])){ 
				$this->upload_foto('bukti',$file_name);
			}
			alert_notif_success("Berhasil tambah data"); redirect(base_url().'admin/Pengaduan');
		} else {
			alert_notif_danger("Gagal tambah data"); redirect(base_url().'admin/pengaduan');
		}
	}

	function Edit(){
		$where 					= ['id_pengaduan' => $this->input->post('id_pengaduan')];
		$object['id_user'] 		= $this->input->post('id_user');
		$object['pengaduan'] 	= $this->input->post('pengaduan');
		$object['latlong'] 		= $this->input->post('latlng');
		$object['lokasi'] 		= $this->input->post('lokasi');
		$object['verifikasi'] 	= "0";
		$file_name 				= rand();

		if(!empty($_FILES['bukti']['name'])){ 
			$object['file']	 		= $file_name.'.png';
		}
		if ($this->db->update('pengaduan', $object,$where)) {
			if(!empty($_FILES['bukti']['name'])){ 
				$object['file']	 		= $file_name.'.png';
				$up=$this->upload_foto('bukti',$file_name);
				unlink('assets_backend/gambar/'.$this->input->post('fileold'));
			}
			alert_notif_success("Berhasil edit data"); redirect(base_url().'admin/Pengaduan');
		} else {
			alert_notif_danger("Gagal edit data"); redirect(base_url().'admin/pengaduan');
		}
	}

	function delete(){
		$id = $this->input->get('id');
		$this->db->where('id_pengaduan', $id);
		if ($this->db->delete('pengaduan')) {
			unlink('assets_backend/gambar/'.$this->input->get('fileold'));
			alert_notif_success("Berhasil hapus data"); redirect(base_url().'admin/pengaduan');
		} else {
			alert_notif_danger("Gagal hapus data"); redirect(base_url().'admin/pengaduan');
		}
	}

	function Accept(){
		$id = $this->input->get('id');
		if ($this->db->update('pengaduan', ['verifikasi'=>"1"], ["id_pengaduan"=>$id])) {
			alert_notif_success("Berhasil terima pengaduan"); redirect(base_url().'admin/pengaduan');
		} else {
			alert_notif_danger("Gagal terima pengaduan"); redirect(base_url().'admin/pengaduan');
		}
	}

	function Refuse(){
		$id = $this->input->get('id');
		if ($this->db->update('pengaduan', ['verifikasi'=>"2"], ["id_pengaduan"=>$id])) {
			alert_notif_success("Berhasil tolak pengaduan"); redirect(base_url().'admin/pengaduan');
		} else {
			alert_notif_danger("Gagal tolak pengaduan"); redirect(base_url().'admin/pengaduan');
		}
	}

	public function upload_foto($file,$file_name){
		$config['upload_path']      = 'assets_backend/gambar';
		$config['allowed_types']    = 'gif|jpg|png';
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

?>