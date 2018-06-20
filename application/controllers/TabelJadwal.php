<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelJadwal extends CI_Controller {

	public function index()
	{
		$this->load->model('TabelJadwalModel');
       $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
         $this->load->view('header',$data);
        
         $data['jadwal_list'] = $this->TabelJadwalModel->getAllJadwal();
         $data['film_list']= $this->TabelJadwalModel->getFilm();
         $data['studio_list']= $this->TabelJadwalModel->getStudio();
       $this->load->view('tabel-jadwal',$data);
		
	}
	 public function tableJadwal()
    {
          $this->load->model('TabelJadwalModel');
         $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
         $this->load->view('header',$data);
        
         $data['jadwal_list'] = $this->TabelJadwalModel->getAllJadwal();
         $data['film_list']= $this->TabelJadwalModel->getFilm();
         $data['studio_list']= $this->TabelJadwalModel->getStudio();

       $this->load->view('table-jadwal',$data);
    }

    public function addJadwal(){
        $this->load->model('TabelJadwalModel');
        $this->TabelJadwalModel->saveJadwal();
        echo '<script>alert("sukses add data")</script>';
         redirect('TabelJadwal','refresh');
    }

    public function deleteJadwal()
    {
        $this->load->model('TabelJadwalModel');
        $id = $this->input->post('idJadwal'); 
        $this->TabelJadwalModel->deleteJAdwal($id);
    }
    public function updateJadwal()
    {
        $this->load->model('TabelJadwalModel');
        $id = $this->input->post('id'); 
        $this->TabelJadwalModel->updateJadwal($id);
       
    }
    public function updateJadwalById($id)
    {
        $this->load->model('TabelJadwalModel');
          $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
         $this->load->view('header',$data);
        $data['list']= $this->TabelJadwalModel->getJadwal($id);
         $data['film_list']= $this->TabelJadwalModel->getFilm();
         $data['studio_list']= $this->TabelJadwalModel->getStudio();
    $this->load->library('form_validation');
    $this->form_validation->set_rules('film', 'Film', 'trim|required');
    $this->form_validation->set_rules('studio', 'Studio', 'trim|required');
    $this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
       $this->form_validation->set_rules('jadwal', 'Jadwal', 'trim|required');
          $this->form_validation->set_rules('harga', 'Harga', 'trim|required');
    if ($this->form_validation->run()==FALSE) {
      $this->load->view('edit_jadwal_view',$data);
    }else{
      $this->TabelJadwalModel->updateJadwal($id);
       echo '<script>alert("sukses update data")</script>';
         redirect('TabelJadwal','refresh');
    }
    }

}

/* End of file tabelJadwal.php */
/* Location: ./application/controllers/tabelJadwal.php */