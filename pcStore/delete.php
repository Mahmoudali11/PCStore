<?php
 include_once("database.php");
$db->myExec("use computer;");
$sql="delete from pc where id=".$_GET['id'].";";
$db->deleteRow($sql,array());
header("location:home.php");
?>