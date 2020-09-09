<?php

class M_warga extends CI_Model{
	protected $_table = 'warga';

    // Cek NIK untuk login
	public function cek_nik($nik){
		$query = $this->db->get_where($this->_table, ['nik' => $nik]);
		return $query->row();
	}
}