<?php
session_start();//iniciar sessão
include_once "valida.php";//travar para acesso apenas a usuários logados
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilo/style.css">
    <title>enquete</title>
</head>
<body>
<?php



if(!isset($_SESSION["portuguesa"])){
    $_SESSION["portuguesa"] = 0;
}
if(!isset($_SESSION["calabresa"])){
    $_SESSION["calabresa"] = 0;
}
if(!isset($_SESSION["frango"])){
    $_SESSION["frango"] = 0;
}
if(!isset($_SESSION["queijo"])){
    $_SESSION["queijo"] = 0;
}

    $escolha = $_POST["sabor"];
    

    if($escolha == "calabresa"){
        $_SESSION["calabresa"]++;
      
    }
    else if( $escolha == "frango"){
        $_SESSION["frango"]++;
        
    }
    else if( $escolha == "portuguesa"){
        $_SESSION["portuguesa"]++;

    }
    else if( $escolha == "queijo"){
        $_SESSION["queijo"]++;

    }

?>
    <div class="container-fluid">

            <div class="col-12 mx-auto">

                <div class="card">
                    <div class="card-body">

                        <div class="row">
                                <div class="col-6 cartao">
                                    
                                    <img src="imagens/1.png" class="  mt-3">
                                    <span class="  d-grid gap-2">Pizza de Calabresa: <?php
                                 echo   $_SESSION["calabresa"];
                                 
                                 ?> </span>
                            </div>
                            <div class="col-6 cartao">
                                <img src="imagens/2.png" class="  mt-3">
                                <span class="  d-grid">Pizza de Frango: <?php
                              echo    $_SESSION["frango"];
                              
                              ?> </span>
                               
                            </div>
                            <div class="col-6 cartao">
                              
                                <img src="imagens/3.png"  class="  mt-3">
                                <span class="  d-grid gap-2">Pizza Portuguesa: <?php
                              echo    $_SESSION["portuguesa"];
                              
                              ?> </span>
                            </div>
                            <div class="col-6 cartao">
                              
                                <img src="imagens/4.png"  class="  mt-3">
                                <span class="  d-grid gap-2">Pizza Queijo: <?php
                              echo    $_SESSION["queijo"];
                              
                              ?> </span>
                            </div>
                        </div>

                        <div class="d-grid gap-2 mt-3 col-4 mx-auto">
                         <a href="index.php" class="btn btn-success">Novo Jogo</a>
                         <a href="zerar.php" class="btn btn-warning">Zerar Pontuação</a>
                         <a href="sair.php" class="btn btn-dark">Sair do Jogo</a>
                        </div>
                        
                    </div>

            </div>
        </div>
    </div>
</body>
</html>