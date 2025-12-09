<?php 
include '6admin/protect.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Minhas Séries e Filmes Favoritos</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <!-- Cabeçalho Inicio -->
    <header>
        <a href="index.php"><img src="imagens/LELEYFLIX - logo.png" alt="Logo"></a>
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="2series/series.php">Séries</a></li>
            <li><a href="3filmes/filmes.php">Filmes</a></li>
            <li><a href="4formulario/formulario.php">Indique uma Série ou Filme</a></li>
            <li><a href="5blog/blog.php">Blog</a></li>
            <li><a href="6admin/logar.php">perfil</a></li>
            <?php if (isset($_SESSION['id']) && $_SESSION['id'] == 1): ?>
            <li><a href="6admin/admin.php">Admin</a></li>
            <?php endif; ?>

        </ul>
    </header>
    <!-- Cabeçalho Fim -->

    <main class="bem">
        <p>🎬 Bem-vindo ao <span class="leley">Leleyflix!</span></p> 
    </main>
    <div class="texto">
        <p>Este site foi criado para compartilhar minhas séries e filmes favoritos. Sinta-se à vontade para explorar, conhecer minhas recomendações e até sugerir algo novo!</p>
        <p>Comece pelas <span class="serie"><a href="2series/series.html">Series</a></span>!</p>
    </div>
</body>

</html> 