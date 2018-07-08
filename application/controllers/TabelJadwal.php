<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelJadwal extends CI_Controller {
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
		$this->load->model('TabelJadwalModel');
       $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $this->load->model('ModelTabelAdmin');
$data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
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
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $this->load->model('ModelTabelAdmin');
$data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
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
        $data['id'] = $session_data['id'];
        $id= $session_data['id'];
        $this->load->model('ModelTabelAdmin');
$data['foto'] = $this->ModelTabelAdmin->getDataProfil($id);
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

    public function createPdf()
  {
    $this->load->model('TabelJadwalModel');
    $this->load->library('pdf');     
    $data['jadwal_list'] = $this->TabelJadwalModel->getAllJadwal();
         $data['film_list']= $this->TabelJadwalModel->getFilm();
         $data['studio_list']= $this->TabelJadwalModel->getStudio();
    $this->pdf->load_view('tabelJadwal',$data);
  }

}

/* End of file tabelJadwal.php */
/* Location: ./application/controllers/tabelJadwal.php */