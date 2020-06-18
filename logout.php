<?php

session_unset(); //remove todas as variáveis de sessão
session_destroy();  // se você possui algum cookie relacionado com o login deve ser removido
header('location:index.html');

?>

