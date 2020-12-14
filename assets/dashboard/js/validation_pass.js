const ubah_password = document.getElementById("ubah_pass");
const password_lama = document.getElementById("kata_sandi_awal");
const password_baru = document.getElementById("kata_sandi");

if (ubah_password != null) {
	ubah_password.addEventListener("submit", (e) => {
		if (cekpassword() == true) {
			e.target.submit();
        } else 
        e.preventDefault();
	});
}

function cekpassword() {
    const password_lamaValue = password_lama.value.trim();
    const password_baruValue = password_baru.value.trim();

	if (password_lamaValue === "") {
		setErrorForPass(password_lama, "Isikan kata sandi lama");
		return (false);
	} else {
		setSuccessForPass(password_lama);
    }
    
    if (password_baruValue === "") {
		setErrorForPass(password_baru, "Isikan kata sandi yang baru");
		return (false);
	} else {
		setSuccessForPass(password_baru);
	}
	return (true);
}

function setErrorForPass(input, message) {
	const formGroupPass = input.parentElement; //formGrup
	const small = formGroupPass.querySelector("small");

	//add error message inside h6
	small.innerText = message;

	//add error class
	formGroupPass.className = "form-group-pass errorpass";
}

function setSuccessForPass(input) {
	const formGroupPass = input.parentElement;
	formGroupPass.className = "form-group-pass successpass";
}