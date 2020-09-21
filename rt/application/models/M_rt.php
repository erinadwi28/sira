<?php

class M_rt extends CI_Model
{
	protected $_table = 'rt';

	// Cek NIK untuk login
	public function cek_nik($nik)
	{
		$query = $this->db->get_where($this->_table, ['nik' => $nik]);
		return $query->row_array();
	}

	//get detail data rt
	public function get_profil($id_rt)
	{
		$this->db->select($this->_table, '*');
		$this->db->from($this->_table);
		$this->db->where('id_rt', $id_rt);

		$hasil = $this->db->get();
		return $hasil->row();
	}

	//aksi ubah data rt
	public function aksi_ubah_profil($id_rt, $data)
	{
		$this->db->where('id_rt', $id_rt);
		$this->db->update('rt', $data);
	}
}
