<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$data['judul'] = 'Info';
		$data['data'] = $this->db->get("info");
		$data['user']= $this->session->userdata("data_admin");
		$this->lib_template->load_backend_view('page/info',$data);
	}

	function Simpan(){
		$object['info_aplikasi'] 	= $this->input->post('info');
		if ($this->db->insert('info', $object)) {
			alert_notif_success("Berhasil tambah data"); redirect(base_url().'admin/Info');
		} else {
			alert_notif_danger("Gagal tambah data"); redirect(base_url().'admin/Info');
		}
	}

	function Edit(){
		$where = ['id_info' => $this->input->post('id_info')];
		$object['info_aplikasi'] 	= $this->input->post('info');
		if ($this->db->update('info', $object, $where)) {
			alert_notif_success("Berhasil edit data"); redirect(base_url().'admin/Info');
		} else {
			alert_notif_danger("Gagal edit data"); redirect(base_url().'admin/Info');
		}
	}

	function delete(){
		$id = $this->input->get('id');
		$this->db->where('id_info', $id);
		if ($this->db->delete('info')) {
			alert_notif_success("Berhasil hapus data"); redirect(base_url().'admin/pengaduan');
		} else {
			alert_notif_danger("Gagal hapus data"); redirect(base_url().'admin/pengaduan');
		}
	}
}
?>