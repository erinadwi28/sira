<?php

class M_admin extends CI_Model{

    // Cek NIK untuk login
    public function cek_nik($nik)
    {
		$query = $this->db->get_where('admin', ['nik' => $nik]);
		return $query->row_array();
	}
	
	// list data kepala desa
    public function get_data_kades()
    {
        $this->db->select('*');
        $this->db->from('kepala_desa');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get();

        return $hasil;
    }

    // detail kades
    public function get_detail_kades($id_kades){
        $this->db->select('*');
		$this->db->from('kepala_desa');
		$this->db->where('id_kades',$id_kades);

		$hasil = $this->db->get();
		return $hasil;
    }

    // tambah data kades
    public function tambah_kades($data)
    {
        return $this->db->insert('kepala_desa', $data);
    }

    // ambil data ke form ubah kades                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ubah data kades
    public function ubah_kades($where, $table)
    {
        return $this->db->get_where($table,$where);
    }

    // aksi ubah data kades                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ubah data kades
    public function aksi_ubah_data_kades($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    //hapus data kades
    public function hapus_kades($id_kades){
        $data = array(
            'status_kepegawaian' => 'Tidak Aktif',
            'status_delete' => 1
        );

        $this->db->where('kepala_desa',$id_kades);
        $this->db->update('kepala_desa',$data);
    }

    // list data warga
	public function get_data_warga(){
        $this->db->select('*');
        $this->db->from('warga');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get();

        return $hasil;
    }

    // tambah data warga
    public function tambah_warga($data) {
        return $this->db->insert('warga', $data);
    }

    // detail warga
    public function get_detail_warga($id_warga){
        $this->db->select('*');
		$this->db->from('warga');
		$this->db->where('id_warga',$id_warga);

		$hasil = $this->db->get();
		return $hasil;
    }

    // ambil data ke form ubah warga                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ubah data kades
    public function ubah_warga($where, $table)
    {
        return $this->db->get_where($table,$where);
    }

    // aksi ubah data warga                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   ubah data kades
    public function aksi_ubah_data_warga($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    //hapus data warga
    public function hapus_warga($id_warga){
        $data = array(
            'status_kepegawaian' => 'Tidak Aktif',
            'status_delete' => 1
        );

        $this->db->where('warga',$id_warga);
        $this->db->update('warga',$data);
    }
}
