const formtambah = document.getElementById("formTambah");
const formubah = document.getElementById("formUbah");
const formtambahwarga = document.getElementById("formwarga");
const formubahwarga = document.getElementById("ubahwarga");
const formtambahrt = document.getElementById("formrt");
const formubahrt = document.getElementById("ubahrt");

const nik = document.getElementById("nik");
const nama = document.getElementById("nama");
const tempat_lahir = document.getElementById("tempat_lahir");
const tanggal_lahir = document.getElementById("tanggal_lahir");
const jenis_kelamin = document.getElementById("jenis_kelamin");
const golongan_darah = document.getElementById("golongan_darah");
const agama = document.getElementById("agama");
const alamat = document.getElementById("alamat");
const rt = document.getElementById("rt");
const kelurahan = document.getElementById("kelurahan");
const kecamatan = document.getElementById("kecamatan");
const status_perkawinan = document.getElementById("status_perkawinan");
const pekerjaan = document.getElementById("pekerjaan");
const kewarganegaraan = document.getElementById("kewarganegaraan");
const no_kk = document.getElementById("no_kk");
const pendidikan_terakhir = document.getElementById("pendidikan_terakhir");
const status_hub_kel = document.getElementById("status_hub_kel");
const no_hp = document.getElementById("no_hp");
const kata_sandi = document.getElementById("kata_sandi");
const status_kepegawaian = document.getElementById("status_kepegawaian");
const btn_simpan = document.getElementById("btn_simpan");

const formsuket001 = document.getElementById("suket001");
const formsuket002 = document.getElementById("suket002");
const formsuket003 = document.getElementById("suket003");
const formsuket004 = document.getElementById("suket004");
const formsuket005 = document.getElementById("suket005");
const formsuket006 = document.getElementById("suket006");
const formsuket007 = document.getElementById("suket007");
const formsuket008 = document.getElementById("suket008");
const formsuket009 = document.getElementById("suket009");
const formsuket010 = document.getElementById("suket010");
const formsuket011 = document.getElementById("suket011");
const formsuket012 = document.getElementById("suket012");
const formsuket013 = document.getElementById("suket013");
const formsuket014 = document.getElementById("suket014");

const nomor_surat_admin = document.getElementById("nomor_surat_admin");

const formSuratMasuk = document.getElementById("formSuratMasuk");
const formSuratKeluar = document.getElementById("formSuratKeluar");
const ubahSuratKeluar = document.getElementById("ubahSuratKeluar");
const ubahSuratMasuk = document.getElementById("ubahSuratMasuk");
const nomor_surat = document.getElementById("nomor_surat");
const tanggal = document.getElementById("tanggal");
const pengirim = document.getElementById("pengirim");
const perihal = document.getElementById("perihal");
const isi = document.getElementById("isi");
const tujuan = document.getElementById("tujuan");



