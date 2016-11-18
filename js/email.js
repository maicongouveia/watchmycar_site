function enviarEmail(){

    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var telefone = document.getElementById('telefone').value;
    var mensagem = document.getElementById('mensagem').value;

    var mensagemErro = document.getElementById('mensagemErro');

    if(nome==""){
      mensagemErro.innerHTML = "<b>OPS:</b> Precisamos pelo menos saber o seu nome.";
    }

    else if(telefone==""){
      mensagemErro.innerHTML = "<b>OPS:</b> Coloque o seu telefone para nós possamos entrar em contato.";
    }

    else if(mensagem==""){
      mensagemErro.innerHTML = "<b>OPS:</b> Escreve alguma mensagem para nós possamos saber sobre o assunto.";
    }

    else{

      var variaveis = "nome="+nome+"&"+"email="+email+"&"+"telefone="+telefone+"&"+"mensagem="+mensagem;

      var xhttp = new XMLHttpRequest();

      var url = 'php/email.php';
      xhttp.open("POST", url , true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send(variaveis);

      xhttp.onreadystatechange = function() {
        var resposta = JSON.parse(xhttp.responseText);

        if (resposta.code == 200) {
            
          document.getElementById('nome').value = "";
          document.getElementById('email').value = "";
          document.getElementById('telefone').value = "";
          document.getElementById('mensagem').value = "";

          mensagemErro.innerHTML = "";

          mensagemSucesso.innerHTML = "<b> Mensagem enviada com sucesso </b> <br> Entramos em contato assim que possível";

          alert("Entro em contato assim que possivel");
        }

      } 
    }
}