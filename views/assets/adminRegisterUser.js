const userNameInput = document.querySelector('.user-name');
const userPhoneInput = document.querySelector('.user-phone');
const userPhoneInvalid = document.querySelector('.user-phone-invalid');
const userPasswordInput = document.querySelector('.user-password');
const userPasswordInvalid = document.querySelector('.user-password-invalid');
const userConfirmPasswordInput = document.querySelector('.user-confirm-password');
const userConfirmPasswordInvalid = document.querySelector('.user-confirm-password-invalid');

const userBtnSubmit = document.querySelector('.user-btn-submit');

userBtnSubmit.addEventListener('click', function(){
	let name = userNameInput.value;
	let phone = userPhoneInput.value;
	let password = userPasswordInput.value;
	let confirmPassword = userConfirmPasswordInput.value;

	if(password !== confirmPassword){
		userPasswordInput.classList.add('border-red-500');
		userPasswordInvalid.textContent = 'Senhas não são iguais, boy';
		userConfirmPasswordInput.classList.add('border-red-500')
		userConfirmPasswordInvalid.textContent = 'Senhas não são iguais, boy';
		return false;
	}

	userData = {
		password: password,
		phone: phone,
		name: name
	}

	fetch('/addAdminUser/',{
		method: 'POST',
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded'
		},
		body: JSON.stringify(userData)
	})
	.then(response => {
		if(response.ok){
			return response.json();
		}
	})
	.then(data => {
		console.log(data)
		if(data.created){
			// redirecionar para admin
		}
	})
	.catch(error => {
		console.error('DEU RUUUIM', error);
	})
})