if (formtambah != null) {
	formtambah.addEventListener("submit", (e) => {
		if (checkInputs() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
				
		
	});
} else if (formubah != null) {
	formubah.addEventListener("submit", (e) => {
		if (checkInputs() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		// e.target.submit();
	});
} else if (formtambahwarga != null) {
	formtambahwarga.addEventListener("submit", (e) => {
		if (checkInputs1() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		// e.target.submit();
	});

} else if (formubahwarga != null){
	formubahwarga.addEventListener("submit", (e) => {
		if (checkInputs2() == true) {
			e.target.submit();
			
			
		} else 
		e.preventDefault();
		// e.target.submit();
	});
} else if(formtambahrt != null) {
	formtambahrt.addEventListener("submit", (e) => {
		if (checkInputs2() == true) {
			e.target.submit();
			
			
		} else 
		e.preventDefault();
	});
} else if (formubahrt != null) {
	formubahrt.addEventListener("submit", (e) => {
		if (checkInputs3() == true) {
			e.target.submit();
			
			
		} else 
		e.preventDefault();
	});
}else if (formsuket001 != null) {
	formsuket001.addEventListener("submit", (e) => {
		if (checkInput() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
				
		
	});
} else if (formsuket002 != null) {
	formsuket002.addEventListener("submit", (e) => {
		if (checkInput() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} else if (formsuket003 != null) {
	formsuket003.addEventListener("submit", (e) => {
		if (checkInput() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} else if (formsuket004 != null) {
	formsuket004.addEventListener("submit", (e) => {
		if (checkInput() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} else if (formsuket005 != null) {
	formsuket005.addEventListener("submit", (e) => {
		if (checkInput() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} else if (formsuket006 != null) {
	formsuket006.addEventListener("submit", (e) => {
		if (checkInput() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} else if (formsuket007 != null) {
	formsuket007.addEventListener("submit", (e) => {
		if (checkInput() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} else if (formsuket008 != null) {
	formsuket008.addEventListener("submit", (e) => {
		if (checkInput() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} else if (formsuket009 != null) {
	formsuket009.addEventListener("submit", (e) => {
		if (checkInput() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} else if (formsuket010 != null) {
	formsuket010.addEventListener("submit", (e) => {
		if (checkInput() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} else if (formsuket011 != null) {
	formsuket011.addEventListener("submit", (e) => {
		if (checkInput() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} else if (formsuket012 != null) {
	formsuket012.addEventListener("submit", (e) => {
		if (checkInput() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} else if (formsuket013 != null) {
	formsuket013.addEventListener("submit", (e) => {
		if (checkInput() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} else if (formsuket014 != null) {
	formsuket013.addEventListener("submit", (e) => {
		if (checkInput() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} else if (formSuratMasuk != null) {
	formSuratMasuk.addEventListener("submit", (e) => {
		if (formSurat() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} else if (formSuratKeluar != null) {
	formSuratKeluar.addEventListener("submit", (e) => {
		if (formSurat1() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} else if (ubahSuratKeluar != null) {
	ubahSuratKeluar.addEventListener("submit", (e) => {
		if (formSurat1() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} else if (ubahSuratMasuk != null) {
	ubahSuratMasuk.addEventListener("submit", (e) => {
		if (formSurat() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
}

function formSurat() {
	
	const nomor_suratValue = nomor_surat.value.trim();
	const tanggalValue = tanggal.value.trim();
	const pengirimValue = pengirim.value.trim();
	const perihalValue = perihal.value.trim();
	const isiValue = isi.value.trim();
	
	if (nomor_suratValue === "") {
		setErrorFor(nomor_surat, "Nomor Surat tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(nomor_surat);
	}

	if (tanggalValue === "") {
		setErrorFor(tanggal, "Tanggal surat tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(tanggal);
	}

	if (pengirimValue === "") {
		setErrorFor(pengirim, "Pengirim surat tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(pengirim);
	}

	if (perihalValue === "") {
		setErrorFor(perihal, "Perihal surat tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(perihal);
	}

	if (isiValue === "") {
		setErrorFor(isi, "Isi surat tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(isi);
	}

	return (true);
}

function formSurat1() {
	
	const nomor_suratValue = nomor_surat.value.trim();
	const tanggalValue = tanggal.value.trim();
	const tujuanValue = tujuan.value.trim();
	const perihalValue = perihal.value.trim();
	const isiValue = isi.value.trim();
	
	if (nomor_suratValue === "") {
		setErrorFor(nomor_surat, "Nomor Surat tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(nomor_surat);
	}

	if (tanggalValue === "") {
		setErrorFor(tanggal, "Tanggal surat tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(tanggal);
	}

	if (tujuanValue === "") {
		setErrorFor(tujuan, "Tujuan surat tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(tujuan);
	}

	if (perihalValue === "") {
		setErrorFor(perihal, "Perihal surat tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(perihal);
	}

	if (isiValue === "") {
		setErrorFor(isi, "Isi surat tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(isi);
	}

	return (true);
}



function checkInput() {
	const nomor_surat_adminValue = nomor_surat_rt.value.trim();
	
	if (nomor_surat_adminValue === "") {
		setErrorFor(nomor_surat_admin, "Nomor Surat RT tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(nomor_surat_admin);
	}

	return (true);
}


function checkInputs() {
	const nikValue = nik.value.trim();
	const namaValue = nama.value.trim();
	const tempat_lahirValue = tempat_lahir.value.trim();
	const tanggal_lahirValue = tanggal_lahir.value.trim();
	const jenis_kelaminValue = jenis_kelamin.value.trim();
	const golongan_darahValue = golongan_darah.value.trim();
	const agamaValue = agama.value.trim();
	const alamatValue = alamat.value.trim();
	const rtValue = rt.value.trim();
	const kelurahanValue = kelurahan.value.trim();
	const kecamatanValue = kecamatan.value.trim();
	const status_perkawinanValue = status_perkawinan.value.trim();
	const pekerjaanValue = pekerjaan.value.trim();
	const kewarganegaraanValue = kewarganegaraan.value.trim();
	const no_kkValue = no_kk.value.trim();
	const pendidikan_terakhirValue = pendidikan_terakhir.value.trim();
	const status_hub_kelValue = status_hub_kel.value.trim();
	const no_hpValue = no_hp.value.trim();
	const kata_sandiValue = kata_sandi.value.trim();
	const status_kepegawaianValue = status_kepegawaian.value.trim();

	
	
	if (nikValue === "") {
		setErrorFor(nik, "Nik tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(nik);
	}

	if (namaValue === "") {
		setErrorFor(nama, "Nama tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(nama);
	}

	if (tempat_lahirValue === "") {
		setErrorFor(tempat_lahir, "Tempat lahir tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(tempat_lahir);
	}

	if (tanggal_lahirValue === "") {
		setErrorFor(tanggal_lahir, "Tanggal lahir tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(tanggal_lahir);
	}

	if (jenis_kelaminValue === "pilih jenis kelamin ...") {
		setErrorFor(jenis_kelamin, "Jenis Kelamin tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(jenis_kelamin);
	}

	if (golongan_darahValue === "pilih golongan darah ...") {
		setErrorFor(golongan_darah, "Golongan darah tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(golongan_darah);
	}

	if (agamaValue === "pilih agama ...") {
		setErrorFor(agama, "Agama tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(agama);
	}

	if (alamatValue === "") {
		setErrorFor(alamat, "Alamat tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(alamat);
	}

	if (rtValue === "") {
		setErrorFor(rt, "RT tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(rt);
	}

	if (kelurahanValue === "") {
		setErrorFor(kelurahan, "Kelurahan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(kelurahan);
	}

	if (kecamatanValue === "") {
		setErrorFor(kecamatan, "kecamatan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(kecamatan);
	}

	if (status_perkawinanValue === "pilih status perkawinan ...") {
		setErrorFor(status_perkawinan, "Status Perkawinan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(status_perkawinan);
	}

	if (pekerjaanValue === "") {
		setErrorFor(pekerjaan, "Pekerjaan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(pekerjaan);
	}

	if (kewarganegaraanValue === "pilih kewarganegaraan ...") {
		setErrorFor(kewarganegaraan, "Kewarganegaraan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(kewarganegaraan);
	}

	if (no_kkValue === "") {
		setErrorFor(no_kk, "No. KK tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_kk);
	}

	if (pendidikan_terakhirValue === "pilih pendidikan terakhir ...") {
		setErrorFor(pendidikan_terakhir, "Pendidikan Terakhir tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(pendidikan_terakhir);
	}

	if (status_hub_kelValue === "pilih status hubungan keluarga ...") {
		setErrorFor(status_hub_kel, "Status hubungan keluarga tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(status_hub_kel);
	}

	if (no_hpValue === "") {
		setErrorFor(no_hp, "No. HP tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_hp);
	}

	if (kata_sandiValue === "") {
		setErrorFor(kata_sandi, "Kata Sandi tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(kata_sandi);
	}

	if (status_kepegawaianValue === "") {
		setErrorFor(status_kepegawaian, "Status Kepegawaian tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(status_kepegawaian);
	}

	return (true);
}


function checkInputs1() {
	const nikValue = nik.value.trim();
	const namaValue = nama.value.trim();
	const tempat_lahirValue = tempat_lahir.value.trim();
	const tanggal_lahirValue = tanggal_lahir.value.trim();
	const jenis_kelaminValue = jenis_kelamin.value.trim();
	const golongan_darahValue = golongan_darah.value.trim();
	const agamaValue = agama.value.trim();
	const alamatValue = alamat.value.trim();
	const rtValue = rt.value.trim();
	const kelurahanValue = kelurahan.value.trim();
	const kecamatanValue = kecamatan.value.trim();
	const status_perkawinanValue = status_perkawinan.value.trim();
	const pekerjaanValue = pekerjaan.value.trim();
	const kewarganegaraanValue = kewarganegaraan.value.trim();
	const no_kkValue = no_kk.value.trim();
	const pendidikan_terakhirValue = pendidikan_terakhir.value.trim();
	const status_hub_kelValue = status_hub_kel.value.trim();
	const no_hpValue = no_hp.value.trim();
	const kata_sandiValue = kata_sandi.value.trim();


	if (nikValue === "") {
		setErrorFor(nik, "Nik tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(nik);
	}

	if (namaValue === "") {
		setErrorFor(nama, "Nama tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(nama);
	}

	if (tempat_lahirValue === "") {
		setErrorFor(tempat_lahir, "Tempat lahir tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(tempat_lahir);
	}

	if (tanggal_lahirValue === "") {
		setErrorFor(tanggal_lahir, "Tanggal lahir tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(tanggal_lahir);
	}

	if (jenis_kelaminValue === "pilih jenis kelamin ...") {
		setErrorFor(jenis_kelamin, "Jenis Kelamin tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(jenis_kelamin);
	}

	if (golongan_darahValue === "pilih golongan darah ...") {
		setErrorFor(golongan_darah, "Golongan darah tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(golongan_darah);
	}

	if (agamaValue === "pilih agama ...") {
		setErrorFor(agama, "Agama tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(agama);
	}

	if (alamatValue === "") {
		setErrorFor(alamat, "Alamat tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(alamat);
	}

	if (rtValue === "") {
		setErrorFor(rt, "RT tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(rt);
	}

	if (kelurahanValue === "") {
		setErrorFor(kelurahan, "Kelurahan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(kelurahan);
	}

	if (kecamatanValue === "") {
		setErrorFor(kecamatan, "kecamatan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(kecamatan);
	}

	if (status_perkawinanValue === "pilih status perkawinan ...") {
		setErrorFor(status_perkawinan, "Status Perkawinan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(status_perkawinan);
	}

	if (pekerjaanValue === "") {
		setErrorFor(pekerjaan, "Pekerjaan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(pekerjaan);
	}

	if (kewarganegaraanValue === "pilih kewarganegaraan ...") {
		setErrorFor(kewarganegaraan, "Kewarganegaraan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(kewarganegaraan);
	}

	if (no_kkValue === "") {
		setErrorFor(no_kk, "No. KK tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_kk);
	}

	if (pendidikan_terakhirValue === "pilih pendidikan terakhir ...") {
		setErrorFor(pendidikan_terakhir, "Pendidikan Terakhir tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(pendidikan_terakhir);
	}

	if (status_hub_kelValue === "pilih status hubungan keluarga ...") {
		setErrorFor(status_hub_kel, "Status hubungan keluarga tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(status_hub_kel);
	}

	if (no_hpValue === "") {
		setErrorFor(no_hp, "No. HP tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_hp);
	}

	if (kata_sandiValue === "") {
		setErrorFor(kata_sandi, "Kata Sandi tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(kata_sandi);
	}

	return (true);
}

function checkInputs2() {
	const nikValue = nik.value.trim();
	const namaValue = nama.value.trim();
	const tempat_lahirValue = tempat_lahir.value.trim();
	const tanggal_lahirValue = tanggal_lahir.value.trim();
	const jenis_kelaminValue = jenis_kelamin.value.trim();
	const golongan_darahValue = golongan_darah.value.trim();
	const agamaValue = agama.value.trim();
	const alamatValue = alamat.value.trim();
	const rtValue = rt.value.trim();
	const kelurahanValue = kelurahan.value.trim();
	const kecamatanValue = kecamatan.value.trim();
	const status_perkawinanValue = status_perkawinan.value.trim();
	const pekerjaanValue = pekerjaan.value.trim();
	const kewarganegaraanValue = kewarganegaraan.value.trim();
	const no_kkValue = no_kk.value.trim();
	const pendidikan_terakhirValue = pendidikan_terakhir.value.trim();
	const status_hub_kelValue = status_hub_kel.value.trim();
	const no_hpValue = no_hp.value.trim();
	const kata_sandiValue = kata_sandi.value.trim();


	if (nikValue === "") {
		setErrorFor(nik, "Nik tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(nik);
	}

	if (namaValue === "") {
		setErrorFor(nama, "Nama tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(nama);
	}

	if (tempat_lahirValue === "") {
		setErrorFor(tempat_lahir, "Tempat lahir tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(tempat_lahir);
	}

	if (tanggal_lahirValue === "") {
		setErrorFor(tanggal_lahir, "Tanggal lahir tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(tanggal_lahir);
	}

	if (jenis_kelaminValue === "pilih jenis kelamin ...") {
		setErrorFor(jenis_kelamin, "Jenis Kelamin tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(jenis_kelamin);
	}

	if (golongan_darahValue === "pilih golongan darah ...") {
		setErrorFor(golongan_darah, "Golongan darah tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(golongan_darah);
	}

	if (agamaValue === "pilih agama ...") {
		setErrorFor(agama, "Agama tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(agama);
	}

	if (alamatValue === "") {
		setErrorFor(alamat, "Alamat tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(alamat);
	}

	if (rtValue === "") {
		setErrorFor(rt, "RT tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(rt);
	}

	if (kelurahanValue === "") {
		setErrorFor(kelurahan, "Kelurahan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(kelurahan);
	}

	if (kecamatanValue === "") {
		setErrorFor(kecamatan, "kecamatan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(kecamatan);
	}

	if (status_perkawinanValue === "pilih status perkawinan ...") {
		setErrorFor(status_perkawinan, "Status Perkawinan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(status_perkawinan);
	}

	if (pekerjaanValue === "") {
		setErrorFor(pekerjaan, "Pekerjaan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(pekerjaan);
	}

	if (kewarganegaraanValue === "pilih kewarganegaraan ...") {
		setErrorFor(kewarganegaraan, "Kewarganegaraan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(kewarganegaraan);
	}

	if (no_kkValue === "") {
		setErrorFor(no_kk, "No. KK tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_kk);
	}

	if (pendidikan_terakhirValue === "pilih pendidikan terakhir ...") {
		setErrorFor(pendidikan_terakhir, "Pendidikan Terakhir tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(pendidikan_terakhir);
	}

	if (status_hub_kelValue === "pilih status hubungan keluarga ...") {
		setErrorFor(status_hub_kel, "Status hubungan keluarga tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(status_hub_kel);
	}

	if (no_hpValue === "") {
		setErrorFor(no_hp, "No. HP tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_hp);
	}

	if (kata_sandiValue === "") {
		setErrorFor(kata_sandi, "Kata Sandi tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(kata_sandi);
	}

	return (true);
}

function checkInputs3() {
	const nikValue = nik.value.trim();
	const namaValue = nama.value.trim();
	const tempat_lahirValue = tempat_lahir.value.trim();
	const tanggal_lahirValue = tanggal_lahir.value.trim();
	const jenis_kelaminValue = jenis_kelamin.value.trim();
	const golongan_darahValue = golongan_darah.value.trim();
	const agamaValue = agama.value.trim();
	const alamatValue = alamat.value.trim();
	const rtValue = rt.value.trim();
	const kelurahanValue = kelurahan.value.trim();
	const kecamatanValue = kecamatan.value.trim();
	const status_perkawinanValue = status_perkawinan.value.trim();
	const pekerjaanValue = pekerjaan.value.trim();
	const kewarganegaraanValue = kewarganegaraan.value.trim();
	const no_kkValue = no_kk.value.trim();
	const pendidikan_terakhirValue = pendidikan_terakhir.value.trim();
	const status_hub_kelValue = status_hub_kel.value.trim();
	const no_hpValue = no_hp.value.trim();
	const status_kepegawaianValue = status_kepegawaian.value.trim();



	if (nikValue === "") {
		setErrorFor(nik, "Nik tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(nik);
	}

	if (namaValue === "") {
		setErrorFor(nama, "Nama tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(nama);
	}

	if (tempat_lahirValue === "") {
		setErrorFor(tempat_lahir, "Tempat lahir tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(tempat_lahir);
	}

	if (tanggal_lahirValue === "") {
		setErrorFor(tanggal_lahir, "Tanggal lahir tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(tanggal_lahir);
	}

	if (jenis_kelaminValue === "pilih jenis kelamin ...") {
		setErrorFor(jenis_kelamin, "Jenis Kelamin tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(jenis_kelamin);
	}

	if (golongan_darahValue === "pilih golongan darah ...") {
		setErrorFor(golongan_darah, "Golongan darah tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(golongan_darah);
	}

	if (agamaValue === "pilih agama ...") {
		setErrorFor(agama, "Agama tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(agama);
	}

	if (alamatValue === "") {
		setErrorFor(alamat, "Alamat tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(alamat);
	}

	if (rtValue === "") {
		setErrorFor(rt, "RT tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(rt);
	}

	if (kelurahanValue === "") {
		setErrorFor(kelurahan, "Kelurahan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(kelurahan);
	}

	if (kecamatanValue === "") {
		setErrorFor(kecamatan, "kecamatan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(kecamatan);
	}

	if (status_perkawinanValue === "pilih status perkawinan ...") {
		setErrorFor(status_perkawinan, "Status Perkawinan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(status_perkawinan);
	}

	if (pekerjaanValue === "") {
		setErrorFor(pekerjaan, "Pekerjaan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(pekerjaan);
	}

	if (kewarganegaraanValue === "pilih kewarganegaraan ...") {
		setErrorFor(kewarganegaraan, "Kewarganegaraan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(kewarganegaraan);
	}

	if (no_kkValue === "") {
		setErrorFor(no_kk, "No. KK tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_kk);
	}

	if (pendidikan_terakhirValue === "pilih pendidikan terakhir ...") {
		setErrorFor(pendidikan_terakhir, "Pendidikan Terakhir tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(pendidikan_terakhir);
	}

	if (status_hub_kelValue === "pilih status hubungan keluarga ...") {
		setErrorFor(status_hub_kel, "Status hubungan keluarga tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(status_hub_kel);
	}

	if (no_hpValue === "") {
		setErrorFor(no_hp, "No. HP tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_hp);
	}

	if (status_kepegawaianValue === "") {
		setErrorFor(status_kepegawaian, "Status Kepegawaian tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(status_kepegawaian);
	}
	

	return (true);
}


function setErrorFor(input, message) {
	const formGroup = input.parentElement; //form-group
	const small = formGroup.querySelector("small");

	//add error message inside small
	small.innerText = message;

	//add error class
	formGroup.className = "form-group error1";
}

function setSuccessFor(input) {
	const formGroup = input.parentElement;
	formGroup.className = "form-group success";

	
}


