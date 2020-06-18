<DOCTYPE html5>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/index.css" />
    </head>
    <body>
        <header>
            <div id="pre"></div>
            
        </header>
        <div id="numero">
            <h1>Senha Atual</h1>
            <h2>
                <?php
                    $id = 1;
                    require_once("admin/conexao.php");
                    $query = "SELECT * FROM senha WHERE id = '{$id}'";
                    $tse = mysqli_query($link, $query);
                    $clientes = mysqli_fetch_array($tse);
                    echo $clientes['senha_atual'];
                ?>
            </h2>
        </div> 
    </body>
</html>