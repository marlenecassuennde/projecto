<?php

include_once('coneccao.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$nomecompleto = $_POST['nome'];
$morada = $_POST['morada'];
$sexo = $_POST['sexo'];
$contacto = $_POST['telefone'];
$email = $_POST['email'];


$sql_cadastro=mysqli_query( $conecao, "INSERT INTO tb_usuario (usuario, senha, nomecompleto, morada, sexo, contacto, email) VALUES ('$usuario', '$senha', '$nomecompleto', '$morada', '$sexo', '$contacto', '$email')");


if($sql_cadastro==true){    

    echo "  <script>
    
    alert('Usuário Cadastrado com Sucesso ');
    window.location.href='login.html';
    
    </script> ";

} 

else {

    echo "  <script>
    
    alert('Falha no Cadastro ');
    window.location.href='cadastrar.html';
    
    </script> ";

}
?>