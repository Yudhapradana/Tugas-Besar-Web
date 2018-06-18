<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAdmin extends CI_Controller {

	public function index()
	{
		$session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
        $this->load->view('header',$data);
       $this->load->view('home');
		
	}

}

/* End of file homeAdmin.php */
/* Location: ./application/controllers/homeAdmin.php */