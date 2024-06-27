const formInput = document.querySelector(".ala-form-sacramental");
const alaSacramentalButtonForm = document.querySelector(".ala-form-sacramental .ala-sacramental-button-submit");

const phoneInput = document.querySelector(".ala-sacramental-phone");
const nameInput = document.querySelector(".ala-sacramental-name");
const peopleInput = document.querySelector(".ala-sacramental-people");

const nameValidate = document.querySelector(".ala-name-invalid");
const peopleValidate = document.querySelector(".ala-people-invalid");
const phoneValidate = document.querySelector(".ala-phone-invalid");

nameInput.addEventListener("keyup", function(){
	const isValid = validateName(this.value);
	
	if(!isValid){
		return;
	}
	
	nameInput.classList.remove('border-red-500');
	nameValidate.textContent = "";
})

alaSacramentalButtonForm.addEventListener("click", function(e){
	e.preventDefault();

	let name = nameInput.value;
	let phone = phoneInput.value;
	let people = peopleInput.value;

	const isValidName = validateName(name);
	const isValidPhone = validatePhone(phone);
	const isValidPeople = validatePeople(people);

	if(!isValidName || !isValidPhone || !isValidPeople){
		alert("Preencha todos os campos corretamente!");
		// alaSacramentalButtonForm.classList.add("d-none");
		return;
	}

	let memberInfo = {
		name: name,
		phone: phone,
		people: people
	};

	let urlPostSacramental = '/registerMemberInSacramentalMeeting/'; 

	fetch(urlPostSacramental,{
		method: 'POST',
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded'
		},
		body: JSON.stringify(memberInfo)
	})

	.then(response => {
	
    if (response.ok) {
        return response.json(); // Parse the response body as JSON
    } else {
        throw new Error('Network response was not ok');
    }
	})
	.then(data => {
    // console.log(data); // Aqui você pode acessar os dados da resposta
		if(data.sessionToken === true){
			// alert('vou te direcionar, boy')
			window.location.href = "/transmissao/"
		}
	})
	.catch(error => {
		console.error("deu ruim", error);
	})

});



function validateName(name){
	if(name.length < 1){
		nameInput.classList.add('border-red-500');
		nameValidate.textContent = "Insira um nome válido";
		return false;
	}

	if(name.length < 3){
		nameInput.classList.add('border-red-500');
		nameValidate.textContent = "Muito curto para ser um nome";
		return false;
	}

	if (/^(.)\1{2,}$/.test(name)) {
		nameInput.classList.add('border-red-500');
		nameValidate.textContent = "Nome não pode ter três caracteres iguais consecutivos";
		return false;
	}

	return true

}

function validatePeople(people){
	if(people < 1){
		peopleInput.classList.add('border-red-500');
		peopleValidate.textContent = 'Insira pelo menos 1';
		return false;
	}

	return true;
}

function validatePhone(phone){
	if(phone < 9){
		phoneInput.classList.add('border-red-500');
		phoneValidate.textContent = "Insira um número de telefone válido";
		return false;
	}

	return true;
}