<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelStudio extends CI_Controller {

	public function index()
	{
		 $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
         $this->load->view('header',$data);
        $this->load->view('table-basic');
	}

    public function getAllBioskop()
    {
        $this->load->model('BioskopModel');
        $result = $this->BioskopModel->getAllBioskop(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function addBioskop(){
        $this->load->model('BioskopModel');
        $this->BioskopModel->save();
    }

    public function deleteBioskop()
    {
        $this->load->model('BioskopModel');
        $id = $this->input->post('idBioskop'); 
        $this->BioskopModel->delete($id);
    }
    public function updateBioskop()
    {
        $this->load->model('BioskopModel');
        $id = $this->input->post('idStudio'); 
        $this->BioskopModel->update($id);
    }


}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */