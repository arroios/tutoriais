<?php
 header('Status: 301 Moved Permanently', false, 301);   
 header('Location: http://www.arroios.org.br/tutoriais/avalia/publicado.php');   

 $link = mysql_connect('localhost', 'tutoratualiza', 't5t0r1&#H@');
 if (!$link) {
    die('Database server unavalaible ' . mysql_error());
 }

 $db = mysql_select_db('tutorblog', $link);
 if (!$db) {
    die ('tutorblog database unavalaible : ' . mysql_error());
 }

 $sql = "INSERT INTO usuario (nome,sobrenome,ponto,telefone,avalia,tar1,tar2,tar3,tar4,tar5,tar6,tar7,tar8,tar9)
VALUES('$_POST[gnome]', '$_POST[gsobrenome]', '$_POST[gponto]', '$_POST[gtelefone]', '$_POST[gavalia]', '$_POST[gtar1]', '$_POST[gtar2]', '$_POST[gtar3]', '$_POST[gtar4]'), '$_POST[gtar5]', '$_POST[gtar6]', '$_POST[gtar7]', '$_POST[gtar8]', '$_POST[gtar9]'";


 echo $sql . "<br />";

 mysql_query($sql,$link) or die(mysql_error());

 echo mysql_insert_id();
 
 mysql_close($link);



 exit(); 

?>