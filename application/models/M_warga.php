<?php

class M_warga extends CI_Model
{
	protected $_table = 'warga';

	// Cek NIK untuk login
	public function cek_nik($nik, $status_delete)
	{
		$query = $this->db->get_where($this->_table, ['nik' => $nik, 'status_delete' => $status_delete]);
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
        $this->db->where('rt', $this->session->userdata('rt'));
        $this->db->where('status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    // hitung jumlah permohonan masuk untuk dashboard
    public function jumlah_persetujuan_rt()
    {
        $this->db->select('permohonan_surat.id_permohonan_surat, COUNT(permohonan_surat.id_permohonan_surat) as total_persetujuan_rt');
        $this->db->from('permohonan_surat');
        $this->db->join('warga', 'permohonan_surat.id_warga = warga.id_warga', 'INNER');
        $this->db->where('warga.id_warga', $this->session->userdata('id_warga'));
        $this->db->where('permohonan_surat.status', 'Menunggu Persetujuan Ketua RT');
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

    // hitung jumlah permohonan disetujui untuk dashboard
    public function jumlah_persetujuan_admin()
    {
        $this->db->select('permohonan_surat.id_permohonan_surat, COUNT(permohonan_surat.id_permohonan_surat) as total_persetujuan_admin');
        $this->db->from('permohonan_surat');
        $this->db->join('warga', 'permohonan_surat.id_warga = warga.id_warga', 'INNER');
        $this->db->where('warga.id_warga', $this->session->userdata('id_warga'));
        $this->db->where('permohonan_surat.status', 'Menunggu Persetujuan Admin');
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
        $this->db->where('warga.id_warga', $this->session->userdata('id_warga'));
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
        $this->db->where('warga.id_warga', $this->session->userdata('id_warga'));
        $this->db->where('permohonan_surat.status_delete', 0);

        $hasil = $this->db->get();
        return $hasil;
    }

	// detail profil saya
    public function get_detail_profil_saya($detailhere, $tabel)
    {
        return $this->db->get_where($tabel, $detailhere);
    }

    //ambil foto profil profil saya
    public function get_foto_profil_profil_saya($id_warga){
        $this->db->select('foto_profil_warga');
        $this->db->from('warga');
        $this->db->where('id_warga', $id_warga);

        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto ktp profil saya
    public function get_foto_ktp_profil_saya($id_warga){
        $this->db->select('foto_ktp_warga');
        $this->db->from('warga');
        $this->db->where('id_warga', $id_warga);

        $hasil = $this->db->get();
        return $hasil;
    }

    //ambil foto kk profil saya
    public function get_foto_kk_profil_saya($id_warga){
        $this->db->select('foto_kk_warga');
        $this->db->from('warga');
        $this->db->where('id_warga', $id_warga);

        $hasil = $this->db->get();
        return $hasil;
    }

    //aksi ubah kata sandi profil saya
    public function ubah_kata_sandi_profil_saya($where, $data, $table)
    {
        $this->db->where('id_warga', $where);
        $this->db->update($table, $data);
    }

	public function get_data_profil($detailhere, $tabel)
	{
		$this->db->select('*');
		$this->db->from($tabel);
		$this->db->where('id_warga', $detailhere);

		$hasil = $this->db->get();

		return $hasil;
	}

	// aksi tambah data ke tabel permohonan_surat
	public function tambah_permohonan($data_permohonan)
	{
		$this->db->insert('permohonan_surat', $data_permohonan);
		return $this->db->insert_id();
	}

	//aksi tambah data ke tabel suket_usaha/001
	public function tambah_suket001($data_surat)
	{
		return $this->db->insert('srt_ket_usaha', $data_surat);
	}

	//aksi tambah data ke tabel suket_domisili/002
	public function tambah_suket002($data_surat)
	{
		return $this->db->insert('srt_ket_domisili', $data_surat);
	}

	//aksi tambah data ke tabel suket_belum_memiliki_rumah/003
	public function tambah_suket003($data_surat)
	{
		return $this->db->insert('srt_ket_belum_memiliki_rumah', $data_surat);
	}

	//aksi tambah data ke tabel suket_beda nama/004
	public function tambah_suket004($data_surat)
	{
		return $this->db->insert('srt_ket_beda_nama', $data_surat);
	}

	//aksi tambah data ke tabel suket_izin keramaian/005
	public function tambah_suket005($data_surat)
	{
		return $this->db->insert('srt_izin_keramaian', $data_surat);
	}

	//lampiran suket 5
	public function tambah_lampiran_suket_005($data_lampiran)
	{
		return $this->db->insert('lampiran', $data_lampiran);
	}

	//aksi tambah data ke tabel suket_belum_pernah menikah/006
	public function tambah_suket006($data_surat)
	{
		return $this->db->insert('srt_ket_belum_pernah_menikah', $data_surat);
	}

	//aksi tambah data ke tabel suket tidak mampu/007
	public function tambah_suket007($data_surat)
	{
		return $this->db->insert('srt_ket_tidak_mampu', $data_surat);
	}

	//aksi tambah data ke tabel suket janda/008
	public function tambah_suket008($data_surat)
	{
		return $this->db->insert('srt_ket_janda', $data_surat);
	}

	//aksi tambah data ke tabel srt_ket_kematian/009
	public function tambah_suket009($data_surat)
	{
		return $this->db->insert('srt_ket_kematian', $data_surat);
	}

	//aksi tambah data ke tabel srt_ket_kelahiran/010
	public function tambah_suket010($data_surat)
	{
		return $this->db->insert('srt_ket_kelahiran', $data_surat);
	}

	//11

	//12

	//aksi tambah data ke tabel srt_ket_kelahiran/013
	public function tambah_suket013($data_surat)
	{
		return $this->db->insert(' srt_ket_penghasilan', $data_surat);
	}

	//14
}
