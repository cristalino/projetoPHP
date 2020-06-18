<?php 

session_start(); 


//Dados de Acesso ao Banco
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_banco = "papne";


// Criar conexão
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);

// Verificar Conexão
if ($conecta->connect_error === TRUE) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}echo "";

$email = isset($_GET['email'])?$_GET['email']:"";
$senha = isset($_GET['senha'])?$_GET['senha']:"";

//verificação de login e senha estão corretos
$tenta_achar = "SELECT * FROM usuario WHERE Email='$email' AND senha='$senha' ";
$resultado = $conecta->query($tenta_achar);  
if ($resultado->num_rows > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('location:pagina_pos_login.php');
    
} else {
    session_unset(); //remove todas as variáveis de sessão
    session_destroy();
    echo "<script> 
                alert('Login ou senha incorreto');
                window.location.href = '../index.html';
           </script>";
}
mysqli_set_charset($conecta, "utf8");


?>