<?php

class M_admin extends CI_Model
{
    protected $_table = 'admin';

    // Cek NIK untuk login
    public function cek_nik($nik)
    {
        $query = $this->db->get_where($this->_table, ['nik' => $nik]);
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
    public function get_detail_kades($id_kades)
    {
        $this->db->select('kepala_desa', '*');
        $this->db->from('kepala_desa');
        $this->db->where('id_kades', $id_kades);

        $hasil = $this->db->get();
        return $hasil->row();
    }

    // tambah data kades
    public function tambah_kades($data)
    {
        return $this->db->insert('kepala_desa', $data);
    }

    //hapus data kades
    public function hapus_kades($id_kades)
    {
        $this->db->where('kepala_desa', $id_kades);
        $this->db->delete('kepala_desa');
    }

    //list data rt
    public function get_data_rt()
    {

        $this->db->select('rt.*, warga.alamat');
        $this->db->from('rt');
        $this->db->join('warga', 'rt.id_warga = warga.id_warga', 'INNER');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    //cari nik calon rt
    public function calon_rt($nik_rt)
    {
        $this->db->select('*');
        $this->db->from('warga');
        $this->db->where('nik', $nik_rt);

        $hasil = $this->db->get();
        return $hasil->row();
    }

    //aksi tambah rt
    public function tambah_rt($data)
    {
        return $this->db->insert('rt', $data);
    }

    //detail data rt
    public function get_detail_rt($id_rt)
    {

        $this->db->select('rt.*,
        warga.alamat, warga.kelurahan, warga.kecamatan, warga.jenis_kelamin, warga.agama, warga.tempat_lahir
        warga.tanggal_lahir, warga.status_perkawinan, warga.pekerjaan, warga.kewarganegaraan, warga.golongan_darah
        warga.pendidikan_terakhir, warga.no_kk, warga.status_hub_kel, warga.no_hp, warga.foto_ktp, warga.foto_kk');
        $this->db->from('rt');
        $this->db->join('warga', 'rt.id_warga = warga.id_warga', 'INNER');

        $hasil = $this->db->get();
        return $hasil->row();
    }

    //aksi ubah rt
    public function aksi_ubah_profil_rt($id_rt, $data_rt)
    {
        $this->db->where('id_rt', $id_rt);
        $this->db->update('rt', $data_rt);
    }

    //aksi ubah data rt di tabel warga
    public function aksi_ubah_profil_rt_warga($id_warga, $data_warga)
    {
        $this->db->where('id_warga', $id_warga);
        $this->db->update('warga', $data_warga);
    }

    //aksi hapus data rt
    public function hapus_rt($id_rt)
    {
        $data = array(
            'status_kepegawaiaan' => 'Tidak Aktife',
            'status_delete' => '1',
        );

        $this->db->where('id_rt', $id_rt);
        $this->db->update('rt', $data);
    }
}
