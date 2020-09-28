const form = document.getElementById("form");
const form1 = document.getElementById("form1");
const form2 = document.getElementById("form2");
const form3 = document.getElementById("form3");
const form4 = document.getElementById("form4");
const form5 = document.getElementById("form5");
const form6 = document.getElementById("form6");
const form7 = document.getElementById("form7");
const form8 = document.getElementById("form8");
const form9 = document.getElementById("form9");
const form10 = document.getElementById("form10");
const form11 = document.getElementById("form11");
const form12 = document.getElementById("form12");
const form13 = document.getElementById("form13");
const form14 = document.getElementById("form14");

const nama = document.getElementById("nama");
const jenis_kelamin = document.getElementById("jenis_kelamin");
const tempat_lahir = document.getElementById("tempat_lahir");
const tanggal_lahir = document.getElementById("tanggal_lahir");
const pekerjaan = document.getElementById("pekerjaan");
const alamat = document.getElementById("alamat");
const usaha = document.getElementById("nama_usaha");

const agama = document.getElementById("agama");
const alamat_tinggal = document.getElementById("alamat_tinggal");
const alamat_kk = document.getElementById("alamat_kk");
const keperluan = document.getElementById("keperluan");

const nama_benar = document.getElementById("nama_benar");
const dokumen_benar = document.getElementById("dokumen_benar");
const nama_salah = document.getElementById("nama_salah");
const dokumen_salah = document.getElementById("dokumen_salah");

const nama_kegiatan = document.getElementById("nama_kegiatan");
const hari_kegiatan = document.getElementById("hari_kegiatan");
const tempat_kegiatan = document.getElementById("tempat_kegiatan");
const tanggal_kegiatan = document.getElementById("tanggal_kegiatan");
const jam_kegiatan = document.getElementById("jam_kegiatan");
const foto_ktp = document.getElementById("foto_ktp");

const nama_istri = document.getElementById("nama_istri");
const tempat_lahir_istri = document.getElementById("tempat_lahir_istri");
const tanggal_lahir_istri = document.getElementById("tanggal_lahir_istri");
const pekerjaan_istri = document.getElementById("pekerjaan_istri");
const nama_suami = document.getElementById("nama_suami");
const tempat_lahir_suami = document.getElementById("tempat_lahir_suami");
const tanggal_lahir_suami = document.getElementById("tanggal_lahir_suami");
const pekerjaan_suami = document.getElementById("pekerjaan_suami");
const alasan = document.getElementById("alasan");

const nama_alm = document.getElementById("nama_alm");
const tempat_meninggal = document.getElementById("tempat_meninggal");
const umur = document.getElementById("umur");
const tempat_kediaman = document.getElementById("tempat_kediaman");
const hari_meninggal = document.getElementById("hari_meninggal");
const tanggal_meninggal = document.getElementById("tanggal_meninggal");
const alasan_meninggal = document.getElementById("alasan_meninggal");

const nama_anak = document.getElementById("nama_anak");
const hari_lahir = document.getElementById("hari_lahir");
const jam_lahir = document.getElementById("jam_lahir");
const nama_ibu = document.getElementById("nama_ibu");
const nama_ayah = document.getElementById("nama_ayah");
const nama_pemohon = document.getElementById("nama_pemohon");
const hubungan_dengan_bayi = document.getElementById("hubungan_dengan_bayi");

const nik = document.getElementById("nik");
const rt = document.getElementById("rt");
const kelurahan = document.getElementById("kelurahan");
const kecamatan = document.getElementById("kecamatan");
const status_perkawinan = document.getElementById("status_perkawinan");
const golongan_darah = document.getElementById("golongan_darah");
const no_kk = document.getElementById("no_kk");
const tanggal_tinggal = document.getElementById("tanggal_tinggal");
const pas_foto = document.getElementById("pas_foto");
const foto_kk = document.getElementById("foto_kk");

const kewarganegaraaan = document.getElementById("kewarganegaraan");
const kepindahan_dari = document.getElementById("kepindahan_dari");
const jumlah_pengikut = document.getElementById("jumlah_pengikut");

const penghasilan = document.getElementById("penghasilan");

const alamat_asal = document.getElementById("alamat_asal");
const tanggal_kk = document.getElementById("tanggal_kk");
const alamat_pindah = document.getElementById("alamat_pindah");
const kelurahan_pindah = document.getElementById("kelurahan_pindah");
const kecamatan_pindah = document.getElementById("kecamatan_pindah");
const kabupaten_pindah = document.getElementById("kabupaten_pindah");
const provinsi_pindah = document.getElementById("provinsi_pindah");
const tanggal_pindah = document.getElementById("tanggal_pindah");

const formubah = document.getElementById("formUbah");
const nikwarga = document.getElementById("nik");
const namawarga = document.getElementById("nama");
const tempat_lahirwarga = document.getElementById("tempat_lahir");
const tanggal_lahirwarga = document.getElementById("tanggal_lahir");
const jenis_kelaminwarga = document.getElementById("jenis_kelamin");
const golongan_darahwarga = document.getElementById("golongan_darah");
const agamawarga = document.getElementById("agama");
const alamatwarga = document.getElementById("alamat");
const rtwarga = document.getElementById("rt");
const kelurahanwarga = document.getElementById("kelurahan");
const kecamatanwarga = document.getElementById("kecamatan");
const status_perkawinanwarga = document.getElementById("status_perkawinan");
const pekerjaanwarga = document.getElementById("pekerjaan");
const kewarganegaraanwarga = document.getElementById("kewarganegaraan");
const no_kkwarga = document.getElementById("no_kk");
const pendidikan_terakhirwarga = document.getElementById("pendidikan_terakhir");
const status_hub_kelwarga = document.getElementById("status_hub_kel");
const no_hpwarga = document.getElementById("no_hp");
const kata_sandiwarga = document.getElementById("kata_sandi");

const tanggal_permohonan = document.getElementById("tanggal_permohonan");




