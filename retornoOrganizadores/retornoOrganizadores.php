<?php

    require "../processamento/funcoesBD.php"

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizadores Cadastrados</title>
    <link rel="stylesheet" href="retornoOrganizadores.css">
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
                <h2>Organizadores Cadastrados</h2>
            </section>          

                <section class="conteudo-vizualizar">
                    <section class="conteudo-vizualizar-box">
                <?php
                    $listaOrganizador = retornarOrganizador();
                    while($organizador = mysqli_fetch_assoc($listaOrganizador)){
                    echo "<section class=\"linha-tabela\">";
                    echo "<section class=\"dado nome\"><p>Nome Completo:</p><p>" . $organizador["Nome"] . "</p></section>";
                    echo "<section class=\"dado cpf\"><p>CPF:</p><p>" . $organizador["CPF"] . "</p></section>";
                    echo "<section class=\"dado data-nascimento\"><p>Data de Nascimento:</p><p>" . $organizador["dataNascimento"] . "</p></section>";
                    echo "<section class=\"dado telefone\"><p>Telefone:</p><p>" . $organizador["Telefone"] . "</p></section>";
                    echo "<section class=\"dado cep\"><p>CEP:</p><p>" . $organizador["CEP"] . "</p></section>";
                    echo "<section class=\"dado endereco\"><p>Endereco:</p><p>" . $organizador["Endereco"] . "</p></section>";
                    echo "<section class=\"dado numero\"><p>Número:</p><p>" . $organizador["Numero"] . "</p></section>";
                    echo "<section class=\"dado complemento\"><p>Complemento:</p><p>" . $organizador["Complemento"] . "</p></section>";
                    echo "<section class=\"dado bairro\"><p>Bairro:</p><p>" . $organizador["Bairro"] . "</p></section>";
                    echo "<section class=\"dado estado\"><p>Estado:</p><p>" . $organizador["Estado"] . "</p></section>";
                    echo "<section class=\"dado cidade\"><p>Cidade:</p><p>" . $organizador["Cidade"] . "</p></section>";
                    echo "<section class=\"dado senha\"><p>Senha:</p><p>" . $organizador["Senha"] . "</p></section>";
                    echo "</section>";
                     }
                ?>
                    </section>
                </section>

            </section>
        </section>
    

</body>

</html>