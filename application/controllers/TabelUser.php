<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelUser extends CI_Controller {
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
		$this->load->model('ModelTabelUser');
        $session_data=$this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $this->load->model('ModelTabelAdmin');
$data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
        $this->load->view('header', $data);
        $data['daftarUser'] = $this->ModelTabelUser->getAllUser();
        $this->load->view('tabelUser', $data);
	}

	public function daftarUser()
	{
		$this->load->model('ModelTabelUser');
        $session_data=$this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
         $data['id'] = $session_data['id'];
         $id= $session_data['id'];
        $this->load->model('ModelTabelAdmin');
$data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
        $this->load->view('header', $data);
        $data['daftarUser'] = $this->ModelTabelUser->getAllUser2();
        $this->load->view('tabelUser', $data);
	}

	public function addUser(){

        $this->load->model('ModelTabelUser');
        $this->ModelTabelUser->saveUser();
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('TabelUser/daftarUser');
    }

    public function deleteUser($id)
    {

        $this->load->model('ModelTabelUser');
        // $id = $this->input->post('idAdmin'); 
        $this->ModelTabelUser->deleteUser($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('TabelUser/daftarUser', 'refresh');
    }

    public function update($id)
    {
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->model('ModelTabelUser');
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        
        $data['userAdmin']=$this->ModelTabelUser->getDataUser($id);

        if ($this->form_validation->run() == FALSE) {
            //$data['userAdmin']=$this->ModelTabelAdmin->getDataAdmin($id);
            $session_data=$this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['id'] = $session_data['id'];
            $id= $session_data['id'];
            $this->load->model('ModelTabelAdmin');
            $data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
        
            $this->load->view('header', $data);
            $this->load->view('updateUser', $data);
        } else {
            $config['upload_path'] = './assets/upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = '10000000000';
            $config['max_width']  = '10240';
            $config['max_height']  = '7680';

            $this->load->library('upload', $config);

            if (! $this->upload->do_upload('foto')) {
                $this->ModelTabelUser->updateUser($id);
                //$data['daftarAdmin'] = $this->ModelTabelAdmin->getAllAdmin();
                $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diperbarui <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('TabelUser/daftarUser', 'refresh');
              }else{
                 $this->ModelTabelUser->updateUser2($id);
                //$data['daftarAdmin'] = $this->ModelTabelAdmin->getAllAdmin();
                $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diperbarui <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('TabelUser/daftarUser', 'refresh');
              }
        }   
    }

}

/* End of file TabelAdmin.php */
/* Location: ./application/controllers/TabelAdmin.php */