<?php

session_start();
require "funcoesBD.php";


// Cadastro Cliente

if (!empty($_POST['inputNome']) && 
    !empty($_POST['inputCpf']) && 
    !empty($_POST['inputData-nascimento']) && 
    !empty($_POST['inputEmail']) && 
    !empty($_POST['inputRepita-email']) && 
    !empty($_POST['inputSenha'])) {

    $nome = $_POST['inputNome'];
    $cpf = $_POST['inputCpf'];
    $dataNasc = $_POST['inputData-nascimento'];
    $email = $_POST['inputEmail'];
    $repitaEmail = $_POST['inputRepita-email'];
    $senha = $_POST['inputSenha'];

    echo "Nome: " . htmlspecialchars($nome) . "<br>";
    echo "CPF: " . htmlspecialchars($cpf) . "<br>";
    echo "Data de Nascimento: " . htmlspecialchars($dataNasc) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Confirmar Email: " . htmlspecialchars($repitaEmail) . "<br>";
    echo "Senha: " . htmlspecialchars($senha) . "<br>";


    inserirCliente($nome, $cpf, $dataNasc, $email, $repitaEmail, $senha);

    header('Locatio:../view/registre-se.html');
    die();
}



?>