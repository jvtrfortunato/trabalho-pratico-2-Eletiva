<?php

    require "../processamento/funcoesBD.php"

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localizações Cadastradas</title>
    <link rel="stylesheet" href="retornoLocalizacao.css">
</head>

<body>

    <nav>
        <section id="logo">
            <img src="../imagens/eventou-logo.png" alt="">
        </section>
        <section id="user">
            <img src="../imagens/user-regular-60.png" alt="">
        </section>
    </nav>

    <section id="div-pai">
        <section id="conteudo-principal">
            <section id="titulo">
                <h2>Localizações Cadastradas</h2>
            </section>
                <section class="conteudo-vizualizar">
                    <section class="conteudo-vizualizar-box">
                <?php
                    $listaLocalizacao = retornarLocalizacao();
                    while($localizacao = mysqli_fetch_assoc($listaLocalizacao)){
                    echo "<section class=\"linha-tabela\">";
                    echo "<section class=\"dado ID\"><p>ID:</p><p>" . $localizacao["ID"] . "</p></section>";
                    echo "<section class=\"dado nome\"><p>Nome do Local:</p><p>" . $localizacao["nomeLocal"] . "</p></section>";
                    echo "<section class=\"dado capacidade\"><p>Capacidade:</p><p>" . $localizacao["Capacidade"] . "</p></section>";
                    echo "<section class=\"dado sala\"><p>Sala/Auditório:</p><p>" . $localizacao["salaAuditorio"] . "</p></section>";
                    echo "<section class=\"dado metro\"><p>Metros Quadrados:</p><p>" . $localizacao["metroQuadrado"] . "</p></section>";
                    echo "<section class=\"dado cep\"><p>CEP:</p><p>" . $localizacao["Cep"] . "</p></section>";
                    echo "<section class=\"dado endereco\"><p>Endereco:</p><p>" . $localizacao["Endereco"] . "</p></section>";
                    echo "<section class=\"dado numero\"><p>Número:</p><p>" . $localizacao["Numero"] . "</p></section>";
                    echo "<section class=\"dado complemento\"><p>Complemento:</p><p>" . $localizacao["Complemento"] . "</p></section>";
                    echo "<section class=\"dado bairro\"><p>Bairro:</p><p>" . $localizacao["Bairro"] . "</p></section>";
                    echo "<section class=\"dado estado\"><p>Estado:</p><p>" . $localizacao["Estado"] . "</p></section>";
                    echo "<section class=\"dado cidade\"><p>Cidade:</p><p>" . $localizacao["Cidade"] . "</p></section>";
                    echo "</section>";
                    }
                ?>
                    </section>
                </section>
            </section>
        </section>
    

</body>

</html>