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
                <h2>Eventos Cadastrador</h2>
            </section>
            <section class="tabela">
                <!-- TITULO TABELA -->
                <section class="titulo-tabela">
                    <section class="titulo-especifico-tabela">
                        <p>Nome do evento</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>Categoria</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>Data</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>Horário</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>Localização</p>
                    </section>
                    <section class="titulo-especifico-tabela">
                        <p>Organizador</p>
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
                    <section class="grupo-pequeno-linha">
                        <input type="tel" placeholder="Ex: DDD99999-9999">
                    </section>
                </section>
                <!-- LINHA 2 -->
                <section class="linha-tabela">
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                    <section class="dado"><p>Lorem ipsum</p></section>
                </section>
                <!-- LINHA 3 -->
                <section class="linha-tabela">
                    <section class="dado"></section>
                    <section class="dado"></section>
                    <section class="dado"></section>
                    <section class="dado"></section>
                    <section class="dado"></section>
                    <section class="dado"></section>
                </section>

                <section class="conteudo-vizualizar">
                    <section class="conteudo-vizualizar-box">
                        <h1>Eventos Cadastrados</h1>
                        <?php
                            $listaEvento = retornarEvento();
                            while($evento = mysqli_fetch_assoc($listaEvento)){
                                echo "<section class=\"conteudo-bloco\">";
                                echo "<h2>" . $evento["ID"] . " ". $evento["nomeEvento"] . "</h2>";
                                echo "<p>Categoria: " . $evento["Categoria"] . "</p>";
                                echo "<p>Data Evento: " . $evento["dataEvento"] . "</p>";
                                echo "<p>Horário: " . $evento["Horario"] . "</p>"; 
                                echo "<p>Localização: " . $evento["Localizacao"] . "</p>";
                                echo "<p>Senha: " . $evento["Senha"] . "</p>";
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