 
<html>

<head>
  <title>PCStore</title>
  <link href="style.css" rel="stylesheet">
</head>

<body style=" background-image:url(img.jpg);background-position:center;background-repeat:repeat;background-attachment:fixed;
background-size:cover">
  
 

<div style="background:gray;padding:10px;margin:-8px -8px">
<img src="pc.jpg" style="height:100px;widht:100px">
 
 
<span style="color:white;font-size:100px"  >PCStore</h3>
 
 
</div>
 
 
 <?php
 if(isset($_POST['submit']))
 {
	  include_once("computers.php");
 }
 else{
	  include_once("searchForm.php");
 }
 
  ?>
 
 <br><br>
<div id="footer">
 
 All right reserved_2018
 
</div>
</body>

</html>
