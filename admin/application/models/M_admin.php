<?php

class M_admin extends CI_Model{
	protected $_table = 'admin';

    // Cek NIK untuk login
	public function cek_nik($nik){
		$query = $this->db->get_where($this->_table, ['nik' => $nik]);
		return $query->row_array();
	}
	
	// list data kepala desa
	public function get_data_kepaladesa(){
        $this->db->select('*');
        $this->db->from('kepala_desa');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get();

        return $hasil;
    }

    // tambah data kades
    public function tambah_kades($data) {
        return $this->db->insert($this->_table, $data);
    }
}
