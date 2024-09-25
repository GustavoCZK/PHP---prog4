<?php

// Conexão ao banco de dados (MySQL)
define("BD_SERVIDOR", "localhost");
define("BD_USUARIO", "root");
define("BD_SENHA", "root");
define("BD_BANCO", "prog4");

// E-mail para notificação
define("EMAIL_NOTIFICACAO", "meuemail@email.com");

$usuario = 'root';
$senha = 'root';
$database = 'prog4';
$host = 'localhost';

$mysql = new mysqli($host, $usuario, $senha, $database);

if($mysql->error) {
    die("Falha ao conectar no banco de dados" . $mysql->error);
}

