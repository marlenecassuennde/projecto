<?
include_once('coneccao.php');

$usuario = $_POST('usuario');
$senha = $_POST('senha');
$sql_logar = mysqli_query($conecao,"SELECT * FROM `tb_usuario` WHERE usuario = '$usuario' and senha = '$senha'");

if($sql_logar==true){


  /*  header('location:../index.html');
}
else{
    header('location:cadastrar.html');
}*/

echo "  <script>
    
    alert('Bem-Vindo ');
    window.location.href='../index.html';
    
    </script> ";

} 

else {

    echo "  <script>
    
    alert('Voce não está cadastrado ');
    window.location.href='cadastrar.html';
    
    </script> ";
}
?>

