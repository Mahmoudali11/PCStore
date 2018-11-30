
<html>

<head>
  <title></title>
</head>

<body>

<?php

 include_once("database.php");
$db->myExec("use computer;");
//from dumpFile..
 $sql="INSERT INTO pc VALUES ('',7,5,15.5,500,'dell',4,'labtop','9500 LE')
 ,('',5,5,14.5,500,'hp',4,'labtop','9500 LE')
 ,('',7,5,14.5,500,'dell',4,'labtop','9500 LE')
 ,('',7,5,15.5,2000,'mac',8,'labtop','20500 LE')
 ,('',7,5,15.5,500,'mac',8,'labtop','9500 LE')
 ,('',7,5,15.5,500,'mac',4,'labtop','9500 LE')
 ,('',8,5,15.5,1000,'dell',16,'Desktop','10500 LE')
 ,('',5,5,15.5,500,'dell',8,'labtop','9500 LE')
 ,('',7,5,15.5,500,'dell',4,'Desktop','10500 LE')
 ,('',7,5,15.5,500,'dell',4,'labtop','8500 LE')
 ,('',7,5,15.5,500,'mac',4,'labtop','18500 LE')
 ,('',5,5,12.5,500,'mac',4,'labtop','14500 LE')
 ,('',7,5,15.5,500,'dell',4,'labtop','9500 LE')
 ,('',7,5,15.5,500,'hp',4,'labtop','9500 LE')
 ,('',5,5,15.5,500,'mac',4,'labtop','9500 LE')
 ,('',4,5,15.5,1000,'mac',4,'labtop','9500 LE')
 ,('',7,5,15.5,1000,'dell',4,'labtop','9500 LE')
 ,('',2,5,14.5,500,'dell',8,'labtop','3500 LE')
 ,('',5,5,14.5,500,'dell',4,'labtop','9500 LE')
 ,('',7,5,14.5,500,'hp',4,'labtop','9500 LE')
 ,('',7,5,12.5,1000,'lenovo',4,'labtop','9500 LE')
 ;";

$db->insertRow($sql,array( ));
echo "Complete!";
header("Location:home.php");
?>

 
</body>

</html>
