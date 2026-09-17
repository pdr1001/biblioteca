<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>

<main class="formulario">

    <div class="caixa-formulario">

        <h1>Cadastrar Livro</h1>

        <form>

            <div class="campo">
                <label for="nome">Titulo</label>
                <input type="text" id="titulo" name="titulo">
            </div>

            <div class="campo">
                <label for="ano">Ano da Publicacao</label>
                <input type="number" id="ano" name="ano">
            </div>

            <div class="campo">
                <label for="autor">Autor</label>
                <input type="text" id="autor" name="autor">
            </div>

            <div class="campo">
                <label for="resumo">Resumo</label>
                <textarea id="resumo" name="resumo"></textarea>
            </div>

            <div class="campo">
                <label for="categoria">Categoria</label>

                <select id="categoria" name="categoria">
                    <option>Categoria</option>
                </select>

            </div>

            <button type="submit">Cadastrar</button>

        </form>

    </div>

</main>

<?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>