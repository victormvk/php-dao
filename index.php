<?php 

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

// Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("vk");
//echo json_encode($search);

//Carrega um usuário usuando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "77777");
//echo $usuario;

//Insere um usuário na tabela
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

//Altera um usuário na tabela
//$usuario = new Usuario();
//$usuario->loadById(7); //Carrega o usuario do ID 7
//$usuario->update("professor", "qwerty");
//echo $usuario;

//Deleta uma linha
$usuario = new Usuario();
$usuario->loadById(14);
$usuario->delete();

echo $usuario;

 ?>