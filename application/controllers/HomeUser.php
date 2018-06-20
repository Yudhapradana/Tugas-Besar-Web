<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeUser extends CI_Controller {

	public function index()
	{
		$this->load->view('user/index', FALSE);
	}

}

/* End of file  .php */
/* Location: ./application/controllers/ .php */