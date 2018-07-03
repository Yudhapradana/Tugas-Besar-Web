<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAdmin extends CI_Controller {
 
	public function index()
	{
		$session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $this->load->model('ModelTabelAdmin');
		//$data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
        $data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
        $this->load->view('header',$data);
        $data1['daftarAdmin'] = $this->ModelTabelAdmin->getAllAdmin();
        $this->load->model('BioskopModel');
        $data1['daftarfilm'] = $this->BioskopModel->getFilm();
       $this->load->view('home', $data1);
		
	}

}

/* End of file homeAdmin.php */
/* Location: ./application/controllers/homeAdmin.php */