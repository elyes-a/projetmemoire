<?php 
$user="root";
$pass="";
try {
  /*connection la base de donnee*/
  $db=new PDO("mysql:host=localhost;port=3308;dbname=projet","root","");
  // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*echo "connected";
    foreach($db->query('SELECT * from files') as $row) {print_r($row);}*/
}
/*affiche mes d'erreur si existe*/
catch (PDOException $e){
die('erreur:'.$e->getMessage());
}
 ?>