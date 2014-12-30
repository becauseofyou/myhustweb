<?php
   $id = $_GET["id"] ;
   echo $id;
   $db_connect=mysql_connect('localhost', 'root', '123456');
   mysql_select_db('jol', $db_connect);
   $result=mysql_query("delete from mail where mail_id = ".$id);
   header("location:http://localhost/JudgeOnline2/myhustweb/mail.php");
?>
