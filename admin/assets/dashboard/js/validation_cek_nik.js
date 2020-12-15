const formCariNikRT = document.getElementById("formCariNikRT");
const nik_rt = document.getElementById("nik")

const formCariNikKades = document.getElementById("formCariNikKades");
const formCariNikRT1 = document.getElementById("formCariNikRT1");
const formCariNikWarga = document.getElementById("formCariNikWarga");

if (formCariNikRT != null) {
	formCariNikRT.addEventListener("submit", (e) => {
		if (ceknik() == true) {
			e.target.submit();
        } else 
        e.preventDefault();
	});
}
if (formCariNikKades != null) {
	formCariNikKades.addEventListener("submit", (e) => {
		if (ceknik() == true) {
			e.target.submit();
        } else 
        e.preventDefault();
	});
}

if (formCariNikRT1 != null) {
	formCariNikRT1.addEventListener("submit", (e) => {
		if (ceknik() == true) {
			e.target.submit();
        } else 
        e.preventDefault();
	});
}
if (formCariNikWarga != null) {
	formCariNikWarga.addEventListener("submit", (e) => {
		if (ceknik() == true) {
			e.target.submit();
        } else 
        e.preventDefault();
	});
}


function ceknik() {
    const nik_rtValue = nik_rt.value.trim();

	if (nik_rtValue === "") {
		setErrorForNik(nik_rt, "NIK tidak boleh kosong");
		return (false);
	} else {
		setSuccessForNik(nik_rt);
	}
	return (true);
}
function setErrorForNik(input, message) {
	const formGroupNik = input.parentElement; //formGrup
	const small = formGroupNik.querySelector("small");

	//add error message inside h6
	small.innerText = message;

	//add error class
	formGroupNik.className = "form-group-nik errornik";
}

function setSuccessForNik(input) {
	const formGroupNik = input.parentElement;
	formGroupNik.className = "form-group-nik successnik";
}