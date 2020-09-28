<?php

class M_kades extends CI_Model
{
	protected $_table = 'kepala_desa';

	// Cek NIK untuk login
	public function cek_nik($nik)
	{
		$query = $this->db->get_where($this->_table, ['nik' => $nik]);
		return $query->row_array();
	}

	// detail profil saya
    public function get_detail_profil_saya($detailhere, $tabel)
    {
        return $this->db->get_where($tabel, $detailhere);
    }

    //ambil foto profil profil saya
    public function get_foto_profil_profil_saya($id_kades){
        $this->db->select('foto_profil_kades');
        $this->db->from('kepala_desa');
        $this->db->where('id_kades', $id_kades);

        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto ktp profil saya
    public function get_foto_ktp_profil_saya($id_kades){
        $this->db->select('foto_ktp_kades');
        $this->db->from('kepala_desa');
        $this->db->where('id_kades', $id_kades);

        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto kk profil saya
    public function get_foto_kk_profil_saya($id_kades){
        $this->db->select('foto_kk_kades');
        $this->db->from('kepala_desa');
        $this->db->where('id_kades', $id_kades);

        $hasil = $this->db->get();
        return $hasil;
    }

    // aksi ubah data profil saya                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ubah data kades
    public function aksi_ubah_data_profil_saya($detailhere, $data, $table)
    {
        $this->db->where('id_kades', $detailhere);
        $this->db->update($table, $data);
    }

    //aksi ubah kata sandi profil saya
    public function ubah_kata_sandi_profil_saya($where, $data, $table)
    {
        $this->db->where('id_kades', $where);
        $this->db->update($table, $data);
    }
}
