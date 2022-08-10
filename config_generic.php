<?php

$mysql = new mysqli('localhost', 'root', 'password', 'bd_name');
$mysql->set_charset('utf8');

if ($mysql == FALSE){
    echo "Erro na conexão";
}