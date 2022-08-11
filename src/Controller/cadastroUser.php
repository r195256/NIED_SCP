<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCP - Cadastro Usuário</title>
</head>
<body>
    <h1>Login</h1>
    <form class="formularioUsuario" id="formLogin" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="labelCampoUsuario">
            <label>Login</label>
            <input type="text" name="login" id="loginUser">
        </div>
        <div class="labelCampoUsuario">
            <label>Senha</label>
            <input type="password" name="password" id="senhaUser">
        </div>
        <div class="labelCampoUsuario">
            <label>Repita a senha</label>
            <input type="retypePassword" name="retypePassword" id="retypeSenhaUser">
        </div>
        <button type="submit" value="cadastrar">Cadastrar</button>
        <button type="submit" value="cancelar">Cancelar</button>
    </form>
</body>
</html> -->

<?php 

require "src/Model/User.php";

class cadastroUser
{
    private $cadastroUsuario;

    public function __construct(){
        $this->cadastroUsuario = new User();
        $this->adicionar();
    }

    public function adicionar(){
        $this->cadastroUsuario->setLogin($_POST['login']);
        $this->cadastroUsuario->setPassword($_POST['password']);

    }
}
?>


