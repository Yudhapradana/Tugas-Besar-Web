<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelUser extends CI_Controller {

	public function index()
	{
		$this->load->model('ModelTabelUser');
        $session_data=$this->session->userdata('logged_in');
        $username['username'] = $session_data['username'];
        $this->load->view('header', $username);
        $data['daftarUser'] = $this->ModelTabelUser->getAllUser();
        $this->load->view('tabelUser', $data);
	}

	public function daftarUser()
	{
		$this->load->model('ModelTabelUser');
        $session_data=$this->session->userdata('logged_in');
        $username['username'] = $session_data['username'];
        $this->load->view('header', $username);
        $data['daftarUser'] = $this->ModelTabelUser->getAllUser();
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
            $username['username'] = $session_data['username'];
        
            $this->load->view('header', $username);
            $this->load->view('updateUser', $data);
        } else {
            $this->ModelTabelUser->updateUser($id);
            //$data['daftarAdmin'] = $this->ModelTabelAdmin->getAllAdmin();
            $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diperbarui <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('TabelUser/daftarUser', 'refresh');
        }   
    }

}

/* End of file TabelAdmin.php */
/* Location: ./application/controllers/TabelAdmin.php */