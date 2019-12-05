function validacao(){
    var autorizacao = false;
    var msg = "";

    //VALIDACAO DO CAMPO NOME
    var nome = document.getElementById("nome").value;
    if (nome.length < 1){
        msg += "\r\n- O campo nome é obrigatório.";
    }

    //VALIDACAO DO CAMPO NOME
    var idade = document.getElementById("idade").value;
    if (idade < 18 || idade > 120){
        msg += "\r\n-Idade inválida";
    }

    //VALIDACAO DO CAMPO AREAS DE INTERESSE
    var area = document.getElementsByName("areas[]");
    var contador = 0;

    for(var i = 0; i < area.length; i++){
        if(area[i].checked) contador++;
    }
    if(contador < 1){
        msg += "\r\n-Escolha pelo menos uma área de interesse";
    }

    

    if(msg == "") autorizacao = true;
    else alert("Verifique os seguintes campos: " + msg);
    return autorizacao;
}

function mostrarSenha(id, idBtn){
    var elemento = document.getElementById(id);
    var botao = document.getElementById(idBtn);

    if(elemento.type == "text"){
        elemento.type = "password";
        botao.innerHTML = "@";
    }
    else{
        elemento.type = "text";
        botao.innerHTML = "#";
    }
}

function compararCampos(){
    var senha = document.getElementById("senha").value;
    var confirmar = document.getElementById("confirmar").value;
    var alerta = document.getElementById("erroSenha");

    var msgErro = "Senhas não correspondem";

    if(senha != confirmar){
        alert(msgErro);
        alerta.innerHTML = msgErro;
    }
    else{
        alerta.innerHTML = "";
    }

}

function visualizarAreas(){

    var selecao = document.getElementsByName("areas[]");
    var msg = "";
    

    for(var i = 0; i < selecao.length; i++ ){
        if(selecao[i].checked) msg += "\r\n- " + selecao[i].value;
    }

    if(msg == "") msg = "Nenhuma área selecionada";
    else msg = "Áres selecionadas: " + msg;

    alert(msg);
    
}