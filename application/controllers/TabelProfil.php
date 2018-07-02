<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelProfil extends CI_Controller {

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
    public function profil($id)
    {
     $this->load->model('ModelTabelAdmin');
        $session_data=$this->session->userdata('logged_in');
        $username['username'] = $session_data['username'];
        //$id['idUserAdmin'] = $session_data['idUserAdmin'];
        $this->load->view('header', $username);   
        $data['daftarAdmin'] = $this->ModelTabelAdmin->getDataProfil($id);
        $this->load->view('profil', $data);
    }


}

/* End of file TabelAdmin.php */
/* Location: ./application/controllers/TabelAdmin.php */