<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="/css/style_cadastroUsuario.css">
</head>
<body bgcolor="black">
    <div class="fundo">
        <div class="sub-fundo">
            <div class="caixa-cadastro">
                <form action="/usuarioCadastro?store" method="post">
                <fieldset class="caixa-dados">
                    <legend class="legenda">Dados:</legend>
                    <input type="hidden" name="_method" value="POST">
                    <input type="text" name="nome" id="" class="textfield" placeholder="Digite seu nome" required><br>
                    <input type="text" name="sobrenome" id="" class="textfield" placeholder="Digite seu sobrenome" required><br>
                    <input type="email" name="email" id="" class="textfield" placeholder="Digite seu email" required><br>
                    <input type="hidden" name="tipo" value="usuario">
                    
                </fieldset>
                <fieldset class="caixa-dados">
                    <legend class="legenda">Endereço:</legend>
                    <input type="text" name="cidade" id="" class="textfield" placeholder="Digite a cidade" required><br>
                    <input type="text" name="bairro" id="" class="textfield" placeholder="Digite o bairro" required><br>
                    <input type="text" name="rua" id="" class="textfield" placeholder="Digite a rua" required><br>
                    <input type="text" name="numero" id="" class="textfield" placeholder="Digite o Nº" required>
                </fieldset>
                <fieldset class="caixa-dados">
                    <legend class="legenda">Autenticação</legend>
                    <input type="text" name="login" id="" class="textfield" placeholder="Digite o login" required><br>
                    <input type="password" name="senha1" id="" class="textfield" placeholder="Digite uma senha" required><br>
                    <input type="password" name="senha2" id="" class="textfield" placeholder="Digite a senha novamente" required>

                </fieldset>
                <button type="submit" class="botao">Finalizar</button>
                    <?php if (isset($_SESSION['mensagem'])){
                        echo "<label style='position: absolute;top:625px;left: 20%;color: red;font-family: Arial, Helvetica, sans-serif;font-size: 20px'>{$_SESSION['mensagem']}</label>";
                    } ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>