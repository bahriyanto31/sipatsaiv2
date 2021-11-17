<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function _cek_exist_data($ch)
	{
		if ( $this->input->post('user')!=$this->input->post('username_old') ) {
			$cekexist = $this->db->get_where('user',['username'=>$this->input->post('user')])->num_rows();
			if ($cekexist > 0) {
				alert_notif_warning("Username Sudah ada, Silahkan coba username lain");
				if ($ch=="edit") {				
					redirect(base_url().'admin/users');
				}else{
					redirect(base_url().'admin/Dashboard');
				}
			}
		}
	}
	public function index()
	{
		if (isset($_POST['simpan'])) {
			$this->_cek_exist_data(null);
			$this->save();
		} else if (isset($_POST['edit'])) {
			$this->_cek_exist_data("edit");
			$this->edit("edit");
		} else if (isset($_POST['editprofile'])) {
			$this->_cek_exist_data("editprofile");
			$this->edit("profile");
		} else {
			$data['judul'] = 'Users';
			$this->lib_template->load_backend_view('page/users',$data);
		}
	} 
	public function save()
	{
		// print_r($_POST);
		$object['nama'] 	= $this->input->post('nama');
		$object['email'] 	= $this->input->post('email');
		$object['no_tlp'] 	= $this->input->post('no_tlp');
		$object['username'] = $this->input->post('user');
		$object['id_grup'] = $this->input->post('level');
		$object['password'] = base64_encode($this->input->post('pass'));
		$file_name = rand();
		$object['file']	 	= $file_name.'.png';
		if ($this->db->insert('user', $object)) {
			if(!empty($_FILES['foto']['name'])){ 
				$this->upload_foto('foto',$file_name);
			}
			alert_notif_success("Berhasil tambah data"); redirect(base_url().'admin/users');
		} else {
			alert_notif_danger("Gagal tambah data"); redirect(base_url().'admin/users');
		}
	}
	public function edit($ch)
	{
		// print_r($_POST);
		$where['id'] 		= $this->input->post('id');
		$object['nama'] 	= $this->input->post('nama');
		$object['email'] 	= $this->input->post('email');
		$object['id_grup'] = $this->input->post('level');
		$object['username'] = $this->input->post('user');
		$object['password'] = base64_encode($this->input->post('pass'));
		if(!empty($_FILES['foto']['name'])){ 
			$file_name = rand();
			$object['file']	 	= $file_name.'.png';
		}
		if ($this->db->update('user', $object ,$where)) {

			if(!empty($_FILES['foto']['name'])){ 
				unlink('assets_backend/gambar/'.$this->input->post('filename_old'));
				$this->upload_foto('foto',$file_name);
			}
			alert_notif_success("Berhasil ubah data"); 
			if ($ch=="edit") {				
				redirect(base_url().'admin/users');
			}else{
				redirect(base_url().'admin/Dashboard');
			}
		} else {
			// alert_notif_danger("Gagal ubah data"); 
			// if ($ch=="edit") {				
			// 	redirect(base_url().'admin/users');
			// }else{
			// 	redirect(base_url().'admin/Dashboard');
			// }
		}
	}
	public function delete()
	{
		$id = $this->input->get('id');
		$this->db->where('id', $id);
		if ($this->db->delete('user')) {
			unlink('assets_backend/gambar/'.$this->input->get('filename_old'));
			alert_notif_success("Berhasil hapus data"); redirect(base_url().'admin/users');
		} else {
			alert_notif_danger("Gagal hapus data"); redirect(base_url().'admin/users');
		}
	}

	public function upload_foto($file,$file_name){
		$config['upload_path']      = 'assets_backend/gambar';
		$config['allowed_types']    = 'gif|jpg|png';
		$config['file_name'] 		= $file_name.'.png'; 
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('foto')){
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

/* End of file Users.php */
/* Location: ./application/controllers/admin/Users.php */