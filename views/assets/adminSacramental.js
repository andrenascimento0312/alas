const btnAdminSacramental = document.querySelector('.ala-admin-sacramental-button-submit');
const sacramentalAdminInput = document.querySelector('.ala-admin-sacramental-link');

btnAdminSacramental.addEventListener('click', function(e){
	e.preventDefault();

	let sacramentalLink = sacramentalAdminInput.value;

	sacramentalData = {
		sacramentalLink: sacramentalLink
	}

	const urlAdminSacramental = '/addLinkSacramental/';

	fetch(urlAdminSacramental, {
		method: "POST",
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded'
		},
		body: JSON.stringify(sacramentalLink)
	})
	.then(response => {
		if(response.ok){
			return response.json()
		}
	})
	.then(data => {
		if(data.updated === true){
			// redirecionar
			
		}
	})
	.catch(error => {
		console.log("DEU RUUUIIIM", error);
	})
})