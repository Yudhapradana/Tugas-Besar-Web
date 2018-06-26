<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelFilm extends CI_Controller {
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
		$this->load->model('BioskopModel');
        $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
         $this->load->view('header',$data);
        $data['daftarFilm'] = $this->BioskopModel->getFilm();
        $this->load->view('daftarFilm', $data);
	}

  public function getFilm($id)
  {
    $this->load->model('BioskopModel');
    $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
         $this->load->view('header',$data);
        $data['daftarFilm'] = $this->BioskopModel->getDataFilm($id);
        $this->load->view('detailFilm', $data);
  }

    public function addFilm(){
        $this->load->model('BioskopModel');
        $this->BioskopModel->saveFilm();
    }

    public function deleteFilm($id)
    {
        $this->load->model('BioskopModel');
        $this->BioskopModel->deleteFilm($id);
        $data['daftarFilm'] = $this->BioskopModel->getFilm();
      $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
         $this->load->view('header',$data);
        $this->load->view('daftarFilm',$data);
    }
    public function updateFilm($id)
    {
        // $this->load->model('BioskopModel');
        // $id = $this->input->post('noFilm'); 
        // $this->BioskopModel->update($id);

        
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->model('BioskopModel');
        
        $this->form_validation->set_rules('judulFilm', 'judulFilm', 'trim|required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('deskripsiFilm', 'deskripsiFilm', 'trim|required|min_length[1]|max_length[100]');

        $data['daftarFilm']=$this->BioskopModel->getDataFilm($id);

        if ($this->form_validation->run() == FALSE) {
            $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
         $this->load->view('header',$data);
            $this->load->view('edit_film_view', $data);
        } else {
            $config['upload_path'] = './assets/upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = '10000000';
            $config['max_width']  = '10240';
            $config['max_height']  = '7680';
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('foto')){

               // $error = array('error' => $this->upload->display_errors());
                //$data['daftarFilm'] = $this->BioskopModel->getFilm();
                //$this->load->view('header');
                //$this->load->view('edit_film_view', $data);  
                 $this->BioskopModel->updateFilm2($id);

                echo '<script>alert("sukses edit film")</script>';

                redirect('TabelFilm','refresh');

            }
            else
            {

                $this->BioskopModel->updateFilm($id);

                echo '<script>alert("sukses edit film")</script>';

               redirect('TabelFilm','refresh');

            }
            
        }        
    }

    public function createFilm()
    {
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->model('BioskopModel');
        
        $this->form_validation->set_rules('judulFilm', 'judulFilm', 'trim|required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('deskripsiFilm', 'deskripsiFilm', 'trim|required|min_length[1]');
        
        if ($this->form_validation->run() == FALSE) {
         $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
         $this->load->view('header',$data);
            $this->load->view('tambah_film_view');
        } else {
            $config['upload_path'] = './assets/upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = '10000000000';
            $config['max_width']  = '10240';
            $config['max_height']  = '7680';
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('foto')){
                $error = array('error' => $this->upload->display_errors());
               	$session_data=$this->session->userdata('logged_in');
        		$data['username']=$session_data['username'];
         		$this->load->view('header',$data);
                $this->load->view('tambah_film_view', $error);
            }
            else{
                $this->BioskopModel->saveFilm();
               
                echo '<script>alert("sukses tambah film")</script>';

                $data['daftarFilm'] = $this->BioskopModel->getFilm();

                $session_data=$this->session->userdata('logged_in');
        		$data['username']=$session_data['username'];
        		$this->load->view('header',$data);
                $this->load->view('daftarFilm', $data);
            }
            
        }
        
    }

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */