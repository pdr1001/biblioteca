<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>

<main>

    <h1 class="titulo-pagina">Perfil</h1>

    <div class="perfil">

        <div class="dados-usuario">
            <p>NOME DO USUARIO</p>
            <p>EMAIL</p>
        </div>

        <div class="link-perfil">
            <a href="../livro/gerenciar_livros.php">Administrar livro</a>
             

            <a href="../categoria/gerenciar_categorias.php">Administrar categoria</a>
            
        </div>

    </div>

</main>

<?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>