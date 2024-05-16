<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>

    <div class="acesso">
            <form action="recebe_login.php" method="POST">
            <label style="font-size: 18px;" for="userName">Nome</label><br>
            <input style="border-radius: 15px; border: 1px solid gray; padding: 6px" type="text" name="userName" placeholder="Digite seu nome"><br>
            <label style="font-size: 18px;" for="senhaUsuario">Senha</label><br>
            <input style="border-radius: 15px; border: 1px solid gray; padding: 6px" type="password" name="senhaUsuario" placeholder="Digite seu nome"><br><br>
            <button class="btn" type="submit">Entrar</button>
        </form>
    </div>

    
</body>
</html>