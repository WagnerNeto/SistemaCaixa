function validaLogin(form1) {
	if(form1.login.value==""){
		alert("O campo Login está vazio!");
		form1.login.focus();
		return false;
	}
	
	if(form1.senha.value==""){
		alert("O campo Senha está vazio!");
		form1.senha.focus();
		return false;
	}
	
	if(form1.login.value!="admin"){
		alert("Usuário incorreto!");
		form1.login.focus();
		return false;
	}
	
	if(form1.senha.value!="123"){
		alert("Senha incorreta!");
		form1.senha.focus();
		return false;
	}
	
	return true;
}

function validaCategoria(form2) {
	if(form2.nome.value==""){
		alert("Por favor, dê  um nome para a Categoria!");
		form1.nome.focus();
		return false;
	}
}

function validaMovimento(form3) {
	if(form3.data.value==""){
		alert("Por favor, especifique a Data do Movimento!");
		form1.data.focus();
		return false;
	}
	
	if(form3.descricao.value==""){
		alert("Por favor, descreva o Movimento!");
		form1.descricao.focus();
		return false;
	}
	
	if(form3.valor.value==""){
		alert("Por favor, diga o Valor do Movimento!");
		form1.valor.focus();
		return false;
	}
}