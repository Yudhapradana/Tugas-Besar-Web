<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPembelian extends CI_Model {
	public function getAllPembelian()
    {
        $query = $this->db->get('pembelian');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function delete($id)
    {
        $this->db->where('noPembelian', $id);
        $this->db->delete('pembelian');
    }
	

}

/* End of file ModelPembelian.php */
/* Location: ./application/models/ModelPembelian.php */