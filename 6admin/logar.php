

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="logar.css">
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
                <?php if (isset($_SESSION['id']) && $_SESSION['id'] == 1): ?>
                <li><a href="6admin/admin.php">Admin</a></li>
                <?php endif; ?>
    </ul>
</header>

<br>

<!-- . -->
<div class="container">
    
    <form action="" method="post">
        <h1>Login</h1>
        <input type="text" name="email" placeholder="Digite o seu email">
        <input type="password" name="senha" placeholder="Digite sua senha">
        <input type="submit" value="Entrar">
        <a href="create.php" class="create">Criar conta</a>
        <a href="../6admin/logout.php" class="create">Logout</a>


    </form>
    
</div>
</body>
</html>

<?php 
include '../conecta_mysql.inc';

if (!isset($_SESSION)) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['email'])) {
        echo "Preencha seu email!";
    } else if (empty($_POST['senha'])) {
        echo "Preencha sua senha!";
    } else {

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $result = mysqli_query($conexao, $sql);

        $user_sql = "SELECT usuario FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $result_user = mysqli_query($conexao,$user_sql);
        $user = mysqli_fetch_assoc($result_user);
        $usuario = mysqli_fetch_assoc($result);

        if ($usuario) {
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['usuario'] = $user['usuario'];
            header("Location: ../index.php");
            

        } else {
            echo "Email ou senha incorretos!";
        }
    }
}
?>