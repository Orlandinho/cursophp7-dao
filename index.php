<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//$user = new Usuario();

//$user->loadById(3); //traz apenas os dados de uma entrada do banco de dados

//echo $user;

//$lista = Usuario::getList();//como o método é estático não é necessário instânciar um novo objeto da classe para fazer uso dele

//echo json_encode($lista);

//$busca = Usuario::search("toni");//busca por varias entradas que contenham o mesmo texto

//echo json_encode($busca);

$usuario = new Usuario();

$usuario->login("Orland","mypassword");

echo $usuario;

?>