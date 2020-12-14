const formLoginRt = document.getElementById("formLoginRt");
const nik_login = document.getElementById("nik");
const kata_sandi_login = document.getElementById("kata_sandi");

if (formLoginRt != null) {
	formLoginRt.addEventListener("submit", (e) => {
		if (ceklogin() == true) {
			e.target.submit();
        } else 
        e.preventDefault();
	});
}

function ceklogin() {
	const nikValue = nik.value.trim();
	const kata_sandiValue = kata_sandi.value.trim();

	if (nikValue === "") {
		setErrorForLogin(nik, "Nik tidak boleh kosong");
		return (false);
	} else {
		setSuccessForLogin(nik);
	}

	if (kata_sandiValue === "") {
		setErrorForLogin(kata_sandi, "Kata sandi tidak boleh kosong");
		return (false);
	} else {
		setSuccessForLogin(kata_sandi);
    }
	return (true);
}

function setErrorForLogin(input, message) {
	const formGroupLogin = input.parentElement; //formGrup
	const small = formGroupLogin.querySelector("small");

	//add error message inside h6
	small.innerText = message;

	//add error class
	formGroupLogin.className = "form-group-login errorlogin";
}

function setSuccessForLogin(input) {
	const formGroupLogin = input.parentElement;
	formGroupLogin.className = "form-group-login successlogin";
}