<?php 

//require "../Model/User.php";


require($_SERVER["DOCUMENT_ROOT"]."/src/Model/User.php");
require($_SERVER["DOCUMENT_ROOT"]."/config.php");




class cadastroUser
{
    private $cadastroUsuario;

    public function __construct(){
        $this->cadastroUsuario = new User();
        $this->adicionar();
    }

    public function adicionar(){

        $this->cadastroUsuario->setLogin($_POST['login']);
        $this->cadastroUsuario->setPassword(md5($_POST['password']));

        $sql = "USE `patrimonio`;";
        $sql->query("INSERT INTO usuarioPatrimonio (UsuarioLogin, UsuarioSenha) VALUES ($this->cadastroUsuario->getLogin(), $this->cadastroUsuario->getPassword());");
        //$this->cadastroUsuario->getLogin();
        //$this->cadastroUsuario->getPassword();




            if($this->cadastroUsuario->getPassword() == md5('Teste123')){
                echo "SENHA CORRETA!\n";
            }
        echo "{$this->cadastroUsuario->getLogin()} and {$this->cadastroUsuario->getPassword()}\n";
        echo var_dump($this->cadastroUsuario);
    }
}
new cadastroUser();
?>