if (form1 != null) {
	form1.addEventListener("submit", (e) => {
		if (checkInput1 != null) {
			e.preventDefault();
		} else
			e.target.submit();
	});

} else if (form2 != null) {
	form2.addEventListener("submit", (e) => {
		e.preventDefault();
		checkInput2() === "";
		e.target.submit();
	});
} else if (form3 != null) {
	form3.addEventListener("submit", (e) => {
		e.preventDefault();
		checkInput3() === "";
		e.target.submit();
	});
} else if (form4 != null) {
	form4.addEventListener("submit", (e) => {
		e.preventDefault();
		checkInput4() === "";
		e.target.submit();

	});
} else if (form5 != null) {
	form5.addEventListener("submit", (e) => {
		e.preventDefault();
		checkInput5() === "";
		// e.target.submit();
	});
} else if (form6 != null) {
	form6.addEventListener("submit", (e) => {
		e.preventDefault();
		checkInput6() === "";
		e.target.submit();
	});
} else if (form7 != null) {
	form7.addEventListener("submit", (e) => {
		e.preventDefault();
		checkInput7() === "";
		e.target.submit();
	});
} else if (form8 != null) {
	form8.addEventListener("submit", (e) => {
		e.preventDefault();
		checkInput8() === "";
		e.target.submit();
	});
} else if (form9 != null) {
	form9.addEventListener("submit", (e) => {
		e.preventDefault();
		checkInput9() === "";
		e.target.submit();
	});
} else if (form10 != null) {
	form10.addEventListener("submit", (e) => {
		e.preventDefault();
		checkInput10() === "";
		e.target.submit();
	});
} else if (form11 != null) {
	form11.addEventListener("submit", (e) => {
		e.preventDefault();
		checkInput11() === "";
		// e.target.submit();
	});
} else if (form12 != null) {
	form12.addEventListener("submit", (e) => {
		e.preventDefault();
		checkInput12() === "";
		e.target.submit();
	});
} else if (form13 != null) {
	form13.addEventListener("submit", (e) => {
		e.preventDefault();
		checkInput13() === "";
		e.target.submit();
	});
} else if (form14 != null) {
	form14.addEventListener("submit", (e) => {
		e.preventDefault();
		checkInput14() === "";
		e.target.submit();
	});
} else if (formubah != null) {
	formubah.addEventListener("submit", (e) => {
		e.preventDefault();
		checkInputsWarga() === "";
		// e.target.submit();
	});
}



