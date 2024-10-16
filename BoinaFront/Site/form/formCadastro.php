<?php
include_once "header.php";
?>


 <h2>Cadastro.</h2>


<div class="forms">
<form action="cadastrar.php" method="post">
<label>Digite seu nome:</label><br>
    <div class="separando">
      <input type="text" name="txt_nome" required maxlength="150">
    </div>

    <label>Digite seu CPF:</label><br>
    <div class="separando">
      <input type="text" name="txt_cpf" required maxlength="20">
    </div>

    <label>Digite seu email:</label><br>
    <div class="separando">
      <input type="email" name="txt_email" required maxlength="150">
    </div>

    <label>Registre uma senha:</label><br>
    <div class="separando">
      <input type="password" name="txt_senha" required maxlength="50">
    </div>

    <label>Informe sua data de nascimento:</label><br>
    <div class="separando">
      <input type="date" name="dt_data" required>
    </div>

    <label>Digite seu CEP:</label><br>
    <div class="separando">
      <input type="text" name="txt_cep" required maxlength="10">
    </div>

    <label>Digite o nome da sua rua:</label><br>
    <div class="separando">
      <input type="text" name="txt_logadouro" required maxlength="100">
    </div>

    <label>Digite o nome do seu bairro:</label><br>
    <div class="separando">
      <input type="text" name="txt_bairro" required maxlength="30">
    </div>

    <label>Digite o nome da sua cidade:</label><br>
    <div class="separando">
      <input type="text" name="txt_cidade" required maxlength="30">
    </div>

    <label>Digite seu UF:</label><br>
    <div class="separando">
      <input type="text" name="txt_uf" required maxlength="3">
    </div>
<input type="submit" value="Cadastrar"> <p>Já tem uma conta? <a href="login.php">Entrar</a></p>

</form>
</div>
<?php
include_once "footer.php";
?>
