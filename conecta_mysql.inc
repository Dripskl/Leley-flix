<<<<<<< HEAD
<?php 
$conexao = mysqli_connect('localhost', 'root', '', 'leleyflix');
mysqli_set_charset($conexao, 'utf8');
if ($conexao->connect_error){
    die("falha ao realizar a conexao: " . $conexao->connect_error);
}
=======
<?php 
$conexao = mysqli_connect('localhost', 'root', '', 'leleyflix');
mysqli_set_charset($conexao, 'utf8');
if ($conexao->connect_error){
    die("falha ao realizar a conexao: " . $conexao->connect_error);
}
>>>>>>> 5e8c50bb1212bb48f036da0f682076071b382549
?>