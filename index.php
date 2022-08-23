<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCP - Sistema de cadastro de patrimônio </title>
</head>

    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
<body>
    <h1>Login</h1>
    <form class="formularioUsuario" id="formLogin" method="post" action="src/Controller/cadastroUser.php">
            <div class="labelCampoUsuario">
                <label>Login</label>
                <input type="text" name="login" id="loginUser">
            </div>
            <div class="labelCampoUsuario">
                <label>Senha</label>
                <input type="password" name="password" id="senhaUser">
            </div>
            <button type="submit" value="enter">Entrar</button>
            <a href="src/Controller/cadastroUser.php">Cadastre-se</a>
    </form>
</body>

