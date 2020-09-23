<?php

class M_warga extends CI_Model
{
	protected $_table = 'warga';

	// Cek NIK untuk login
	public function cek_nik($nik)
	{
		$query = $this->db->get_where($this->_table, ['nik' => $nik]);
		return $query->row_array();
	}

	public function get_data_profil($detailhere, $tabel)
	{
		$this->db->select('*');
		$this->db->from($tabel);
		$this->db->where('id_warga', $detailhere);

		$hasil = $this->db->get();

		return $hasil;
	}
}
