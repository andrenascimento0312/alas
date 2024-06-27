if(localStorage.getItem('classMeetingUpdated')){
	localStorage.removeItem('classMeetingUpdated');
	eraseCookieFromAllPaths('idClassMeetingForEdit');
	// mensagem de sucesso que editou a aula
	
}

if(getCookie('idClassMeetingForEdit')){
	eraseCookieFromAllPaths('idClassMeetingForEdit')
}

const editClassMeetingInput = document.querySelector('.editClassMeeting');

editClassMeetingInput.addEventListener('click', function (e) {
	e.preventDefault();
	let id = editClassMeetingInput.getAttribute('data-id');

	// Exemplo de uso
	setCookie("idClassMeetingForEdit", id, 1); // Armazena o cookie por 7 dias
	window.location.href = `atualizar/`;

})