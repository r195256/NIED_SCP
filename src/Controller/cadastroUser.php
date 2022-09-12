<?php 

//require "../Model/User.php";

//require($_SERVER["DOCUMENT_ROOT"]."/")
require($_SERVER["DOCUMENT_ROOT"]."/src/Model/User.php");
//require($_SERVER["DOCUMENT_ROOT"]."/config.php");




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

        $log = $this->cadastroUsuario->getLogin();
        $senha = $this->cadastroUsuario->getPassword();


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $log = $_POST['login'];
            $senha = $_POST['password'];
            echo "Legal!";
            $mysql = new mysqli('localhost', 'root', 'Unicamp123', 'patrimonio');
            $mysql->set_charset('utf8');
            $stmt = "INSERT INTO usuarioPatrimonio (UsuarioLogin, UsuarioSenha) VALUES ('$log', '$senha')";
            echo $stmt;
            $mysql->query($stmt);
    
            $resul = $mysql->query("SELECT * FROM `usuarioPatrimonio`");
            echo $resul;

        }



        $this->cadastroUsuario->setLogin($_POST['login']);
        $this->cadastroUsuario->setPassword(md5($_POST['password']));

        //$log = $this->cadastroUsuario->getLogin();
        //$senha = $this->cadastroUsuario->getPassword();
        


        //$sql->query();
        //$sql->query("INSERT INTO usuarioPatrimonio (UsuarioLogin, UsuarioSenha) VALUES ($this->cadastroUsuario->getLogin(), $this->cadastroUsuario->getPassword());");

        //$this->cadastroUsuario->getLogin();
        //$this->cadastroUsuario->getPassword();




            if($this->cadastroUsuario->getPassword() == md5('Teste123')){
                echo "SENHA CORRETA!\n";
            }
        //echo "{$this->cadastroUsuario->getLogin()} and {$this->cadastroUsuario->getPassword()}\n";
        //echo var_dump($this->cadastroUsuario);
    }


}
$mysql = new mysqli('localhost', 'root', 'Unicamp123', 'patrimonio');
$mysql->set_charset('utf8');

if ($mysql === FALSE){
    echo "Erro na conexão";
}
new cadastroUser();
?>


