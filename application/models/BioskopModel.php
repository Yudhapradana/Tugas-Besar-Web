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
    public function getstudio($id)
    {
        $this->db->where('idStudio', $id);
        $query = $this->db->get('datastudio');
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
    public function cekjadwal(){
         $tgl=date('Y-m-d');
         // $query = $this->db->query("SELECT * FROM film INNER join jadwalfilm on film.noFilm= jadwalfilm.noFilm WHERE jadwalfilm.tanggalTayang = $tgl GROUP by tanggalTayang");
        $this->db->select('*');
        $this->db->from('film');
        $this->db->join('jadwalfilm', 'film.noFilm = jadwalfilm.noFilm');
        $this->db->join('datastudio', 'jadwalfilm.idStudio = datastudio.idStudio');
         $this->db->where('tanggalTayang', $tgl);
         $this->db->group_by("tanggalTayang");
         $this->db->group_by("jadwalfilm.idStudio");
         $query = $this->db->get();
        return $query->result();
    }
    public function cekjam($film,$studio){
          $this->db->select('*');
        $this->db->from('jadwalfilm');
         $this->db->where('tanggalTayang', $tgl);
          $this->db->where('noFilm', $film);
          $this->db->where('idStudio', $studio);
            $query = $this->db->get();
        return $query->result();


    }
    public function getcomingsoon(){
        $query = $this->db->query("SELECT * FROM film where noFilm NOT in (SELECT noFilm from jadwalfilm)");
        return $query->result();
    }
    public function getnowplaying(){
        $query = $this->db->query("SELECT * FROM film inner join jadwalfilm on film.noFilm=jadwalfilm.noFilm group by film.noFilm");
        return $query->result();
    }


    public function saveFilm()
    {
        $tgl = $this->input->post('releaseDate');
        $tgl2 = date_format(new DateTime($tgl), "Y-m-d");

        $object = array('judulFilm' => $this->input->post('judulFilm'), 'deskripsiFilm' => $this->input->post('deskripsiFilm'), 'foto' => $this->upload->data('file_name'), 'pemain' => $this->input->post('pemain'), 'sutradara' => $this->input->post('sutradara'), 'produser' => $this->input->post('produser'), 'genre' => $this->input->post('genre'), 'durasi' => $this->input->post('durasi'), 'releaseDate'=>$tgl2,);
        $this->db->insert('film', $object);
    }

    public function deleteFilm($id)
    {
        $this->db->where('noFilm', $id);
        $this->db->delete('film');
    }
    public function updateFilm($id)
    {
        $tgl = $this->input->post('releaseDate');
        $tgl2 = date_format(new DateTime($tgl), "Y-m-d");

        $object = array('judulFilm' => $this->input->post('judulFilm'), 'deskripsiFilm' => $this->input->post('deskripsiFilm'), 'foto' => $this->upload->data('file_name'), 'pemain' => $this->input->post('pemain'), 'sutradara' => $this->input->post('sutradara'), 'produser' => $this->input->post('produser'), 'genre' => $this->input->post('genre'), 'durasi' => $this->input->post('durasi'), 'releaseDate'=>$tgl2,);
        $this->db->where('noFilm', $id);
        $this->db->update('film', $object);
    }
     public function updateFilm2($id)
    {
        $tgl = $this->input->post('releaseDate');
        $tgl2 = date_format(new DateTime($tgl), "Y-m-d");

        $object = array('judulFilm' => $this->input->post('judulFilm'), 'deskripsiFilm' => $this->input->post('deskripsiFilm'), 'pemain' => $this->input->post('pemain'), 'sutradara' => $this->input->post('sutradara'), 'produser' => $this->input->post('produser'), 'genre' => $this->input->post('genre'), 'durasi' => $this->input->post('durasi'), 'releaseDate'=>$tgl2,);
        $this->db->where('noFilm', $id);
        $this->db->update('film', $object);
    }


    
}

/* End of file BioskopModel.php */

?>