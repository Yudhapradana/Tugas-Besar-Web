<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilUser extends CI_Controller {
	  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('logged_in')) {
     
      redirect('Login','refresh');
    }
  }
  public function pilihjam($film){
    $this->load->model('PesanTiketModel');

    $data['datafilm']=$this->PesanTiketModel->getFilmById($film);
    $data['film']=$this->PesanTiketModel->film($film);
    $this->load->view('user/pilihjam',$data);
  }
  public function update(){
    $this->load->model('ModelProfilUser');
    $this->ModelProfilUser->update();
           
            $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diperbarui <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('ProfilUser/profil', 'refresh');
  }
  public function pilihkursi($id){
    $this->load->model('PesanTiketModel');
    $data['datafilm']=$this->PesanTiketModel->getFilmByIdJadwal($id); 
    $this->load->view('user/pilihkursi',$data);
  }
  public function pilihkursi2($id){
    for($i=1; $i<= $id;$i++){
      if($this->input->post($i)=='pilih'){
        echo "$i <br>";
      }
    }
  }

	public function profil()
	{
		$this->load->model('ModelTabelAdmin');
        $session_data=$this->session->userdata('logged_in');
         $data['daftarprofil'] = $this->ModelTabelAdmin->getDataAdmin($session_data['id']);	
		$this->load->view('user/profiluser',$data);
	}
  public function pesan(){
    $this->load->model('PesanTiketModel');
    $data['datafilm']=$this->PesanTiketModel->getFilm();
    $this->load->view('user/pesantiket',$data);
  }

}

/* End of file  .php */
/* Location: ./application/controllers/ .php */