<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>

<main>

<h1 class="titulo-pagina">Gerenciar Livros</h1>

<div class="botao-adicionar">
    <a href="cadastro.php">Adicionar</a>
</div>

<table>

<thead>
    <tr>
        <th>Titulo</th>
        <th>Ano</th>
        <th>Categoria</th>
        <th colspan="2">Opcoes</th>
    </tr>
</thead>

<tbody>
    <tr>
        <td>asd</td>
        <td>2026</td>
        <td>Categoria</td>

        <td>
            <button>Editar</button>
        </td>

        <td>
            <button>Deletar</button>
        </td>
    </tr>
</tbody>

</table>

</main>

<?php
require_once __DIR__ . "/../../templates/_rodape.php";
?>
