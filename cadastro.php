<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
    <link rel="icon" type="image/png" href="imagens\iconeLogin.png">
    <link rel="stylesheet" href="css/style.css">

    <title>Minha Tela de Login</title>
    
</head>
    <body>
        <div class="tabela-login">
            <form action="cadastro_usuario.php" method="post">
                <div class="tabela">
                    <label for="username">Usuário:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="tabela">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="tabela">
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="tabela">
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
            <p>Já tem uma conta? <a href="index.php">Faça login</a></p>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>
