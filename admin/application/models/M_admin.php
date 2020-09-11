<?php

class M_admin extends CI_Model{
	protected $_table = 'admin';

    // Cek NIK untuk login
	public function cek_nik($nik){
		$query = $this->db->get_where($this->_table, ['nik' => $nik]);
		return $query->row_array();
	}
	
	// list data kepala desa
	public function get_data_kades(){
        $this->db->select('*');
        $this->db->from('kepala_desa');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get();

        return $hasil;
    }

    // tambah data kades
    public function tambah_kades($data) {
        return $this->db->insert('kepala_desa', $data);
    }

    // detail kades
    public function get_detail_kades($id_kades){
        $this->db->select($this->$_table,'*');
		$this->db->from($this->$_table);
		$this->db->where('id_kades',$id_kades);

		$hasil = $this->db->get();
		return $hasil->row();
    }

    //hapus data kades
    public function hapus_kades($id_kades){
        $this->db-where('kepala_desa',$id_kades);
        $this->db->delete('kepala_desa');
    }
}
