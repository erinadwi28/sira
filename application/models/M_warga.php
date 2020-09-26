<?php

class M_warga extends CI_Model
{
	protected $_table = 'warga';

	// Cek NIK untuk login
	public function cek_nik($nik)
	{
		$query = $this->db->get_where($this->_table, ['nik' => $nik]);
		return $query->row_array();
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
