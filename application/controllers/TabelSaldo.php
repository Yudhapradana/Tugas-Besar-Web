<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelSaldo extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
			if ($this->session->userdata('logged_in')) {
	      $session_data=$this->session->userdata('logged_in');
	      $data['username']=$session_data['username'];
	      $data['level']=$session_data['level'];
	      $current_controller = $this->router->fetch_class();
	      $this->load->library('acl');
	      if(!$this->acl->is_public($current_controller)){
	        if(!$this->acl->is_allowed($current_controller,$data['level'])){
	          //redirect('login/logout','refresh');
	          echo '<script>alert("anda tidak memiliki hak akses")</script>';
	          redirect('HomeAdmin','refresh');
	        }
	      }
	    }
	    else{

	      redirect('Login','refresh');
	    }
	}

	public function index()
	{
		$this->load->model('ModelTabelAdmin');
		$this->load->model('ModelSaldo');
		$session_data=$this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
        $this->load->view('header', $data);
		$data['daftarSaldo'] = $this->ModelSaldo->getAllSaldo();
        $this->load->view('tabelSaldo', $data);
	}

	public function daftarSaldo()
	{
		$this->load->model('ModelTabelAdmin');
		$this->load->model('ModelSaldo');
		$session_data=$this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
        $data1['daftarSaldo'] = $this->ModelSaldo->getSaldo1();
        $this->load->view('header', $data);
        $this->load->view('tabelSaldo', $data1);
	}

	public function insertData()
	{
		$this->load->model('ModelSaldo');
		$this->ModelSaldo->insertSaldo();
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('TabelSaldo/', 'refresh');
	}

}

/* End of file TabelSaldo.php */
/* Location: ./application/controllers/TabelSaldo.php */