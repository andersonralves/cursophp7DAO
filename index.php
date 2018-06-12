<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

// Carrega um usuario
//$user = new Usuario();
//$user->loadById(6);
//echo $user;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios bucando pelo login
//$search = Usuario::search('b');
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login('jose', 'maria');
echo $usuario;