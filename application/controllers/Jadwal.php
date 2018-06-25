<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function index()
	{
			$this->load->model('BioskopModel');
			
		$this->load->view('user/jadwal');
	}

}

/* End of file  .php */
/* Location: ./application/controllers/ .php */