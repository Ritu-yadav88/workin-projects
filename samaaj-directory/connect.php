<?php
$servername="localhost";
$username="root";
$password="";
 $conn=null;
try{
   $conn=new PDO("mysql:host=$servername;dbname=samaajdirectorydb",$username,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  //echo "set";
}
catch(PDOException $e)
{
  echo "failed: ".$e->getMessage();
}
?>