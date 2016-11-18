function enviarEmail(){

    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var telefone = document.getElementById('telefone').value;
    var mensagem = document.getElementById('mensagem').value;

    if(nome==""){
      alert("Coloque o seu nome.");
    }else if(telefone==""){
      alert("Coloque o seu telefone.");
    }else if(mensagem==""){
      alert("Escreve alguma mensagem para eu possa saber sobre o assunto.");
    }else{

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

            alert("Entro em contato assim que possivel");
          }else{
            
          }

        }
      }
    }
  
}