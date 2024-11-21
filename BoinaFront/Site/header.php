 <?php

class Log {
    
    public static $contador = 0;

    public static function registrar($mensagem) {

        self::$contador++;

        file_put_contents('log.txt', "[" . date('Y-m-d H:i:s') . "] " . $mensagem . PHP_EOL, FILE_APPEND);
        
        echo "Log registrado: " . $mensagem . PHP_EOL;
    }

    public static function obterContador() {
        return self::$contador;
    }
}


Log::registrar('Sistema iniciado');
Log::registrar('Usuário logado');
Log::registrar('Erro ao acessar o banco de dados');


echo "Total de logs registrados: " . Log::obterContador(); 

?>
 <!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css\login.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">

    <title> Menu Responsivo </title>
</head>
<body>
    <header>
        <nav class="nav-bar">
            <div class="logo"> 
                <h1>Boininha Açucarada</h1>
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="#" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Projetos</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
                </ul>                       
            </div>

            <div class="login-button">
                <button><a href="#"> Entrar </a></button>
            </div>

                <div class="mobile-menu-icon">
                    <button onclick="menushow()"><img class="icon" src="img/menu_white_36dp.svg"></button>
                </div>
            </nav>
            <div class="mobile-menu">
                <ul>
                    <li class="nav-item"><a href="#" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Projetos</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
                </ul>
                
            <div class="login-button">
                <button><a href="#"> Entrar </a></button>
            </div>
                
            </div>
            </div>
    </header>

    <script src="mobile_navbar.js"></script>
 