<?php
$pic="image/nature.png";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotas de Recolhimento de resíduos</title>

    <link rel="stylesheet" href="Firstpage/styles.css">
    <script src="Firstpage/scripts.js" defer></script>

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

    <div class="container">

        <section>
            <article>
                <header>
                    <h1>Objetivo</h1>
                </header>

                <p>Nosso obejtivo é fazer um site onde as pessoas de todo o Brasil possam procurar informações sobre o recolhimento de resídos, sejam eles reciclaveis ou orgânicos</p>

            </article>
        </section>

    </div>

    <div class="container2">

        <section>
            <article>
                <header>
                    <h1>CEP</h1>
                </header>

                <p>Informações CEP</p>

                <div class="inputbox">
                <label for="CEP"></label>        
                <input type="text" name="CEP" id="CEP" required>    
                 </div>

               
            </article>
            <br>
            <br>
            <br>
            <br>

            <div class="inputbox">
                <label for="endereco">Endereço</label>        
                <input type="text" name="Endereço" id="endereco" required>    
            </div>

            <br>

            <div class="inputbox">
                <label for="bairro">Bairro</label>        
                <input type="text" name="Bairro" id="bairro" required>    
            </div>

            <br>

            <div class="inputbox">
                <label for="cidade">Cidade</label>        
                <input type="text" name="Cidade" id="cidade" required>    
            </div>

            <br>

            <div class="inputbox">
                <label for="estado">Estado</label>        
                <input type="text" name="Estado" id="estado" required>    
            </div>
        </section>

    </div>

</body>
</html>