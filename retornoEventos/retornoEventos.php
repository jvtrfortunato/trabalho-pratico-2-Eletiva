<?php

    require "../processamento/funcoesBD.php"

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos Cadastrados</title>
    <link rel="stylesheet" href="retornoEventos.css">
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
                <h2>Eventos Cadastrados</h2>
            </section>
            <section class="conteudo-vizualizar">
                    <section class="conteudo-vizualizar-box">
                <?php
                    $listaEvento = retornarEvento();
                    while($evento = mysqli_fetch_assoc($listaEvento)){
                    echo "<section class=\"linha-tabela\">";
                    echo "<section class=\"dado ID\"><p>ID:</p><p>" . $evento["ID"] . "</p></section>";
                    echo "<section class=\"dado nome\"><p>Nome do Evento:</p><p>" . $evento["nomeEvento"] . "</p></section>";
                    echo "<section class=\"dado categoria\"><p>Categoria:</p><p>" . $evento["Categoria"] . "</p></section>";
                    echo "<section class=\"dado data\"><p>Data do Evento:</p><p>" . $evento["dataEvento"] . "</p></section>";
                    echo "<section class=\"dado horario\"><p>Horário:</p><p>" . $evento["Horario"] . "</p></section>";
                    echo "<section class=\"dado localizacao\"><p>Localização:</p><p>" . $evento["Localizacao"] . "</p></section>";
                    echo "<section class=\"dado senha\"><p>Senha:</p><p>" . $evento["Senha"] . "</p></section>";
                    echo "</section>";
                     }
                ?>
                    </section>
                </section>
            </section>
        </section>
    </section>

</body>

</html>