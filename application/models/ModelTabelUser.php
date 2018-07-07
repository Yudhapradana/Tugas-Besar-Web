<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelTabelUser extends CI_Model {

	public function getUser()
    {
            $query = $this->db->get('useradmin');
            return $query->result();
    }

    public function getDataUser($id)
    {
        $this->db->where('idUserAdmin', $id);
        $query = $this->db->get('useradmin');
        return $query->result();
    }

    public function getAllUser()
    {
        $query = $this->db->get('useradmin');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function saveUser()
    {
    	$password= $this->input->post('password');
		$md5=md5($password);
		$level = "user";
        $object = array('username' => $this->input->post('username'), 'password' => $md5,'level' => $level, 'nama' => $this->input->post('nama'), 'alamat' => $this->input->post('alamat'), 'telepon' => $this->input->post('telepon'), 'email' => $this->input->post('email'), 'foto' => $this->upload->data('file_name'), 'saldo' => $this->input->post('saldo'),);
        $this->db->insert('useradmin', $object);
    }

    public function deleteUser($id)
    {
        $this->db->where('idUserAdmin', $id);
        $this->db->delete('useradmin');
    }
    public function updateUser($id)
    {
        $password= $this->input->post('password');
		$md5=md5($password);
		$level = "user";
        $object = array('username' => $this->input->post('username'), 'password' => $md5,'level' => $level, 'nama' => $this->input->post('nama'), 'alamat' => $this->input->post('alamat'), 'telepon' => $this->input->post('telepon'), 'email' => $this->input->post('email'), 'foto' => $this->upload->data('file_name'), 'saldo' => $this->input->post('saldo'),);
        $this->db->where('idUserAdmin', $id);
        $this->db->update('useradmin', $object);
    }
	
    public function updateUser2($id)
    {
        $password= $this->input->post('password');
        $md5=md5($password);
        $level = "user";
        $object = array('username' => $this->input->post('username'), 'password' => $md5,'level' => $level, 'nama' => $this->input->post('nama'), 'alamat' => $this->input->post('alamat'), 'telepon' => $this->input->post('telepon'), 'email' => $this->input->post('email'), 'saldo' => $this->input->post('saldo'),);
        $this->db->where('idUserAdmin', $id);
        $this->db->update('useradmin', $object);
    }

}

/* End of file ModelTabelAdmin.php */
/* Location: ./application/models/ModelTabelAdmin.php */