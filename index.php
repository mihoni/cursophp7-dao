<?php 

require_once "config.php";

$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("use");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario =  new Usuario();
//$usuario->login("user","12345");

//echo $usuario;

//Criando um novo usuário
/*
$aluno = new Usuario();

$aluno->setDeslogin("aluno");
$aluno->setDessenha("@luno");

$aluno->insert();
echo $aluno;
*/

//Update
/*
$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "!@#$%");

echo $usuario;
*/
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;
 ?>