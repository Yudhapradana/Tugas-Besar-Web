<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelDetilPembelian extends CI_Model {
	public function getAllDetilPembelian()
    {
        $query = $this->db->get('detailpembelian');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function delete($id)
    {
        $this->db->where('no', $id);
        $this->db->delete('detailpembelian');
    }
	

}

/* End of file ModelPembelian.php */
/* Location: ./application/models/ModelPembelian.php */