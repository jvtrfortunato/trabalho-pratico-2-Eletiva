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

    header('Location:../view/registre-se.html');
    die();
}


// Cadastro Organizador

if (!empty($_POST['inputNome']) && 
    !empty($_POST['inputCpf']) && 
    !empty($_POST['inputData-nascimento']) && 
    !empty($_POST['inputTelefone']) && 
    !empty($_POST['inputCep']) && 
    !empty($_POST['inputEndereco']) && 
    !empty($_POST['inputNumero']) && 
    !empty($_POST['inputComplemento']) && 
    !empty($_POST['inputBairro']) && 
    !empty($_POST['inputEstado']) && 
    !empty($_POST['inputCidade']) && 
    !empty($_POST['inputSenha'])) {

    $Nome = $_POST['inputNome'];
    $Cpf = $_POST['inputCpf'];
    $dataNasc = $_POST['inputData-nascimento'];
    $Telefone = $_POST['inputTelefone'];
    $Cep = $_POST['inputCep'];
    $Endereco = $_POST['inputEndereco'];
    $Numero = $_POST['inputNumero'];
    $Complemento = $_POST['inputComplemento'];
    $Bairro = $_POST['inputBairro'];
    $Estado = $_POST['inputEstado'];
    $Cidade = $_POST['inputCidade'];
    $Senha = $_POST['inputSenha'];

    echo "Nome: " . htmlspecialchars($Nome) . "<br>";
    echo "CPF: " . htmlspecialchars($Cpf) . "<br>";
    echo "Data de Nascimento: " . htmlspecialchars($dataNasc) . "<br>";
    echo "Celular: " . htmlspecialchars($Telefone) . "<br>";
    echo "Cep:  " . htmlspecialchars($Cep) . "<br>";
    echo "Endereco:  " . htmlspecialchars($Endereco) . "<br>";
    echo "Número " . htmlspecialchars($Numero) . "<br>";
    echo "Complemento " . htmlspecialchars($Complemento) . "<br>";
    echo "Bairro " . htmlspecialchars($Bairro) . "<br>";
    echo "Estado " . htmlspecialchars($Estado) . "<br>";
    echo "Cidade " . htmlspecialchars($Cidade) . "<br>";
    echo "Senha " . htmlspecialchars($Senha) . "<br>";


    inserirOrganizador($Nome, $Cpf, $dataNasc, $Telefone, $Cep, $Endereco, $Numero, $Complemento, $Bairro, $Estado, $Cidade, $Senha);

    header('Location:../view/registro-organizador.html');
    die();
}


// Cadastro Localização

if  (!empty($_POST['inputNomeLocal']) && 
    !empty($_POST['inputCapacidade']) && 
    !empty($_POST['inputsalaAuditorio']) && 
    !empty($_POST['inputmetroQuadrado']) && 
    !empty($_POST['inputCep']) && 
    !empty($_POST['inputEndereco']) && 
    !empty($_POST['inputNumero']) && 
    !empty($_POST['inputComplemento']) && 
    !empty($_POST['inputBairro']) && 
    !empty($_POST['inputEstado']) && 
    !empty($_POST['inputCidade'])) {

    $NomeLocal = $_POST['inputNomeLocal'];
    $Capacidade = $_POST['inputCapacidade'];
    $SalaAuditorio = $_POST['inputSalaAuditorio'];
    $MetroQuadrado = $_POST['inputMetroQuadrado'];
    $Cep = $_POST['inputCep'];
    $Endereco = $_POST['inputEndereco'];
    $Numero = $_POST['inputNumero'];
    $Complemento = $_POST['inputComplemento'];
    $Bairro = $_POST['inputBairro'];
    $Estado = $_POST['inputEstado'];
    $Cidade = $_POST['inputCidade'];

    echo "Nome do Local: " . htmlspecialchars($NomeLocal) . "<br>";
    echo "Capacidade " . htmlspecialchars($Capacidade) . "<br>";
    echo "Sala/Auditório " . htmlspecialchars($salaAuditorio) . "<br>";
    echo "Metros Quadrados:  " . htmlspecialchars($metroQuadrado) . "<br>";
    echo "Cep: " . htmlspecialchars($Cep) . "<br>";
    echo "Endereço: " . htmlspecialchars($Endereco) . "<br>";
    echo "Numero: " . htmlspecialchars($Numero) . "<br>";
    echo "Complemento: " . htmlspecialchars($Complemento) . "<br>";
    echo "Bairro: " . htmlspecialchars($Bairro) . "<br>";
    echo "Estado: " . htmlspecialchars($Estado) . "<br>";
    echo "Cidade: " . htmlspecialchars($Cidade) . "<br>";

    inserirLocalizacao($NomeLocal, $Capacidade, $salaAuditorio, $metroQuadrado, $Cep, $Endereco, $Numero, $Complemento, $Bairro, $Estado, $Cidade);

    header('Location:../view/registro-localizacao.html');
    die();
}


?>