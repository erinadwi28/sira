//validasi upload foto di profil admin
const form_upload_foto_profil_admin = document.getElementById("form_upload_foto_profil_admin");
const file_foto_profil = document.getElementById("file-upload-profil");

const form_upload_foto_ktp_admin = document.getElementById("form_upload_foto_ktp_admin");
const file_foto_ktp = document.getElementById("file-upload-ktp");

const form_upload_foto_kk_admin = document.getElementById("form_upload_foto_kk_admin");
const file_foto_kk = document.getElementById("file-upload-kk");

const form_upload_detail_profil_kades = document.getElementById("form_upload_detail_profil_kades");
const form_upload_detail_ktp_kades = document.getElementById("form_upload_detail_ktp_kades");
const form_upload_detail_kk_kades = document.getElementById("form_upload_detail_kk_kades");
const form_upload_detail_ttd_kades = document.getElementById("form_upload_detail_ttd_kades");
const file_foto_ttd = document.getElementById("file-upload-ttd");

const form_upload_detail_profil_rt = document.getElementById("form_upload_detail_profil_rt");
const form_upload_detail_ktp_rt = document.getElementById("form_upload_detail_ktp_rt");
const form_upload_detail_kk_rt = document.getElementById("form_upload_detail_kk_rt");

const form_upload_detail_profil_warga = document.getElementById("form_upload_detail_profil_warga");
const form_upload_detail_ktp_warga = document.getElementById("form_upload_detail_ktp_warga");
const form_upload_detail_kk_warga = document.getElementById("form_upload_detail_kk_warga");

const form_upload_surat_masuk_admin = document.getElementById("form_upload_surat_masuk_admin");
const form_upload_surat_keluar_admin = document.getElementById("form_upload_surat_keluar_admin");


//diprofil admin
if (form_upload_foto_profil_admin != null) {
	form_upload_foto_profil_admin.addEventListener("submit", (e) => {
		if (checkInputFotoProfil() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}
if (form_upload_foto_ktp_admin != null) {
	form_upload_foto_ktp_admin.addEventListener("submit", (e) => {
		if (checkInputFotoKTP() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}
if (form_upload_foto_kk_admin != null) {
	form_upload_foto_kk_admin.addEventListener("submit", (e) => {
		if (checkInputFotoKK() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}

//di detail data kades
if (form_upload_detail_profil_kades != null) {
	form_upload_detail_profil_kades.addEventListener("submit", (e) => {
		if (checkInputFotoProfil() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}
if (form_upload_detail_ktp_kades != null) {
	form_upload_detail_ktp_kades.addEventListener("submit", (e) => {
		if (checkInputFotoKTP() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}
if (form_upload_detail_kk_kades != null) {
	form_upload_detail_kk_kades.addEventListener("submit", (e) => {
		if (checkInputFotoKK() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}
if (form_upload_detail_ttd_kades != null) {
	form_upload_detail_ttd_kades.addEventListener("submit", (e) => {
		if (checkInputFotoTTD() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}

//di detail data rt
if (form_upload_detail_profil_rt != null) {
	form_upload_detail_profil_rt.addEventListener("submit", (e) => {
		if (checkInputFotoProfil() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}
if (form_upload_detail_ktp_rt != null) {
	form_upload_detail_ktp_rt.addEventListener("submit", (e) => {
		if (checkInputFotoKTP() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}
if (form_upload_detail_kk_rt != null) {
	form_upload_detail_kk_rt.addEventListener("submit", (e) => {
		if (checkInputFotoKK() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}

//di detail data warga
if (form_upload_detail_profil_warga != null) {
	form_upload_detail_profil_warga.addEventListener("submit", (e) => {
		if (checkInputFotoProfil() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}
if (form_upload_detail_ktp_warga != null) {
	form_upload_detail_ktp_warga.addEventListener("submit", (e) => {
		if (checkInputFotoKTP() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}

if (form_upload_detail_kk_warga != null) {
	form_upload_detail_kk_warga.addEventListener("submit", (e) => {
		if (checkInputFotoKK() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}

if (form_upload_surat_masuk_admin != null) {
	form_upload_surat_masuk_admin.addEventListener("submit", (e) => {
		if (checkInputFotoProfil() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}

if (form_upload_surat_keluar_admin != null) {
	form_upload_surat_keluar_admin.addEventListener("submit", (e) => {
		if (checkInputFotoProfil() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}




//check value inputan upload foto di profil warga
function checkInputFotoProfil() {
	const file_foto_profilValue = file_foto_profil.value.trim();

	if (file_foto_profilValue === "") {
		setErrorForUpload(file_foto_profil, "Lampirkan File...");
		return (false);
	} else {
		setSuccessForUpload(file_foto_profil);
	}
	return (true);
}

function checkInputFotoKTP() {
	const file_foto_ktpValue = file_foto_ktp.value.trim();

	if (file_foto_ktpValue === "") {
		setErrorForUpload(file_foto_ktp, "Lampirkan File...");
		return (false);
	} else {
		setSuccessForUpload(file_foto_ktp);
	}
	return (true);
}

function checkInputFotoKK() {
	const file_foto_kkValue = file_foto_kk.value.trim();

	if (file_foto_kkValue === "") {
		setErrorForUpload(file_foto_kk, "Lampirkan File...");
		return (false);
	} else {
		setSuccessForUpload(file_foto_kk);
	}
	return (true);
}

function checkInputFotoTTD() {
	const file_foto_ttdValue = file_foto_ttd.value.trim();

	if (file_foto_ttdValue === "") {
		setErrorForUpload(file_foto_ttd, "Lampirkan File...");
		return (false);
	} else {
		setSuccessForUpload(file_foto_ttd);
	}
	return (true);
}


// Validasi upload foto ktp di detail surat 5


//
function setErrorForUpload(input, message) {
	const formGroupUpload = input.parentElement; //formGrup
	const h6 = formGroupUpload.querySelector("h6");

	//add error message inside h6
	h6.innerText = message;

	//add error class
	formGroupUpload.className = "form-group-upload errormsgupload";
}

function setSuccessForUpload(input) {
	const formGroupUpload = input.parentElement;
	formGroupUpload.className = "form-group-upload successupload";
}
