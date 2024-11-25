<?php 
session_start(['UsuarioLogado']) ;



if(isset($_POST['submit'])&& !empty($_POST['email'])&&!empty($_POST['senha'])){

     
    include_once "Header.php";
     
    $path = 'DB/';
    
    $file = $path . 'conection.php';
    
    include($file);
 
    $email = $_POST ['email']; 
    $senha = $_POST [ 'senha'];

    $sql = "select * from usuarios Where email = '$email' and senha = '$senha' ";
    $result =  $conn ->query($sql); 
     
    if($result ->rowCount() == 1 ) 
    { 
        echo '<script>alert("Login Registrado com sucesso!")</script>';
        $_SESSION['UsuarioLogado']['email'] = $email; 
        $_SESSION['UsuarioLogado']['senha'] = $senha;
        header('location:index.php');
    }
     
}
else{
    echo '<script>alert("Senha ou Email Incorretos!")</script>';
    header('location:login.php');
    
}













?>