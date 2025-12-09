<?php 
include '../6admin/protect.php'
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Minhas Séries e Filmes Favoritos</title>
    <link rel="stylesheet" href="series.css">
</head>

<body>
    <!-- Cabeçalho inicio -->
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
    <!-- Cabeçalho Fim -->
<section class="cards">
    <div class="card">
        <img src="cards/stranger things.png" alt="Série 1">
        <h3>Stranger Things</h3>
        <p>Série de suspense e ficção científica ambientada nos anos 80. Conta a história de um grupo de amigos que enfrenta fenômenos sobrenaturais após o desaparecimento de um garoto e o surgimento de uma garota com poderes psíquicos. Mistura nostalgia, mistério e ação contra criaturas do Mundo Invertido.</p>
    </div>

    <div class="card">
        <img src="cards/rickandmorty.png" alt="Série 2">
        <h3>Rick And Morty</h3>
        <p>Uma série animada de ficção científica e comédia que segue as aventuras de Rick, um cientista genial e excêntrico, e seu neto Morty, um garoto inseguro. Juntos, viajam por universos paralelos enfrentando perigos bizarros, misturando humor ácido, críticas sociais e conceitos científicos malucos.</p>
    </div>

    <div class="card">
        <img src="cards/The Chosen.png" alt="Série 3">
        <h3>The Chosen</h3>
        <p>Série dramática que retrata a vida de Jesus Cristo sob a perspectiva das pessoas que o conheceram. Foca em personagens como Maria Madalena, Pedro e Mateus, mostrando suas histórias antes e depois de encontrarem Jesus. Humaniza os eventos bíblicos com profundidade emocional e narrativa envolvente.</p>
    </div>

    <div class="card">
        <img src="cards/brooklyn.png" alt="Série 4">
        <h3>Brooklyn Nine-Nine</h3>
        <p>Comédia policial que acompanha o detetive Jake Peralta e sua equipe na 99ª delegacia do Brooklyn. A série combina investigações, humor leve, laços de amizade e personagens carismáticos, como o sério capitão Holt e a competitiva Amy.</p>
    </div>

    <div class="card">
        <img src="cards/sheldon.png" alt="Série 5">
        <h3>Young Sheldon</h3>
        <p>Comédia que acompanha a infância de Sheldon Cooper, o gênio excêntrico de The Big Bang Theory. Aos 9 anos, ele entra no ensino médio e enfrenta os desafios de sua inteligência única, enquanto convive com sua família excêntrica no Texas dos anos 80.</p>
    </div>

    <div class="card">
        <img src="cards/breaking bad.png" alt="Série 6">
        <h3>Breaking Bad</h3>
        <p>Série dramática que acompanha Walter White, um professor de química que, após ser diagnosticado com câncer, decide fabricar metanfetamina para garantir o futuro financeiro da família. A trama mostra sua transformação de homem comum a criminoso perigoso, com muita tensão e reviravoltas.</p>
    </div>
    
</section>
</body>

</html>