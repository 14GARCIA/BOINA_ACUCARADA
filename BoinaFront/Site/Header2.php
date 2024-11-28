
<!DOCTYPE html>
<html lang="pt-br">
<head>
 
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="principal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     

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
                    <li class="nav-item"><a href="home.html" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="produtos.php" class="nav-link">Produtos</a></li>
                    <li class="nav-item"><a href="sobrenos.php" class="nav-link">Sobre nós</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                </ul>                       
            </div>

           

                <div class="mobile-menu-icon">
                    <button onclick="menushow()"><img class="icon" src="assets/menu_white_36dp.svg"></button>
                </div>
            </nav>
            <div class="mobile-menu">
                <ul>
                <li class="nav-item"><a href="home.html" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="produtos.php" class="nav-link">Produtos</a></li>
                    <li class="nav-item"><a href="sobrenos.php" class="nav-link">Sobre nós</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                </ul>
                
        
                
            </div>
            </div>
    </header>

    <script src="mobile_navbar.js"></script>