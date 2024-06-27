/**
 * After, in edit Form 
 */

const adminAulasSubmit = document.querySelector('.ala-class-button-submit');
adminAulasSubmit.addEventListener('click', function () {

	let idClass = adminAulasSubmit.getAttribute('data-id')
	let linkClassValue = document.querySelector('.ala-class-link').value;
	let nameClassValue = document.querySelector('.ala-class-name').value;

	updateInfo = {
		link: linkClassValue,
		name: nameClassValue,
		id: idClass
	}

	fetch('/updateClassMeeting/', {
		method: 'POST',
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded'
		},
		body: JSON.stringify(updateInfo)
	})
		.then(response => {
			if (response.ok) {
				return response.json()
			}
		})
		.then(data => {
			console.log(data)
			if (data.updated) {
				localStorage.setItem('classMeetingUpdated', true);
				eraseCookieFromAllPaths('idClassMeetingForEdit');
				window.location.href = '/admin/aulas/';
			}
		})
		.catch(error => {
			console.log(error)
		})

}) 