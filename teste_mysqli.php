<?php

	require_once('db.class.php');


	$sql = " SELECT * FROM usuarios";

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		$dados_usuario = mysqli_fetch_array($resultado_id, MYSQLI_NUM);

		
        var_dump($dados_usuario);
    } else {
		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
	}


	


?>