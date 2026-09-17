<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="style.css">

    <script src="script.js" defer></script>
</head>

<body>
    <div class="login-container">

        <h1>Biblioteca</h1>

        <h2>Faça seu login</h2>

        <form>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Digite seu email">
            </div>

            <label for="senha">Senha</label>

            <div class="senha-container">
                <input type="password" id="senha" placeholder="Digite sua senha">
                <button type="button" id="mostrarSenha">
                    <img src="imgs/olhoaberto.png" alt="" id="btn-olho">
                </button>

            </div>

            <button type="submit">Entrar</button>

        </form>

        <p>Ainda não tem uma conta?</p>
        <a href="cadastro.html">Cadastre-se</a>


    </div>

    <footer>
        <p>2026</p>
    </footer>

    <script src="javascript/login.js"></script>

</body>

</html>