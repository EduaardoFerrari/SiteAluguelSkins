<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tela de Login </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./StyleCss/style.css">
</head>

<body>
    <div class="container">
        <div class="secao-esq">
            <img src="./StyleCss/trofeu.png" alt="Imagem decorativa">
        </div>
        <div class="secao-dir">
            <div class="caixa-login">
                <div class="aa">
                    <div>
                        <h1 class="fonte"> RentSkins </h1>
                        <h2 class="fonte"> Alugue suas Skins! </h2>
                    </div>
                    <div class="logo">
                        <img src="assets/img/awp dlore.png" alt="Logo RentSkins" class="logo-tamanho">
                    </div>
                </div>
                <form>
                    <div class="formulario">
                        <label for="email"> Usuário </label>
                        <input type="email" id="email" placeholder="usuario@usuario.com">
                    </div>

                    <div class="formulario">
                        <label for="senha"> Senha </label>
                        <input type="senha" id="senha" placeholder="••••••••">
                    </div>

                    <div class="lembre-se">
                        <input type="checkbox" id="lembrar">
                        <label for="lembrar"> Lembre-se de mim </label>
                    </div>
                    
                    <div class="botoes-container">
                        <a href="view/home.php" role="button" class="botao-login"> Entrar </a>
                        <a href="#" role="button" class="botao-login"> Cadastre-se </a>
                    </div>

                    <div class="link-ajuda">
                        <a href="./view/recuperarsenhaproplayer.php"> Esqueci minha senha </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>