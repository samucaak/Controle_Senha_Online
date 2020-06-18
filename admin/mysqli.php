
<?php

//selecionar arquivos de uma tabela e mostrar
    $query = "SELECT * FROM testet WHERE id = '{$a1}'";
                $tse = mysqli_query($link, $query);
                $clientes = mysqli_fetch_array($tse);
                echo $clientes['nome'];

//inserir dados em uma tabela

            $query = "INSERT INTO NomeTabela (nome, sexo) VALUES ('{$nome}', '[$sexo]')";
                $tse = mysqli_query($link, $query);



//Alterar dados de uma tabela
                $id = 2;
                $nome = "Samuca";
                $query = "update testet set nome = '{$nome}' where id = '{$id}'";
                $tse = mysqli_query($link, $query);