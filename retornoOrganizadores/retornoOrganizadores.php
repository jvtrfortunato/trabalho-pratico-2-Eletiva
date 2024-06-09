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
                        <p>Nascimento</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>Celular</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>CEP</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>Endereço</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>Número</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>Complemento</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>Bairro</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>Estado</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>Cidade</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>Senha</p>
                    </section>
                </section>
                <!-- LINHA 1 -->
                <section class="linha-tabela">
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                </section>
                <!-- LINHA 2 -->
                <section class="linha-tabela">
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                </section>
                <!-- LINHA 3 -->
                <section class="linha-tabela">
                    <section class="dado"><p></p></section>
                    <section class="dado"><p></p></section>
                    <section class="dado"><p></p></section>
                    <section class="dado"><p></p></section>
                    <section class="dado"><p></p></section>
                    <section class="dado"><p></p></section>
                    <section class="dado"><p></p></section>
                    <section class="dado"><p></p></section>
                    <section class="dado"><p></p></section>
                    <section class="dado"><p></p></section>
                    <section class="dado"><p></p></section>
                    <section class="dado"><p></p></section>
                </section>

                <section class="conteudo-vizualizar">
                    <section class="conteudo-vizualizar-box">
                        <h1>Organizadores Cadastrados</h1>
                        <?php
                            $listaOrganizador = retornarOrganizador();
                            while($organizador = mysqli_fetch_assoc($listaOrganizador)){
                                echo "<section class=\"conteudo-bloco\">";
                                echo "<h2>" . $organizador["Nome"] . " ". $organizador["CPF"] . "</h2>";
                                echo "<p>Data Nascimento: " . $organizador["dataNascimento"] . "</p>";
                                echo "<p>Telefone: " . $organizador["Telefone"] . "</p>";
                                echo "<p>Cep: " . $organizador["CEP"] . "</p>"; 
                                echo "<p>Endereço: " . $organizador["Endereco"] . "</p>";
                                echo "<p>Número: " . $organizador["Numero"] . "</p>";
                                echo "<p>Complemento: " . $organizador["Complemento"] . "</p>";
                                echo "<p>Bairro: " . $organizador["Bairro"] . "</p>";
                                echo "<p>Estado: " . $organizador["Estado"] . "</p>";
                                echo "<p>Cidade: " . $organizador["Cidade"] . "</p>";
                                echo "<p>Senha: " . $organizador["Senha"] . "</p>";
                                echo "</section>";
                            }
                        ?>

                    </section>
                </section>

            </section>
        </section>
    

</body>

</html>