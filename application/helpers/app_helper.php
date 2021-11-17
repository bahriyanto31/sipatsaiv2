<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
    function auth_app($level)
    {
    	$CI =& get_instance();
    	$sesi_level = $CI->session->userdata('data_admin');
        $_return = false;
    	if ($sesi_level) {
    		switch ($sesi_level['level']) {
	    		case 'admin': $_return = true; break;
	    		default: $_return = false; break;
	    	}
    	}
        if (!$_return) {
            alert_notif_danger("Anda belum Login, Silahkan Login terlebih dahulu"); redirect(base_url().'admin/login');
        }
        return $_return;
    	
    }
    function active_menu($menu){
        $CI =& get_instance();
        $segment = 1;
        if ($CI->uri->segment($segment) == '' && $menu == 'home') {
            return 'active';
        } else {
            return ($CI->uri->segment($segment)==$menu)?'active':'';
        }
    }
    function show_alert_notif()
    {
        $CI =& get_instance();
        return $CI->session->flashdata('alert_notif')['pesan'];
    }
    function alert_notif_warning($pesan)
    {
    	$CI =& get_instance();
    	$data = array(
    		'tipe' => 'warning',
    		'msg'  => $pesan,
    		'pesan' => '<div class="alert alert-warning" role="alert">'.$pesan.'</div>', 
    	);	
    	return $CI->session->set_flashdata('alert_notif',$data);
    }
    function alert_notif_danger($pesan)
    {
        $CI =& get_instance();
        $data = array(
            'tipe' => 'danger',
            'msg'  => $pesan,
            'pesan' => '<div class="alert alert-danger" role="alert">'.$pesan.'</div>', 
        );  
        return $CI->session->set_flashdata('alert_notif',$data);
    }
    function alert_notif_success($pesan)
    {
    	$CI =& get_instance();
    	$data = array(
    		'tipe' => 'success',
    		'msg'  => $pesan,
    		'pesan' => '<div class="alert alert-success" role="alert">'.$pesan.'</div>', 
    	);	
    	return $CI->session->set_flashdata('alert_notif',$data);
    }
