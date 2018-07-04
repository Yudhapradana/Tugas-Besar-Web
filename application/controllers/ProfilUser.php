<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilUser extends CI_Controller {
	  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('logged_in')) {
     
      redirect('Login','refresh');
    }
  }

	public function profil()
	{
		$this->load->model('ModelTabelAdmin');
        $session_data=$this->session->userdata('logged_in');
         $data['daftarprofil'] = $this->ModelTabelAdmin->getDataAdmin($session_data['id']);	
		$this->load->view('user/profiluser',$data);
	}
  public function pesan(){
    $this->load->model('PesanTiketModel');
    $data['datafilm']=$this->PesanTiketModel->getFilm();
    $this->load->view('user/pesantiket',$data);
  }

}

/* End of file  .php */
/* Location: ./application/controllers/ .php */