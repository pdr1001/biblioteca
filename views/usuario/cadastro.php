<?php
require_once __DIR__ . "/../../templates/_cabecalho.php";
?>

<body>
    <header>
        <img src="https://picsum.photos/100" alt="" class="logo">

        <nav>
            <a href="index.html">Inicio</a>
            <a href="cadastro.html">Cadastre-se</a>
            <a href="login.html">Entrar</a>
        </nav>
    </header>

    <main class="main-detalhe">
        <form action="biblioteca/controllers/usuario_add_controller.php"
         method="post" enctype="multipart/form-data">
            <img src="/biblioteca/imgs/logo_sem_fundo.png" alt="" class="logo">

            <div class="form-item">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>

            <div class="form-item">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="form-item">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </div>

            <div class="form-item">
                <label for="foto">Foto de Perfil</label>
                <input type="file" name="foto" id="foto">
            </div>

            <button type="submit">Cadastrar</button>