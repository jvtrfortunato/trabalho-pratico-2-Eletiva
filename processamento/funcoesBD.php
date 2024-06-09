<?php

function conectarBD(){

  $conexao = mysqli_connect("localhost", "root", "", "eventou");
  return($conexao);

}

// Cadastro Cliente

function inserirCliente($nome, $cpf, $dataNasc, $email, $repitaEmail, $senha){

  $conexao = conectarBD();
  $consulta = "INSERT INTO clientes (Nome, CPF, dataNascimento, Email, confirmEmail, Senha)
              VALUES ('$nome', '$cpf', '$dataNasc', '$email', '$repitaEmail', '$senha')";
  mysqli_query($conexao,$consulta);

}

// Cadastro Organizador

function inserirOrganizador($Nome, $Cpf, $dataNasc, $Telefone, $Cep, $Endereco, $Numero, $Complemento, $Bairro, $Estado, $Cidade, $Senha){

  $conexao = conectarBD();
  $consulta = "INSERT INTO organizador (Nome, CPF, dataNascimento, Telefone, CEP, Endereco, Numero, Complemento, Bairro, Estado, Cidade, Senha)
               VALUES ('$Nome', '$Cpf', '$dataNasc', '$Telefone', '$Cep', '$Endereco' , '$Numero', '$Complemento', '$Bairro', '$Estado', '$Cidade', '$Senha')";
  mysqli_query($conexao,$consulta);

}

// Cadastro Localização

function inserirLocalizacao($nomeLocal, $Capacidade, $salaAuditorio, $metroQuadrado, $Cep, $Endereco, $Numero, $Complemento, $Bairro, $Estado, $Cidade){

  $conexao = conectarBD();
  $consulta = "INSERT INTO localizacao (nomeLocal, Capacidade, salaAuditorio, metroQuadrado, Cep, Endereco, Numero, Complemento, Bairro, Estado, Cidade)
               VALUES ('$nomeLocal', '$Capacidade', '$salaAuditorio', '$metroQuadrado', '$Cep' , '$Endereco', '$Numero', '$Complemento', '$Bairro', '$Estado', '$Cidade')";
  mysqli_query($conexao,$consulta);

}

// Cadastro Evento

function inserirEvento($nomeEvento, $categoria, $data, $horario, $localizacao, $senha){

  $conexao = conectarBD();
  $consulta = "INSERT INTO evento (nomeEvento, Categoria, dataEvento, Horario, Localizacao, Senha)
               VALUES ('$nomeEvento', '$categoria', '$data', '$horario', '$localizacao' , '$senha')";
  mysqli_query($conexao,$consulta);

}

?> 