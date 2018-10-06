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
  public function updatePass(){
    $this->load->model('ModelProfilUser');
    $this->ModelProfilUser->updatePass();
           
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
         $this->load->view('user/header');
		$this->load->view('user/profiluser',$data);
	}
  public function pesan(){
    $this->load->model('PesanTiketModel');
    $data['datafilm']=$this->PesanTiketModel->getFilm();
     $this->load->view('user/header');
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
   $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name=$no.'.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $no; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
 
        //$this->mahasiswa_model->simpan_mahasiswa($nim,$nama,$prodi,$image_name); //simpan ke database
        //redirect('mahasiswa'); //redirect ke mahasiswa usai simpan data

      $this->PesanTiketModel->order($no,$saldoakhir);
      $data2['databeli']= $this->PesanTiketModel->getorder($no);

      $this->load->view('user/suksesbeli',$data2);

    }


  }

  public function daftarPembelian()
  {
    $this->load->model('PesanTiketModel');
     $data['datapembelian']= $this->PesanTiketModel->getPembelian();
      $this->load->view('user/header');
      $this->load->view('user/daftarPembelian',$data);
  }

  public function tambahsaldo(){
     $this->load->view('user/header');
      $this->load->view('user/tambahsaldo');
  }

  public function isisaldo(){

    $this->load->model('TambahSaldo');
    $this->load->helper('url','form');
    $this->load->library('form_validation');
    
    $this->form_validation->set_rules('saldo', 'SALDO', 'trim|required');
    if ($this->form_validation->run()==FALSE) {
      $this->load->view('user/header');
      $this->load->view('user/tambahsaldo');
    }else{
      $config['upload_path'] = './assets/upload/buktisaldo';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']= 1000000000;
      $config['max_width']= 10240;
      $config['max_height']=7680;
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('foto')){
        $error= array('error'=>$this->upload->display_error());
          $this->load->view('user/header');
        $this->load->view('user/tambahsaldo',$error);
      }else{
      $this->TambahSaldo->insertSaldo();
        echo '<script>alert("sukses")</script>';
  $this->load->view('user/header');
      $this->load->view('user/tambahsaldo');
      
    }
  }

  }


}

/* End of file  .php */
/* Location: ./application/controllers/ .php */