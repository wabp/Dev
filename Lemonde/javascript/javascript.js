function validacao(){
	
	if(document.form.nome.value=="") {
		alert("Por favor, preencha o campo Nome");
		document.form.nome.focus();
		return false;
	}
        
        if(document.form.nome.value.length<3){
            alert("O nome deve conter no minimo 3 caracteres.");
            document.form.nome.focus();
            return false;
        }
        
        
        if(document.form.sobrenome.value=="") {
		alert("Por favor, preencha o campo Sobrenome");
		document.form.sobrenome.focus();
		return false;
	}
        
        if(document.form.sobrenome.value.length<3){
            alert("O Sobrenome deve conter no minimo 3 caracteres.");
            document.form.sobrenome.focus();
            return false;
        }
        
        
        if(document.form.email.value==""||document.form.email.value.indexOf('.')==-1) {
		alert("Por favor, entre com um Email válido.");
		document.form.email.focus();
		return false;
	}
        
        if(document.form.email.value.length<3){
            alert("O E-mail deve conter no minimo 3 caracteres.");
            document.form.email.focus();
            return false;
        }
        
        
	if(document.form.empresa.value.length==""){
		alert("Por favor, preencha o campo empresa");
		document.form.empresa.focus();
		return false;
	}

  	if(document.form.empresa.value.length <3){
  		alert("A empresa deve conter no minimo 3 caracteres.");
  		document.form.empresa.focus();
  		return false;
  	}
        
        if(document.form.comercial.value.length==""){
		alert("Por favor, preencha o campo telefone");
		document.form.comercial.focus();
		return false;
	}

  	if(document.form.comercial.value.length <8){
  		alert("O telefone deve conter no minimo 8 caracteres.");
  		document.form.comercial.focus();
  		return false;
  	}
        
        if(document.form.mensagem.value.length==""){
		alert("Por favor, preencha o campo Mensagem");
		document.form.mensagem.focus();
		return false;
	}

  	if(document.form.mensagem.value.length <8){
  		alert("A Mensagem deve conter no minimo 8 caracteres.");
  		document.form.mensagem.focus();
  		return false;
  	}

}

function mensagemEnvia(){
    alert("Mensagem enviada com sucesso!!!");
    return true;
}


function celular(){
    
    
if (document.form.telefone.value.length == 0){
document.form.telefone.value = "(" + document.form.telefone.value; }
if (document.form.telefone.value.length == 4){
document.form.telefone.value = document.form.telefone.value + ")"; }
if (document.form.telefone.value.length == 10){
document.form.telefone.value = document.form.telefone.value + "-";}

}

function fone(){
    
    
if (document.form.comercial.value.length == 0){
document.form.comercial.value = "(" + document.form.comercial.value; }
if (document.form.comercial.value.length == 4){
document.form.comercial.value = document.form.comercial.value + ")"; }
if (document.form.comercial.value.length == 9){
document.form.comercial.value = document.form.comercial.value + "-";}

}