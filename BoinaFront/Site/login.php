<?php
include_once "header.php";
?>


<div class="fundo">
<h2>Faça o seu Login</h2>

<div class="forms">

<form action="loginVer.php" method = "post">
    <label>Digite o email cadastrado:</label><br>
   <div class="separando"> <input type="text" name="txt_email" required maxlength=150><br></div>
    <label>Digite a senha:</label><br>
   <div class="separando"> <input type="password" name="txt_senha" required maxlength=50><br></div>
  <div class="separando">  <input type="submit" value="logar"> <p>Não tem uma conta? <a href="formCadastro.php">Criar</a></p></div>
</form>

</div>

</div>


<?php
include_once "footer.php";
?>