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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container card mt-2">

        <h4 class="mt-3">Escolha seu sabor preferido de pizza </h4>
        
        <form action="enquete.php" method="post">
            <div class="form-check mr-5">
                <input class="form-check-input" type="radio" value="calabresa" name="sabor" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Pizza de Calabresa
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="frango" name="sabor" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                    Pizza de Frango com Catupiry 
                </label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" value="portuguesa" name="sabor" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                    Pizza Portuguesa
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" value="queijo" name="sabor" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                    Pizza Queijo
                </label>
            </div>
            <button type="submit" class="btn btn-success mb-3">Enviar</button>
        </form>    
    </div>
    
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>