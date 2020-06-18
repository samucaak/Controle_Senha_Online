<DOCTYPE html5>
<html>
    <head>
        <meta charset="UTF-8" >
        <link rel="stylesheet" type="text/css" href="css/index.css" />
    </head>
    <body>
        <header>
            <h1>Login</h1>
        </header>
        <div id="formulario">
            <form method="POST" action="index.php">
                
                <input id="id_email" type="email" placeholder="E-Mail" required name="email"><br><br><br>
                
                <input type="password" required placeholder="Senha" name="senha" id="id_senha">
                <br><br><br><br>
                <input id="enviar" type="submit" value="Entrar">
            </form>
            <?php
                if(isset ($_POST["senha"]) && isset ($_POST["email"])){
                
                    $senha = $_POST["senha"];
                    $senha = preg_replace('/[^[:alnum:]_]/', '',$senha);
                    echo $senha."<br>";
                
               
                    $email = $_POST["email"];
                    echo $email."<br>";
                

                require_once("conexao.php");
                $id = 1;
                $query = "SELECT * FROM logar WHERE email = '{$email}'  AND senha = '{$senha}' ";
                $tse = mysqli_query($link, $query);
                $clientes = mysqli_fetch_array($tse);
                $num = mysqli_num_rows($tse); //total de linhas da tabela que foi atngida
                echo "<br>".$num;
                if($num == 1){
                    session_start();
                    $_SESSION['email'] = $clientes['email'];
                    $_SESSION['senha'] = $clientes['senha'];
                    echo "<br>".$_SESSION['email'];
                    echo "<br>".$_SESSION['senha'];
                
            ?>
                <script> window.location = "administracao.php"; </script>
            <?php
               } 
            }
            ?>
        </div> 
    </body>
</html>