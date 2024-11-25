<?php
include_once "header3.php";
session_start(['login']);


$path = 'DB/';

$file = $path . 'conection.php';

include($file);
 
if(isset($_POST['submit'])){
  echo '<script>alert("Campos Vazios")</script>';
header('login.php');

}

include_once 'testlogin.php'; 

?>

<div class="menu">

 <div class="container">
    <div class="form-img">
      <img src="assets/Logo.png" alt="">
    </div>
    <div class="form">
      <form action="home.php" method="$_POST">
        <div class="form-header">
          <div class="title">
            <h1>Faça seu login</h1>
          </div>
          <div class="cadastro-button">
            <button  type="button" onclick="window.location.href='formCadastro.php'">cadastrar</button>
          </div>
        </div>

        <div class="input-group">

          <div class="input-box">
            <label for="email">Seu email</label>
            <input type="text" name="nome" placeholder="Digite seu email" required>
          </div>

          <div class="input-box">
            <label for="senha">Sua senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha" required>
          </div>

          <div class="continue-button">
            <input type="submit" value="Entrar">
          </div>

          </div>
        
        </form>
      </div>
    </div>
        
 </div>

<?php
include_once "footer.php";
?>