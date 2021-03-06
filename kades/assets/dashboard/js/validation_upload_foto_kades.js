//validasi upload foto di profil kades
const form_upload_foto_profil = document.getElementById("form_upload_foto_profil_kades");
const file_foto_profil = document.getElementById("file-upload-profil");

const form_upload_foto_ktp = document.getElementById("form_upload_foto_ktp_kades");
const file_foto_ktp = document.getElementById("file-upload-ktp");

const form_upload_foto_kk = document.getElementById("form_upload_foto_kk_kades");
const file_foto_kk = document.getElementById("file-upload-kk");

const form_upload_foto_ttd = document.getElementById("form_upload_foto_ttd_kades");
const file_foto_ttd = document.getElementById("file-upload-ttd");



if (form_upload_foto_profil != null) {
	form_upload_foto_profil.addEventListener("submit", (e) => {
		if (checkInputFotoProfil() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}
if (form_upload_foto_ktp != null) {
	form_upload_foto_ktp.addEventListener("submit", (e) => {
		if (checkInputFotoKTP() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}
if (form_upload_foto_kk != null) {
	form_upload_foto_kk.addEventListener("submit", (e) => {
		if (checkInputFotoKK() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}
if (form_upload_foto_ttd != null) {
	form_upload_foto_ttd.addEventListener("submit", (e) => {
		if (checkInputFotoTTD() == true) {
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
