<?php 
    session_start();
    if (isset ($_SESSION['email'])) {} else { ?> <script> window.location = "index.php" </script> <?php } ?>


<DOCTYPE html5>
<html>
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/administraca.css" />
    </head>
    <body>
        <header>
        <?php 
                require_once('conexao.php');
                $id = 1;
                $query = "SELECT * FROM senha WHERE id = '{$id}'";
                $senha = mysqli_query($link, $query);
                $tes = mysqli_num_rows($senha);
                $senhaAtual = mysqli_fetch_array($senha);
                
                
                echo "<h1>SENHA ATUAL ".$senhaAtual['senha_atual']." </h1>";
            ?>
        </header>
        
            


            <div>
            <form method="post" action="updatesenha.php">
                <input type="hidden" name="proxima" value="maisum">
                <input type="submit" value="Proxima Senha">  
            </form>

            <form method="post" action="updatesenha.php">
                <input type="hidden" name="anterior" value="menosum">
                <input type="submit" value="Senha Anterior">  <br><br><br>
            </form>
            <form method="post" action="updatesenha.php">
            <label for="num">Digite uma nova senha</label><br>
                <input type="number" id="num" name="digitada">
                <input type="submit" id="sub" value="Confirmar">  
            </form>
            <form method="post" action="sair.php">
                <input type="submit" value="Sair" id="sair">
            </form>
        </div> 
    </body>
</html>