//validasi upload foto di profil RT
const form_upload_foto_profil_admin = document.getElementById("form_upload_foto_profil_rt");
const file_foto_profil = document.getElementById("file-upload-profil");

const form_upload_foto_ktp_admin = document.getElementById("form_upload_foto_ktp_rt");
const file_foto_ktp = document.getElementById("file-upload-ktp");

const form_upload_foto_kk_admin = document.getElementById("form_upload_foto_kk_rt");
const file_foto_kk = document.getElementById("file-upload-kk");

//diprofil rt
if (form_upload_foto_profil_rt != null) {
	form_upload_foto_profil_rt.addEventListener("submit", (e) => {
		if (checkInputFotoProfil() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}
if (form_upload_foto_ktp_rt != null) {
	form_upload_foto_ktp_rt.addEventListener("submit", (e) => {
		if (checkInputFotoKTP() == true) {
			e.target.submit();
		} else e.preventDefault();
	});
}
if (form_upload_foto_kk_rt != null) {
	form_upload_foto_kk_rt.addEventListener("submit", (e) => {
		if (checkInputFotoKK() == true) {
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
