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

    if(senha != confirmar) alert("Senhas não correspondem");

}