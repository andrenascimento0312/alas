const classNameInput = document.querySelector('.ala-class-name');  
const classLinkInput = document.querySelector('.ala-class-link');
const classSubmit = document.querySelector('.ala-class-button-submit');

classSubmit.addEventListener('click', function(e){
	e.preventDefault();

	let className = classNameInput.value;
	let classLink = classLinkInput.value;

	classData = {
		className: className,
		classLink: classLink
	}

	let urlPostAdminAula = '/addClass/';
	fetch(urlPostAdminAula, {
		method: "POST",
		headers:{
			'Content-Type': 'application/x-www-form-urlencoded'
		},
		body: JSON.stringify(classData)
	})
	.then(response => {
		if(response.ok){
			return response.json();
		}
	})
	.then(data => {
		console.log(data);
	})
	.catch(error => {
		console.error("DEU RUUUIM", error);
	})


	
})