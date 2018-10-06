<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahSaldo extends CI_Model {
public function insertSaldo(){
	$stts = "belum dikonfirmasi";
		$object = array(
			'username' =>$this->session->userdata('logged_in')['id'],
			'tanggalBeli' => date("Y-m-d") ,
			'jumlah' => $this->input->post('saldo'),
			'bukti' =>$this->upload->data('file_name'),
			'status' => $stts,
			);
		$this->db->insert('saldo',$object);

		}
	}