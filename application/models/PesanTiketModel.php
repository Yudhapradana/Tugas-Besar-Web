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

    public function getSaldo($id){
        $query = $this->db->query("select saldo from userAdmin where idUserAdmin= $id");
  foreach ($query->result() as $key) {
        $data= $key->saldo;
      }
      return $data;
    }


    public function Order($no,$saldo){

   $tgl=date('Y-m-d');
  $object = array(
            'noPembelian' => $no,
            'idUser' => $this->session->userdata('logged_in')['id'],
            'tanggalPesan' => $tgl,
            'idJadwal' =>$this->input->post('id'),
            'totalHarga' => $this->input->post('jumlah'),
            );
    $this->db->insert('pembelian',$object);
    for($i=1;$i<=$this->input->post('kursi');$i++){
        if ($this->input->post($i)!='') {
            $object2 = array(
            'noPembelian' => $no,
            'noKursi' => $i,
            );
    $this->db->insert('detailpembelian',$object2);
        }
    }
    $this->db->where('idUserAdmin',$this->session->userdata('logged_in')['id'] );
     $object3 = array('saldo' => $saldo);
        $this->db->update('useradmin', $object3);


        $this->load->library('session');
    $id =  $this->session->userdata('logged_in')['id'];
    $username =  $this->session->userdata('logged_in')['username'];
    $foto =  $this->session->userdata('logged_in')['foto'];
    $level = $this->session->userdata('logged_in')['level'];
    $this->session->unset_userdata('logged_in');
    $sess_array = array('saldo' => $saldo,'id' =>$id,'username'=>$username,
          'level'=>$level , 'foto' =>$foto ,);
    $this->session->set_userdata('logged_in',$sess_array);


    }

    public function cekKursi($id){
        $this->db->select('noKursi');
        $this->db->from('detailpembelian');
        $this->db->join('pembelian', 'pembelian.noPembelian = detailpembelian.noPembelian');
         $this->db->where('idJadwal', $id);
          $query = $this->db->get();
        return $query->result();

    }
    public function getorder($no){
       $this->db->select('*');
        $this->db->from('pembelian');
         $this->db->where('noPembelian',$no);
          $query = $this->db->get();
        return $query->result();
    }


}