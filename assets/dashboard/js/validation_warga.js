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


formubah.addEventListener("submit", (e) => {
	e.preventDefault();

	checkInputsWarga();
});


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
		setErrorFor(nikwarga, "Nik tidak boleh kosong");
	} else {
		setSuccessFor(nikwarga);
	}

	if (namaValue === "") {
		setErrorFor(namawarga, "Nama tidak boleh kosong");
	} else {
		setSuccessFor(namawarga);
	}

	if (tempat_lahirValue === "") {
		setErrorFor(tempat_lahirwarga, "Tempat lahir tidak boleh kosong");
	} else {
		setSuccessFor(tempat_lahirwarga);
	}

	if (tanggal_lahirValue === "") {
		setErrorFor(tanggal_lahirwarga, "Tanggal lahir tidak boleh kosong");
	} else {
		setSuccessFor(tanggal_lahirwarga);
	}

	if (jenis_kelaminValue === "pilih jenis kelamin ...") {
		setErrorFor(jenis_kelaminwarga, "Jenis Kelamin tidak boleh kosong");
	} else {
		setSuccessFor(jenis_kelaminwarga);
	}

	if (golongan_darahValue === "pilih golongan darah ...") {
		setErrorFor(golongan_darahwarga, "Golongan darah tidak boleh kosong");
	} else {
		setSuccessFor(golongan_darahwarga);
	}

	if (agamaValue === "pilih agama ...") {
		setErrorFor(agamawarga, "Agama tidak boleh kosong");
	} else {
		setSuccessFor(agamawarga);
	}

	if (alamatValue === "") {
		setErrorFor(alamatwarga, "Alamat tidak boleh kosong");
	} else {
		setSuccessFor(alamatwarga);
	}

	if (rtValue === "") {
		setErrorFor(rtwarga, "RT tidak boleh kosong");
	} else {
		setSuccessFor(rtwarga);
	}

	if (kelurahanValue === "") {
		setErrorFor(kelurahanwarga, "Kelurahan tidak boleh kosong");
	} else {
		setSuccessFor(kelurahanwarga);
	}

	if (kecamatanValue === "") {
		setErrorFor(kecamatanwarga, "kecamatan tidak boleh kosong");
	} else {
		setSuccessFor(kecamatanwarga);
	}

	if (status_perkawinanValue === "pilih status perkawinan ...") {
		setErrorFor(status_perkawinanwarga, "Status Perkawinan tidak boleh kosong");
	} else {
		setSuccessFor(status_perkawinanwarga);
	}

	if (pekerjaanValue === "") {
		setErrorFor(pekerjaanwarga, "Pekerjaan tidak boleh kosong");
	} else {
		setSuccessFor(pekerjaanwarga);
	}

	if (kewarganegaraanValue === "pilih kewarganegaraan ...") {
		setErrorFor(kewarganegaraanwarga, "Kewarganegaraan tidak boleh kosong");
	} else {
		setSuccessFor(kewarganegaraanwarga);
	}

	if (no_kkValue === "") {
		setErrorFor(no_kkwarga, "No. KK tidak boleh kosong");
	} else {
		setSuccessFor(no_kkwarga);
	}

	if (pendidikan_terakhirValue === "pilih pendidikan terakhir ...") {
		setErrorFor(pendidikan_terakhirwarga, "Pendidikan Terakhir tidak boleh kosong");
	} else {
		setSuccessFor(pendidikan_terakhirwarga);
	}

	if (status_hub_kelValue === "pilih status hubungan keluarga ...") {
		setErrorFor(status_hub_kelwarga, "Status hubungan keluarga tidak boleh kosong");
	} else {
		setSuccessFor(status_hub_kelwarga);
	}

	if (no_hpValue === "") {
		setErrorFor(no_hpwarga, "No. HP tidak boleh kosong");
	} else {
		setSuccessFor(no_hpwarga);
	}

	if (kata_sandiValue === "") {
		setErrorFor(kata_sandiwarga, "Kata Sandi tidak boleh kosong");
	} else {
		setSuccessFor(kata_sandiwarga);
	}

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
