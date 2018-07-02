<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
	public function cekLogin(){
	$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'USERNAME', 'trim|required');
		$this->form_validation->set_rules('password', 'PASSWORD', 'trim|required|callback_cekDb');
		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('login');
		} else{
			$session_data=$this->session->userdata('logged_in');
			$data['username']=$session_data['username'];
			$data['level']=$session_data['level'];
			if($data['level']=='user'){
				redirect('homeUser','refresh');
			}else{
				redirect('homeAdmin','refresh');
			}
		
	}
	}

	public function cekDb($password){
	$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('LoginModel');
		$username= $this->input->post('username');
		$result = $this->LoginModel->login($username,$password);
		if($result){
			$sess_array= array();
			foreach ($result as $key) {
				$sess_array = array('id' =>$key->idUserAdmin ,'username'=>$key->username,
					'level'=>$key->level , 'foto' =>$key->foto ,);
			$this->session->set_userdata('logged_in',$sess_array);
			}
			return true;
		}
		else{
			$this->form_validation->set_message('cekDb','login gagal');
			return false;
		}

	}

	public function logout(){
		$this->load->library('session');
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

	public function registrasi(){
		$this->load->view('registrasi');
	}

	public function daftar(){

		$this->load->model('LoginModel');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'NAME', 'trim|required');
		$this->form_validation->set_rules('alamat', 'ADDRESS', 'trim|required');
		$this->form_validation->set_rules('telepon', 'PHONE NUMBER', 'trim|required');
		$this->form_validation->set_rules('email', 'EMAIL', 'trim|required');
		$this->form_validation->set_rules('username', 'USERNAME', 'trim|required');
		$this->form_validation->set_rules('password', 'PASSWORD', 'trim|required');
	
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('register');
		}else{
			$this->LoginModel->insertUser();
				echo '<script>alert("sukses mendaftar")</script>';

			$this->load->view('login');
		}
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */