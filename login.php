<?php

    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) 
    {
        //Acessa
        include_once('conexao.php');

        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM usuarios
                WHERE email = '$email'
                AND senha = '$senha'";

        $res = $conexao->query($sql);

        //$row = $res->fetch_object();

        //$qtd = $res->num_rows;

        if(mysqli_num_rows($res) < 1) {
            unset($_SESSION["email"]);
            unset($_SESSION["senha"]);
            header('Location: index.php');
        } else {
            $_SESSION["email"] = $email;
            $_SESSION["senha"] = $senha;
            header('Location: home.php');
        }
    } 
    else 
    {
        //Não acessa
        header('Location: index.php');
    }
