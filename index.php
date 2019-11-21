<?php

//caso o usuário clique em sair 
if(isset($_RESQUEST['sair'])) {

        unset($_SESSION['gescolar_dados_usuarios'])//destroi a sessão de autenticação do usuário.
        header("location login.php");//redireciona para a pagina de loin
}

//protegendo a pagina contra acesso sem autenticação
if(!isset($_SESSION['gescolar_dados_usuarios']))
     header("location login.php");//redireciona para a pagina de login
}

// abreviando o nome variavel que contém os dados do úsuario.
$usuario = $_SESSION['gescolar_dados-usuario'];

?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/estilos.css" type="text/css" rel="stylesheet" />
        </head>
        <body>
            <div id="global">
                <h1> GESCOLAR </h1>
                <nav>
                    <ul>
                        <li> <a href="cadastro_alunos.php"> Cadastrar Aluno </a></li>
                        <li> <a href="Lista_alunos.php"> Lista de Aluno </a></li>
                        </ul>
                        </nav>
                    </div>
                </body>
            </html>