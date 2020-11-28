<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css"><!-- Estilo CSS -->
    <title>Login</title>
</head>
<body>
  
    <div class="container"><!-- Toda a página -->
        <div class="box"><!-- Conteiner onde ficará os elementos -->
            <div class="area-header"><!-- Conteiner do Cabeçalho -->
                <div class="image-box" >Image</div><!-- Conteiner para inserção de Imagem -->
                <div class="header-txt">Sua Empresa </div><!-- Conteiner para inserir um conteudo de texto -->
            </div>
            <div class="area-login"><!-- Conteiner do formulário de login -->
                <form action="" method="post"><!-- Formulário de entrada($login,$password) -->
                    <input class="input-box" type="text" id="login" name="login" placeholder="Digite seu login"><br><!-- Caixa texto inserção do login var= $login -->
                    <input class="input-box" type="password" id="password" name="password" placeholder="Digite sua senha"><br><!-- Caixa de senha inserção da senha var= $password -->
                    <input class="btn-login" type="submit" value="Entrar"><!-- Botão de submissão do formulário -->
                </form>
            </div>
            <div class="link-conta"><p class="txt">Não é registrado? <a href="#">crie uma conta</a> </p></div><!-- Link para página de criação de uma nova conta -->
        </div>
    </div>
</body>
</html>