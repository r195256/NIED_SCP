<?php 

//require 'config.php';
require 'src/Equipamento.php';



?>


<!DOCTYPE html>
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
    <form class="formPatrimonio" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="label-campo">
            <label>Marca: </label>
            <input type="text" name="marca" id="marca" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Modelo: </label>
            <input type="text" name="modelo" id="modelo" class="input-formPatrimonio">
        </div class="label-campo">
            <label>Categoria: </label>
            <input type="text" name="categoria" id="categoria" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Outros: </label>
            <input type="text" name="outros" id="outros" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Processador: </label>
            <input type="text" name="processador" id="processador" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Complemento: </label>
            <input type="text" name="complemento" id="complemento" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Memória: </label>
            <input type="text" name="memoria" id="memoria" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Disco: </label>
            <input type="text" name="disco" id="disco" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Monitor: </label>
            <input type="text" name="monitor" id="monitor" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Part Number: </label>
            <input type="text" name="partNumber" id="partNumber" class="input-formPatrimonio">
        </div>
        <div class="label-campo">        
            <label>Serial Number: </label>
            <input type="text" name="serialNumber" id="serialNumber" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Tag Service: </label>
            <input type="text" name="tagService" id="tagService" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Adicional: </label>
            <input type="text" name="adicional" id="adicional" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Sistema operacional: </label>
            <input type="text" name="sistemaOperacional" id="sistemaOperacional" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Ano: </label>
            <input type="text" name="ano" id="ano" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Garantia: </label>
            <input type="text" name="garantia" id="garantia" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Projeto: </label>
            <input type="text" name="projeto" id="projeto" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Financiador: </label>
            <input type="text" name="financiador" id="financiador" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Loja: </label>
            <input type="text" name="loja" id="loja" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Nota fiscal: </label>
            <input type="text" name="notaFical" id="notaFiscal" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Data: </label>
            <input type="text" name="data" id="data" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Quantia: </label>
            <input type="text" name="quantia" id="quantia" class="input-formPatrimonio">
        </div>
        <div class="label-campo">
            <label>Patrimônio: </label>
            <input type="text" name="patrimonio" id="patrimonio" class="input-formPatrimonio">
        </div>
        <div class='botoes'>
        <div class="botoes-modificacao">
        <button class="botao-modificador" type="submit" value='add'> Adicionar </button>
        <button class="botao-modificador" type="submit" value='change'> Alterar </button>
        <button class="botao-modificador" type="button"> Apagar </button>
        </div>
    </div>
        
    </form>
    

    <div class="botoes-navegacao">
        <button class="botao-navegacao" name="primeiroRegistro" id="primeiroRegistro" ></button>
        <button class="botao-navegacao" name="anteriorRegistro" id="anteriorRegistro"></button>
        <button class="botao-navegacao" name="proximoRegistro" id="proximoRegistro"></button>
        <button class="botao-navegacao" name="ultimoRegistro" id="ultimoRegistro"></button>
    </div>

    <?php  $equipamentoAtual = new Equipamento;
    $equipamentoAtual->setMarca($_POST['marca']); 
    echo $equipamentoAtual->getMarca();
    
    ?>

    

    
</body>
</html>