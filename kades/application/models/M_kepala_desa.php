<?php

class M_kepala_desa extends CI_Model{
	protected $_table = 'kepala_desa';

    // Cek NIK untuk login
	public function cek_nik($nik){
		$query = $this->db->get_where($this->_table, ['nik' => $nik]);
		return $query->row_array();
	}

	//get detail data kepala desa
	public function get_profile($id_kades){
		$this->db->select($this->_table,'*');
		$this->db->from($this->_table);
		$this->db->where('id_kades',$id_kades);

		$hasil = $this->db->get();
		return $hasil->row();
	}

	//ubah data kepala desa
	public function aksi_ubah_profile($id_kades,$data){
		$this->db->where('id_kades',$id_kades);
		$this->db->update('kepala_desa',$data);
	}
}