<?php

    require_once('conexao.php');
        $id = 1;
        $query = "SELECT * FROM senha WHERE id = '{$id}'";
        $senha = mysqli_query($link, $query);
        $tes = mysqli_num_rows($senha);
        $senhaAtual = mysqli_fetch_array($senha);
        
       


    if(isset($_POST['proxima'])){
        $senha = $senhaAtual['senha_atual'] + 1;
        $query = "update senha set senha_atual = '{$senha}'";
        $tse = mysqli_query($link, $query);
        ?>   <script> window.location = "administracao.php"; </script>  <?php
    }else{

    }

    if(isset($_POST['anterior'])){
        $senha = $senhaAtual['senha_atual'] - 1;
        $query = "update senha set senha_atual = '{$senha}'";
        $tse = mysqli_query($link, $query);
        ?>   <script> window.location = "administracao.php"; </script>  <?php
    }else{

    }

    if(isset($_POST['digitada'])){
        $senha = $_POST['digitada'];
        $query = "update senha set senha_atual = '{$senha}'";
        $tse = mysqli_query($link, $query);
        ?>   <script> window.location = "administracao.php"; </script>  <?php
    }else{
        
}
?>