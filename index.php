<?php

require_once("config.php");

//codigo antes de criar a classe usuario.php
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); 
*/


//Carrega um único usuário 
//$root = new Usuario();
//$root->loadById(3);
//echo $root;


//Carrega um lista de usuário
//$list = Usuario::getList();
//echo json_encode($list);

//Carrega um lista de usuario buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search)


//Carrega dados do usuário buscando por login e senha
//$usuario = new Usuario();
//$usuario->login("admin", "!@#$");
//echo $usuario;

//Criar novo usuário
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

//Atualizar usuário
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->update("trocando_usuario","substituir");
echo $usuario;


?>