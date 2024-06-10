<?php

    require "../processamento/funcoesBD.php"

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes Cadastrados</title>
    <link rel="stylesheet" href="retornoClientes.css">
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
                <h2>Clientes Cadastrados</h2>
            </section>

                <section class="conteudo-vizualizar">
                    <section class="conteudo-vizualizar-box">
                <?php
                    $listaClientes = retornarClientes();
                    while($clientes = mysqli_fetch_assoc($listaClientes)){
                    echo "<section class=\"linha-tabela\">";
                    echo "<section class=\"dado nome\"><p>Nome Completo:</p><p>" . $clientes["Nome"] . "</p></section>";
                    echo "<section class=\"dado cpf\"><p>CPF:</p><p>" . $clientes["CPF"] . "</p></section>";
                    echo "<section class=\"dado data-nascimento\"><p>Data de Nascimento:</p><p>" . $clientes["dataNascimento"] . "</p></section>";
                    echo "<section class=\"dado email\"><p>Email:</p><p>" . $clientes["Email"] . "</p></section>";
                    echo "<section class=\"dado senha\"><p>Senha:</p><p>" . $clientes["Senha"] . "</p></section>";
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