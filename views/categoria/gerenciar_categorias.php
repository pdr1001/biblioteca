<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>

<main>

    <h1 class="titulo-pagina">Gerenciar Categorias</h1>

    <div class="botao-adicionar">
        <a href="cadastro.php">Adicionar</a>
    </div>

    <table>

        <thead>
            <tr>
                <th>Nome</th>
                <th colspan="2">Opcoes</th>
            </tr>
        </thead>

        <tbody>
            <tr>
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