<?php 

require_once("config.php");


//Carrega um Usuário 
// $ari = new Usuario();
// $ari->loadbyid(3);
//echo $ari;


//Carrega uma Lista de Usuários
// $lista = Usuario::getList();
// echo json_encode($lista);


//Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("ju");
// echo json_encode($search);


//Carrega um usuário usando o login e a senha 
$usuario = new Usuario();
$usuario->login("junior", "123456");
echo $usuario;



// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);



 ?>