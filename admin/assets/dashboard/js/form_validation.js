const form = document.getElementById("formTambah");
const form1 = document.getElementById("formUbah");
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


if (form != null) {
	form.addEventListener("submit", (e) => {
		e.preventDefault();

		checkInputs();
	});
} else if (form1 != null) {
	form1.addEventListener("submit", (e) => {
		e.preventDefault();

		checkInputs();
	});
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
	} else {
		setSuccessFor(nik);
	}

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

	if (jenis_kelaminValue === "pilih jenis kelamin ...") {
		setErrorFor(jenis_kelamin, "Jenis Kelamin tidak boleh kosong");
	} else {
		setSuccessFor(jenis_kelamin);
	}

	if (golongan_darahValue === "pilih golongan darah ...") {
		setErrorFor(golongan_darah, "Golongan darah tidak boleh kosong");
	} else {
		setSuccessFor(golongan_darah);
	}

	if (agamaValue === "pilih agama ...") {
		setErrorFor(agama, "Agama tidak boleh kosong");
	} else {
		setSuccessFor(agama);
	}

	if (alamatValue === "") {
		setErrorFor(alamat, "Alamat tidak boleh kosong");
	} else {
		setSuccessFor(alamat);
	}

	if (rtValue === "") {
		setErrorFor(rt, "RT tidak boleh kosong");
	} else {
		setSuccessFor(rt);
	}

	if (kelurahanValue === "") {
		setErrorFor(kelurahan, "Kelurahan tidak boleh kosong");
	} else {
		setSuccessFor(kelurahan);
	}

	if (kecamatanValue === "") {
		setErrorFor(kecamatan, "kecamatan tidak boleh kosong");
	} else {
		setSuccessFor(kecamatan);
	}

	if (status_perkawinanValue === "pilih status perkawinan ...") {
		setErrorFor(status_perkawinan, "Status Perkawinan tidak boleh kosong");
	} else {
		setSuccessFor(status_perkawinan);
	}

	if (pekerjaanValue === "") {
		setErrorFor(pekerjaan, "Pekerjaan tidak boleh kosong");
	} else {
		setSuccessFor(pekerjaan);
	}

	if (kewarganegaraanValue === "pilih kewarganegaraan ...") {
		setErrorFor(kewarganegaraan, "Kewarganegaraan tidak boleh kosong");
	} else {
		setSuccessFor(kewarganegaraan);
	}

	if (no_kkValue === "") {
		setErrorFor(no_kk, "No. KK tidak boleh kosong");
	} else {
		setSuccessFor(no_kk);
	}

	if (pendidikan_terakhirValue === "pilih pendidikan terakhir ...") {
		setErrorFor(pendidikan_terakhir, "Pendidikan Terakhir tidak boleh kosong");
	} else {
		setSuccessFor(pendidikan_terakhir);
	}

	if (status_hub_kelValue === "pilih status hubungan keluarga ...") {
		setErrorFor(status_hub_kel, "Status hubungan keluarga tidak boleh kosong");
	} else {
		setSuccessFor(status_hub_kel);
	}

	if (no_hpValue === "") {
		setErrorFor(no_hp, "No. HP tidak boleh kosong");
	} else {
		setSuccessFor(no_hp);
	}

	if (kata_sandiValue === "") {
		setErrorFor(kata_sandi, "Kata Sandi tidak boleh kosong");
	} else {
		setSuccessFor(kata_sandi);
	}

	if (status_kepegawaianValue === "") {
		setErrorFor(status_kepegawaian, "Status Kepegawaian tidak boleh kosong");
	} else {
		setSuccessFor(status_kepegawaian);
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
