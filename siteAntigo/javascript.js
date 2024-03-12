	function validacao() {
	if(document.form.nome.value==="") {
		alert("Por favor, preencha o campo nome.");
		document.form.nome.focus();
	return false;
	}

	if(document.form.email.value==="" || document.form.email.value.indexOf('@')===-1 || document.form.email.indexOf(".")===-1 ) {
		alert("Por favor, digite um endereço de e-mail válido.");
		document.form.email.focus();
		return false;
	}
	   
	if(document.form.mensagem.value==="") {
		alert("Por favor, digite sua mensagem.");
			  document.form.mensagem.focus();
		return false;
	}
}