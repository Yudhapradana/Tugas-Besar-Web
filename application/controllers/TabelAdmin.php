<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelAdmin extends CI_Controller {

	public function index()
	{
		$session_data=$this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        
        $this->load->view('header', $data);
        $this->load->view('tabelAdmin');
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

	public function daftarAdmin()
	{
		$this->load->model('ModelTabelAdmin');
        $session_data=$this->session->userdata('logged_in');
        $username['username'] = $session_data['username'];
        $this->load->view('header', $username);
        $data['daftarAdmin'] = $this->ModelTabelAdmin->getAllAdmin();
        $this->load->view('tabelAdmin', $data);
	}

	public function addAdmin()
    {
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '10000000000';
        $config['max_width']  = '10240';
        $config['max_height']  = '7680';
            
        $this->load->library('upload', $config);

        if (! $this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
            $session_data=$this->session->userdata('logged_in');
            $data['username']=$session_data['username'];    
        }else{
            $this->load->model('ModelTabelAdmin');
        $this->ModelTabelAdmin->saveAdmin();
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('TabelAdmin/daftarAdmin');        
        }
    }

    public function deleteAdmin($id)
    {

        $this->load->model('ModelTabelAdmin');
        // $id = $this->input->post('idAdmin'); 
        $this->ModelTabelAdmin->deleteAdmin($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('TabelAdmin/daftarAdmin', 'refresh');
    }

    public function update($id)
    {
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->model('ModelTabelAdmin');
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        
        $data['userAdmin']=$this->ModelTabelAdmin->getDataAdmin($id);

        if ($this->form_validation->run() == FALSE) {
            //$data['userAdmin']=$this->ModelTabelAdmin->getDataAdmin($id);
            $session_data=$this->session->userdata('logged_in');
            $username['username'] = $session_data['username'];
        
            $this->load->view('header', $username);
            $this->load->view('updateAdmin', $data);
        } else {
            $config['upload_path'] = './assets/upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = '10000000000';
            $config['max_width']  = '10240';
            $config['max_height']  = '7680';
            
            $this->load->library('upload', $config);

            if (! $this->upload->do_upload('foto')) {
                $this->ModelTabelAdmin->updateAdmin2($id);
            //$data['daftarAdmin'] = $this->ModelTabelAdmin->getAllAdmin();
            $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diperbarui <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('TabelAdmin/daftarAdmin', 'refresh');
                // $error = array('error' => $this->upload->display_errors());
                // $session_data=$this->session->userdata('logged_in');
                // $username['username'] = $session_data['username'];
                // $this->load->view('header', $username);
                // $this->load->view('updateAdmin', $data);
            }else{
                $this->ModelTabelAdmin->updateAdmin($id);
            //$data['daftarAdmin'] = $this->ModelTabelAdmin->getAllAdmin();
            $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diperbarui <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('TabelAdmin/daftarAdmin', 'refresh');    
            }
            
        }   
    }

}

/* End of file TabelAdmin.php */
/* Location: ./application/controllers/TabelAdmin.php */