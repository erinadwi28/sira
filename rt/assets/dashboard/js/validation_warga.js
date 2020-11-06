// const formubah = document.getElementById("formUbah");
// const nikwarga = document.getElementById("nik");
// const namawarga = document.getElementById("nama");
// const tempat_lahirwarga = document.getElementById("tempat_lahir");
// const tanggal_lahirwarga = document.getElementById("tanggal_lahir");
// const jenis_kelaminwarga = document.getElementById("jenis_kelamin");
// const golongan_darahwarga = document.getElementById("golongan_darah");
// const agamawarga = document.getElementById("agama");
// const alamatwarga = document.getElementById("alamat");
// const rtwarga = document.getElementById("rt");
// const kelurahanwarga = document.getElementById("kelurahan");
// const kecamatanwarga = document.getElementById("kecamatan");
// const status_perkawinanwarga = document.getElementById("status_perkawinan");
// const pekerjaanwarga = document.getElementById("pekerjaan");
// const kewarganegaraanwarga = document.getElementById("kewarganegaraan");
// const no_kkwarga = document.getElementById("no_kk");
// const pendidikan_terakhirwarga = document.getElementById("pendidikan_terakhir");
// const status_hub_kelwarga = document.getElementById("status_hub_kel");
// const no_hpwarga = document.getElementById("no_hp");
// const kata_sandiwarga = document.getElementById("kata_sandi");
// const status_kepegawaianwarga = document.getElementById("status_kepegawaian");



// formubah.addEventListener("submit", (e) => {
// 	e.preventDefault();

// 	checkInputs();
// });


// function checkInputs() {
// 	const nikValue = nikwarga.value.trim();
// 	const namaValue = namawarga.value.trim();
// 	const tempat_lahirValue = tempat_lahirwarga.value.trim();
// 	const tanggal_lahirValue = tanggal_lahirwarga.value.trim();
// 	const jenis_kelaminValue = jenis_kelaminwarga.value.trim();
// 	const golongan_darahValue = golongan_darahwarga.value.trim();
// 	const agamaValue = agamawarga.value.trim();
// 	const alamatValue = alamatwarga.value.trim();
// 	const rtValue = rtwarga.value.trim();
// 	const kelurahanValue = kelurahanwarga.value.trim();
// 	const kecamatanValue = kecamatanwarga.value.trim();
// 	const status_perkawinanValue = status_perkawinanwarga.value.trim();
// 	const pekerjaanValue = pekerjaanwarga.value.trim();
// 	const kewarganegaraanValue = kewarganegaraanwarga.value.trim();
// 	const no_kkValue = no_kkwarga.value.trim();
// 	const pendidikan_terakhirValue = pendidikan_terakhirwarga.value.trim();
// 	const status_hub_kelValue = status_hub_kelwarga.value.trim();
// 	const no_hpValue = no_hpwarga.value.trim();
// 	const kata_sandiValue = kata_sandiwarga.value.trim();
// 	const status_kepegawaianValue = status_kepegawaianwarga.value.trim();


// 	if (nikValue === "") {
// 		setErrorFor(nikwarga, "Nik tidak boleh kosong");
// 	} else {
// 		setSuccessFor(nikwarga);
// 	}

// 	if (namaValue === "") {
// 		setErrorFor(namawarga, "Nama tidak boleh kosong");
// 	} else {
// 		setSuccessFor(namawarga);
// 	}

// 	if (tempat_lahirValue === "") {
// 		setErrorFor(tempat_lahirwarga, "Tempat lahir tidak boleh kosong");
// 	} else {
// 		setSuccessFor(tempat_lahirwarga);
// 	}

// 	if (tanggal_lahirValue === "") {
// 		setErrorFor(tanggal_lahirwarga, "Tanggal lahir tidak boleh kosong");
// 	} else {
// 		setSuccessFor(tanggal_lahirwarga);
// 	}

// 	if (jenis_kelaminValue === "pilih jenis kelamin ...") {
// 		setErrorFor(jenis_kelaminwarga, "Jenis Kelamin tidak boleh kosong");
// 	} else {
// 		setSuccessFor(jenis_kelaminwarga);
// 	}

// 	if (golongan_darahValue === "pilih golongan darah ...") {
// 		setErrorFor(golongan_darahwarga, "Golongan darah tidak boleh kosong");
// 	} else {
// 		setSuccessFor(golongan_darahwarga);
// 	}

// 	if (agamaValue === "pilih agama ...") {
// 		setErrorFor(agamawarga, "Agama tidak boleh kosong");
// 	} else {
// 		setSuccessFor(agamawarga);
// 	}

// 	if (alamatValue === "") {
// 		setErrorFor(alamatwarga, "Alamat tidak boleh kosong");
// 	} else {
// 		setSuccessFor(alamatwarga);
// 	}

