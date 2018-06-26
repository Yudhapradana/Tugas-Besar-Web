<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BioskopModel extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getAllBioskop()
    {
        $query = $this->db->get('datastudio');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function save()
    {
        $data= $this->input->post();
        $this->db->insert('datastudio', $data);
    }

    public function delete($id)
    {
        $this->db->where('idStudio', $id);
        $this->db->delete('datastudio');
    }
    public function update($id)
    {
        $this->db->where('idStudio', $id);
        $data= $this->input->post();
        $this->db->update('datastudio', $data);
    }

    public function getFilm()
    {
            $query = $this->db->get('film');
            return $query->result();
    }

    public function getDataFilm($id)
    {
        $this->db->where('noFilm', $id);
        $query = $this->db->get('film');
        return $query->result();
    }

    public function getAllFilm()
    {
        $query = $this->db->get('film');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
    public function getcomingsoon(){
        $query = $this->db->query("SELECT * FROM film where noFilm NOT in (SELECT noFilm from jadwalfilm)");
        return $query->result();
    }
    public function getnowplaying(){
        $query = $this->db->query("SELECT * FROM film inner join jadwalfilm on film.noFilm=jadwalfilm.noFilm");
        return $query->result();
    }


    public function saveFilm()
    {
        $object = array('judulFilm' => $this->input->post('judulFilm'), 'deskripsiFilm' => $this->input->post('deskripsiFilm'), 'foto' => $this->upload->data('file_name'), 'pemain' => $this->input->post('pemain'), 'sutradara' => $this->input->post('sutradara'),);
        $this->db->insert('film', $object);
    }

    public function deleteFilm($id)
    {
        $this->db->where('noFilm', $id);
        $this->db->delete('film');
    }
    public function updateFilm($id)
    {
        $object = array('judulFilm' => $this->input->post('judulFilm'), 'deskripsiFilm' => $this->input->post('deskripsiFilm'), 'foto' => $this->upload->data('file_name'), 'pemain' => $this->input->post('pemain'), 'sutradara' => $this->input->post('sutradara'),);
        $this->db->where('noFilm', $id);
        $this->db->update('film', $object);
    }
     public function updateFilm2($id)
    {
        $object = array('judulFilm' => $this->input->post('judulFilm'), 'deskripsiFilm' => $this->input->post('deskripsiFilm'), 'pemain' => $this->input->post('pemain'), 'sutradara' => $this->input->post('sutradara'),);
        $this->db->where('noFilm', $id);
        $this->db->update('film', $object);
    }


    
}

/* End of file BioskopModel.php */

?>