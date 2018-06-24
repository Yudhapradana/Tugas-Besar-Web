<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAdmin extends CI_Controller {
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
        if($this->acl->is_allowed($current_controller,$data['level'])){
          //redirect('login/logout','refresh');
          echo '<script>alert("anda tidak memiliki hak akses")</script>';
          redirect('homeAdmin','refresh');
        }
      }
    }
    else{

      redirect('Login','refresh');
    }
  }

 
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