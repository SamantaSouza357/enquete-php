<?php
$usuario = $_POST["usuario"];
$senha   = $_POST["senha"];

if($usuario == "etec" && $senha == "1234")
{
    session_start();//iniciar sessão
    $_SESSION["logado"] = $usuario; //criar a sessão e guardar o nome
    header("Location:index.php");//direcionar para a página HOME
}
else
{
    echo "<script>
        alert('Usuário ou senha inválido');
        window.location='login.php';
    </script>";
}

?>