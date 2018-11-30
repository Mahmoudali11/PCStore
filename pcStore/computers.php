

<div style=" background:gray;
	 width:800px;
	 margin:200px auto;
	 padding:30px;">
 <table  border="1">
 <tr>
  
  <th>type</th>
  <th>Desk/Lab</th>
 <th>genereation</th>
 <th>memory</th>
 <th>cores</th>
 <th>display</th>
 <th>HardDrive</th>
<th>Price</th>
<th>Photo</th>
<th>DeleteITem</th>


 
 </tr>
<?php

include_once("database.php");
$db->myExec("use computer;");
if($_POST['type']=="all"){ 
$sql="select * from pc where generation='".$_POST['generation']."'
 and core='".$_POST['core']."';";
}
else{ 
 $sql="select * from pc where type='".$_POST['type']."' and generation='".$_POST['generation']."'
 and core='".$_POST['core']."';";
}
//$sql="select * from trains where class='".$_GET['class']."';";
$arr=$db->getRows($sql,array());
if(count($arr)!=0)
foreach($arr as $row){
	
echo "<tr>";
 
echo "<td>".$row['type']."</td>";
echo"<td>".$row['diskorlab']."</td>";
echo"<td>".$row['generation']."</td>";
echo"<td>".$row['memory']."</td>";
echo"<td>".$row['core']."</td>";
echo"<td>".$row['display']."</td>";
echo "<td>".$row['harddrive']."</td>";
echo "<td>".$row['price']."</td>";
if($row['type']=="hp")
echo "<td> <img src=hp.jpg style=width:100px ;height:100px></td>";
elseif($row['type']=="mac")
echo "<td> <img src=mac.jpg style=width:100px ;height:100px></td>";
elseif($row['type']=="dell")
echo "<td> <img src=dell.jpg style=width:100px ;height:100px></td>";
else
echo "<td> <img src=lenovo.jpg style=width:100px ;height:100px></td>";
echo "<td><a href=delete.php?id=".$row['id'].">Delet</a></td>";
echo "</tr>";


}
else{
	echo "not Found!";
	
}




?>
</table>
<a href="home.php"> Go to HomePage! </a> 
<br>

</div>
 

 
