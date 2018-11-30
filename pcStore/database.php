

<?php
 //this is myPDOCLASS by mahmoud ali;
 include_once("constant.php");
 class datab{
     
      private $pdo;
      private $isconnected;
      function __construct(){
      try{
      $this->pdo=new PDO("mysql:host=".host,user,pass,
      array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));

    	}
        catch(PDOException $er){
        echo "error connection!";
        }


      }
      public function disconnect(){
      $this->pdo=null;
      $this->isconnected=false;
      }
      public function getRow($q,$p=array()){
         $stm=$this->pdo->prepare($q);
         $stm->execute($p);
         return $stm->fetch();

      }
      public function getRows($q,$p=array()){
         $stm=$this->pdo->prepare($q);
         $stm->execute($p);
         return $stm->fetchAll();

      }
      public function getObject($q,$p=array()){
         $stm=$this->pdo->prepare($q);
         $stm->execute($p);
         return $stm->fetchAll(PDO::FETCH_OBJ);

      }
      public function insertRow($q,$p=array()){
         $stm=$this->pdo->prepare($q);
         $stm->execute($p);
         return $stm->rowCount();

      }
      public function deleteRow($q,$p=array()){

         return $this->insertRow($q,$p);

      }
      public function updateRow($q,$p=array()){

         return $this->insertRow($q,$p);

      }
      public function myExec($q){
      return $this->pdo->exec($q);
      }


 }
   $db=new datab;


?>


