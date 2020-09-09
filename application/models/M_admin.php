<?php

class M_admin extends CI_Model{
	protected $_table = 'admin';

    // Cek NIK untuk login
	public function cek_nik($nik){
		$query = $this->db->get_where($this->_table, ['nik' => $nik]);
		return $query->row();
	}
}