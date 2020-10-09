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

	public function get_data_kades()
	{
		$this->db->select('*');
		$this->db->from('kepala_desa');
		$this->db->where('status_kepegawaian', 'Aktif');

		$hasil = $this->db->get();

		return $hasil;
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

	public function get_data_permohonan($detailhere, $tabel)
	{
		$this->db->select('*');
		$this->db->from($tabel);
		$this->db->where('id_permohonan_surat', $detailhere);

		$hasil = $this->db->get();

		return $hasil;
	}

	//aksi tambah data suket
	public function tambah_suket($data_surat, $tabel)
	{
		$this->db->insert($tabel, $data_surat);
		return $this->db->insert_id();
	}

	//detail suket
	public function get_data_suket($detailhere, $tabel)
	{
		$this->db->select('*');
		$this->db->from($tabel);
		$this->db->where('id_surat', $detailhere);

		$hasil = $this->db->get();

		return $hasil;
	}

	//update suket
	public function ubah_suket($data_surat, $tabel, $id_surat)
	{
		$this->db->where('id_surat', $id_surat);
		$this->db->update($tabel, $data_surat);
	}

	//aksi tambah data ke tabel srt_pengantar_ktp/011
	public function tambah_suket011($data_surat)
	{
		$this->db->insert('srt_pengantar_ktp', $data_surat);
		return $this->db->insert_id();
	}

	// detail suket011
	public function get_detail_suket011($detailhere, $tabel)
	{
		// return $this->db->get_where($tabel, $detailhere);
		$this->db->select('*');
		$this->db->from($tabel);
		$this->db->where('id_surat', $detailhere);
		$hasil = $this->db->get();
		return $hasil;
	}



	//ambil pas foto suket 005
	public function get_pas_foto_suket005($id_siurat, $tabel)
	{
		$this->db->select('foto_ktp');
		$this->db->from($tabel);
		$this->db->where('id_surat', $id_siurat);

		$hasil = $this->db->get();
		return $hasil;
	}

	//ambil pas foto suket 011
	public function get_pas_foto_suket011($id_siurat, $tabel)
	{
		$this->db->select('pas_foto');
		$this->db->from($tabel);
		$this->db->where('id_surat', $id_siurat);

		$hasil = $this->db->get();
		return $hasil;
	}

	//ambil foto kk suket 011
	public function get_foto_kk_suket011($id_siurat)
	{
		$this->db->select('foto_kk');
		$this->db->from('srt_pengantar_ktp');
		$this->db->where('id_surat', $id_siurat);

		$hasil = $this->db->get();
		return $hasil;
	}

	//ambil foto kk suket 011
	public function get_foto_surat_pindah_suket011($id_siurat)
	{
		$this->db->select('foto_surat_pindah');
		$this->db->from('srt_pengantar_ktp');
		$this->db->where('id_surat', $id_siurat);

		$hasil = $this->db->get();
		return $hasil;
	}

	// list pengikut
	public function get_data_pengikut($id_permohonan)
	{
		$this->db->select('*');
		$this->db->from('pengikut');
		$this->db->where('id_permohonan_surat ', $id_permohonan);

		$hasil = $this->db->get();

		return $hasil;
	}

	//aksi tambah pengikut
	public function aksi_tambah_pengikut($data_pengikut)
	{
		return $this->db->insert('pengikut', $data_pengikut);
	}

	//get data detail pengikut 
	public function get_detail_pengikut($id_pengikut, $tabel)
	{
		$this->db->select('*');
		$this->db->from($tabel);
		$this->db->where('id_pengikut', $id_pengikut);
		$hasil = $this->db->get();
		return $hasil;
	}

	//aksi update pengikut
	public function aksi_ubah_pengikut($id_pengikut, $data, $tabel)
	{
		$this->db->where('id_pengikut', $id_pengikut);
		$this->db->update($tabel, $data);
	}

	//aksi hapus pengikut
	public function aksi_hapus_pengikut($id_pengikut, $tabel)
	{
		$this->db->where('id_pengikut', $id_pengikut);
		$this->db->delete($tabel);
	}

	//update status permohonan
	public function update_status_permohonan($id_permohonan_surat, $data, $tabel)
	{
		$this->db->where('id_permohonan_surat ', $id_permohonan_surat);
		$this->db->update($tabel, $data);
	}

	//get history permohonan
	public function get_history_permohonan($id_warga)
	{
		$this->db->select('permohonan_surat.*, nama_surat.nama_surat');
		$this->db->from('permohonan_surat');
		$this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
		$this->db->where('permohonan_surat.id_warga', $id_warga);
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'DESC');

		return $this->db->get();
	}

	//get history permohonan selesai
	public function get_history_permohonan_selesai($id_warga)
	{
		$this->db->select('permohonan_surat.*, nama_surat.nama_surat');
		$this->db->from('permohonan_surat');
		$this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
		$this->db->where('permohonan_surat.id_warga', $id_warga);
		$this->db->where('permohonan_surat.status', 'Selesai');
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'DESC');

		return $this->db->get();
	}

	// filter_tanggal_list_history_permohonan
	public function filter_tanggal_list_history_permohonan($id_warga, $tgl_awal, $tgl_akhir)
	{
		$this->db->select('permohonan_surat.*, nama_surat.nama_surat');
		$this->db->from('permohonan_surat');
		$this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
		$this->db->where('permohonan_surat.id_warga', $id_warga);
		$this->db->where('permohonan_surat.tgl_permohonan_surat >=', $tgl_awal);
		$this->db->where('permohonan_surat.tgl_permohonan_surat <=', $tgl_akhir);
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'DESC');

		return $this->db->get();
	}

	// filter_tanggal_list_history_permohonan selesai
	public function filter_tanggal_list_history_permohonan_selesai($id_warga, $tgl_awal, $tgl_akhir)
	{
		$this->db->select('permohonan_surat.*, nama_surat.nama_surat');
		$this->db->from('permohonan_surat');
		$this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
		$this->db->where('permohonan_surat.id_warga', $id_warga);
		$this->db->where('permohonan_surat.status', 'Selesai');
		$this->db->where('permohonan_surat.tgl_permohonan_surat >=', $tgl_awal);
		$this->db->where('permohonan_surat.tgl_permohonan_surat <=', $tgl_akhir);
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'DESC');

		return $this->db->get();
	}

	//get detail suket001
	public function get_detail_001($id_permohonan_surat)
	{
		$this->db->select('*');
		$this->db->from('srt_ket_usaha');
		$this->db->where('id_permohonan_surat', $id_permohonan_surat);

		$hasil = $this->db->get();

		return $hasil;
	}

	//get detail suket002
	public function get_detail_002($id_permohonan_surat)
	{
		$this->db->select('*');
		$this->db->from('srt_ket_domisili');
		$this->db->where('id_permohonan_surat', $id_permohonan_surat);

		$hasil = $this->db->get();

		return $hasil;
	}

	//get detail suket003
	public function get_detail_003($id_permohonan_surat)
	{
		$this->db->select('*');
		$this->db->from('srt_ket_belum_memiliki_rumah');
		$this->db->where('id_permohonan_surat', $id_permohonan_surat);

		$hasil = $this->db->get();

		return $hasil;
	}

	//get detail suket004
	public function get_detail_004($id_permohonan_surat)
	{
		$this->db->select('*');
		$this->db->from('srt_ket_beda_nama');
		$this->db->where('id_permohonan_surat', $id_permohonan_surat);

		$hasil = $this->db->get();

		return $hasil;
	}

	//get detail suket005
	public function get_detail_005($id_permohonan_surat)
	{
		$this->db->select('*');
		$this->db->from('srt_izin_keramaian');
		$this->db->where('id_permohonan_surat', $id_permohonan_surat);

		$hasil = $this->db->get();

		return $hasil;
	}

	//get detail suket006
	public function get_detail_006($id_permohonan_surat)
	{
		$this->db->select('*');
		$this->db->from('srt_ket_belum_pernah_menikah');
		$this->db->where('id_permohonan_surat', $id_permohonan_surat);

		$hasil = $this->db->get();

		return $hasil;
	}

	//get detail suket007
	public function get_detail_007($id_permohonan_surat)
	{
		$this->db->select('*');
		$this->db->from('srt_ket_tidak_mampu');
		$this->db->where('id_permohonan_surat', $id_permohonan_surat);

		$hasil = $this->db->get();

		return $hasil;
	}

	//get detail suket008
	public function get_detail_008($id_permohonan_surat)
	{
		$this->db->select('*');
		$this->db->from('srt_ket_janda');
		$this->db->where('id_permohonan_surat', $id_permohonan_surat);

		$hasil = $this->db->get();

		return $hasil;
	}

	//get detail suket009
	public function get_detail_009($id_permohonan_surat)
	{
		$this->db->select('*');
		$this->db->from('srt_ket_kematian');
		$this->db->where('id_permohonan_surat', $id_permohonan_surat);

		$hasil = $this->db->get();

		return $hasil;
	}

	//get detail suket010
	public function get_detail_010($id_permohonan_surat)
	{
		$this->db->select('*');
		$this->db->from('srt_ket_kelahiran');
		$this->db->where('id_permohonan_surat', $id_permohonan_surat);

		$hasil = $this->db->get();

		return $hasil;
	}

	//get detail suket011
	public function get_detail_011($id_permohonan_surat)
	{
		$this->db->select('*');
		$this->db->from('srt_pengantar_ktp');
		$this->db->where('id_permohonan_surat', $id_permohonan_surat);

		$hasil = $this->db->get();

		return $hasil;
	}

	//get detail suket012
	public function get_detail_012($id_permohonan_surat)
	{
		$this->db->select('*');
		$this->db->from('srt_pengantar_kk');
		$this->db->where('id_permohonan_surat', $id_permohonan_surat);

		$hasil = $this->db->get();

		return $hasil;
	}

	//get detail suket013
	public function get_detail_013($id_permohonan_surat)
	{
		$this->db->select('*');
		$this->db->from('srt_ket_penghasilan');
		$this->db->where('id_permohonan_surat', $id_permohonan_surat);

		$hasil = $this->db->get();

		return $hasil;
	}

	//get detail suket014
	public function get_detail_014($id_permohonan_surat)
	{
		$this->db->select('*');
		$this->db->from('srt_ket_pindah');
		$this->db->where('id_permohonan_surat', $id_permohonan_surat);

		$hasil = $this->db->get();

		return $hasil;
	}
}
