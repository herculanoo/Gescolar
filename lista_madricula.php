<?php 
try 
{
    include 'includes/conexao.php';

    $sql = "SELECT a.id, a.nome, a.cpf, cs.nome AS curso, t.descricao AS turma
                   Date_Format(a.data_nascimento, '%d/%m/y') AS data_nasc
                   Date_Format(c.data_matricula, '%d/%m/%Y' AS data_mat
            FROM aluno a 
            JOIN matricula c ON (c.id_aluno = a.id)
            JOIN turma t ON (t.id = c.id_turma)
            JOIN curso cs ON (cs.id = T.id_curso)
            ORDER BY nome ASC ";
            
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

} catch(Exception $e) {
    echo $e->GetMessage();
}
?>
<link href="css/estilos.css" type="Text/css" rel="stylesheet" />

<?php include_once 'includes/cabecalho.php' ?>

<Table>
   <thead>
      <tr>
         <th>ID</th>
         <th>Nome</th>
         <th>CPF </th>
         <th>Data Nascimento </th>
         <th>Curso</th>
         <th>Turma</th>
         <th>Data Matricula</th>
      </tr>
    </thead>
    <tbody>    
    <?php while($matricula = $stmt->fetchObject()): ?>
    <tr>
       <td><?= $matricula->id ?> </td>
       <td><?= $matricula->nome ?> </td>
       <td><?= $matricula->cpf ?></td>
       <td><?= $matricula->data_nasc?> </td>
       <td><?= $matricula->curso ?></td>
   </tr>
   <?php endwhile ?>
  </tbody>
</table>