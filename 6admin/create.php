<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="create.css">
</head>
<body>
    <header>
    <a href="../index.php"><img src="../imagens/LELEYFLIX - logo.png" alt="Logo"></a>
    <ul>
         <li><a href="../index.php">Início</a></li>
            <li><a href="../2series/series.php">Séries</a></li>
            <li><a href="../3filmes/filmes.php">Filmes</a></li>
            <li><a href="../4formulario/formulario.php">Indique uma Série ou Filme</a></li>
            <li><a href="../5blog/blog.php">Blog</a></li>
            <li><a href="../6admin/logar.php">login</a></li>
    </ul>
</header>

<br>

<br>
<div class="container">
    <form action="" method="post">
        <h1>Criar conta</h1>
        <input type="text" name="usuario" placeholder="Digite o seu Usuario">
        <input type="text" name="email" placeholder="Digite o seu email">
        <input type="password" name="senha" placeholder="Digite sua senha">
        <input type="submit">

    </form>
</div>
</body>
</html>

<?php
include '../conecta_mysql.inc';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";
    if (mysqli_query($conexao, $sql)) {
        header("Location: logar.php"); // evita duplicar ao atualizar
        exit;
    } else {
        echo "Erro ao adicionar: " . mysqli_error($conexao);
    }


}
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="create.css">
</head>
<body>
    <header>
    <a href="../index.php"><img src="../imagens/LELEYFLIX - logo.png" alt="Logo"></a>
    <ul>
         <li><a href="../index.php">Início</a></li>
            <li><a href="../2series/series.php">Séries</a></li>
            <li><a href="../3filmes/filmes.php">Filmes</a></li>
            <li><a href="../4formulario/formulario.php">Indique uma Série ou Filme</a></li>
            <li><a href="../5blog/blog.php">Blog</a></li>
            <li><a href="../6admin/logar.php">login</a></li>
    </ul>
</header>

<br>

<br>
<div class="container">
    <form action="" method="post">
        <h1>Criar conta</h1>
        <input type="text" name="usuario" placeholder="Digite o seu Usuario">
        <input type="text" name="email" placeholder="Digite o seu email">
        <input type="password" name="senha" placeholder="Digite sua senha">
        <input type="submit">

    </form>
</div>
</body>
</html>

<?php
include '../conecta_mysql.inc';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";
    if (mysqli_query($conexao, $sql)) {
        header("Location: logar.php"); // evita duplicar ao atualizar
        exit;
    } else {
        echo "Erro ao adicionar: " . mysqli_error($conexao);
    }


}
>>>>>>> 5e8c50bb1212bb48f036da0f682076071b382549
?>