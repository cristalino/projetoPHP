<?php

$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_banco = "papne";

// Criar conexão
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);
// Verificar Conexão
if ($conecta->connect_error) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}
echo "";

$CPF = $_GET['cpf'];
$nomeUsuario = $_GET['nome'];
$email = $_GET['email'];
$numero = $_GET['numero'];
$senha = $_GET['senha'];

$sql = "INSERT INTO cadastro (CPF, Nome, Email, Numero, senha)  
VALUES ('$CPF', '$nomeUsuario', '$email', '$numero', '$senha')";

$sql2 = "INSERT INTO usuario (Email, senha) 
VALUES ('$email', '$senha')";

if ($conecta->query($sql) === TRUE AND  $conecta->query($sql2) === TRUE) {
    echo "<script> 
                alert('Usuário cadastrado com sucesso');
                window.location.href ='index.html';
           </script>";
    
} else {
    echo "Erro: " . $sql . "<br>" . $conecta->error . "<br>";
    echo "<script> 
                alert('Erro no cadastro de usuário: " . $sql . "<br>" . $conecta->error . "<br>');
                window.location.href = 'cadastrar.html';
           </script>";
}
mysqli_set_charset($conecta, "utf8");

$conecta->close();
?>
