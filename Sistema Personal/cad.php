<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Fonte -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Raleway
:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;
1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/styles/login.css">
    <title>pargina de login </title>
</head>
<body>
    <div class="body">
        
        <div class="containerCadastro">
           <h1>Faça o seu cadastro</h1>
           <form action="login.php" method="post">
                <div class="user">
                        <p>usuário</p>
                        <i class="fa fa-user"></i>
                        <input type="text" name="usuario" id="user" placeholder="digite seu usuário">
                    </div>
                    <div class="email">
                        <p>email</p>
                        <i class="fa fa-user"></i>
                        <input type="email" name="usuario" id="email" placeholder="digite seu email">
                    </div>
                    <div class="password">
                        <p>senha</p>
                        <i class="fa fa-user"></i>
                        <input type="password" name="senha" id="password" placeholder="digite sua senha">
                    </div>
                    <div class="password">
                        <p>Confirme sua senha</p>
                        <i class="fa fa-user"></i>
                        <input type="password" name="senha" id="confirm-password" placeholder="digite sua senha novamente">
                    </div>
                    <div class="login">
                        <button type="submit">Login</button>
                    </div>
                </div>
            </form>
        <script src="../Sistema Personal/assets/scripts/cad.js"></script>
    </div>
</body>
</html>