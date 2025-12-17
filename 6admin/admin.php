<<<<<<< HEAD
<?php 
include '../conecta_mysql.inc';

// Checa conexão
if (!isset($conexao) || $conexao === false) {
    die('<script>alert("Erro na conexão com o banco de dados.");</script>');
}

// EXCLUIR POST
if (isset($_POST['id_post']) && $_POST['id_post'] !== "") {
    $id_post = intval($_POST['id_post']);
    $stmt = $conexao->prepare("DELETE FROM blog WHERE id = ?");
    $stmt->bind_param("i", $id_post);
    if ($stmt->execute()) {
        echo '<script>alert("Post excluído com sucesso");</script>';
    } else {
        echo '<script>alert("Erro ao excluir post: '.$stmt->error.'");</script>';
    }
    $stmt->close();
}

// EXCLUIR USUARIO
if (isset($_POST['id_usuario']) && $_POST['id_usuario'] !== "") {
    $id_usuario = intval($_POST['id_usuario']);
    $stmt = $conexao->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $id_usuario);
    if ($stmt->execute()) {
        echo '<script>alert("Usuário excluído com sucesso");</script>';
    } else {
        echo '<script>alert("Erro ao excluir usuário: '.$stmt->error.'");</script>';
    }
    $stmt->close();
}

// Fecha conexão
$conexao->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Excluir post</h1>
    <form action="admin.php" method="post">
        <input type="number" name="id_post" placeholder="ID do post" required>
        <input type="submit" value="Excluir Post">
    </form>

    <h1>Excluir usuário</h1>
    <form action="admin.php" method="post">
        <input type="number" name="id_usuario" placeholder="ID do usuário" required>
        <input type="submit" value="Excluir Usuário">
    </form>

    <br>
    <a href="../index.php">Voltar</a>
</body>
</html>
=======
<?php 
include '../conecta_mysql.inc';

// Checa conexão
if (!isset($conexao) || $conexao === false) {
    die('<script>alert("Erro na conexão com o banco de dados.");</script>');
}

// EXCLUIR POST
if (isset($_POST['id_post']) && $_POST['id_post'] !== "") {
    $id_post = intval($_POST['id_post']);
    $stmt = $conexao->prepare("DELETE FROM blog WHERE id = ?");
    $stmt->bind_param("i", $id_post);
    if ($stmt->execute()) {
        echo '<script>alert("Post excluído com sucesso");</script>';
    } else {
        echo '<script>alert("Erro ao excluir post: '.$stmt->error.'");</script>';
    }
    $stmt->close();
}

// EXCLUIR USUARIO
if (isset($_POST['id_usuario']) && $_POST['id_usuario'] !== "") {
    $id_usuario = intval($_POST['id_usuario']);
    $stmt = $conexao->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $id_usuario);
    if ($stmt->execute()) {
        echo '<script>alert("Usuário excluído com sucesso");</script>';
    } else {
        echo '<script>alert("Erro ao excluir usuário: '.$stmt->error.'");</script>';
    }
    $stmt->close();
}

// Fecha conexão
$conexao->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Excluir post</h1>
    <form action="admin.php" method="post">
        <input type="number" name="id_post" placeholder="ID do post" required>
        <input type="submit" value="Excluir Post">
    </form>

    <h1>Excluir usuário</h1>
    <form action="admin.php" method="post">
        <input type="number" name="id_usuario" placeholder="ID do usuário" required>
        <input type="submit" value="Excluir Usuário">
    </form>

    <br>
    <a href="../index.php">Voltar</a>
</body>
</html>
>>>>>>> 5e8c50bb1212bb48f036da0f682076071b382549
