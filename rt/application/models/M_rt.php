<?php

class M_rt extends CI_Model
{

	// Cek NIK untuk login
	public function cek_nik($nik, $status_delete)
	{
		$query = $this->db->get_where('rt', ['nik' => $nik, 'status_delete' => $status_delete]); 
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
    
    // ambil nama rt untuk dashboard
    public function ambil_nama_rt()
    {
        $this->db->select('nama');
        $this->db->from('rt');
        $this->db->where('id_rt', $this->session->userdata('id_rt'));
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    // hitung jumlah warga untuk dashboard
    public function jumlah_warga()
    {
        $this->db->select('id_warga, COUNT(id_warga) as total_warga');
        $this->db->where('rt', $this->session->userdata('rt'));
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get('warga');
        return $hasil;
    }

    // hitung jumlah permohonan masuk untuk dashboard
    public function jumlah_permohonan_masuk()
    {
        $this->db->select('permohonan_surat.id_permohonan_surat, COUNT(permohonan_surat.id_permohonan_surat) as total_permohonan_masuk');
        $this->db->from('permohonan_surat');
        $this->db->join('warga', 'permohonan_surat.id_warga = warga.id_warga', 'INNER');
        $this->db->where('warga.rt', $this->session->userdata('rt'));
        $this->db->where('permohonan_surat.status', 'Menunggu Persetujuan Ketua RT');
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    // hitung jumlah permohonan ditolak untuk dashboard
    public function jumlah_permohonan_ditolak()
    {
        $this->db->select('permohonan_surat.id_permohonan_surat, COUNT(permohonan_surat.id_permohonan_surat) as total_permohonan_ditolak');
        $this->db->from('permohonan_surat');
        $this->db->join('warga', 'permohonan_surat.id_warga = warga.id_warga', 'INNER');
        $this->db->where('warga.rt', $this->session->userdata('rt'));
        $this->db->where('permohonan_surat.status_delete', 0);
		$this->db->where("(permohonan_surat.status = 'Ditolak Ketua RT' OR permohonan_surat.status = 'Ditolak Kelurahan')", null, false);

        $hasil = $this->db->get();
        return $hasil;
    }

    // hitung jumlah permohonan disetujui untuk dashboard
    public function jumlah_permohonan_disetujui()
    {
        $this->db->select('permohonan_surat.id_permohonan_surat, COUNT(permohonan_surat.id_permohonan_surat) as total_permohonan_disetujui');
        $this->db->from('permohonan_surat');
        $this->db->join('warga', 'permohonan_surat.id_warga = warga.id_warga', 'INNER');
        $this->db->where('warga.rt', $this->session->userdata('rt'));
        $this->db->where('permohonan_surat.status', 'Menunggu Persetujuan Kelurahan');
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    // hitung jumlah permohonan selesai untuk dashboard
    public function jumlah_permohonan_selesai()
    {
        $this->db->select('permohonan_surat.id_permohonan_surat, COUNT(permohonan_surat.id_permohonan_surat) as total_permohonan_selesai');
        $this->db->from('permohonan_surat');
        $this->db->join('warga', 'permohonan_surat.id_warga = warga.id_warga', 'INNER');
        $this->db->where('warga.rt', $this->session->userdata('rt'));
        $this->db->where('permohonan_surat.status', 'Selesai');
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    // hitung jumlah Riwayat Permohonan untuk dashboard
    public function jumlah_riwayat_permohonan()
    {
        $this->db->select('permohonan_surat.id_permohonan_surat, COUNT(permohonan_surat.id_permohonan_surat) as total_riwayat_permohonan');
        $this->db->from('permohonan_surat');
        $this->db->join('warga', 'permohonan_surat.id_warga = warga.id_warga', 'INNER');
        $this->db->where('warga.rt', $this->session->userdata('rt'));
		$this->db->where('permohonan_surat.status_delete', 0);
		$this->db->where("(permohonan_surat.status = 'Menunggu Persetujuan Ketua RT' 
		OR permohonan_surat.status = 'Menunggu Persetujuan Kelurahan' 
		OR permohonan_surat.status = 'Ditolak Ketua RT' 
		OR permohonan_surat.status = 'Ditolak Kelurahan'
		OR permohonan_surat.status = 'Selesai')", null, false);

        $hasil = $this->db->get();
        return $hasil;
    }

	// detail profil saya
    public function get_detail_profil_saya($detailhere)
    {   
        $this->db->select('rt.*,
        warga.alamat, warga.kelurahan, warga.kecamatan, warga.jenis_kelamin, warga.agama, warga.tempat_lahir,
        warga.tanggal_lahir, warga.status_perkawinan, warga.pekerjaan, warga.kewarganegaraan, warga.golongan_darah,
        warga.pendidikan_terakhir, warga.no_kk, warga.status_hub_kel, warga.no_hp, warga.foto_ktp_warga, warga.foto_kk_warga');
        $this->db->from('rt');
        $this->db->join('warga', 'rt.id_warga = warga.id_warga', 'INNER');

        $this->db->where($detailhere);
        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto profil profil saya
    public function get_foto_profil_profil_saya($id_rt){
        $this->db->select('foto_profil_rt');
        $this->db->from('rt');
        $this->db->where('id_rt', $id_rt);

        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto ktp profil saya
    public function get_foto_ktp_profil_saya($id_rt){
        $this->db->select('warga.foto_ktp_warga');
        $this->db->from('warga');
        $this->db->join('rt', 'warga.id_warga = rt.id_warga', 'INNER');
        $this->db->where('rt.id_rt', $id_rt);

        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto kk profil saya
    public function get_foto_kk_profil_saya($id_rt){
        $this->db->select('warga.foto_kk_warga');
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

    //aksi ubah kata sandi profil saya
    public function ubah_kata_sandi_profil_saya($where, $data_baru, $table)
    {
        $this->db->where('id_rt', $where);
        $this->db->update($table, $data_baru);
    }

    //list data warga
    public function get_data_warga()
    {
        $this->db->select('*');
        $this->db->where('rt', $this->session->userdata('rt'));
        $this->db->where('status_delete', 0);
        $this->db->order_by('nama','asc');

        $hasil = $this->db->get('warga');
        return $hasil;
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

    //list data permohonan masuk
    public function get_list_permohonan_masuk()
    {
        $this->db->select('permohonan_surat.*, warga.nama, nama_surat.nama_surat');
        $this->db->from('warga');
        $this->db->join('permohonan_surat', 'warga.id_warga = permohonan_surat.id_warga', 'INNER');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->where('warga.rt', $this->session->userdata('rt'));
        $this->db->where('permohonan_surat.status', 'Menunggu Persetujuan Ketua RT');
        $this->db->where('permohonan_surat.status_delete', 0);
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'asc');

        $hasil = $this->db->get();
        return $hasil;
    }

    //detail permohonan masuk surat 001
    public function get_detail_001($id_permohonan_surat)
    {
        $this->db->select('permohonan_surat.*, nama_surat.nama_surat, srt_ket_usaha.*');
        $this->db->from('permohonan_surat');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->join('srt_ket_usaha', 'permohonan_surat.id_permohonan_surat = srt_ket_usaha.id_permohonan_surat', 'INNER');
        $this->db->where('permohonan_surat.id_permohonan_surat', $id_permohonan_surat);
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
        $this->db->where('warga.rt', $this->session->userdata('rt'));
        $this->db->where('permohonan_surat.status_delete', 0);
		$this->db->where("(permohonan_surat.status = 'Ditolak Ketua RT' OR permohonan_surat.status = 'Ditolak Kelurahan')", null, false);
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'desc');

        $hasil = $this->db->get();
        return $hasil;
    }

    //list data permohonan disetujui
    public function get_list_permohonan_disetujui()
    {
        $this->db->select('permohonan_surat.*, warga.nama, nama_surat.nama_surat');
        $this->db->from('warga');
        $this->db->join('permohonan_surat', 'warga.id_warga = permohonan_surat.id_warga', 'INNER');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->where('warga.rt', $this->session->userdata('rt'));
        $this->db->where('permohonan_surat.status', 'Menunggu Persetujuan Kelurahan');
        $this->db->where('permohonan_surat.status_delete', 0);
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'desc');

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
        $this->db->where('warga.rt', $this->session->userdata('rt'));
        $this->db->where('permohonan_surat.status', 'Selesai');
        $this->db->where('permohonan_surat.status_delete', 0);
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'desc');

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
        $this->db->where('warga.rt', $this->session->userdata('rt'));
		$this->db->where('permohonan_surat.status_delete', 0);
		$this->db->where("(permohonan_surat.status = 'Menunggu Persetujuan Ketua RT' 
		OR permohonan_surat.status = 'Menunggu Persetujuan Kelurahan' 
		OR permohonan_surat.status = 'Ditolak Ketua RT' 
		OR permohonan_surat.status = 'Ditolak Kelurahan'
		OR permohonan_surat.status = 'Selesai')", null, false);
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'desc');

        $hasil = $this->db->get();
        return $hasil;
    }

    // list data filter riwayat permohonan surat
    public function filter_riwayat($tgl_awal, $tgl_akhir)
    {
        $this->db->select('permohonan_surat.*, warga.nama, warga.nik, nama_surat.nama_surat');
        $this->db->from('warga');
        $this->db->join('permohonan_surat', 'warga.id_warga = permohonan_surat.id_warga', 'INNER');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->where('permohonan_surat.tgl_permohonan_surat >=', $tgl_awal);
        $this->db->where('permohonan_surat.tgl_permohonan_surat <=', $tgl_akhir);

		$this->db->where('permohonan_surat.status_delete', 0);
		$this->db->where("(permohonan_surat.status = 'Menunggu Persetujuan Ketua RT' 
		OR permohonan_surat.status = 'Menunggu Persetujuan Kelurahan' 
		OR permohonan_surat.status = 'Ditolak Ketua RT' 
		OR permohonan_surat.status = 'Ditolak Kelurahan'
		OR permohonan_surat.status = 'Selesai')", null, false);
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'asc');

        $hasil = $this->db->get();

        return $hasil;
    }

    //setujui permohonan => ubah status
    public function update_status_permohonan($detailhere, $data, $table){
        $this->db->where('id_permohonan_surat', $detailhere);
        $this->db->update($table, $data);
    }

    //setujui permohonan => ubah nomor rt
    public function update_nomor_rt_surat($detailhere, $data, $table){
        $this->db->where('id_permohonan_surat', $detailhere);
        $this->db->update($table, $data);
    }

    //tolak permohonan
    public function tolak_permohonan($detailhere, $data, $table){
        $this->db->where('id_permohonan_surat', $detailhere);
        $this->db->update($table, $data);
    }

    // hitung jumlah notif
    public function jumlah_notif()
    {
        $this->db->select('permohonan_surat.id_permohonan_surat, COUNT(permohonan_surat.id_permohonan_surat) as total_notif');
        $this->db->from('permohonan_surat');
        $this->db->join('warga', 'permohonan_surat.id_warga = warga.id_warga', 'INNER');
        $this->db->where('warga.rt', $this->session->userdata('rt'));
        $this->db->where('permohonan_surat.status_delete', 0);
        $this->db->where('permohonan_surat.notif_rt', 'Belum Dibaca');
        $this->db->where("(permohonan_surat.status = 'Menunggu Persetujuan Ketua RT' 
		OR permohonan_surat.status = 'Ditolak Kelurahan'
		OR permohonan_surat.status = 'Selesai')", null, false);

        $hasil = $this->db->get();
        return $hasil;
    }

    //aksi update notif
    public function update_notif($data, $id)
    {
        $this->db->where('id_permohonan_surat', $id);
        $this->db->update('permohonan_surat', $data);
    }

    //list notif belum dibaca
    public function get_notif_belum_dibaca()
    {
        $this->db->select('permohonan_surat.*, warga.nama, nama_surat.nama_surat');
        $this->db->from('warga');
        $this->db->join('permohonan_surat', 'warga.id_warga = permohonan_surat.id_warga', 'INNER');
        $this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
        $this->db->where('warga.rt', $this->session->userdata('rt'));
        $this->db->where('permohonan_surat.status_delete', 0);
        $this->db->where('permohonan_surat.notif_rt', 'Belum Dibaca');
        $this->db->where("(permohonan_surat.status = 'Menunggu Persetujuan Ketua RT' 
		OR permohonan_surat.status = 'Ditolak Kelurahan'
		OR permohonan_surat.status = 'Selesai')", null, false);
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'asc');

        $hasil = $this->db->get();
        return $hasil;
    }

    //cek data rt untuk ubah katasandi
	public function cek_rt($id)
	{
		$query = $this->db->get_where('rt', ['id_rt' => $id]); 
		return $query->row_array();
    }
}
