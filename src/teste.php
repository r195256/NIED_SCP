<?php 

require($_SERVER["DOCUMENT_ROOT"]."/config.php");
require($_SERVER["DOCUMENT_ROOT"].'/src/Model/Equipamento.php');


echo 'testando...<br>';

$equipamentoAtual = new Equipamento;
$equipamentoAtual->setMarca($_POST['marca']);
$equipamentoAtual->setModelo($_POST['modelo']);
$equipamentoAtual->setCategoria($_POST['categoria']);
//if($equipamentoAtual->getMarca() != null){
    echo 'Marca : '.$equipamentoAtual->getMarca().'<br>';
    echo 'Modelo : '.$equipamentoAtual->getModelo().'<br>';
    echo 'Categoria : '.$equipamentoAtual->getCategoria().'<br>';
//}
?>