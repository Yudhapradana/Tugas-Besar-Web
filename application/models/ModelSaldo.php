<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelSaldo extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	
	public function insertSaldo()
	{
        $tgl = $this->input->post('tanggalBeli');
        $tgl2 = date_format(new DateTime($tgl), "Y-m-d");
        $saldo1 = $this->input->post('jumlah');
		$object = array('username' => $this->input->post('username'), 'tanggalBeli'=>$tgl2, 'jumlah'=>$saldo1, );
        $this->db->insert('saldo', $object);
        $username= $this->input->post('username');
        $saldo2= $this->db->query("SELECT saldo FROM useradmin where username='$username'");
        $saldo3= intval($saldo2);
        $object2 = array('saldo'=>$saldo1+$saldo2);
        $this->db->where('username', $username);
        $this->db->update('useradmin', $object2);
	}

	public function getSaldo($id)
	{
		$this->db->where('username', $id);
        $query = $this->db->get('useradmin');
        return $query->result();
	}

	// public function getAllSaldo()
	// {
	// 	$query = $this->db->get('saldo');
 //        if($query->num_rows()>0){
 //            return $query->result();
 //        }
	// }

	public function getAllSaldo()
    {
        $query = $this->db->get('saldo');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function getSaldo1()
    {
            $query = $this->db->get('saldo');
            return $query->result();
    }

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */