<?php 
include '../6admin/protect.php'
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Minhas Séries e Filmes Favoritos</title>
    <link rel="stylesheet" href="formulario.css">
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

<!-- Inicio do formulario-->
 <main class="formulario">
    <div class="forms">
        <h1>Formulario De Indicação</h1>
        <form onsubmit="enviarFormulario(event)" id="meuFormulario">
                
            <input type="text" placeholder="Nome" class="nome" required><br>
                
            <input type="date" name="datanas" id="datanas" required><br>
                
            <select name="genero" id="genero" required>
                    <option value="generonone" disabled selected>Selecione um gênero</option>
                    <option value="acao">Ação</option>
                    <option value="aventura">Aventura</option>
                    <option value="comedia">Comédia</option>
                    <option value="drama">Drama</option>
                    <option value="fantasia">Fantasia</option>
                    <option value="ficcao-cientifica">Ficção Científica</option>
                    <option value="romance">Romance</option>
                    <option value="terror">Terror</option>
                    <option value="suspense">Suspense</option>
                    <option value="documentario">Documentário</option>
                    <option value="animacao">Animação</option>
                    <option value="musical">Musical</option>
                    <option value="biografia">Biografia</option>
                    <option value="misterio">Mistério</option>
                    <option value="policial">Policial</option>
                    <option value="historico">Histórico</option>
            </select>
                
            <h3>deixe sua indicaçao de Filme ou Série a baixo</h3>
            
            <input type="text" name="filme" placeholder="Nome do Filme ou Serie"><br>
            <select name="tipo" id="tipo">
                    <option value="Tiponone" disabled selected>Selecione um Tipo</option>
                    <option value="Filme">Filme</option>
                    <option value="Serie">Serie</option>
            </select>
            <br>
            <select name="genero" id="genero" required>
                    <option value="generonone" disabled selected>Selecione um gênero</option>
                    <option value="acao">Ação</option>
                    <option value="aventura">Aventura</option>
                    <option value="comedia">Comédia</option>
                    <option value="drama">Drama</option>
                    <option value="fantasia">Fantasia</option>
                    <option value="ficcao-cientifica">Ficção Científica</option>
                    <option value="romance">Romance</option>
                    <option value="terror">Terror</option>
                    <option value="suspense">Suspense</option>
                    <option value="documentario">Documentário</option>
                    <option value="animacao">Animação</option>
                    <option value="musical">Musical</option>
                    <option value="biografia">Biografia</option>
                    <option value="misterio">Mistério</option>
                    <option value="policial">Policial</option>
                    <option value="historico">Histórico</option>
            </select>
            <br>
            </label>
            <h4>Por que deveríamos assistir ao seu filme ou Série? </h4>
            <textarea name="Porque" id="Porque" rows="3" cols="50">
            </textarea><br>
            <button type="submit">Enviar Indicaçao</button>
        </form>
    </div>  
        
 </main>

</body>
</html>