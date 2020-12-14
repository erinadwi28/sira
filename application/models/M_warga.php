<?php

use phpDocumentor\Reflection\Types\Null_;

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
		$this->db->where('warga.id_warga', $this->session->userdata('id_warga'));
		$this->db->where('permohonan_surat.status', 'Selesai');
		$this->db->where('permohonan_surat.status_delete', 0);

		$hasil = $this->db->get();
		return $hasil;
	}

	// hitung jumlah notif permohonan
	public function jumlah_notif()
	{
		$this->db->select('permohonan_surat.id_permohonan_surat, COUNT(permohonan_surat.id_permohonan_surat) as total_notif');
		$this->db->from('permohonan_surat');
		$this->db->join('warga', 'permohonan_surat.id_warga = warga.id_warga', 'INNER');
		$this->db->where('warga.id_warga', $this->session->userdata('id_warga'));
		$this->db->where('permohonan_surat.notif', 'Belum Dibaca');
		$this->db->where("(permohonan_surat.status = 'Ditolak Ketua RT' 
		OR permohonan_surat.status = 'Ditolak Kelurahan'
		OR permohonan_surat.status = 'Selesai')", null, false);

		$hasil = $this->db->get();
		return $hasil;
	}

	// hitung jumlah  permohonan ditolak untuk dashboard
	public function jumlah_permohonan_ditolak()
	{
		$this->db->select('permohonan_surat.id_permohonan_surat, COUNT(permohonan_surat.id_permohonan_surat) as total_permohonan_ditolak');
		$this->db->from('permohonan_surat');
		$this->db->join('warga', 'permohonan_surat.id_warga = warga.id_warga', 'INNER');
		$this->db->where('warga.id_warga', $this->session->userdata('id_warga'));
				$this->db->where('permohonan_surat.status_delete', 0);
		$this->db->where("(permohonan_surat.status = 'Ditolak Ketua RT' 
		OR permohonan_surat.status = 'Ditolak Kelurahan')", null, false);		
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'desc');

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
		$this->db->where("(permohonan_surat.status = 'Menunggu Persetujuan Ketua RT' 
		OR permohonan_surat.status = 'Menunggu Persetujuan Kelurahan' 
		OR permohonan_surat.status = 'Ditolak Ketua RT' 
		OR permohonan_surat.status = 'Ditolak Kelurahan' OR permohonan_surat.status = 'Belum Tuntas' 
		OR permohonan_surat.status = 'Selesai')", null, false);

		$hasil = $this->db->get();
		return $hasil;
	}

	// detail profil saya
	public function get_detail_profil_saya($detailhere, $tabel)
	{
		return $this->db->get_where($tabel, $detailhere);
	}

	//ambil foto profil profil saya
	public function get_foto_profil_profil_saya($id_warga)
	{
		$this->db->select('foto_profil_warga');
		$this->db->from('warga');
		$this->db->where('id_warga', $id_warga);

		$hasil = $this->db->get();
		return $hasil;
	}

	//ambil foto ktp profil saya
	public function get_foto_ktp_profil_saya($id_warga)
	{
		$this->db->select('foto_ktp_warga');
		$this->db->from('warga');
		$this->db->where('id_warga', $id_warga);

		$hasil = $this->db->get();
		return $hasil;
	}

	//ambil foto kk profil saya
	public function get_foto_kk_profil_saya($id_warga)
	{
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
	
	public function get_data_kades($id_kades)
	{
		$this->db->select('*');
		$this->db->from('kepala_desa');
		$this->db->where('id_kades', $id_kades);

		$hasil = $this->db->get();

		return $hasil;
	}

	// aksi ubah data profil saya                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ubah data kades
	public function aksi_ubah_data_profil_saya($detailhere, $data, $table)
	{
		$this->db->where('id_warga', $detailhere);
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
		$this->db->where('permohonan_surat.status_delete', 0);
		$this->db->where("(permohonan_surat.status = 'Menunggu Persetujuan Ketua RT' 
		OR permohonan_surat.status = 'Menunggu Persetujuan Kelurahan' 
		OR permohonan_surat.status = 'Ditolak Ketua RT' 
		OR permohonan_surat.status = 'Ditolak Kelurahan' OR permohonan_surat.status = 'Belum Tuntas' 
		OR permohonan_surat.status = 'Selesai')", null, false);
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'desc');

		return $this->db->get();
	}

	//get history permohonan
	public function get_permohonan_belum_dibaca($id_warga)
	{
		$this->db->select('permohonan_surat.*, nama_surat.nama_surat');
		$this->db->from('permohonan_surat');
		$this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
		$this->db->where('permohonan_surat.id_warga', $id_warga);
		$this->db->where('permohonan_surat.status_delete', 0);
		$this->db->where('permohonan_surat.notif', 'Belum Dibaca');
		$this->db->where("(permohonan_surat.status = 'Ditolak Ketua RT' 
		OR permohonan_surat.status = 'Ditolak Kelurahan'
		OR permohonan_surat.status = 'Selesai')", null, false);
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'desc');

		return $this->db->get();
	}

	//get data sedang proses rt
	public function get_data_sedang_proses_rt()
	{
		$this->db->select('permohonan_surat.*, nama_surat.nama_surat');
		$this->db->from('permohonan_surat');
		$this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
		$this->db->where('permohonan_surat.id_warga', $this->session->userdata('id_warga'));
		$this->db->where('permohonan_surat.status_delete', 0);
		$this->db->where('permohonan_surat.status', 'Menunggu Persetujuan Ketua RT');
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'desc');

		$hasil = $this->db->get();
		return $hasil;
	}

	//get data sedang proses admin
	public function get_data_sedang_proses_admin()
	{
		$this->db->select('permohonan_surat.*, nama_surat.nama_surat');
		$this->db->from('permohonan_surat');
		$this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
		$this->db->where('permohonan_surat.id_warga', $this->session->userdata('id_warga'));
		$this->db->where('permohonan_surat.status_delete', 0);
		$this->db->where('permohonan_surat.status', 'Menunggu Persetujuan Kelurahan');
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'desc');

		$hasil = $this->db->get();
		return $hasil;
	}

	//list data permohonan ditolak
	public function get_list_permohonan_ditolak()
	{
		$this->db->select('permohonan_surat.*, warga.nama, warga.id_warga, nama_surat.nama_surat');
		$this->db->from('warga');
		$this->db->join('permohonan_surat', 'warga.id_warga = permohonan_surat.id_warga', 'INNER');
		$this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
		$this->db->where('permohonan_surat.id_warga', $this->session->userdata('id_warga'));
		$this->db->where('permohonan_surat.status_delete', 0);
		$this->db->where("(permohonan_surat.status = 'Ditolak Ketua RT' 
		OR permohonan_surat.status = 'Ditolak Kelurahan')", null, false);
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'desc');

		$hasil = $this->db->get();
		return $hasil;
	}


	//get history permohonan selesai
	public function get_history_permohonan_selesai($id_warga)
	{
		$this->db->select('permohonan_surat.*, nama_surat.nama_surat');
		$this->db->from('permohonan_surat');
		$this->db->join('nama_surat', 'permohonan_surat.id_nama_surat = nama_surat.id_nama_surat', 'INNER');
		$this->db->where('permohonan_surat.id_warga', $id_warga);
		$this->db->where('permohonan_surat.status', 'Selesai');
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'desc');

		return $this->db->get();
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
		$this->db->order_by('permohonan_surat.id_permohonan_surat', 'asc');

		$hasil = $this->db->get();

		return $hasil;
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

	//aksi update notif
	public function update_notif($data, $id)
	{
		$this->db->where('id_permohonan_surat', $id);
		$this->db->update('permohonan_surat', $data);
	}

	//cek data warga untuk ubah katasandi
	public function cek_warga($id)
	{
		$query = $this->db->get_where('warga', ['id_warga' => $id]); 
		return $query->row_array();
	}
	
	//get data kades akktif
	public function cek_kades()
	{
		$query = $this->db->get_where('kepala_desa', ['status_delete' => '0']); 
		return $query->row_array();
	}
	
	//get id kades
	public function get_id_kades($id_permohonan)
	{
		$query = $this->db->get_where('permohonan_surat', ['id_permohonan_surat' => $id_permohonan]); 
		return $query->row_array();
    }
}
