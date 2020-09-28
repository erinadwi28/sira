<?php

class M_admin extends CI_Model{

    // Cek NIK untuk login
    public function cek_nik($nik)
    {
        $query = $this->db->get_where('admin', ['nik' => $nik]);
        return $query->row_array();
    }

    // detail profil saya
    public function get_detail_profil_saya($detailhere, $tabel)
    {
        return $this->db->get_where($tabel, $detailhere);
    }

    //ambil foto profil profil saya
    public function get_foto_profil_profil_saya($id_admin){
        $this->db->select('foto_profil_admin');
        $this->db->from('admin');
        $this->db->where('id_admin', $id_admin);

        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto ktp profil saya
    public function get_foto_ktp_profil_saya($id_admin){
        $this->db->select('foto_ktp_admin');
        $this->db->from('admin');
        $this->db->where('id_admin', $id_admin);

        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto kk profil saya
    public function get_foto_kk_profil_saya($id_admin){
        $this->db->select('foto_kk_admin');
        $this->db->from('admin');
        $this->db->where('id_admin', $id_admin);

        $hasil = $this->db->get();
        return $hasil;
    }

    // aksi ubah data profil saya                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ubah data kades
    public function aksi_ubah_data_profil_saya($detailhere, $data, $table)
    {
        $this->db->where('id_admin', $detailhere);
        $this->db->update($table, $data);
    }

    //aksi ubah kata sandi profil saya
    public function ubah_kata_sandi_profil_saya($where, $data, $table)
    {
        $this->db->where('id_admin', $where);
        $this->db->update($table, $data);
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
    public function get_detail_kades($detailhere, $tabel)
    {
        return $this->db->get_where($tabel, $detailhere);
    }

    // tambah data kades
    public function tambah_kades($data)
    {
        return $this->db->insert('kepala_desa', $data);
    }

    // ambil data ke form ubah kades                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ubah data kades
    public function ubah_kades($detailhere, $table)
    {
        return $this->db->get_where($table,$detailhere);
    }

    // aksi ubah data kades                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ubah data kades
    public function aksi_ubah_data_kades($detailhere, $data, $table)
    {
        $this->db->where('id_kades', $detailhere);
        $this->db->update($table, $data);
    }

    //ambil foto profil kades
    public function get_foto_profil_kades($id_kades){
        $this->db->select('foto_profil_kades');
        $this->db->from('kepala_desa');
        $this->db->where('id_kades', $id_kades);

        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto ktp kades
    public function get_foto_ktp_kades($id_kades){
        $this->db->select('foto_ktp_kades');
        $this->db->from('kepala_desa');
        $this->db->where('id_kades', $id_kades);

        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto kk kades
    public function get_foto_kk_kades($id_kades){
        $this->db->select('foto_kk_kades');
        $this->db->from('kepala_desa');
        $this->db->where('id_kades', $id_kades);

        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto ttd kades
    public function get_foto_ttd_kades($id_kades){
        $this->db->select('foto_ttd_kades');
        $this->db->from('kepala_desa');
        $this->db->where('id_kades', $id_kades);

        $hasil = $this->db->get();
        return $hasil;
    }

    //hapus data kades
    public function hapus_kades($id_kades)
    {
        $data = array(
            'status_kepegawaian' => 'Tidak Aktif',
            'status_delete' => 1,
            'tanggal_dinonaktifkan' => date("Y/m/d"),
        );

        $this->db->where('id_kades', $id_kades);
        $this->db->update('kepala_desa', $data);
    }

    // list data mantan kepala desa
    public function get_data_mantan_kades()
    {
        $this->db->select('*');
        $this->db->from('kepala_desa');
        $this->db->where('status_delete', 1);
        $this->db->order_by('tanggal_dinonaktifkan', 'DESC');

        $hasil = $this->db->get();

        return $hasil;
    }

    //cari nik ubah kata sandi kades
    public function cari_nik_kades($detailhere, $tabel)
    {
        return $this->db->get_where($tabel, $detailhere);
    }

    //aksi ubah kata sandi kades
    public function aksi_ubah_kata_sandi_kades($detailhere, $data, $table)
    {
        $this->db->where('id_kades', $detailhere);
        $this->db->update($table, $data);
    }

    //list data rt
    public function get_data_rt()
    {
        $this->db->select('rt.*, warga.alamat');
        $this->db->from('rt');
        $this->db->join('warga', 'rt.id_warga = warga.id_warga', 'INNER');
        $this->db->where('rt.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    //cari nik calon rt
    public function cari_nik_calon_rt($nik, $tabel)
    {
        return $this->db->get_where($tabel, $nik);
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
        warga.alamat, warga.kelurahan, warga.kecamatan, warga.jenis_kelamin, warga.agama, warga.tempat_lahir,
        warga.tanggal_lahir, warga.status_perkawinan, warga.pekerjaan, warga.kewarganegaraan, warga.golongan_darah,
        warga.pendidikan_terakhir, warga.no_kk, warga.status_hub_kel, warga.no_hp, warga.foto_ktp_warga, warga.foto_kk_warga');
        $this->db->from('rt');
        $this->db->join('warga', 'rt.id_warga = warga.id_warga', 'INNER');

        $this->db->where('rt.id_rt', $id_rt);
        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto profil rt
    public function get_foto_profil_rt($id_rt){
        $this->db->select('foto_profil_rt');
        $this->db->from('rt');
        $this->db->where('id_rt', $id_rt);

        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto ktp rt
    public function get_foto_ktp_rt($id_rt){
        $this->db->select('warga.foto_ktp_warga');
        $this->db->from('warga');
        $this->db->join('rt', 'warga.id_warga = rt.id_warga', 'INNER');
        $this->db->where('rt.id_rt', $id_rt);

        $hasil = $this->db->get();
        return $hasil;
    }

     //ambil foto kk rt
    public function get_foto_kk_rt($id_rt){
        $this->db->select('foto_kk_warga');
        $this->db->from('warga');
        $this->db->join('rt', 'warga.id_warga = rt.id_warga', 'INNER');
        $this->db->where('rt.id_rt', $id_rt);

        $hasil = $this->db->get();
        return $hasil;
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
            'status_kepegawaian' => 'Tidak Aktif',
            'status_delete' => 1,
            'tanggal_dinonaktifkan' => date("Y/m/d"),
        );

        $this->db->where('id_rt', $id_rt);
        $this->db->update('rt', $data);
    }

    //list data mantan ketua rt
    public function get_data_mantan_rt()
    {
        $this->db->select('rt.*, warga.alamat');
        $this->db->from('rt');
        $this->db->join('warga', 'rt.id_warga = warga.id_warga', 'INNER');
        $this->db->where('rt.status_delete', 1);

        $hasil = $this->db->get();
        return $hasil;
    }

    //detail data rt ubah kata sandi
    public function get_detail_rt_ubah_kata_sandi($nik)
    {

        $this->db->select('rt.*,
        warga.alamat, warga.kelurahan, warga.kecamatan, warga.jenis_kelamin, warga.agama, warga.tempat_lahir,
        warga.tanggal_lahir, warga.status_perkawinan, warga.pekerjaan, warga.kewarganegaraan, warga.golongan_darah,
        warga.pendidikan_terakhir, warga.no_kk, warga.status_hub_kel, warga.no_hp, warga.foto_ktp_warga, warga.foto_kk_warga');
        $this->db->from('rt');
        $this->db->join('warga', 'rt.id_warga = warga.id_warga', 'INNER');

        $this->db->where('rt.nik', $nik);
        $hasil = $this->db->get();
        return $hasil;
    }

    //aksi ubah kata sandi rt
    public function aksi_ubah_kata_sandi_rt($detailhere, $data, $table)
    {
        $this->db->where('id_rt', $detailhere);
        $this->db->update($table, $data);
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
    public function get_detail_warga($where, $table){
        return $this->db->get_where($table,$where);
    }

    //ambil foto profil warga
    public function get_foto_profil_warga($id_warga){
        $this->db->select('foto_profil_warga');
        $this->db->from('warga');
        $this->db->where('id_warga', $id_warga);

        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto ktp warga
    public function get_foto_ktp_warga($id_warga){
        $this->db->select('foto_ktp_warga');
        $this->db->from('warga');
        $this->db->where('id_warga', $id_warga);

        $hasil = $this->db->get();
        return $hasil;
    }

     //ambil foto kk warga
    public function get_foto_kk_warga($id_warga){
        $this->db->select('foto_kk_warga');
        $this->db->from('warga');
        $this->db->where('id_warga', $id_warga);

        $hasil = $this->db->get();
        return $hasil;
    }

    // ambil data ke form ubah warga
    public function ubah_warga($detailhere, $table)
    {
        return $this->db->get_where($table,$detailhere);
    }

    // aksi ubah data warga                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   ubah data kades
    public function aksi_ubah_data_warga($where, $data, $table)
    {
        $this->db->where('id_warga', $where);
        $this->db->update($table,$data);
    }

    //hapus data warga
    public function hapus_warga($id_warga){
        $data = array(
            'status_delete' => 1
        );

        $this->db->where('id_warga',$id_warga);
        $this->db->update('warga',$data);
    }

    // list data surat masuk
    public function get_data_surat_masuk()
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get();

        return $hasil;
    }

    //tambah surat masuk
    public function tambah_surat_masuk($data)
    {
        $this->db->insert('surat_masuk', $data);
        return $this->db->insert_id();
    }

    // detail surat masuk
    public function get_detail_surat_masuk($detailhere, $tabel)
    {
        return $this->db->get_where($tabel, $detailhere);
    }

    // aksi ubah data surat masuk                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   ubah data kades
    public function aksi_ubah_surat_masuk($detailhere, $data, $table)
    {
        $this->db->where('id_sm', $detailhere);
        $this->db->update($table, $data);
    }

    //ambil lampiran surat masuk
    public function get_lampiran($id_sm){
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->where('id_sm', $id_sm);

        $hasil = $this->db->get();
        return $hasil;
    }

    //hapus surat masuk
    public function hapus_surat_masuk($id_sm){
        $data = array(
            'status_delete' => 1
        );

        $this->db->where('id_sm',$id_sm);
        $this->db->update('surat_masuk',$data);
    }

    // list data filter surat masuk
    public function filter_surat_masuk($tgl_awal, $tgl_akhir)
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->where('tanggal >=', $tgl_awal);
        $this->db->where('tanggal <=', $tgl_akhir);
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get();

        return $hasil;
    }

    // list data surat keluar
    public function get_data_surat_keluar()
    {
        $this->db->select('*');
        $this->db->from('surat_keluar');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get();

        return $hasil;
    }

    //tambah surat keluar
    public function tambah_surat_keluar($data)
    {
        $this->db->insert('surat_keluar', $data);
        return $this->db->insert_id();
    }

    // detail surat keluar
    public function get_detail_surat_keluar($detailhere, $tabel)
    {
        return $this->db->get_where($tabel, $detailhere);
    }

    // aksi ubah data surat keluar                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ubah data kades
    public function aksi_ubah_surat_keluar($detailhere, $data, $table)
    {
        $this->db->where('id_sk', $detailhere);
        $this->db->update($table, $data);
    }

    //ambil lampiran surat keluar
    public function get_lampiran_surat_keluar($id_sk){
        $this->db->select('*');
        $this->db->from('surat_keluar');
        $this->db->where('id_sk', $id_sk);

        $hasil = $this->db->get();
        return $hasil;
    }

    //hapus surat masuk
    public function hapus_surat_keluar($id_sk){
        $data = array(
            'status_delete' => 1
        );

        $this->db->where('id_sk',$id_sk);
        $this->db->update('surat_keluar',$data);
    }

    // list data filter surat keluar
    public function filter_surat_keluar($tgl_awal, $tgl_akhir)
    {
        $this->db->select('*');
        $this->db->from('surat_keluar');
        $this->db->where('tanggal >=', $tgl_awal);
        $this->db->where('tanggal <=', $tgl_akhir);
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get();

        return $hasil;
    }
}
