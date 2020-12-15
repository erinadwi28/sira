const formUbahSandiKades = document.getElementById("formUbahSandiKades");
const input_kata_sandi = document.getElementById("kata_sandi")

const formUbahSandiRT = document.getElementById("formUbahSandiRT");
const formUbahSandiWarga = document.getElementById("formUbahSandiWarga");

if (formUbahSandiKades != null) {
	formUbahSandiKades.addEventListener("submit", (e) => {
		if (cekkatasandi() == true) {
			e.target.submit();
        } else 
        e.preventDefault();
	});
}
if (formUbahSandiRT != null) {
	formUbahSandiRT.addEventListener("submit", (e) => {
		if (cekkatasandi() == true) {
			e.target.submit();
        } else 
        e.preventDefault();
	});
}
if (formUbahSandiWarga != null) {
	formUbahSandiWarga.addEventListener("submit", (e) => {
		if (cekkatasandi() == true) {
			e.target.submit();
        } else 
        e.preventDefault();
	});
}


function cekkatasandi() {
    const kata_sandiValue = kata_sandi.value.trim();

	if (kata_sandiValue === "") {
		setErrorForUbahSandi(kata_sandi, "Kata sandi tidak boleh kosong");
		return (false);
	} else {
		setSuccessForUbahSandi(kata_sandi);
	}
	return (true);
}
function setErrorForUbahSandi(input, message) {
	const formGroupUbahSandi = input.parentElement; //formGrup
	const small = formGroupUbahSandi.querySelector("small");

	//add error message inside h6
	small.innerText = message;

	//add error class
	formGroupUbahSandi.className = "form-group-ubahSandi errorubahSandi";
}

function setSuccessForUbahSandi(input) {
	const formGroupUbahSandi = input.parentElement;
	formGroupUbahSandi.className = "form-group-ubahSandi successubahSandi";
}