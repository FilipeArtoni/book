<?php

    if(isset($_POST['submit']))
    {

        include_once("conexao.php");

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $res = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha) VALUES 
        ('$nome', '$email', '$senha')");

        header('Location: index.php');
    }

?>