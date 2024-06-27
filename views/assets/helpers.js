function eraseCookieFromAllPaths(name) {
	var pathBits = location.pathname.split('/');
	var pathCurrent = ' path=';
	document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 GMT;';
	for (var i = 0; i < pathBits.length; i++) {
		pathCurrent += ((pathCurrent.substr(-1) != '/') ? '/' : '') + pathBits[i];
		document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 GMT;' + pathCurrent + ';';
	}
}

// Defina uma função para criar um cookie
function setCookie(chave, valor, validadeDias) {
	var validade = new Date();
	validade.setTime(validade.getTime() + validadeDias * 24 * 60 * 60 * 1000);
	var validadeUTC = "expires=" + validade.toUTCString();
	document.cookie = chave + "=" + valor + ";" + validadeUTC + ";path=/";
}

function getCookie(nome) {
	var cookies = " " + document.cookie;
	var nomeEQ = nome + "=";
	var ca = cookies.split(';');
	for (var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) === ' ') {
					c = c.substring(1, c.length);
			}
			if (c.indexOf(nomeEQ) === 0) {
					// Retorna o valor real do cookie
					return c.substring(nomeEQ.length, c.length);
			}
	}
	return null; // Retorna null se o cookie não for encontrado ou expirado
}