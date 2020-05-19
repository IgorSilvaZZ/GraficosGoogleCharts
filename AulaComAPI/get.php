<?php

    require('Conexao.php');
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Origin, Content-Type, Authorization, Accept, X-Requested-With, x-xsrf-token");

    try {

        $conexao = Conexao::pegarConexao();
        $querySelect = "select (select count(idUsuario) from tbUsuario) , (select count(idOng) from tbOng)";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        echo ' { "lista":'.json_encode($lista).' }';

        
    } catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
?>