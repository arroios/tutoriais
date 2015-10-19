<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<?php
 
 $link = mysql_connect('localhost', 'tutorler', 'tut0r01#@H');
 if (!$link) {
    die('Database server unavalaible ' . mysql_error());
 }

 $db = mysql_select_db('tutorblog', $link);
 if (!$db) {
    die ('tutorblog database unavalaible : ' . mysql_error());
 }

 $sql = "select nome, sobrenome, ponto, telefone, avalia, tar1, tar2, tar3, tar4, tar5, tar6, tar7, tar8, tar9 from usuario order by nome DESC LIMIT 100";
 

 $rs = mysql_query($sql,$link);

 if (!$rs) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
 }

 $i = 0;

 while ($row = mysql_fetch_assoc($rs))
 {
  $i++;
  echo "<table class='CSSTableGenerator'>
      <tbody>
        <tr>
          <td><br>
          </td>
          <td>Nome</td>
          <td>Sobrenome</td>
          <td>Ponto</td>
          <td>Telefone</td>
          <td>Avaliação</td>
          <td>Tarefa 1</td>
          <td>Tarefa 1</td>
	  <td>Tarefa 2</td>
	  <td>Tarefa 3</td>
	  <td>Tarefa 4</td>
	  <td>Tarefa 5</td>
	  <td>Tarefa 6</td>
	  <td>Tarefa 7</td>
	  <td>Tarefa 8</td>
	  <td>Tarefa 9</td>
        </tr>
        <tr>
          <td>".$i."</td>
          <td>".$row['nome']."</td>
          <td>".$row['sobrenome']."</td>
          <td>".$row['ponto']."</td>
          <td>".$row['telefone']."</td>
          <td>".$row['avalia']."</td>
          <td>".$row['tar1']."</td>
          <td>".$row['tar2']."</td>
	  <td>".$row['tar3']."</td>
	  <td>".$row['tar4']."</td>
	  <td>".$row['tar5']."</td>
	  <td>".$row['tar6']."</td>
	  <td>".$row['tar7']."</td>
	  <td>".$row['tar8']."</td>
	  <td>".$row['tar9']."</td>
        </tr></br>
      </tbody>
    </table>";
 }
 
 mysql_free_result($rs);
 mysql_close($link);

?>