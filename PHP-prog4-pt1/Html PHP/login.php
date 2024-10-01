<?php
include('config.php');

// Estabelecendo a conexão
$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}

if(isset($_POST['email']) && isset($_POST['senha'])) {
    
    if(strlen($_POST['email']) == 0){
        echo "Preencha seu email";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: rotas.php");

        } else {
            echo "Falha ao Logar! E-mail ou senha incorretos";
        }

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link rel="stylesheet" href="Loginpage/stylesl.css">
    <script src="Loginpage/scriptsl.js" defer></script>

</head>
<body>
    
    <nav class="navbar">
        <div class="logo">Eco Notifier</div>
        <ul class="nav-links-desktop">
            <li><a href="index.php">Home</a></li>
            <li><a href="rotas.php">Rotas</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>

    <h1 class="titulo">Eco Notifier</h1>

    <div class="container2">

        <section>
            <article>
                <header>
                    <h1>Login</h1>
                </header>

                <form action="" method="POST">
                    <p>
                        <label>E-mail</label>
                        <input type="text" name="email">
                    </p>
                    <p>
                       <label>Senha</label>
                        <input type="password" name="senha">
                    </p>
                    <p>
                        <button type="submit">Entrar</button>
                    </p>
                </form>

            </article>
        </section>

    </div>

</body>
</html>