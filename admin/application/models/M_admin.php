<?php

class M_admin extends CI_Model
{
    // Cek NIK untuk login
    public function cek_nik($nik, $status_delete)
    {
        $query = $this->db->get_where('admin', ['nik' => $nik, 'status_delete' => $status_delete]);
        return $query->row_array();
    }

    // ambil nama kades untuk dashboard
    public function ambil_nama_kades()
    {
        $this->db->select('nama');
        $this->db->from('kepala_desa');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    // hitung jumlah ketua rt untuk dashboard
    public function jumlah_rt()
    {
        $this->db->select('id_rt, COUNT(id_rt) as total_rt');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get('rt');
        return $hasil;
    }

    // hitung jumlah warga untuk dashboard
    public function jumlah_warga()
    {
        $this->db->select('id_warga, COUNT(id_warga) as total_warga');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get('warga');
        return $hasil;
    }

    // hitung jumlah permohonan masuk untuk dashboard
    public function jumlah_permohonan_masuk()
    {
        $this->db->select('id_permohonan_surat, COUNT(id_permohonan_surat) as total_permohonan_masuk');
        $this->db->where('status', 'Menunggu Persetujuan Kelurahan');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get('permohonan_surat');
        return $hasil;
    }

    // hitung jumlah permohonan ditolak untuk dashboard
    public function jumlah_permohonan_ditolak()
    {
        $this->db->select('permohonan_surat.id_permohonan_surat, COUNT(permohonan_surat.id_permohonan_surat) as total_permohonan_ditolak');
        $this->db->from('permohonan_surat');
        $this->db->join('warga', 'permohonan_surat.id_warga = warga.id_warga', 'INNER');
		$this->db->where('permohonan_surat.status_delete', 0);
		$this->db->where("(permohonan_surat.status = 'Ditolak Ketua RT' 
		OR permohonan_surat.status = 'Ditolak Kelurahan')", null, false);

        $hasil = $this->db->get();
        return $hasil;
    }

    // hitung jumlah permohonan selesai untuk dashboard
    public function jumlah_permohonan_selesai()
    {
        $this->db->select('id_permohonan_surat, COUNT(id_permohonan_surat) as total_permohonan_selesai');
        $this->db->where('status', 'Selesai');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get('permohonan_surat');
        return $hasil;
    }

    // hitung jumlah Riwayat Permohonan untuk dashboard
    public function jumlah_riwayat_permohonan()
    {
        $this->db->select('id_permohonan_surat, COUNT(id_permohonan_surat) as total_riwayat_permohonan');
        $this->db->from('permohonan_surat');
		$this->db->where('permohonan_surat.status_delete', 0);
		$this->db->where("(permohonan_surat.status = 'Menunggu Persetujuan Kelurahan' 
		OR permohonan_surat.status = 'Ditolak Ketua RT' 
		OR permohonan_surat.status = 'Ditolak Kelurahan'
		OR permohonan_surat.status = 'Selesai')", null, false);

        $hasil = $this->db->get();
        return $hasil;
    }

    // hitung jumlah surat masuk untuk dashboard
    public function jumlah_surat_masuk()
    {
        $this->db->select('id_sm, COUNT(id_sm) as total_surat_masuk');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get('surat_masuk');
        return $hasil;
    }

    // hitung jumlah surat keluar untuk dashboard
    public function jumlah_surat_keluar()
    {
        $this->db->select('id_sk, COUNT(id_sk) as total_surat_keluar');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get('surat_keluar');
        return $hasil;
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
        return $this->db->get_where($table, $detailhere);
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
    public function get_foto_ktp_kades($id_kades)
    {
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
    public function get_foto_ttd_kades($id_kades)
    {
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
    public function get_foto_ktp_rt($id_rt)
    {
        $this->db->select('warga.foto_ktp_warga');
        $this->db->from('warga');
        $this->db->join('rt', 'warga.id_warga = rt.id_warga', 'INNER');
        $this->db->where('rt.id_rt', $id_rt);

        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto kk rt
    public function get_foto_kk_rt($id_rt)
    {
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

    //cari nik ubah kata sandi warga
    public function cari_nik_warga($detailhere, $tabel)
    {
        return $this->db->get_where($tabel, $detailhere);
    }

    //aksi ubah kata sandi warga
    public function aksi_ubah_kata_sandi_warga($detailhere, $data, $table)
    {
        $this->db->where('id_warga', $detailhere);
        $this->db->update($table, $data);
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
    public function get_data_warga()
    {
        $this->db->select('*');
        $this->db->from('warga');
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get();

        return $hasil;
    }

    // tambah data warga
    public function tambah_warga($data)
    {
        return $this->db->insert('warga', $data);
    }

    // detail warga
    public function get_detail_warga($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    //ambil foto profil warga
    public function get_foto_profil_warga($id_warga)
    {
        $this->db->select('foto_profil_warga');
        $this->db->from('warga');
        $this->db->where('id_warga', $id_warga);

        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto ktp warga
    public function get_foto_ktp_warga($id_warga)
    {
        $this->db->select('foto_ktp_warga');
        $this->db->from('warga');
        $this->db->where('id_warga', $id_warga);

        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto kk warga
    public function get_foto_kk_warga($id_warga)
    {
        $this->db->select('foto_kk_warga');
        $this->db->from('warga');
        $this->db->where('id_warga', $id_warga);

        $hasil = $this->db->get();
        return $hasil;
    }

    // ambil data ke form ubah warga
    public function ubah_warga($detailhere, $table)
    {
        return $this->db->get_where($table, $detailhere);
    }

    // aksi ubah data warga                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   ubah data kades
    public function aksi_ubah_data_warga($where, $data, $table)
    {
        $this->db->where('id_warga', $where);
        $this->db->update($table, $data);
    }

    //hapus data warga
    public function hapus_warga($id_warga)
    {
        $data = array(
            'status_delete' => 1
        );

        $this->db->where('id_warga', $id_warga);
        $this->db->update('warga', $data);
    }

    //list data permohonan masuk
    public function get_list_permohonan_masuk()
    {
        $this->db->select('permohonan_surat.*, warga.nama, nama_surat.nama_surat');
        $this->db->from('warga');
        $this->db->join('permohonan_surat', 'warga.id_warga = permohonan_surat.id_warga', 'INNER');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->where('permohonan_surat.status', 'Menunggu Persetujuan Kelurahan');
        $this->db->where('permohonan_surat.status_delete', 0);
		$this->db->order_by('permohonan_surat.waktu', 'asc');
        // $this->db->order_by('permohonan_surat.tanggal_persetujuan_rt', 'asc');

        $hasil = $this->db->get();
        return $hasil;
    }

    //detail permohonan masuk surat 001
    public function get_detail_001($id_permohonan_masuk)
    {
        $this->db->select('permohonan_surat.*, nama_surat.nama_surat, srt_ket_usaha.*');
        $this->db->from('permohonan_surat');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->join('srt_ket_usaha', 'permohonan_surat.id_permohonan_surat = srt_ket_usaha.id_permohonan_surat', 'INNER');
        $this->db->where('permohonan_surat.id_permohonan_surat', $id_permohonan_masuk);
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }
    //detail permohonan masuk surat 002
    public function get_detail_002($id_permohonan_masuk)
    {
        $this->db->select('permohonan_surat.*, nama_surat.nama_surat, srt_ket_domisili.*');
        $this->db->from('permohonan_surat');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->join('srt_ket_domisili', 'permohonan_surat.id_permohonan_surat = srt_ket_domisili.id_permohonan_surat', 'INNER');
        $this->db->where('permohonan_surat.id_permohonan_surat', $id_permohonan_masuk);
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    //detail permohonan masuk surat 003
    public function get_detail_003($id_permohonan_masuk)
    {
        $this->db->select('permohonan_surat.*, nama_surat.nama_surat, srt_ket_belum_memiliki_rumah.*');
        $this->db->from('permohonan_surat');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->join('srt_ket_belum_memiliki_rumah', 'permohonan_surat.id_permohonan_surat = srt_ket_belum_memiliki_rumah.id_permohonan_surat', 'INNER');
        $this->db->where('permohonan_surat.id_permohonan_surat', $id_permohonan_masuk);
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    //detail permohonan masuk surat 004
    public function get_detail_004($id_permohonan_masuk)
    {
        $this->db->select('permohonan_surat.*, nama_surat.nama_surat, srt_ket_beda_nama.*');
        $this->db->from('permohonan_surat');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->join('srt_ket_beda_nama', 'permohonan_surat.id_permohonan_surat = srt_ket_beda_nama.id_permohonan_surat', 'INNER');
        $this->db->where('permohonan_surat.id_permohonan_surat', $id_permohonan_masuk);
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    //detail permohonan masuk surat 005
    public function get_detail_005($id_permohonan_masuk)
    {
        $this->db->select('permohonan_surat.*, nama_surat.nama_surat, srt_izin_keramaian.*');
        $this->db->from('permohonan_surat');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->join('srt_izin_keramaian', 'permohonan_surat.id_permohonan_surat = srt_izin_keramaian.id_permohonan_surat', 'INNER');
        $this->db->where('permohonan_surat.id_permohonan_surat', $id_permohonan_masuk);
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    //detail permohonan masuk surat 006
    public function get_detail_006($id_permohonan_masuk)
    {
        $this->db->select('permohonan_surat.*, nama_surat.nama_surat, srt_ket_belum_pernah_menikah.*');
        $this->db->from('permohonan_surat');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->join('srt_ket_belum_pernah_menikah', 'permohonan_surat.id_permohonan_surat = srt_ket_belum_pernah_menikah.id_permohonan_surat', 'INNER');
        $this->db->where('permohonan_surat.id_permohonan_surat', $id_permohonan_masuk);
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    //detail permohonan masuk surat 007
    public function get_detail_007($id_permohonan_masuk)
    {
        $this->db->select('permohonan_surat.*, nama_surat.nama_surat, srt_ket_tidak_mampu.*');
        $this->db->from('permohonan_surat');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->join('srt_ket_tidak_mampu', 'permohonan_surat.id_permohonan_surat = srt_ket_tidak_mampu.id_permohonan_surat', 'INNER');
        $this->db->where('permohonan_surat.id_permohonan_surat', $id_permohonan_masuk);
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    //detail permohonan masuk surat 008
    public function get_detail_008($id_permohonan_masuk)
    {
        $this->db->select('permohonan_surat.*, nama_surat.nama_surat, srt_ket_janda.*');
        $this->db->from('permohonan_surat');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->join('srt_ket_janda', 'permohonan_surat.id_permohonan_surat = srt_ket_janda.id_permohonan_surat', 'INNER');
        $this->db->where('permohonan_surat.id_permohonan_surat', $id_permohonan_masuk);
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    //detail permohonan masuk surat 009
    public function get_detail_009($id_permohonan_masuk)
    {
        $this->db->select('permohonan_surat.*, nama_surat.nama_surat, srt_ket_kematian.*');
        $this->db->from('permohonan_surat');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->join('srt_ket_kematian', 'permohonan_surat.id_permohonan_surat = srt_ket_kematian.id_permohonan_surat', 'INNER');
        $this->db->where('permohonan_surat.id_permohonan_surat', $id_permohonan_masuk);
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    //detail permohonan masuk surat 010
    public function get_detail_010($id_permohonan_masuk)
    {
        $this->db->select('permohonan_surat.*, nama_surat.nama_surat, srt_ket_kelahiran.*');
        $this->db->from('permohonan_surat');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->join('srt_ket_kelahiran', 'permohonan_surat.id_permohonan_surat = srt_ket_kelahiran.id_permohonan_surat', 'INNER');
        $this->db->where('permohonan_surat.id_permohonan_surat', $id_permohonan_masuk);
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    //detail permohonan masuk surat 011
    public function get_detail_011($id_permohonan_masuk)
    {
        $this->db->select('permohonan_surat.*, nama_surat.nama_surat, srt_pengantar_ktp.*');
        $this->db->from('permohonan_surat');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->join('srt_pengantar_ktp', 'permohonan_surat.id_permohonan_surat = srt_pengantar_ktp.id_permohonan_surat', 'INNER');
        $this->db->where('permohonan_surat.id_permohonan_surat', $id_permohonan_masuk);
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    //detail permohonan masuk surat 012
    public function get_detail_012($id_permohonan_masuk)
    {
        $this->db->select('permohonan_surat.*, nama_surat.nama_surat, srt_pengantar_kk.*');
        $this->db->from('permohonan_surat');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->join('srt_pengantar_kk', 'permohonan_surat.id_permohonan_surat = srt_pengantar_kk.id_permohonan_surat', 'INNER');
        $this->db->where('permohonan_surat.id_permohonan_surat', $id_permohonan_masuk);
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    //detail permohonan masuk surat 013
    public function get_detail_013($id_permohonan_masuk)
    {
        $this->db->select('permohonan_surat.*, nama_surat.nama_surat, srt_ket_penghasilan.*');
        $this->db->from('permohonan_surat');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->join('srt_ket_penghasilan', 'permohonan_surat.id_permohonan_surat = srt_ket_penghasilan.id_permohonan_surat', 'INNER');
        $this->db->where('permohonan_surat.id_permohonan_surat', $id_permohonan_masuk);
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    //detail permohonan masuk surat 014
    public function get_detail_014($id_permohonan_masuk)
    {
        $this->db->select('permohonan_surat.*, nama_surat.nama_surat, srt_ket_pindah.*');
        $this->db->from('permohonan_surat');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->join('srt_ket_pindah', 'permohonan_surat.id_permohonan_surat = srt_ket_pindah.id_permohonan_surat', 'INNER');
        $this->db->where('permohonan_surat.id_permohonan_surat', $id_permohonan_masuk);
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    //detail data pengikut
    public function get_detail_pengikut($id_permohonan_masuk)
    {
        $this->db->select('*');
        $this->db->from('pengikut');
        $this->db->where('id_permohonan_surat', $id_permohonan_masuk);
        $this->db->where('pengikut.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    //list data permohonan ditolak
    public function get_list_permohonan_ditolak()
    {
        $this->db->select('permohonan_surat.*, warga.nama, nama_surat.nama_surat');
        $this->db->from('warga');
        $this->db->join('permohonan_surat', 'warga.id_warga = permohonan_surat.id_warga', 'INNER');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->where('permohonan_surat.status_delete', 0);
		$this->db->where("(permohonan_surat.status = 'Ditolak Ketua RT' OR permohonan_surat.status = 'Ditolak Kelurahan')", null, false);
		$this->db->order_by('permohonan_surat.waktu', 'desc');
        // $this->db->order_by('permohonan_surat.tgl_persetujuan_admin', 'desc');
        // $this->db->order_by('permohonan_surat.tanggal_persetujuan_rt', 'desc');

        $hasil = $this->db->get();
        return $hasil;
    }

    //list data permohonan selesai
    public function get_list_permohonan_selesai()
    {
        $this->db->select('permohonan_surat.*, warga.nama, nama_surat.nama_surat');
        $this->db->from('warga');
        $this->db->join('permohonan_surat', 'warga.id_warga = permohonan_surat.id_warga', 'INNER');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->where('permohonan_surat.status', 'Selesai');
        $this->db->where('permohonan_surat.status_delete', 0);
		$this->db->order_by('permohonan_surat.waktu', 'desc');
        // $this->db->order_by('permohonan_surat.tgl_persetujuan_admin', 'desc');

        $hasil = $this->db->get();
        return $hasil;
    }

    //list data riwayat permohonan
    public function get_list_riwayat_permohonan()
    {
        $this->db->select('permohonan_surat.*, warga.nama, nama_surat.nama_surat');
        $this->db->from('warga');
        $this->db->join('permohonan_surat', 'warga.id_warga = permohonan_surat.id_warga', 'INNER');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
		$this->db->where('permohonan_surat.status_delete', 0);
		$this->db->where("(permohonan_surat.status = 'Menunggu Persetujuan Kelurahan' 
		OR permohonan_surat.status = 'Ditolak Ketua RT' 
		OR permohonan_surat.status = 'Ditolak Kelurahan'
        OR permohonan_surat.status = 'Selesai')", null, false);
		$this->db->order_by('permohonan_surat.waktu', 'desc');
        // $this->db->order_by('permohonan_surat.tgl_persetujuan_admin', 'desc');
        // $this->db->order_by('permohonan_surat.tanggal_persetujuan_rt', 'desc');
		// $this->db->order_by('permohonan_surat.tgl_permohonan_surat', 'DESC');
        // $this->db->order_by('permohonan_surat.id_permohonan_surat', 'desc');
        $hasil = $this->db->get();
        return $hasil;
    }

    // list data filter riwayat permohonan surat
    public function filter_riwayat($tgl_awal, $tgl_akhir)
    {
        $this->db->select('permohonan_surat.*, warga.nama, nama_surat.nama_surat');
        $this->db->from('warga');
        $this->db->join('permohonan_surat', 'warga.id_warga = permohonan_surat.id_warga', 'INNER');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->where('permohonan_surat.tgl_permohonan_surat >=', $tgl_awal);
        $this->db->where('permohonan_surat.tgl_permohonan_surat <=', $tgl_akhir);

		$this->db->where('permohonan_surat.status_delete', 0);
		$this->db->where("(permohonan_surat.status = 'Menunggu Persetujuan Kelurahan' 
		OR permohonan_surat.status = 'Ditolak Ketua RT' 
		OR permohonan_surat.status = 'Ditolak Kelurahan'
		OR permohonan_surat.status = 'Selesai')", null, false);
		$this->db->order_by('permohonan_surat.waktu', 'desc');
        // $this->db->order_by('permohonan_surat.tgl_persetujuan_admin', 'desc');
        // $this->db->order_by('permohonan_surat.tanggal_persetujuan_rt', 'desc');

        $hasil = $this->db->get();

        return $hasil;
    }

    //setujui permohonan => ubah status
    public function update_status_permohonan($detailhere, $data, $table){
        $this->db->where('id_permohonan_surat', $detailhere);
        $this->db->update($table, $data);
    }

    //setujui permohonan => ubah nomor rt
    public function update_nomor_admin_surat($detailhere, $data, $table){
        $this->db->where('id_permohonan_surat', $detailhere);
        $this->db->update($table, $data);
    }

    //tolak permohonan
    public function tolak_permohonan($detailhere, $data, $table){
        $this->db->where('id_permohonan_surat', $detailhere);
        $this->db->update($table, $data);
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

    // list data feedback
    public function get_data_feedback()
    {
        $this->db->select('*');
        $this->db->from('pesan');
        $this->db->order_by('waktu', 'desc');

        $hasil = $this->db->get();

        return $hasil;
    }

    // detail feedback
    public function get_detail_data_feedback($detailhere, $tabel)
    {
        return $this->db->get_where($tabel, $detailhere);
    }
}
