const timeExpire = document.querySelector('.timeExpire').textContent;

// Data de expiração (28/02/2024 23:21:57)
const lifeTimeValue = document.querySelector('.lifeTime').textContent;
const [datePart, timePart] = lifeTimeValue.split(" ");
const [day, month, year] = datePart.split("/");
const [hour, minute, second] = timePart.split(":");

// Cria um objeto Date com a data e hora corretas
const expirationDate = new Date(year, month - 1, day, hour, minute, second);
// Calcula a data de expiração (expirationDate + 180 minutos)
const expirationTime = expirationDate.getTime() + timeExpire * 60 * 1000;

function updateCountdown() {
	const now = new Date().getTime();
	const timeRemaining = expirationTime - now;

	if (timeRemaining <= 0) {
		document.getElementById("countdown").textContent = "Tempo expirado!";
		return;
	}

	const minutes = Math.floor(timeRemaining / 60000);
	const seconds = Math.floor((timeRemaining % 60000) / 1000);

	document.getElementById("countdown").textContent = `Tempo restante: ${minutes} minutos e ${seconds} segundos`;

	// Atualiza a cada segundo
	setTimeout(updateCountdown, 1000);
}

// Inicia o contador
updateCountdown();