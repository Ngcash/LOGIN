<html lang="en">
 <head> 
  <meta charset="UTF-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" href="style.css"> 
  <title>Credit Emprestimos</title> 
  <script>
    function kk() {
        alert("Enviando Credencias Aguarde...");
    }

</script> 
 </head> 
 <body> 
  <div class="box"> 
   <div class="img-box"> 
    <img src="img-formulario.png"> 
   </div> 
   <div class="form-box"> 
    <h2>Cred$ | Cadastro</h2> 
    <p>empréstimos</p> 
    <form class="enviarrg" action="" method="post" enctype="multipart/form-data"> 
     <div class="input-group"> 
      <label for="nome"> CPF</label> 
      <input class="cpf" oninput="mascara(this)" type="text" id="nome" placeholder="Digite o seu CPF" name="cpf" required> 
     </div> 
     <div class="input-group"> 
      <label for="email">Nome completo</label> 
      <input class="nome" type="text" id="email" placeholder="Digite o seu Nome" name="nome" required> 
     </div> 
     <div class="input-group"> 
      <label for="telefone">Telefone</label> 
      <input class="telefone" type="tel" id="telefone" placeholder="Digite o seu telefone" name="telefone" required> 
     </div> 
     <div id="img-container"> 
      <img id="preview" src=""> 
     </div> 
     <div class="input-group" name="acao"> 
      <meta charset="UTF-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <title>Botão Comprar Agora</title> 
      <style>
        .botao-comprar {
            display: block;
            width: 300px;
            padding: 10px;
            background-color: #ff69b4; /* Cor rosa */
            color: #fff;
            text-align: center;
            border-radius: 25px; /* Borda arredondada */
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            border: 2px solid #ff69b4; /* Borda da mesma cor do fundo */
        }
        .botao-comprar:hover {
            background-color: #ff1493; /* Rosa mais escuro no hover */
        }
    </style> 
      <a href="1.php" class="botao-comprar">Continuar</a> 
     </div> 
    </form> 
   </div> 
  </div> 
  <script>
    function mascara(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "14");
   if (v.length == 3 || v.length == 7) i.value += ".";
   if (v.length == 11) i.value += "-";

}



</script> 
 </body>
</html>