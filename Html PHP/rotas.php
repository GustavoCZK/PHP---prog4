<?php 

include("protector.php");

if(!isset($_SESSION)) {
    session_start();
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rotas</title>

    <link rel="stylesheet" href="Rotaspage/stylesr.css">
    <script src="Rotaspage/scriptsr.js" defer></script>

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

        <h1>Bem-Vindo(a) <?php echo $_SESSION['nome'];?> a Rotas</h1>
        <p>
            <a href="logout.php">Sair</a>
        </p>
    </div>

    

</body>
</html>