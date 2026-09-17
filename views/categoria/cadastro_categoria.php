<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>

<main class="formulario">

    <div class="caixa-formulario">
        <h1>Cadastrar Categoria</h1>

        <form>

            <div class="campo">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome">
            </div>
            <button type="submit">Cadastrar</button>

        </form>

    </div>


</main>

<?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>