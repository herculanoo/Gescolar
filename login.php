<?php 
session_start();

if(isset($_REQUEST['Logar']))
{
    try
    {
        include'includes/conexao.php';

        $stmt = $conexao ->prepare("SELECT * FROM usuarios WHERE usuarios = ? AND senha = ? ");
        $stmt->bindParam(1, $_REQUEST['usuario']);
        $stmt->bindParam(2, Sha1($_REQUEST['Senha']));
        $stmt->execute();

        // caso o usuário seja encontrado no banco de dados... 
        if($stmt->rowcount() > 0) {
            $dados_usuario = $stmt->FetchObject();// pega todos os dados do usuário.

            $_SESSION['gescolar_dados_usuario'] = $dados_usuario; //coloca na variavel de sessao

            header("Location: index.php"); // redireciona para a página inicial
        }else {
            header("Location: login.php?erro=true"); // caso login der errado
        }
    } catch(Exception $e) {
        ECHO $E->getmessage();
    }
}
?> 
<link href="css/estilos.css" type="text/css" rel="stylesheet" />

<style>
  fieldset {width: 15%; margin-top:10%;}
</style>
    
<fieldset> 
<legend> Login </legend>
  <form method="post" action="Login.php?logar=true" >
  <label>usuário:
      <input name="usuario" type="text" required />
    </label>  
  <label>Senha:
      <input name ="Senha" type="password" required />
  </label>
  <button type="submit">Entrar</button>
  </form>
  </fieldset>        