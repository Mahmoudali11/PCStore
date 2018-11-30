
 
  <script>
function validate(e){
var l = document.getElementById("st").value;
var a = document.getElementById("le").value;
if (l.length == 0) {
alert("insert Generation of your PC.");
e.preventDefault();
return;
 
} 
if(a.length == 0) {
alert("insert Cores of your PC.");
e.preventDefault();
return;
}
}
window.onload = function() {
document.getElementById("search").addEventListener("submit",
function(e){
validate(e);
});
}
</script>
 
<div id="form">
<form action="home.php" method="post" id="search">
      
 <input type="text" name="generation" placeholder="Generation
 ...." id="st">
 <br>
  <br>
 <input type="text" name="core" placeholder="Cores..." id="le">
 <br>
 <br>
 Type <select name="type" id="sel">
  <option value="dell">dell</option>
  <option value="hp">hp</option>
  <option value="hp" >lenovo</option>
  <option value="mac">mac</option>
  <option value="all">all</option>
  </select>
  <br>
  <br>
  <input type="submit" name="submit" value="Search" id="sub">
  </div>
 
