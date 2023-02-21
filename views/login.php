<?php

include_once('coneccao.php');
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$sql_logar = mysqli_query($coneccao, "SELECT*FROM tb_usuario");

?>