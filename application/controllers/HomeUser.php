<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeUser extends CI_Controller {

	public function index()
	{
			$this->load->model('BioskopModel');
			$data['comingsoon'] = $this->BioskopModel->getcomingsoon();
			$data['nowplaying'] = $this->BioskopModel->getnowplaying();
		$this->load->view('user/index', $data);
	}

}

/* End of file  .php */
/* Location: ./application/controllers/ .php */