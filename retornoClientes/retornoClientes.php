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
                <h2>Clientes Cadastrador</h2>
            </section>
            <section class="tabela">
                <!-- TITULO TABELA -->
                <section class="titulo-tabela">
                    <section class="titulo-especifico-tabela">
                        <p>Nome Completo</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>CPF</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>Data de Nascimento</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>Email</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>Senha</p>
                    </section>
                </section>
                <!-- LINHA 1 -->
                <section class="linha-tabela">
                    <section class="grupo-pequeno-linha">
                        <input type="text" placeholder="Escreva seu nome completo">
                    </section>
                    <section class="grupo-pequeno-linha">
                        <input type="text" placeholder="__.__.__-_">
                    </section>
                    <section class="grupo-pequeno-linha">
                        <input type="date" placeholder="_/_/__">
                    </section>
                    <section class="grupo-pequeno-linha">
                        <input type="tel" placeholder="Ex: DDD99999-9999">
                    </section>
                    <section class="grupo-pequeno-linha">
                        <input type="tel" placeholder="Ex: DDD99999-9999">
                    </section>
                </section>
                <!-- LINHA 2 -->
                <section class="linha-tabela">
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>111.111.111-11</p></section>
                    <section class="dado"><p>10/07/1999</p></section>
                    <section class="dado"><p>Loremipsum@outlook.com</p></section>
                    <section class="dado"><p>Loremipsum</p></section>
                </section>
                <!-- LINHA 3 -->
                <section class="linha-tabela">
                    <section class="dado"></section>
                    <section class="dado"></section>
                    <section class="dado"></section>
                    <section class="dado"></section>
                    <section class="dado"></section>
                </section>

                <section class="conteudo-vizualizar">
                    <section class="conteudo-vizualizar-box">
                        <h1>Clientes</h1>
                        <?php
                            $listaClientes = retornarClientes();
                            while($clientes = mysqli_fetch_assoc($listaClientes)){
                                echo "<section class=\"conteudo-bloco\">";
                                echo "<h2>" . $clientes["Nome"] . " ". $clientes["CPF"] . "</h2>";
                                echo "<p>Data Nascimento:" . $clientes["dataNascimento"] . "</p>";
                                echo "<p>Email:" . $clientes["Email"] . "</p>";
                                echo "<p>Confirmar Email: " . $clientes["confirmEmail"] . "</p>"; 
                                echo "<p>Senha: " . $clientes["Senha"] . "</p>";
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