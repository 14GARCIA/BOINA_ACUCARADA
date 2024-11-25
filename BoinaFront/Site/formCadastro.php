<?php
include_once "Header2.php";

 
 
 
$path = 'DB/';

$file = $path . 'conection.php';

include($file);
 
if(isset($_POST['submit'])){
header('location:formCadastro.php');
}
 

$nome=$_POST['nome'];
$email=$_POST['email']; 
$cpf=$_POST ['cpf'];
$cidade =$_POST ['cidade']; 
$bairro =$_POST ['bairro'];
$rua =$_POST['rua']; 
$uf =$_POST['uf'];
$cep =$_POST[ 'cep'];
$senha =$_POST['senha'];
$confsenha=$_POST['confsenha']; 
$senhaOfc ; 
if ($senha != $confsenha){ 
  echo '<script>alert("Senhas diferentes. Digite novamente!")</script>';
}
 $sqlcommand = "INSERT INTO clientes (nomeClien,cpfClien,  emailClien, cepClien, lograClien, cidadeClien, bairroClien,ufClien,senhaClien ) VALUES  (   '$nome','$cpf','$email','$cep','$rua','$cidade','$bairro','$uf','$senhaOfc');"
 

?>
 
 <div class="menu">
  <div class="container">
    <div class="form-img">
      <img src="assets/Logo.png" alt="">
    </div>
    <div class="form">
      <form action="home.php" method="POST">
        <div class="form-header">
          <div class="title">
            <h1>Cadastre-se</h1>
          </div>
          <div class="login-button">
            <button  type="button" onclick="window.location.href='login.php'">Entrar</button>
          </div>
        </div>

        <div class="input-group">

          <div class="input-box">
            <label for="nome">Seu nome</label>
            <input type="text" name="nome" placeholder="Digite seu nome" required>
          </div>
          <div class="input-box">
            <label for="email">Seu email</label>
            <input type="text" name="email" placeholder="Digite seu email" required>
          </div>
          <div class="input-box">
            <label for="cpf">Seu CPF</label>
            <input type="text" name="cpf" placeholder="Digite seu CPF" required>
          </div>
          <div class="input-box">
            <label for="senha">Sua senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha" id = "password" required>
          </div>
          <div class="input-box">
            <label for="confsenha">Confirme sua senha</label>
            <input type="password" name="confsenha" placeholder="Digite sua senha novamente" id = "confirm_password" required>
          </div>
          <div class="input-box">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" placeholder="Digite sua cidade" required>
          </div>
          <div class="input-box">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" placeholder="Digite seu bairro" required>
          </div>
          <div class="input-box">
            <label for="rua">Rua</label>
            <input type="text" name="rua" placeholder="Digite o nome da sua rua" required>
          </div>
          <div class="input-box">
            <label for="uf">UF</label>
            <input type="text" name="uf" placeholder="Digite seu UF" required>
          </div>
          <div class="input-box">
            <label for="cep">CEP</label>
            <input type="text" name="cep" placeholder="Digite seu CEP" required>
          </div>
          <div class="continue-button">
            <button type="submit">Continuar</button>
          </div>
        </div>
        
      </form>
    </div>
  </div>
 </div>
 
<script>

 var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Senhas diferentes!");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword();
confirm_password.onkeyup = validatePassword();</script>
<?php
include_once "footer.php";
?>