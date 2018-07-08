<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function index()
	{
			$this->load->model('BioskopModel');
			 $data['daftarFilm'] = $this->BioskopModel->cekJadwal();
			 $data['jamtayang'] = $this->BioskopModel->cekJam();
			
		$this->load->view('user/jadwal', $data);
	}
	public function studio($id)
	{
			$this->load->model('BioskopModel');
			 $data['daftarStudio'] = $this->BioskopModel->getstudio($id);
			
		$this->load->view('user/studio',$data);
	}
	public function deskripsi($id){
		$this->load->model('BioskopModel');
		$data['daftarFilm'] = $this->BioskopModel->getDataFilm($id);
		 $data['daftarJadwal'] = $this->BioskopModel->cekJadwal();
		$this->load->view('user/deskripsi',$data);
	}

}

/* End of file  .php */
/* Location: ./application/controllers/ .php */