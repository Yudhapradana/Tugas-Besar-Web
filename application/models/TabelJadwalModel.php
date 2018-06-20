<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelJadwalModel extends CI_Model {
  public function getAllJadwal()
    {
        $this->db->select('*');
        $this->db->from('jadwalfilm');
        $this->db->join('film', 'film.noFilm = jadwalfilm.noFilm');
        $this->db->join('datastudio', 'datastudio.idStudio = jadwalfilm.idStudio');
        $query = $this->db->get();
        return $query->result();
    }

    public function getFilm(){
    	$this->db->select('*');
        $this->db->from('film');
         $query = $this->db->get();
        return $query->result();
    }
     public function getStudio(){
    	$this->db->select('*');
        $this->db->from('dataStudio');
         $query = $this->db->get();
        return $query->result();
    }

    public function saveJadwal()
    {
        $object = array('noFilm' => $this->input->post('film2'), 'idStudio' => $this->input->post('studio2'), 'tanggalTayang' => $this->input->post('tanggal2'),'jadwalTayang' => $this->input->post('jadwal2'),'harga' => $this->input->post('harga2'));
        $this->db->insert('jadwalfilm', $object);
    }

    public function deleteJadwal($id)
    {
        $this->db->where('idJadwal', $id);
        $this->db->delete('jadwalfilm');
    }
    public function updateJadwal($id)
    {
        $object = array('noFilm' => $this->input->post('film'), 'idStudio' => $this->input->post('studio'), 'tanggalTayang' => $this->input->post('tanggal'),'jadwalTayang' => $this->input->post('jadwal'),'harga' => $this->input->post('harga'));
        $this->db->where('idJadwal', $id);
        $this->db->update('jadwalfilm', $object);
    }
	public function getJadwal($id){
        $this->db->select('*');
        $this->db->from('jadwalfilm');
         $this->db->where('idJadwal', $id);
         $query = $this->db->get();
        return $query->result();
    }

}

/* End of file tabelJadwalModel.php */
/* Location: ./application/models/tabelJadwalModel.php */