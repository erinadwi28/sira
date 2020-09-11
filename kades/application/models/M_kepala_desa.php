<?php

class M_kepala_desa extends CI_Model{
	protected $_table = 'kepala_desa';

    // Cek NIK untuk login
	public function cek_nik($nik){
		$query = $this->db->get_where($this->_table, ['nik' => $nik]);
		return $query->row_array();
	}
}