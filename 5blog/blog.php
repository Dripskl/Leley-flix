<?php 
include '../conecta_mysql.inc';
include '../6admin/protect.php';

// Se enviou o formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $nota = $_POST["nota"];

    $sql = "INSERT INTO blog (nome, descricao, nota) VALUES ('$nome', '$descricao', '$nota')";

    if (mysqli_query($conexao, $sql)) {
        header("Location: blog.php");
        exit;
    } else {
        echo "Erro ao adicionar: " . mysqli_error($conexao);
    }
}

$sql = "SELECT * FROM blog ORDER BY id DESC";
$result = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leleyflix</title>
    <link rel="stylesheet" href="blog.css">
</head>
<body>

<!-- Cabeçalho -->
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
            <li><a href="../6admin/admin.php">Admin</a></li>
            <?php endif; ?>

    </ul>
</header>

<br>

<!-- Lista dos cards -->
<div class="botao">
    <?php if(isset($_SESSION)):?>
    <a href="add.html" class="btn">Adicionar</a>
    <?php endif; ?>
    <?php if(!isset($_SESSION)):?>
    <a href="../6admin/logar.php" class="btn">Logar</a>
    <?php endif; ?>
    
</div>


<?php while ($c = mysqli_fetch_assoc($result)) : ?>
    <div class="cards">
        <div class="card">
            <div class="card-text">
                <?php if (isset($_SESSION['id']) && $_SESSION['id'] == 1): ?>
                <h2><?= $c["id"] ?></h2>
                <?php endif; ?>
                <h2 class="Name"><?= $c["nome"] ?></h2>
                <h4><?= $c["descricao"] ?></h4>
                <h4>Nota: &#9733; <?= number_format($c["nota"], 2, ',', '.') ?></h4><br><br>
                
            </div>
        </div>
    </div>
    <br>
<?php endwhile; ?>


</body>
</html>
