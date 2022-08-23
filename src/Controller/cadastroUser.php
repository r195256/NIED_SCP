<?php 

require "../Model/User.php";

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
        echo "{$this->cadastroUsuario->getLogin()} and {$this->cadastroUsuario->getPassword()}";
    }
}
new cadastroUser();
?>