function checkInput1() {
	const namaValue = nama.value.trim();
	const jenis_kelaminValue = jenis_kelamin.value.trim();
	const tempat_lahirValue = tempat_lahir.value.trim();
	const tanggal_lahirValue = tanggal_lahir.value.trim();
	const pekerjaanValue = pekerjaan.value.trim();
	const alamatValue = alamat.value.trim();
	const usahaValue = nama_usaha.value.trim();


	if (namaValue === "") {
		setErrorFor(nama, "Nama tidak boleh kosong");
	} else {
		setSuccessFor(nama);
	}

	if (jenis_kelaminValue === "Pilih jenis kelamin...") {
		setErrorFor(jenis_kelamin, "Jenis kelamin tidak boleh kosong");
	} else {
		setSuccessFor(jenis_kelamin);
	}
	if (tempat_lahirValue === "") {
		setErrorFor(tempat_lahir, "Tempat lahir tidak boleh kosong");
	} else {
		setSuccessFor(tempat_lahir);
	}
	if (tanggal_lahirValue === "") {
		setErrorFor(tanggal_lahir, "Tanggal lahir tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_lahir);
	}
	if (pekerjaanValue === "Pilih jenis pekerjaan...") {
		setErrorFor(pekerjaan, "Pekerjaan tidak boleh kosong");
	} else {
		setSuccessFor(pekerjaan);
	}
	if (alamatValue === "") {
		setErrorFor(alamat, "Alamat tidak boleh kosong");
	} else {
		setSuccessFor(alamat);
	}
	if (usahaValue === "") {
		setErrorFor(usaha, "Usaha tidak boleh kosong");
	} else {
		setSuccessFor(usaha);
	}
}

function checkInput2() {
	const namaValue = nama.value.trim();
	const jenis_kelaminValue = jenis_kelamin.value.trim();
	const tempat_lahirValue = tempat_lahir.value.trim();
	const tanggal_lahirValue = tanggal_lahir.value.trim();
	const pekerjaanValue = pekerjaan.value.trim();
	const agamaValue = agama.value.trim();
	const alamat_tinggalValue = alamat_tinggal.value.trim();
	const alamat_kkValue = alamat_kk.value.trim();

	if (namaValue === "") {
		setErrorFor(nama, "Nama tidak boleh kosong");
	} else {
		setSuccessFor(nama);
	}

	if (jenis_kelaminValue === "Pilih jenis kelamin...") {
		setErrorFor(jenis_kelamin, "Jenis kelamin tidak boleh kosong");
	} else {
		setSuccessFor(jenis_kelamin);
	}
	if (tempat_lahirValue === "") {
		setErrorFor(tempat_lahir, "Tempat lahir tidak boleh kosong");
	} else {
		setSuccessFor(tempat_lahir);
	}
	if (tanggal_lahirValue === "") {
		setErrorFor(tanggal_lahir, "Tanggal lahir tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_lahir);
	}
	if (pekerjaanValue === "Pilih jenis pekerjaan...") {
		setErrorFor(pekerjaan, "Pekerjaan tidak boleh kosong");
	} else {
		setSuccessFor(pekerjaan);
	}

	if (agamaValue === "Pilih jenis agama...") {
		setErrorFor(agama, "Agama tidak boleh kosong");
	} else {
		setSuccessFor(agama);
	}
	if (alamat_tinggalValue === "") {
		setErrorFor(alamat_tinggal, "Alamat tinggal tidak boleh kosong");
	} else {
		setSuccessFor(alamat_tinggal);
	}
	if (alamat_kkValue === "") {
		setErrorFor(alamat_kk, "Alamat KK tidak boleh kosong");
	} else {
		setSuccessFor(alamat_kk);
	}

}

function checkInput3() {
	const namaValue = nama.value.trim();
	const jenis_kelaminValue = jenis_kelamin.value.trim();
	const tempat_lahirValue = tempat_lahir.value.trim();
	const tanggal_lahirValue = tanggal_lahir.value.trim();
	const pekerjaanValue = pekerjaan.value.trim();
	const alamat_tinggalValue = alamat_tinggal.value.trim();
	const keperluanValue = keperluan.value.trim();


	if (namaValue === "") {
		setErrorFor(nama, "Nama tidak boleh kosong");
	} else {
		setSuccessFor(nama);
	}

	if (jenis_kelaminValue === "Pilih jenis kelamin...") {
		setErrorFor(jenis_kelamin, "Jenis kelamin tidak boleh kosong");
	} else {
		setSuccessFor(jenis_kelamin);
	}
	if (tempat_lahirValue === "") {
		setErrorFor(tempat_lahir, "Tempat lahir tidak boleh kosong");
	} else {
		setSuccessFor(tempat_lahir);
	}
	if (tanggal_lahirValue === "") {
		setErrorFor(tanggal_lahir, "Tanggal lahir tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_lahir);
	}
	if (pekerjaanValue === "Pilih jenis pekerjaan...") {
		setErrorFor(pekerjaan, "Pekerjaan tidak boleh kosong");
	} else {
		setSuccessFor(pekerjaan);
	}
	if (alamat_tinggalValue === "") {
		setErrorFor(alamat_tinggal, "Alamat tinggal tidak boleh kosong");
	} else {
		setSuccessFor(alamat_tinggal);
	}
	if (keperluanValue === "") {
		setErrorFor(keperluan, "Keperluan tidak boleh kosong");
	} else {
		setSuccessFor(keperluan);
	}

}

function checkInput4() {
	const nama_benarValue = nama_benar.value.trim();
	const nama_dokumen_benarValue = nama_dokumen_benar.value.trim();
	const nama_salahValue = nama_salah.value.trim();
	const nama_dokumen_salahValue = nama_dokumen_salah.value.trim();
	const tempat_lahirValue = tempat_lahir.value.trim();
	const tanggal_lahirValue = tanggal_lahir.value.trim();
	const pekerjaanValue = pekerjaan.value.trim();
	const alamatValue = alamat.value.trim();


	if (nama_benarValue === "") {
		setErrorFor(nama_benar, "Nama benar tidak boleh kosong");
	} else {
		setSuccessFor(nama_benar);
	}
	if (nama_dokumen_benarValue === "KTP, KK, Ijazah dll...") {
		setErrorFor(nama_dokumen_benar, "Dokumen benar tidak boleh kosong");
	} else {
		setSuccessFor(nama_dokumen_benar);
	}
	if (nama_salahValue === "") {
		setErrorFor(nama_salah, "Nama salah tidak boleh kosong");
	} else {
		setSuccessFor(nama_salah);
	}
	if (nama_dokumen_salahValue === "KTP, KK, Ijazah dll...") {
		setErrorFor(nama_dokumen_salah, "Dokumen salah tidak boleh kosong");
	} else {
		setSuccessFor(nama_dokumen_salah);
	}
	if (tempat_lahirValue === "") {
		setErrorFor(tempat_lahir, "Tempat lahir tidak boleh kosong");
	} else {
		setSuccessFor(tempat_lahir);
	}
	if (tanggal_lahirValue === "") {
		setErrorFor(tanggal_lahir, "Tanggal lahir tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_lahir);
	}
	if (pekerjaanValue === "Pilih jenis pekerjaan...") {
		setErrorFor(pekerjaan, "Pekerjaan tidak boleh kosong");
	} else {
		setSuccessFor(pekerjaan);
	}
	if (alamatValue === "") {
		setErrorFor(alamat, "Alamat tidak boleh kosong");
	} else {
		setSuccessFor(alamat);
	}
}

function checkInput5() {
	const namaValue = nama.value.trim();
	const tempat_lahirValue = tempat_lahir.value.trim();
	const tanggal_lahirValue = tanggal_lahir.value.trim();
	const alamatValue = alamat.value.trim();
	const nama_kegiatanValue = nama_kegiatan.value.trim();
	const hari_kegiatanValue = hari_kegiatan.value.trim();
	const tempat_kegiatanValue = tempat_kegiatan.value.trim();
	const tanggal_kegiatanValue = tanggal_kegiatan.value.trim();
	const jam_kegiatanValue = jam_kegiatan.value.trim();
	const foto_ktpValue = foto_ktp.value.trim();


	if (namaValue === "") {
		setErrorFor(nama, "Nama tidak boleh kosong");
	} else {
		setSuccessFor(nama);
	}
	if (tempat_lahirValue === "") {
		setErrorFor(tempat_lahir, "Tempat lahir tidak boleh kosong");
	} else {
		setSuccessFor(tempat_lahir);
	}
	if (tanggal_lahirValue === "") {
		setErrorFor(tanggal_lahir, "Tanggal lahir tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_lahir);
	}
	if (alamatValue === "") {
		setErrorFor(alamat, "Alamat tidak boleh kosong");
	} else {
		setSuccessFor(alamat);
	}
	if (nama_kegiatanValue === "") {
		setErrorFor(nama_kegiatan, "Nama kegiatan tidak boleh kosong");
	} else {
		setSuccessFor(nama_kegiatan);
	}
	if (hari_kegiatanValue === "Pilih Hari") {
		setErrorFor(hari_kegiatan, "Hari kegiatan tidak boleh kosong");
	} else {
		setSuccessFor(hari_kegiatan);
	}
	if (tempat_kegiatanValue === "") {
		setErrorFor(tempat_kegiatan, " tidak boleh kosong");
	} else {
		setSuccessFor(tempat_kegiatan);
	}
	if (tanggal_kegiatanValue === "") {
		setErrorFor(tanggal_kegiatan, " tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_kegiatan);
	}
	if (jam_kegiatanValue === "") {
		setErrorFor(jam_kegiatan, " tidak boleh kosong");
	} else {
		setSuccessFor(jam_kegiatan);
	}
	if (foto_ktpValue === "Upload Foto KTP") {
		setErrorFor(foto_ktp, " tidak boleh kosong");
	} else {
		setSuccessFor(foto_ktp);
	}
}

function checkInput6() {
	const namaValue = nama.value.trim();
	const jenis_kelaminValue = jenis_kelamin.value.trim();
	const tempat_lahirValue = tempat_lahir.value.trim();
	const tanggal_lahirValue = tanggal_lahir.value.trim();
	const pekerjaanValue = pekerjaan.value.trim();
	const alamat_tinggalValue = alamat_tinggal.value.trim();


	if (namaValue === "") {
		setErrorFor(nama, "Nama tidak boleh kosong");
	} else {
		setSuccessFor(nama);
	}

	if (jenis_kelaminValue === "Pilih jenis kelamin...") {
		setErrorFor(jenis_kelamin, "Jenis kelamin tidak boleh kosong");
	} else {
		setSuccessFor(jenis_kelamin);
	}
	if (tempat_lahirValue === "") {
		setErrorFor(tempat_lahir, "Tempat lahir tidak boleh kosong");
	} else {
		setSuccessFor(tempat_lahir);
	}
	if (tanggal_lahirValue === "") {
		setErrorFor(tanggal_lahir, "Tanggal lahir tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_lahir);
	}
	if (pekerjaanValue === "Pilih jenis pekerjaan...") {
		setErrorFor(pekerjaan, "Pekerjaan tidak boleh kosong");
	} else {
		setSuccessFor(pekerjaan);
	}
	if (alamat_tinggalValue === "") {
		setErrorFor(alamat_tinggal, "Alamat tidak boleh kosong");
	} else {
		setSuccessFor(alamat_tinggal);
	}
}

function checkInput7() {
	const namaValue = nama.value.trim();
	const jenis_kelaminValue = jenis_kelamin.value.trim();
	const tempat_lahirValue = tempat_lahir.value.trim();
	const tanggal_lahirValue = tanggal_lahir.value.trim();
	const pekerjaanValue = pekerjaan.value.trim();
	const alamat_tinggalValue = alamat_tinggal.value.trim();
	const keperluanValue = keperluan.value.trim();


	if (namaValue === "") {
		setErrorFor(nama, "Nama tidak boleh kosong");
	} else {
		setSuccessFor(nama);
	}

	if (jenis_kelaminValue === "Pilih jenis kelamin...") {
		setErrorFor(jenis_kelamin, "Jenis kelamin tidak boleh kosong");
	} else {
		setSuccessFor(jenis_kelamin);
	}
	if (tempat_lahirValue === "") {
		setErrorFor(tempat_lahir, "Tempat lahir tidak boleh kosong");
	} else {
		setSuccessFor(tempat_lahir);
	}
	if (tanggal_lahirValue === "") {
		setErrorFor(tanggal_lahir, "Tanggal lahir tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_lahir);
	}
	if (pekerjaanValue === "Pilih jenis pekerjaan...") {
		setErrorFor(pekerjaan, "Pekerjaan tidak boleh kosong");
	} else {
		setSuccessFor(pekerjaan);
	}
	if (alamat_tinggalValue === "") {
		setErrorFor(alamat_tinggal, "Alamat tidak boleh kosong");
	} else {
		setSuccessFor(alamat_tinggal);
	}
	if (keperluanValue === "") {
		setErrorFor(keperluan, "Keperluan tidak boleh kosong");
	} else {
		setSuccessFor(keperluan);
	}
}

function checkInput8() {
	const nama_istriValue = nama_istri.value.trim();
	const tempat_lahir_istriValue = tempat_lahir_istri.value.trim();
	const tanggal_lahir_istriValue = tanggal_lahir_istri.value.trim();
	const pekerjaan_istriValue = pekerjaan_istri.value.trim();
	const alamat_tinggalValue = alamat_tinggal.value.trim();
	const nama_suamiValue = nama_suami.value.trim();
	const tempat_lahir_suamiValue = tempat_lahir_suami.value.trim();
	const tanggal_lahir_suamiValue = tanggal_lahir_suami.value.trim();
	const pekerjaan_suamiValue = pekerjaan_suami.value.trim();
	const alasanValue = alasan.value.trim();

	if (nama_istriValue === "") {
		setErrorFor(nama_istri, "Nama istri tidak boleh kosong");
	} else {
		setSuccessFor(nama_istri);
	}
	if (tempat_lahir_istriValue === "") {
		setErrorFor(tempat_lahir_istri, "Tempat lahir istri tidak boleh kosong");
	} else {
		setSuccessFor(tempat_lahir_istri);
	}
	if (tanggal_lahir_istriValue === "") {
		setErrorFor(tanggal_lahir_istri, "Tanggal lahir istri tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_lahir_istri);
	}
	if (pekerjaan_istriValue === "Pekerjaan Istri...") {
		setErrorFor(pekerjaan_istri, "Pekerjaan istri tidak boleh kosong");
	} else {
		setSuccessFor(pekerjaan_istri);
	}
	if (alamat_tinggalValue === "") {
		setErrorFor(alamat_tinggal, "Alamat tinggal tidak boleh kosong");
	} else {
		setSuccessFor(alamat_tinggal);
	}
	if (nama_suamiValue === "") {
		setErrorFor(nama_suami, "Nama suami tidak boleh kosong");
	} else {
		setSuccessFor(nama_suami);
	}
	if (tempat_lahir_suamiValue === "") {
		setErrorFor(tempat_lahir_suami, "Tempat lahir tidak boleh kosong");
	} else {
		setSuccessFor(tempat_lahir_suami);
	}
	if (tanggal_lahir_suamiValue === "") {
		setErrorFor(tanggal_lahir_suami, "Tanggal lahir tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_lahir_suami);
	}
	if (pekerjaan_suamiValue === "Pekerjaan Suami...") {
		setErrorFor(pekerjaan_suami, "Pekerjaan suami tidak boleh kosong");
	} else {
		setSuccessFor(pekerjaan_suami);
	}
	if (alasanValue === "") {
		setErrorFor(alasan, "Alasan tidak boleh kosong");
	} else {
		setSuccessFor(alasan);
	}
}

function checkInput9() {
	const nama_almValue = nama_alm.value.trim();
	const jenis_kelaminValue = jenis_kelamin.value.trim();
	const tempat_meninggalValue = tempat_meninggal.value.trim();
	const umurValue = umur.value.trim();
	const tempat_kediamanValue = tempat_kediaman.value.trim();
	const hari_meninggalValue = hari_meninggal.value.trim();
	const tanggal_meninggalValue = tanggal_meninggal.value.trim();
	const alasan_meninggalValue = alasan_meninggal.value.trim();


	if (nama_almValue === "") {
		setErrorFor(nama_alm, "Nama Alm. tidak boleh kosong");
	} else {
		setSuccessFor(nama_alm);
	}
	if (jenis_kelaminValue === "Pilih jenis kelamin...") {
		setErrorFor(jenis_kelamin, "Jenis kelamin tidak boleh kosong");
	} else {
		setSuccessFor(jenis_kelamin);
	}
	if (tempat_meninggalValue === "") {
		setErrorFor(tempat_meninggal, "Tempat meninggal tidak boleh kosong");
	} else {
		setSuccessFor(tempat_meninggal);
	}
	if (umurValue === "") {
		setErrorFor(umur, "Umur tidak boleh kosong");
	} else {
		setSuccessFor(umur);
	}
	if (tempat_kediamanValue === "") {
		setErrorFor(tempat_kediaman, "Tempat kediaman tidak boleh kosong");
	} else {
		setSuccessFor(tempat_kediaman);
	}
	if (hari_meninggalValue === "Pilih hari meninggal...") {
		setErrorFor(hari_meninggal, "Hari meninggal tidak boleh kosong");
	} else {
		setSuccessFor(hari_meninggal);
	}
	if (tanggal_meninggalValue === "") {
		setErrorFor(tanggal_meninggal, "Tanggal meninggal tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_meninggal);
	}
	if (alasan_meninggalValue === "") {
		setErrorFor(alasan_meninggal, "Alasan meninggal tidak boleh kosong");
	} else {
		setSuccessFor(alasan_meninggal);
	}
}

function checkInput10() {
	const nama_anakValue = nama_anak.value.trim();
	const hari_lahirValue = hari_lahir.value.trim();
	const tempat_lahirValue = tempat_lahir.value.trim();
	const tanggal_lahirValue = tanggal_lahir.value.trim();
	const jam_lahirValue = jam_lahir.value.trim();
	const jenis_kelaminValue = jenis_kelamin.value.trim();
	const nama_ibuValue = nama_ibu.value.trim();
	const alamatValue = alamat.value.trim();
	const nama_ayahValue = nama_ayah.value.trim();
	const nama_pemohonValue = nama_pemohon.value.trim();
	const hubungan_dengan_bayiValue = hubungan_dengan_bayi.value.trim();


	if (nama_anakValue === "") {
		setErrorFor(nama_anak, "Nama anak tidak boleh kosong");
	} else {
		setSuccessFor(nama_anak);
	}
	if (hari_lahirValue === "Pilih hari lahir...") {
		setErrorFor(hari_lahir, "Hari lahir tidak boleh kosong");
	} else {
		setSuccessFor(hari_lahir);
	}
	if (tempat_lahirValue === "") {
		setErrorFor(tempat_lahir, "Tempat lahir tidak boleh kosong");
	} else {
		setSuccessFor(tempat_lahir);
	}
	if (tanggal_lahirValue === "") {
		setErrorFor(tanggal_lahir, "Tanggal lahir tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_lahir);
	}

	if (jam_lahirValue === "") {
		setErrorFor(jam_lahir, "Jam lahir tidak boleh kosong");
	} else {
		setSuccessFor(jam_lahir);
	}
	if (jenis_kelaminValue === "Pilih jenis kelamin...") {
		setErrorFor(jenis_kelamin, "Jenis kelamin tidak boleh kosong");
	} else {
		setSuccessFor(jenis_kelamin);
	}
	if (nama_ibuValue === "") {
		setErrorFor(nama_ibu, "Nama ibu tidak boleh kosong");
	} else {
		setSuccessFor(nama_ibu);
	}
	if (alamatValue === "") {
		setErrorFor(alamat, "Alamat tidak boleh kosong");
	} else {
		setSuccessFor(alamat);
	}
	if (nama_ayahValue === "") {
		setErrorFor(nama_ayah, "Nama ayah tidak boleh kosong");
	} else {
		setSuccessFor(nama_ayah);
	}
	if (nama_pemohonValue === "") {
		setErrorFor(nama_pemohon, "Nama pemohon tidak boleh kosong");
	} else {
		setSuccessFor(nama_pemohon);
	}
	if (hubungan_dengan_bayiValue === "") {
		setErrorFor(hubungan_dengan_bayi, "Hubungan dengan bayi tidak boleh kosong");
	} else {
		setSuccessFor(hubungan_dengan_bayi);
	}
}

function checkInput11() {
	const nikValue = nik.value.trim();
	const namaValue = nama.value.trim();
	const alamatValue = alamat.value.trim();
	const rtValue = rt.value.trim();
	const kelurahanValue = kelurahan.value.trim();
	const kecamatanValue = kecamatan.value.trim();
	const jenis_kelaminValue = jenis_kelamin.value.trim();
	const agamaValue = agama.value.trim();
	const tempat_lahirValue = tempat_lahir.value.trim();
	const tanggal_lahirValue = tanggal_lahir.value.trim();
	const status_perkawinanValue = status_perkawinan.value.trim();
	const golongan_darahValue = golongan_darah.value.trim();
	const no_kkValue = no_kk.value.trim();
	const tanggal_tinggalValue = tanggal_tinggal.value.trim();
	const pas_fotoValue = pas_foto.value.trim();
	const foto_kkValue = foto_kk.value.trim();


	if (nikValue === "") {
		setErrorFor(nik, " tidak boleh kosong");
	} else {
		setSuccessFor(nik);
	}
	if (namaValue === "") {
		setErrorFor(nama, "Nama tidak boleh kosong");
	} else {
		setSuccessFor(nama);
	}
	if (alamatValue === "") {
		setErrorFor(alamat, "Alamat tidak boleh kosong");
	} else {
		setSuccessFor(alamat);
	}
	if (rtValue === "") {
		setErrorFor(rt, " tidak boleh kosong");
	} else {
		setSuccessFor(rt);
	}
	if (kelurahanValue === "") {
		setErrorFor(kelurahan, " tidak boleh kosong");
	} else {
		setSuccessFor(kelurahan);
	}
	if (kecamatanValue === "") {
		setErrorFor(kecamatan, " tidak boleh kosong");
	} else {
		setSuccessFor(kecamatan);
	}
	if (jenis_kelaminValue === "Pilih jenis kelamin...") {
		setErrorFor(jenis_kelamin, "Jenis kelamin tidak boleh kosong");
	} else {
		setSuccessFor(jenis_kelamin);
	}
	if (agamaValue === "Pilih jenis agama...") {
		setErrorFor(agama, "Agama tidak boleh kosong");
	} else {
		setSuccessFor(agama);
	}
	if (tempat_lahirValue === "") {
		setErrorFor(tempat_lahir, "Tempat lahir tidak boleh kosong");
	} else {
		setSuccessFor(tempat_lahir);
	}
	if (tanggal_lahirValue === "") {
		setErrorFor(tanggal_lahir, "Tanggal lahir tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_lahir);
	}
	if (status_perkawinanValue === "Pilih status perkawinan...") {
		setErrorFor(status_perkawinan, " Status perkawinan tidak boleh kosong");
	} else {
		setSuccessFor(status_perkawinan);
	}
	if (golongan_darahValue === "Pilih golongan darah...") {
		setErrorFor(golongan_darah, "Golongan darah tidak boleh kosong");
	} else {
		setSuccessFor(golongan_darah);
	}
	if (no_kkValue === "") {
		setErrorFor(no_kk, " tidak boleh kosong");
	} else {
		setSuccessFor(no_kk);
	}
	if (tanggal_tinggalValue === "") {
		setErrorFor(tanggal_tinggal, "Tanggal tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_tinggal);
	}
	if (pas_fotoValue === "") {
		setErrorFor(pas_foto, "Pas foto tidak boleh kosong");
	} else {
		setSuccessFor(pas_foto);
	}
	if (foto_kkValue === "") {
		setErrorFor(foto_kk, "Foto kk tidak boleh kosong");
	} else {
		setSuccessFor(foto_kk);
	}
}

function checkInput12() {

	const namaValue = nama.value.trim();
	const tempat_lahirValue = tempat_lahir.value.trim();
	const tanggal_lahirValue = tanggal_lahir.value.trim();
	const jenis_kelaminValue = jenis_kelamin.value.trim();
	const status_perkawinanValue = status_perkawinan.value.trim();
	const agamaValue = agama.value.trim();
	const kewarganegaraanValue = kewarganegaraaan.value.trim();
	const pendidikan_terakhirValue = pendidikan_terakhir.value.trim();
	const pekerjaanValue = pekerjaan.value.trim();
	const alamatValue = alamat.value.trim();
	const tanggal_tinggalValue = tanggal_tinggal.value.trim();
	const kepindahan_dariValue = kepindahan_dari.value.trim();
	const nama_ayahValue = nama_ayah.value.trim();
	const nama_ibuValue = nama_ibu.value.trim();
	const jumlah_pengikutValue = jumlah_pengikut.value.trim();


	if (namaValue === "") {
		setErrorFor(nama, "Nama tidak boleh kosong");
	} else {
		setSuccessFor(nama);
	}
	if (tempat_lahirValue === "") {
		setErrorFor(tempat_lahir, "Tempat lahir tidak boleh kosong");
	} else {
		setSuccessFor(tempat_lahir);
	}
	if (tanggal_lahirValue === "") {
		setErrorFor(tanggal_lahir, "Tanggal lahir tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_lahir);
	}
	if (jenis_kelaminValue === "Pilih jenis kelamin...") {
		setErrorFor(jenis_kelamin, "Jenis kelamin tidak boleh kosong");
	} else {
		setSuccessFor(jenis_kelamin);
	}

	if (status_perkawinanValue === "Pilih status perkawinan...") {
		setErrorFor(status_perkawinan, "Jenis kelamin tidak boleh kosong");
	} else {
		setSuccessFor(status_perkawinan);
	}
	if (agamaValue === "Pilih jenis agama...") {
		setErrorFor(agama, "Agama tidak boleh kosong");
	} else {
		setSuccessFor(agama);
	}
	if (kewarganegaraanValue === "Pilih kewarganegaraan...") {
		setErrorFor(kewarganegaraan, "Jenis kelamin tidak boleh kosong");
	} else {
		setSuccessFor(kewarganegaraan);
	}
	if (pendidikan_terakhirValue === "Pilih pendidikan terakhir...") {
		setErrorFor(pendidikan_terakhir, "Jenis kelamin tidak boleh kosong");
	} else {
		setSuccessFor(pendidikan_terakhir);
	}
	if (pekerjaanValue === "") {
		setErrorFor(pekerjaan, "Jenis kelamin tidak boleh kosong");
	} else {
		setSuccessFor(pekerjaan);
	}
	if (alamatValue === "") {
		setErrorFor(alamat, "Alamat tidak boleh kosong");
	} else {
		setSuccessFor(alamat);
	}
	if (tanggal_tinggalValue === "") {
		setErrorFor(tanggal_tinggal, "Tanggal tinggal tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_tinggal);
	}
	if (kepindahan_dariValue === "") {
		setErrorFor(kepindahan_dari, "Asal pindah tidak boleh kosong");
	} else {
		setSuccessFor(kepindahan_dari);
	}
	if (nama_ayahValue === "") {
		setErrorFor(nama_ayah, "Nama ayah tidak boleh kosong");
	} else {
		setSuccessFor(nama_ayah);
	}
	if (nama_ibuValue === "") {
		setErrorFor(nama_ibu, "Nama ibu tidak boleh kosong");
	} else {
		setSuccessFor(nama_ibu);
	}
	if (jumlah_pengikutValue === "") {
		setErrorFor(jumlah_pengikut, "Jumlah pengikut tidak boleh kosong");
	} else {
		setSuccessFor(jumlah_pengikut);
	}
}

function checkInput13() {

	const namaValue = nama.value.trim();
	const jenis_kelaminValue = jenis_kelamin.value.trim();
	const tempat_lahirValue = tempat_lahir.value.trim();
	const tanggal_lahirValue = tanggal_lahir.value.trim();
	const pekerjaanValue = pekerjaan.value.trim();
	const alamat_tinggalValue = alamat_tinggal.value.trim();
	const penghasilanValue = penghasilan.value.trim();

	if (namaValue === "") {
		setErrorFor(nama, "Nama tidak boleh kosong");
	} else {
		setSuccessFor(nama);
	}

	if (jenis_kelaminValue === "Pilih jenis kelamin...") {
		setErrorFor(jenis_kelamin, "Jenis kelamin tidak boleh kosong");
	} else {
		setSuccessFor(jenis_kelamin);
	}
	if (tempat_lahirValue === "") {
		setErrorFor(tempat_lahir, "Tempat lahir tidak boleh kosong");
	} else {
		setSuccessFor(tempat_lahir);
	}
	if (tanggal_lahirValue === "") {
		setErrorFor(tanggal_lahir, "Tanggal lahir tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_lahir);
	}
	if (pekerjaanValue === "Pilih jenis pekerjaan...") {
		setErrorFor(pekerjaan, "Pekerjaan tidak boleh kosong");
	} else {
		setSuccessFor(pekerjaan);
	}
	if (alamat_tinggalValue === "") {
		setErrorFor(alamat_tinggal, "Alamat tinggal tidak boleh kosong");
	} else {
		setSuccessFor(alamat_tinggal);
	}
	if (penghasilanValue === "") {
		setErrorFor(penghasilan, "penghasilan tidak boleh kosong");
	} else {
		setSuccessFor(penghasilan);
	}
}

function checkInput14() {
	const namaValue = nama.value.trim();
	const tempat_lahirValue = tempat_lahir.value.trim();
	const tanggal_lahirValue = tanggal_lahir.value.trim();
	const jenis_kelaminValue = jenis_kelamin.value.trim();
	const status_perkawinanValue = status_perkawinan.value.trim();
	const agamaValue = agama.value.trim();
	const kewarganegaraanValue = kewarganegaraaan.value.trim();
	const pendidikan_terakhirValue = pendidikan_terakhir.value.trim();
	const pekerjaanValue = pekerjaan.value.trim();
	const alamat_asalValue = alamat_asal.value.trim();
	const no_kkValue = no_kk.value.trim();
	const tanggal_kkValue = tanggal_kk.value.trim();
	const alamat_pindahValue = alamat_pindah.value.trim();
	const kelurahan_pindahValue = kelurahan_pindah.value.trim();
	const kecamatan_pindahValue = kecamatan_pindah.value.trim();
	const kabupaten_pindahValue = kabupaten_pindah.value.trim();
	const provinsi_pindahValue = provinsi_pindah.value.trim();
	const tanggal_pindahValue = tanggal_pindah.value.trim();
	const jumlah_pengikutValue = jumlah_pengikut.value.trim();


	if (namaValue === "") {
		setErrorFor(nama, "Nama tidak boleh kosong");
	} else {
		setSuccessFor(nama);
	}
	if (tempat_lahirValue === "") {
		setErrorFor(tempat_lahir, "Tempat lahir tidak boleh kosong");
	} else {
		setSuccessFor(tempat_lahir);
	}
	if (tanggal_lahirValue === "") {
		setErrorFor(tanggal_lahir, "Tanggal lahir tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_lahir);
	}
	if (jenis_kelaminValue === "Pilih jenis kelamin...") {
		setErrorFor(jenis_kelamin, "Jenis kelamin tidak boleh kosong");
	} else {
		setSuccessFor(jenis_kelamin);
	}
	if (status_perkawinanValue === "Pilih status perkawinan...") {
		setErrorFor(status_perkawinan, "Status perkawinan tidak boleh kosong");
	} else {
		setSuccessFor(status_perkawinan);
	}
	if (agamaValue === "Pilih jenis agama...") {
		setErrorFor(agama, "Agama tidak boleh kosong");
	} else {
		setSuccessFor(agama);
	}
	if (kewarganegaraanValue === "Pilih kewarganegaraan...") {
		setErrorFor(kewarganegaraan, "Kewarganegaraan tidak boleh kosong");
	} else {
		setSuccessFor(kewarganegaraan);
	}
	if (pendidikan_terakhirValue === "Pilih pendidikan terakhir...") {
		setErrorFor(pendidikan_terakhir, "Pendidikan terakhir tidak boleh kosong");
	} else {
		setSuccessFor(pendidikan_terakhir);
	}
	if (pekerjaanValue === "") {
		setErrorFor(pekerjaan, "Pekerjaan tidak boleh kosong");
	} else {
		setSuccessFor(pekerjaan);
	}
	if (alamat_asalValue === "") {
		setErrorFor(alamat_asal, "Alamat Asal tidak boleh kosong");
	} else {
		setSuccessFor(alamat_asal);
	}
	if (no_kkValue === "") {
		setErrorFor(no_kk, "No KK tidak boleh kosong");
	} else {
		setSuccessFor(no_kk);
	}
	if (tanggal_kkValue === "") {
		setErrorFor(tanggal_kk, " Tanggal kk tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_kk);
	}
	if (alamat_pindahValue === "") {
		setErrorFor(alamat_pindah, "Alamat pindah tidak boleh kosong");
	} else {
		setSuccessFor(alamat_pindah);
	}
	if (kelurahan_pindahValue === "") {
		setErrorFor(kelurahan_pindah, "Kelurahan pindah tidak boleh kosong");
	} else {
		setSuccessFor(kelurahan_pindah);
	}
	if (kecamatan_pindahValue === "") {
		setErrorFor(kecamatan_pindah, "Kecamatan pindah tidak boleh kosong");
	} else {
		setSuccessFor(kecamatan_pindah);
	}
	if (kabupaten_pindahValue === "") {
		setErrorFor(kabupaten_pindah, "Kabupaten pindah tidak boleh kosong");
	} else {
		setSuccessFor(kabupaten_pindah);
	}
	if (provinsi_pindahValue === "") {
		setErrorFor(provinsi_pindah, "Provinsi pindah tidak boleh kosong");
	} else {
		setSuccessFor(provinsi_pindah);
	}
	if (tanggal_pindahValue === "") {
		setErrorFor(tanggal_pindah, "Tanggal pindah tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_pindah);
	}
	if (jumlah_pengikutValue === "") {
		setErrorFor(jumlah_pengikut, "Jumlah pengikut tidak boleh kosong");
	} else {
		setSuccessFor(jumlah_pengikut);
	}
}


function setErrorFor(input, message) {
	const formLine = input.parentElement;

	const small = formLine.querySelector("small");


	formLine.className = "form-line errormsg";
	small.innerText = message;

}

function setSuccessFor(input) {
	const formLine = input.parentElement;

	formLine.className = "form-line success";

}

function checkInputsWarga() {
	const nikValue = nikwarga.value.trim();
	const namaValue = namawarga.value.trim();
	const tempat_lahirValue = tempat_lahirwarga.value.trim();
	const tanggal_lahirValue = tanggal_lahirwarga.value.trim();
	const jenis_kelaminValue = jenis_kelaminwarga.value.trim();
	const golongan_darahValue = golongan_darahwarga.value.trim();
	const agamaValue = agamawarga.value.trim();
	const alamatValue = alamatwarga.value.trim();
	const rtValue = rtwarga.value.trim();
	const kelurahanValue = kelurahanwarga.value.trim();
	const kecamatanValue = kecamatanwarga.value.trim();
	const status_perkawinanValue = status_perkawinanwarga.value.trim();
	const pekerjaanValue = pekerjaanwarga.value.trim();
	const kewarganegaraanValue = kewarganegaraanwarga.value.trim();
	const no_kkValue = no_kkwarga.value.trim();
	const pendidikan_terakhirValue = pendidikan_terakhirwarga.value.trim();
	const status_hub_kelValue = status_hub_kelwarga.value.trim();
	const no_hpValue = no_hpwarga.value.trim();
	const kata_sandiValue = kata_sandiwarga.value.trim();


	if (nikValue === "") {
		setErrorForWarga(nikwarga, "Nik tidak boleh kosong");
	} else {
		setSuccesForWarga(nikwarga);
	}

	if (namaValue === "") {
		setErrorForWarga(namawarga, "Nama tidak boleh kosong");
	} else {
		setSuccesForWarga(namawarga);
	}

	if (tempat_lahirValue === "") {
		setErrorForWarga(tempat_lahirwarga, "Tempat lahir tidak boleh kosong");
	} else {
		setSuccesForWarga(tempat_lahirwarga);
	}

	if (tanggal_lahirValue === "") {
		setErrorForWarga(tanggal_lahirwarga, "Tanggal lahir tidak boleh kosong");
	} else {
		setSuccesForWarga(tanggal_lahirwarga);
	}

	if (jenis_kelaminValue === "pilih jenis kelamin ...") {
		setErrorForWarga(jenis_kelaminwarga, "Jenis Kelamin tidak boleh kosong");
	} else {
		setSuccesForWarga(jenis_kelaminwarga);
	}

	if (golongan_darahValue === "pilih golongan darah ...") {
		setErrorForWarga(golongan_darahwarga, "Golongan darah tidak boleh kosong");
	} else {
		setSuccesForWarga(golongan_darahwarga);
	}

	if (agamaValue === "pilih agama ...") {
		setErrorForWarga(agamawarga, "Agama tidak boleh kosong");
	} else {
		setSuccesForWarga(agamawarga);
	}

	if (alamatValue === "") {
		setErrorForWarga(alamatwarga, "Alamat tidak boleh kosong");
	} else {
		setSuccesForWarga(alamatwarga);
	}

	if (rtValue === "") {
		setErrorForWarga(rtwarga, "RT tidak boleh kosong");
	} else {
		setSuccesForWarga(rtwarga);
	}

	if (kelurahanValue === "") {
		setErrorForWarga(kelurahanwarga, "Kelurahan tidak boleh kosong");
	} else {
		setSuccesForWarga(kelurahanwarga);
	}

	if (kecamatanValue === "") {
		setErrorForWarga(kecamatanwarga, "kecamatan tidak boleh kosong");
	} else {
		setSuccesForWarga(kecamatanwarga);
	}

	if (status_perkawinanValue === "pilih status perkawinan ...") {
		setErrorForWarga(status_perkawinanwarga, "Status Perkawinan tidak boleh kosong");
	} else {
		setSuccesForWarga(status_perkawinanwarga);
	}

	if (pekerjaanValue === "") {
		setErrorForWarga(pekerjaanwarga, "Pekerjaan tidak boleh kosong");
	} else {
		setSuccesForWarga(pekerjaanwarga);
	}

	if (kewarganegaraanValue === "pilih kewarganegaraan ...") {
		setErrorForWarga(kewarganegaraanwarga, "Kewarganegaraan tidak boleh kosong");
	} else {
		setSuccesForWarga(kewarganegaraanwarga);
	}

	if (no_kkValue === "") {
		setErrorForWarga(no_kkwarga, "No. KK tidak boleh kosong");
	} else {
		setSuccesForWarga(no_kkwarga);
	}

	if (pendidikan_terakhirValue === "pilih pendidikan terakhir ...") {
		setErrorForWarga(pendidikan_terakhirwarga, "Pendidikan Terakhir tidak boleh kosong");
	} else {
		setSuccesForWarga(pendidikan_terakhirwarga);
	}

	if (status_hub_kelValue === "pilih status hubungan keluarga ...") {
		setErrorForWarga(status_hub_kelwarga, "Status hubungan keluarga tidak boleh kosong");
	} else {
		setSuccesForWarga(status_hub_kelwarga);
	}

	if (no_hpValue === "") {
		setErrorForWarga(no_hpwarga, "No. HP tidak boleh kosong");
	} else {
		setSuccesForWarga(no_hpwarga);
	}

	if (kata_sandiValue === "") {
		setErrorForWarga(kata_sandiwarga, "Kata Sandi tidak boleh kosong");
	} else {
		setSuccesForWarga(kata_sandiwarga);
	}

}

function setErrorForWarga(input, message) {
	const formGroup = input.parentElement; //form-group
	const small = formGroup.querySelector("small");

	//add error message inside small
	small.innerText = message;

	//add error class
	formGroup.className = "form-group error1";
}

function setSuccesForWarga(input) {
	const formGroup = input.parentElement;
	formGroup.className = "form-group success";
}
