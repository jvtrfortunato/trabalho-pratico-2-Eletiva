<?php

function conectarBD(){

  $conexao = mysqli_connect("localhost", "root", "", "eventou");
  return($conexao);

}

function inserirCliente($nome, $cpf, $dataNasc, $email, $repitaEmail, $senha){

  $conexao = conectarBD();
  $consulta = "INSERT INTO clientes (Nome, CPF, dataNascimento, Email, confirmEmail, Senha)
              VALUES ('$nome', '$cpf', '$dataNasc', '$email', '$repitaEmail', '$senha')";
  mysqli_query($conexao,$consulta);

}



?> 