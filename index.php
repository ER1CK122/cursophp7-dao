<?php 

require_once("config.php");

$ari = new Usuario();

$ari->loadByid(3);

echo $ari;


// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);

 ?>