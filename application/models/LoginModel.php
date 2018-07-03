<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {
		public function login($username, $password){
			$this->db->select('idUserAdmin,username,password,level,foto');
			$this->db->from('userAdmin');
			$this->db->where('username', $username);
			$this->db->where('password', MD5($password));
			$query = $this->db->get();
			
			if($query->num_rows()==1){
				return $query->result();
			}
			else{
				return false;
			}


		}
		public function insertUser(){
		$password = $this->input->post('password');
		$pass = md5($password);
		$object = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telepon' => $this->input->post('telepon'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $pass,
			'level'=> 'user',

			);
		$this->db->insert('userAdmin',$object);

		}
	

}

/* End of file user.php */
/* Location: ./application/models/user.php */