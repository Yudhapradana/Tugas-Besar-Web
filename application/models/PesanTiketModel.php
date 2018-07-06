<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PesanTiketModel extends CI_Model {
	public function getFilm(){
		$tgl=date('Y-m-d');
         // $query = $this->db->query("SELECT * FROM film INNER join jadwalfilm on film.noFilm= jadwalfilm.noFilm WHERE jadwalfilm.tanggalTayang = $tgl GROUP by tanggalTayang");
        $this->db->select('*');
        $this->db->from('film');
        $this->db->join('jadwalfilm', 'film.noFilm = jadwalfilm.noFilm');
        $this->db->join('datastudio', 'jadwalfilm.idStudio = datastudio.idStudio');
         //$this->db->where('tanggalTayang', $tgl);
       //  $this->db->group_by("tanggalTayang");
         $this->db->group_by("film.noFilm");
         $query = $this->db->get();
        return $query->result();
	}
        public function getFilmById($film){
        $this->db->select('*');
        $this->db->from('film');
        $this->db->join('jadwalfilm', 'film.noFilm = jadwalfilm.noFilm');
        $this->db->join('datastudio', 'jadwalfilm.idStudio = datastudio.idStudio');
         $this->db->where('film.noFilm', $film);
         $query = $this->db->get();
        return $query->result();
        }
        public function film($film){
        $this->db->select('*');
        $this->db->from('film');
        $this->db->where('noFilm', $film);
         $query = $this->db->get();
        return $query->result();
        }
        public function getFilmByIdJadwal($film){
        $this->db->select('*');
        $this->db->from('film');
        $this->db->join('jadwalfilm', 'film.noFilm = jadwalfilm.noFilm');
        $this->db->join('datastudio', 'jadwalfilm.idStudio = datastudio.idStudio');
         $this->db->where('jadwalfilm.idJadwal', $film);
         $query = $this->db->get();
        return $query->result();
        }

}