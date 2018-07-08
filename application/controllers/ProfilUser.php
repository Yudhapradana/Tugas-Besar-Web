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
  function autoId(){
  $query = $this->db->query('select idpembelian from pembelian order by idpembelian desc limit 1');
  foreach ($query->result() as $key) {
        $data= $key->idpembelian;
      }
  $lastid = (int) substr($data, -4);
  $newid =$lastid+1;
  $id = substr("0000".$newid, -4);
  return 'G'.$id;

}
  public function pilihkursi($id){
    $this->load->model('PesanTiketModel');
    $data['datafilm']=$this->PesanTiketModel->getFilmByIdJadwal($id); 
    $data['datakursi']=$this->PesanTiketModel->cekKursi($id); 
    $this->load->view('user/pilihkursi',$data);
  }
  public function pilihkursi2($id){
    $no = $this->input->post('id');
     $this->load->model('PesanTiketModel');
     $data['datafilm']=$this->PesanTiketModel->getFilmByIdJadwal($no);
  
       $data['object'] = array();
       for($i=1; $i<=$id; $i++){
       if($this->input->post($i)=='ok'){
       array_push($data['object'], $i);
    
      }
    };

    $this->load->view('user/detailorder', $data);
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
  public function order(){
    

    $this->load->model('PesanTiketModel');
    $saldo=$this->PesanTiketModel->getSaldo( $this->session->userdata('logged_in')['id']);
    $jumlah = $this->input->post('jumlah');
    $saldoakhir = $saldo-$jumlah;
    if($saldo<$jumlah){
      echo '<script>alert("saldo tidak cukup")</script>';
      redirect('ProfilUser/pesan','refresh');
    }
    else{

      $query = $this->db->query('select noPembelian from pembelian order by noPembelian desc limit 1');
     $data="G0000";
  foreach ($query->result() as $key) {
        $data= $key->noPembelian;
      }
  $lastid = (int) substr($data, -4);
  $newid =$lastid+1;
  $id = substr("0000".$newid, -4);
  $no="GYzi".$id;
      $this->PesanTiketModel->order($no,$saldoakhir);
      $data2['databeli']= $this->PesanTiketModel->getorder($no);
      $this->load->view('user/suksesbeli',$data2);

    }


  }

  public function daftarPembelian()
  {
    $this->load->model('PesanTiketModel');
     $data['datapembelian']= $this->PesanTiketModel->getPembelian();
      $this->load->view('user/daftarPembelian',$data);
  }

}

/* End of file  .php */
/* Location: ./application/controllers/ .php */