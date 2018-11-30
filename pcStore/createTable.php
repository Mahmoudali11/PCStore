
<?php

include_once("database.php");
$db->myExec("use computer;");
$db->myExec("create table if not exists pc(id int auto_increment  primary key,
 generation int ,
core int,
display double,harddrive int,type varchar(30) not null, memory int,
  diskorlab varchar(30) not null,price varchar(30));") ;

?>
 