// 	if (rtValue === "") {
// 		setErrorFor(rtwarga, "RT tidak boleh kosong");
// 	} else {
// 		setSuccessFor(rtwarga);
// 	}

// 	if (kelurahanValue === "") {
// 		setErrorFor(kelurahanwarga, "Kelurahan tidak boleh kosong");
// 	} else {
// 		setSuccessFor(kelurahanwarga);
// 	}

// 	if (kecamatanValue === "") {
// 		setErrorFor(kecamatanwarga, "kecamatan tidak boleh kosong");
// 	} else {
// 		setSuccessFor(kecamatanwarga);
// 	}

// 	if (status_perkawinanValue === "pilih status perkawinan ...") {
// 		setErrorFor(status_perkawinanwarga, "Status Perkawinan tidak boleh kosong");
// 	} else {
// 		setSuccessFor(status_perkawinanwarga);
// 	}

// 	if (pekerjaanValue === "") {
// 		setErrorFor(pekerjaanwarga, "Pekerjaan tidak boleh kosong");
// 	} else {
// 		setSuccessFor(pekerjaanwarga);
// 	}

// 	if (kewarganegaraanValue === "pilih kewarganegaraan ...") {
// 		setErrorFor(kewarganegaraanwarga, "Kewarganegaraan tidak boleh kosong");
// 	} else {
// 		setSuccessFor(kewarganegaraanwarga);
// 	}

// 	if (no_kkValue === "") {
// 		setErrorFor(no_kkwarga, "No. KK tidak boleh kosong");
// 	} else {
// 		setSuccessFor(no_kkwarga);
// 	}

// 	if (pendidikan_terakhirValue === "pilih pendidikan terakhir ...") {
// 		setErrorFor(pendidikan_terakhirwarga, "Pendidikan Terakhir tidak boleh kosong");
// 	} else {
// 		setSuccessFor(pendidikan_terakhirwarga);
// 	}

// 	if (status_hub_kelValue === "pilih status hubungan keluarga ...") {
// 		setErrorFor(status_hub_kelwarga, "Status hubungan keluarga tidak boleh kosong");
// 	} else {
// 		setSuccessFor(status_hub_kelwarga);
// 	}

// 	if (no_hpValue === "") {
// 		setErrorFor(no_hpwarga, "No. HP tidak boleh kosong");
// 	} else {
// 		setSuccessFor(no_hpwarga);
// 	}

// 	if (kata_sandiValue === "") {
// 		setErrorFor(kata_sandiwarga, "Kata Sandi tidak boleh kosong");
// 	} else {
// 		setSuccessFor(kata_sandiwarga);
// 	}
// 	if (status_kepegawaianValue === "") {
// 		setErrorFor(status_kepegawaianwarga, "Status Kepegawaian tidak boleh kosong");
// 	} else {
// 		setSuccessFor(status_kepegawaianwarga);
// 	}


// }

// function setErrorFor(input, message) {
// 	const formGroup = input.parentElement; //form-group
// 	const small = formGroup.querySelector("small");

// 	//add error message inside small
// 	small.innerText = message;

// 	//add error class
// 	formGroup.className = "form-group error1";
// }

// function setSuccessFor(input) {
// 	const formGroup = input.parentElement;
// 	formGroup.className = "form-group success";
// }

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
const formalasan = document.getElementById("formalasan");

const nomor_surat_rt = document.getElementById("nomor_surat_rt");

const keteranganditolak = document.getElementById("keteranganditolak");

if (formsuket001 != null) {
	formsuket001.addEventListener("submit", (e) => {
		if (checkInput() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
				
		
	});
}else if (formsuket002 != null) {
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
} else if (formalasan != null) {
	formalasan.addEventListener("submit", (e) => {
		if (checkalasan() == true) {
			e.target.submit();
		} else 
			e.preventDefault();
		
	});
} 

function checkInput() {
	const nomor_surat_rtValue = nomor_surat_rt.value.trim();
	
	if (nomor_surat_rtValue === "") {
		setErrorFor(nomor_surat_rt, "Nomor Surat RT tidak boleh kosong");
		return(false);
	} else {
		setSuccessFor(nomor_surat_rt);
	}

	return (true);
}

function checkalasan() {
	const keteranganditolakValue = keteranganditolak.value.trim();
	
	if (keteranganditolakValue === "") {
		setErrorFor(keteranganditolak, "Isikan Alasan");
		return(false);
	} else {
		setSuccessFor(keteranganditolak);
	}

	return (true);
}

function setErrorFor(input, message) {
	const formGroup = input.parentElement; //form-group
	const small = formGroup.querySelector("small");

	//add error message inside small
	small.innerText = message;

	//add error class
	formGroup.className = "form-group-surat error1";
}

function setSuccessFor(input) {
	const formGroup = input.parentElement;
	formGroup.className = "form-group-surat success";
}
