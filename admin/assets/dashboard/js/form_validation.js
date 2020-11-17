
const formsuket1 = document.getElementById("suket1");
const formsuket2 = document.getElementById("suket2");
const formsuket3 = document.getElementById("suket3");
const formsuket4 = document.getElementById("suket4");
const formsuket5 = document.getElementById("suket5");
const formsuket6 = document.getElementById("suket6");
const formsuket7 = document.getElementById("suket7");
const formsuket8 = document.getElementById("suket8");
const formsuket9 = document.getElementById("suket9");
const formsuket10 = document.getElementById("suket10");
const formsuket11 = document.getElementById("suket11");
const formsuket12 = document.getElementById("suket12");
const formsuket13 = document.getElementById("suket13");
const formsuket14 = document.getElementById("suket14");

const no_registrasi = document.getElementById("no_registrasi");
const no_kelurahan = document.getElementById("no_kelurahan");
const no_kecamatan = document.getElementById("no_kecamatan");
const no_bulan = document.getElementById("no_bulan");
const no_tahun = document.getElementById("no_tahun");
const no_keterangan = document.getElementById("no_keterangan");
const no_tupoksi = document.getElementById("no_tupoksi");

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

const formalasan = document.getElementById("formalasan");
const keterangan = document.getElementById("keterangan");


 if (formSuratMasuk != null) {
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
else if (formsuket1 != null) {
	formsuket1.addEventListener("submit", (e) => {
		if (ceksuket() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
}
else if (formsuket2 != null) {
	formsuket2.addEventListener("submit", (e) => {
		if (ceksuket1() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
}
else if (formsuket3 != null) {
	formsuket3.addEventListener("submit", (e) => {
		if (ceksuket1() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
}
else if (formsuket4 != null) {
	formsuket4.addEventListener("submit", (e) => {
		if (ceksuket1() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
}
else if (formsuket5 != null) {
	formsuket5.addEventListener("submit", (e) => {
		if (ceksuket2() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
}
else if (formsuket6 != null) {
	formsuket6.addEventListener("submit", (e) => {
		if (ceksuket1() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
}
else if (formsuket7 != null) {
	formsuket7.addEventListener("submit", (e) => {
		if (ceksuket3() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
}
else if (formsuket8 != null) {
	formsuket8.addEventListener("submit", (e) => {
		if (ceksuket4() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
}
else if (formsuket9 != null) {
	formsuket9.addEventListener("submit", (e) => {
		if (ceksuket3() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
}
else if (formsuket10 != null) {
	formsuket10.addEventListener("submit", (e) => {
		if (ceksuket3() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
}
else if (formsuket11 != null) {
	formsuket11.addEventListener("submit", (e) => {
		if (ceksuket3() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
}
else if (formsuket12 != null) {
	formsuket12.addEventListener("submit", (e) => {
		if (ceksuket1() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
}
else if (formsuket13 != null) {
	formsuket13.addEventListener("submit", (e) => {
		if (ceksuket1() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
}
else if (formsuket14 != null) {
	formsuket14.addEventListener("submit", (e) => {
		if (ceksuket5() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} else if (formalasan != null) {
	formalasan.addEventListener("submit", (e) => {
		if (cekalasan() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
}

function cekalasan() {
	const keteranganValue = keterangan.value.trim();

	if (keteranganValue === "") {
		setErrorFor2(keterangan, "Isikan alasan");
		return(false);
	} else {
		setSuccessFor2(keterangan);
	}
	return (true);
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



function ceksuket() {
	const no_registrasiValue = no_registrasi.value.trim();
	const no_kelurahanValue = no_kelurahan.value.trim();
	const no_kecamatanValue = no_kecamatan.value.trim();
	const no_bulanValue = no_bulan.value.trim();
	const no_tahunValue = no_tahun.value.trim();
	const no_keteranganValue = no_keterangan.value.trim();
	
	if (no_registrasiValue === "") {
		setErrorFor(no_registrasi, "Isi No Registrasi");
		return(false);
	} else {
		setSuccessFor(no_registrasi);
	}
	if (no_kelurahanValue === "") {
		setErrorFor(no_kelurahan, "Nomor kelurahan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_kelurahan);
	}
	if (no_kecamatanValue === "") {
		setErrorFor(no_kecamatan, "Nomor kecamatan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_kecamatan);
	}
	if (no_bulanValue === "") {
		setErrorFor(no_bulan, "Nomor bulan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_bulan);
	}
	if (no_tahunValue === "") {
		setErrorFor(no_tahun, "Nomor tahun tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_tahun);
	}
	if (no_keteranganValue === "") {
		setErrorFor(no_keterangan, "Nomor keterangan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_keterangan);
	}
	return (true);
}

function ceksuket1() {
	const no_registrasiValue = no_registrasi.value.trim();
	const no_kelurahanValue = no_kelurahan.value.trim();
	const no_kecamatanValue = no_kecamatan.value.trim();
	const no_bulanValue = no_bulan.value.trim();
	const no_tahunValue = no_tahun.value.trim();

	
	if (no_registrasiValue === "") {
		setErrorFor(no_registrasi, "Isi No Registrasi");
		return(false);
	} else {
		setSuccessFor(no_registrasi);
	}
	if (no_kelurahanValue === "") {
		setErrorFor(no_kelurahan, "Nomor kelurahan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_kelurahan);
	}
	if (no_kecamatanValue === "") {
		setErrorFor(no_kecamatan, "Nomor kecamatan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_kecamatan);
	}
	if (no_bulanValue === "") {
		setErrorFor(no_bulan, "Nomor bulan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_bulan);
	}
	if (no_tahunValue === "") {
		setErrorFor(no_tahun, "Nomor tahun tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_tahun);
	}
	return (true);
}

function ceksuket2() {
	const no_tupoksiValue = no_tupoksi.value.trim();
	const no_registrasiValue = no_registrasi.value.trim();
	const no_kelurahanValue = no_kelurahan.value.trim();
	const no_kecamatanValue = no_kecamatan.value.trim();
	const no_bulanValue = no_bulan.value.trim();
	const no_tahunValue = no_tahun.value.trim();

	if (no_tupoksiValue === "") {
		setErrorFor(no_tupoksi, "Nomor registrasi tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_tupoksi);
	}
	if (no_registrasiValue === "") {
		setErrorFor(no_registrasi, "Isi No Registrasi");
		return(false);
	} else {
		setSuccessFor(no_registrasi);
	}
	if (no_kelurahanValue === "") {
		setErrorFor(no_kelurahan, "Nomor kelurahan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_kelurahan);
	}
	if (no_kecamatanValue === "") {
		setErrorFor(no_kecamatan, "Nomor kecamatan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_kecamatan);
	}
	if (no_bulanValue === "") {
		setErrorFor(no_bulan, "Nomor bulan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_bulan);
	}
	if (no_tahunValue === "") {
		setErrorFor(no_tahun, "Nomor tahun tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_tahun);
	}
	return (true);
}

function ceksuket3() {
	const no_tupoksiValue = no_tupoksi.value.trim();
	const no_registrasiValue = no_registrasi.value.trim();
	const no_kelurahanValue = no_kelurahan.value.trim();
	const no_bulanValue = no_bulan.value.trim();
	const no_tahunValue = no_tahun.value.trim();

	if (no_tupoksiValue === "") {
		setErrorFor(no_tupoksi, "Nomor registrasi tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_tupoksi);
	}
	if (no_registrasiValue === "") {
		setErrorFor(no_registrasi, "Isi No Registrasi");
		return(false);
	} else {
		setSuccessFor(no_registrasi);
	}
	if (no_kelurahanValue === "") {
		setErrorFor(no_kelurahan, "Nomor kelurahan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_kelurahan);
	}
	if (no_bulanValue === "") {
		setErrorFor(no_bulan, "Nomor bulan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_bulan);
	}
	if (no_tahunValue === "") {
		setErrorFor(no_tahun, "Nomor tahun tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_tahun);
	}
	return (true);
}

function ceksuket4() {
	const no_registrasiValue = no_registrasi.value.trim();
	const no_kelurahanValue = no_kelurahan.value.trim();
	const no_bulanValue = no_bulan.value.trim();
	const no_tahunValue = no_tahun.value.trim();

	
	if (no_registrasiValue === "") {
		setErrorFor(no_registrasi, "Isi No Registrasi");
		return(false);
	} else {
		setSuccessFor(no_registrasi);
	}
	if (no_kelurahanValue === "") {
		setErrorFor(no_kelurahan, "Nomor kelurahan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_kelurahan);
	}
	if (no_bulanValue === "") {
		setErrorFor(no_bulan, "Nomor bulan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_bulan);
	}
	if (no_tahunValue === "") {
		setErrorFor(no_tahun, "Nomor tahun tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_tahun);
	}
	return (true);
}

function ceksuket5() {
	const no_tupoksiValue = no_tupoksi.value.trim();
	const no_registrasiValue = no_registrasi.value.trim();
	const no_kelurahanValue = no_kelurahan.value.trim();
	const no_kecamatanValue = no_kecamatan.value.trim();
	const no_bulanValue = no_bulan.value.trim();
	const no_tahunValue = no_tahun.value.trim();
	const no_keteranganValue = no_keterangan.value.trim();

	if (no_tupoksiValue === "") {
		setErrorFor(no_tupoksi, "Nomor registrasi tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_tupoksi);
	}
	if (no_registrasiValue === "") {
		setErrorFor(no_registrasi, "Isi No Registrasi");
		return(false);
	} else {
		setSuccessFor(no_registrasi);
	}
	if (no_kelurahanValue === "") {
		setErrorFor(no_kelurahan, "Nomor kelurahan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_kelurahan);
	}
	if (no_kecamatanValue === "") {
		setErrorFor(no_kecamatan, "Nomor kelurahan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_kecamatan);
	}
	if (no_bulanValue === "") {
		setErrorFor(no_bulan, "Nomor bulan tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_bulan);
	}
	if (no_keteranganValue === "") {
		setErrorFor(no_keterangan, "Nomor tahun tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_keterangan);
	}
	if (no_tahunValue === "") {
		setErrorFor(no_tahun, "Nomor tahun tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(no_tahun);
	}
	
	return (true);
}




function setErrorFor2(input, message) {
	const formGroup = input.parentElement; //form-group
	const small = formGroup.querySelector("small");

	//add error message inside small
	small.innerText = message;

	//add error class
	formGroup.className = "form-group-surat error2";
}

function setSuccessFor(input) {
	const formGroup = input.parentElement;
	formGroup.className = "form-group-surat success2";

	
}

