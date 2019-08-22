<?php
/**
 * Arquivo para registrar os dados de um aluno no banco de dados.
 */
if(isset($_REQUEST['atualizar ']))
{   
    try
    { 
        include 'includes/conexao.php;'

        $sql = "UPDATE alunos SET nome = ?, data de nascimento = ?, sexo = ?,
                       genero = ?, cpt = ?, cidade = ?, estado = ?,
                       bairro = ?, rua = ?, cep = 
                        WHERE id_aluno = ?)";

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1,$_RESQUEST['nome']);
        $stmt->bindParam(2,$_RESQUEST['data_nascimento']);
        $stmt->bindParam(3,$_RESQUEST['sexo']);
        $stmt->bindParam(4,$_RESQUEST['genero']);
        $stmt->bindParam(5,$_RESQUEST['cpf']);
        $stmt->bindParam(6,$_RESQUEST['cidade']);
        $stmt->bindParam(7,$_RESQUEST['estado']);
        $stmt->bindParam(8,$_RESQUEST['bairro']);
        $stmt->bindParam(9,$_RESQUEST['rua']);
        $stmt->bindParam(10,$_RESQUEST['cep']);
        $stmt->bindParam(11,$_RESQUEST['id_aluno']);
        $stmt->execute()

    } catch(Exception $e) { 
        echo $e->getMessage();
    }
 }
 ?>
 <div>
 <fieldset>
    <legend>Cadastro de Aluno </legend>
        <form action="editar_alunos.php?atualizar=true">
            <label>Nome: <input type="text" name="nome" required /> </label>
            <label>Cidade: <input type="text" name="nome" required /> </label>
            <label>CEP: <input type="text" name="nome" required /> </label>
            <label>Bairro: <input type="text" name="nome" required /> </label>
            <label>Rua: <input type="text" name="nome" required /> </label>
            <label>Estado: <input type="text" name="nome" required /> </label>
            <label>Data Nasc: <input type="text" name="nome" required /> </label>
            <button type="submit">salvar</button>
            </form>
        </legend>
</div>
