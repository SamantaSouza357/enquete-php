<?php
    //verificar se existe sessão ou não
    if(!isset($_SESSION["logado"])) //não existe sessão?
    {
        header("Location:login.php"); //voltar para login
        return;//para execução
    }
    ?>