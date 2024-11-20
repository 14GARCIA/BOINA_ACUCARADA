<?php
include_once "header.php";
?>

  <div class="container">
    <div class="form-img">
      <img src="assets/Logo.png" alt="">
    </div>
    <div class="form">
      <form action="home.php">
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
            <input type="password" name="senha" placeholder="Digite sua senha" required>
          </div>
          <div class="input-box">
            <label for="confsenha">Confirme sua senha</label>
            <input type="password" name="confsenha" placeholder="Digite sua senha novamente" required>
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


<?php
include_once "footer.php";
?>