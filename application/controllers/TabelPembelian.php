<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelPembelian extends CI_Controller {
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
		$this->load->library('pdf');     
		$this->load->model('ModelTabelAdmin');
		$this->load->model('ModelPembelian');
		$session_data=$this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
        $data1['daftarSaldo'] = $this->ModelPembelian->getAllPembelian();
        $this->load->view('header', $data);
        $this->load->view('tabelSaldo', $data1);
	}

	public function daftarPembelian()
		{
		$this->load->model('ModelTabelAdmin');
		$this->load->model('ModelPembelian');
		$session_data=$this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
        $data1['daftarPembelian'] = $this->ModelPembelian->getAllPembelian();
        $this->load->view('header', $data);
        $this->load->view('tabelPembelian', $data1);
		}

	public function createPdf()
	{
		$this->load->model('ModelPembelian');
		$this->load->library('pdf');     
		$data['daftarPembelian'] = $this->ModelPembelian->getAllPembelian();
		$this->pdf->load_view('tabelPembelian',$data);
	}

	public function delete($id)
		{

        $this->load->model('ModelPembelian');
        // $id = $this->input->post('idAdmin'); 
        $this->ModelPembelian->delete($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('TabelPembelian/daftarPembelian', 'refresh');
    }

}

/* End of file TabelPembelian.php */
/* Location: ./application/controllers/TabelPembelian.php */