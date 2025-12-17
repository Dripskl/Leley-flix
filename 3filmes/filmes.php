<<<<<<< HEAD
<?php 
include '../6admin/protect.php'
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Minhas Séries e Filmes Favoritos</title>
    <link rel="stylesheet" href="filmes.css">
</head>

<body>
            <a id="Inicio"></a>
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

<!--Cards inicio-->
    <div class="botao">
        <a href="#Final"><img src="../imagens/seta-baixo.png" alt="Seta Baixo"></a>
    </div>

    <div class="cards">
        <div class="card">
            <img src="cards/interstellar.png" alt="filme 1">
            <div class="card-text">
                <h3>Interstellar</h3>
                <p>Filme de ficção científica que acompanha Cooper, um ex-piloto da NASA, em uma missão espacial para encontrar um novo lar para a humanidade, já que a Terra está morrendo. Viajando por buracos de minhoca e planetas distantes, a trama mistura emoção, física teórica e laços familiares em uma jornada épica pelo espaço e pelo tempo.</p>
            </div>
        </div>
        <div class="card">
            <img src="cards/baby drive.png" alt="filme 2">
            <div class="card-text">
                <h3>Ritmo de Fuga</h3>
                <p>Filme de ação e música que segue Baby, um jovem motorista talentoso que usa músicas para se concentrar durante assaltos. Envolvido com criminosos perigosos, ele busca se libertar do mundo do crime para viver uma vida normal com seu novo amor. Ritmo intenso, trilha sonora marcante e direção estilosa marcam a trama.</p>
            </div>
        </div>
        <div class="card">
            <img src="cards/clube da luta.png" alt="filme 3">
            <div class="card-text">
                <h3>Clube da Luta</h3>
                <p>Filme psicológico que acompanha um homem insatisfeito com a vida que conhece Tyler Durden, um vendedor carismático. Juntos, criam um clube secreto onde homens extravasam suas frustrações em lutas. A história explora identidade, consumo e loucura, com reviravoltas marcantes e um final impactante</p>
            </div>
        </div>
        <div class="card">
            <img src="cards/truman.png" alt="filme 4">
            <div class="card-text">
                <h3>O Show de Truman</h3>
                <p>Truman vive uma vida comum até começar a suspeitar que tudo ao seu redor é falso. Aos poucos, descobre que sua existência inteira é um reality show transmitido para o mundo. O filme mistura drama e crítica social, abordando controle, liberdade e a busca pela verdade.</p>
            </div>
        </div>
        <div class="card">
            <img src="cards/lobo.png" alt="filme 5">
            <div class="card-text">
                <h3>O Lobo de Wall Street</h3>
                <p>Baseado em fatos reais, o filme acompanha Jordan Belfort, um corretor ambicioso que enriquece com esquemas ilegais na bolsa de valores. Com muito luxo, excessos e caos, a trama mostra sua ascensão e queda, explorando ganância, poder e consequências.</p>
            </div>
        </div>
        <div class="card">
            <img src="cards/homem de ferro.png" alt="filme 6">
            <div class="card-text">
                <h3>Homem de Ferro</h3>
                <p>Tony Stark, um gênio bilionário e fabricante de armas, é sequestrado e forçado a construir uma arma. Em vez disso, cria uma armadura tecnológica para escapar. Após isso, decide usar sua invenção para combater o mal como o Homem de Ferro. Marca o início do Universo Cinematográfico da Marvel.</p>
            </div>
        </div>
    </div>
    <div class="botao">
        <a id="Final"></a>
        <a href="#Inicio"><img src="../imagens/seta-cima.png" alt="Seta Baixo"></a>
    </div>
<!--Cards Fim-->

=======
<?php 
include '../6admin/protect.php'
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Minhas Séries e Filmes Favoritos</title>
    <link rel="stylesheet" href="filmes.css">
</head>

<body>
            <a id="Inicio"></a>
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

<!--Cards inicio-->
    <div class="botao">
        <a href="#Final"><img src="../imagens/seta-baixo.png" alt="Seta Baixo"></a>
    </div>

    <div class="cards">
        <div class="card">
            <img src="cards/interstellar.png" alt="filme 1">
            <div class="card-text">
                <h3>Interstellar</h3>
                <p>Filme de ficção científica que acompanha Cooper, um ex-piloto da NASA, em uma missão espacial para encontrar um novo lar para a humanidade, já que a Terra está morrendo. Viajando por buracos de minhoca e planetas distantes, a trama mistura emoção, física teórica e laços familiares em uma jornada épica pelo espaço e pelo tempo.</p>
            </div>
        </div>
        <div class="card">
            <img src="cards/baby drive.png" alt="filme 2">
            <div class="card-text">
                <h3>Ritmo de Fuga</h3>
                <p>Filme de ação e música que segue Baby, um jovem motorista talentoso que usa músicas para se concentrar durante assaltos. Envolvido com criminosos perigosos, ele busca se libertar do mundo do crime para viver uma vida normal com seu novo amor. Ritmo intenso, trilha sonora marcante e direção estilosa marcam a trama.</p>
            </div>
        </div>
        <div class="card">
            <img src="cards/clube da luta.png" alt="filme 3">
            <div class="card-text">
                <h3>Clube da Luta</h3>
                <p>Filme psicológico que acompanha um homem insatisfeito com a vida que conhece Tyler Durden, um vendedor carismático. Juntos, criam um clube secreto onde homens extravasam suas frustrações em lutas. A história explora identidade, consumo e loucura, com reviravoltas marcantes e um final impactante</p>
            </div>
        </div>
        <div class="card">
            <img src="cards/truman.png" alt="filme 4">
            <div class="card-text">
                <h3>O Show de Truman</h3>
                <p>Truman vive uma vida comum até começar a suspeitar que tudo ao seu redor é falso. Aos poucos, descobre que sua existência inteira é um reality show transmitido para o mundo. O filme mistura drama e crítica social, abordando controle, liberdade e a busca pela verdade.</p>
            </div>
        </div>
        <div class="card">
            <img src="cards/lobo.png" alt="filme 5">
            <div class="card-text">
                <h3>O Lobo de Wall Street</h3>
                <p>Baseado em fatos reais, o filme acompanha Jordan Belfort, um corretor ambicioso que enriquece com esquemas ilegais na bolsa de valores. Com muito luxo, excessos e caos, a trama mostra sua ascensão e queda, explorando ganância, poder e consequências.</p>
            </div>
        </div>
        <div class="card">
            <img src="cards/homem de ferro.png" alt="filme 6">
            <div class="card-text">
                <h3>Homem de Ferro</h3>
                <p>Tony Stark, um gênio bilionário e fabricante de armas, é sequestrado e forçado a construir uma arma. Em vez disso, cria uma armadura tecnológica para escapar. Após isso, decide usar sua invenção para combater o mal como o Homem de Ferro. Marca o início do Universo Cinematográfico da Marvel.</p>
            </div>
        </div>
    </div>
    <div class="botao">
        <a id="Final"></a>
        <a href="#Inicio"><img src="../imagens/seta-cima.png" alt="Seta Baixo"></a>
    </div>
<!--Cards Fim-->

>>>>>>> 5e8c50bb1212bb48f036da0f682076071b382549
</html>