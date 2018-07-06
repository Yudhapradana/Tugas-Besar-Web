<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ModelProfilUser extends CI_Model {
	public function update(){
	$password= $this->input->post('password');
       
        $id= $this->input->post('id');
        $level = "user";
        $object = array('username' => $this->input->post('username'),'nama' => $this->input->post('nama'), 'alamat' => $this->input->post('alamat'), 'telepon' => $this->input->post('telepon'), 'email' => $this->input->post('email'),'level' => $level );
        $this->db->where('idUserAdmin', $id);
        $this->db->update('useradmin', $object);
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

}