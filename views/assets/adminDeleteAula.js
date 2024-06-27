const excludeClassMeetingInput = document.querySelector('.excludeClassMeeting');

excludeClassMeetingInput.addEventListener('click', function(){
	
	let id = excludeClassMeetingInput.getAttribute('data-id');

	excludeInfo = {
		id: id
	}

	fetch('/excludeClassMeeting/', {
		method: "POST",
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded'
		},
		body: JSON.stringify(excludeInfo)
	})
	.then(response => {
		if(response.ok){
			return response.json()
		}
	})
	.then(data => {
		console.log(data)
		if(data.deleted){
			// redirecionar
			location.reload;
		}
	})
	.catch(error => {
		console.error("DEU RUUUIM", error);
	})
})