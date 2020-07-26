<?php
session_start();
/*inclure le fechier de connection "connect_db.php" a la base de donnée*/
require_once 'includes/connect_db.php';
/*  //creation tableau dans la bd
 $a=file_get_contents('bd_util.sql');
 $res=$db->prepare($a);
 $res->execute();
 if ($res) {echo "tableau cree";}
 else{echo"tableau existe déja";}*/
//traitement de l'enregistrement des utilisateur
$mes=$error1=$error2=$name=$email=$password=$file_name=$user="";$file_dest='files/inconnu.jpg';
if (isset($_POST['create'])){
  // var_dump($_POST);var_dump($_FILES);pour afficher ces variables
  $name = $_POST['name'];$email = $_POST['email'];
  // Verification du repetition Est-elle deja enregistrer ????
    $data2=verif($name,'name',$db);
    if ($data2) {$error1="nom déja utilisée";$name="";}
   $data3=verif($email,'email',$db);
   if ($data3) {$error2="email déja utilisée";$email="";}
   $data=($data2 or $data3);
   if($data2==$data3){$error1="nom et email déja utilisée ";$error2="";}
  if(!$data){//stocker info.du utilisateur dans la base de donnees utilisateur 
    //password_hash fait le cryptage des mots de passe
    $password= password_hash($_POST['password'],PASSWORD_BCRYPT);
    //enregistrement de l'image
    $file_name = $_FILES['avatar']['name'];
    if(!empty($file_name) ) {
    $file_tmp_name = $_FILES['avatar']['tmp_name'];
    $file_dest ='files/'.$file_name;
    // manque un test sur le typr de fichier
    if (!move_uploaded_file($file_tmp_name,$file_dest) ){$mes="mais votre image non envoyer ";}
   }
   $req=$db->prepare('INSERT INTO utilisateur (name, email, password,photo_name,image_url)VALUES(?,?,?,?,?)');
   $req->execute(array($name, $email, $password,$file_name,$file_dest));
   $_SESSION['name']=$name;
   $_SESSION['success']='Vous êtes connecté à votre compte'.$mes;
   header('location:index.php');//redirect to home page
   //if($req){$mes='utilisateur ';$name=$email=$password="";}
   //else{$mes='There were erros while saving the data.';}
  }//fermeture if !$data
  unset($_POST);
}//fermeture if isset


//log user in from login form
if (isset($_POST['login'])) {
  $user    =$_POST['name'];
  if (verif($user,'name',$db)){
    $nouvelle = "SELECT `password` FROM `utilisateur` WHERE (`name`='$user')";
    $resultat = $db->query($nouvelle);
    $res=$resultat->fetchColumn();
    var_dump($res);
    $data=password_verify($_POST['password'],$res);//the first arg of password_verify is the original password(not hashed)
    $resultat->closeCursor();
    if ($data) { //login user
      $_SESSION['name']=$user;
      $_SESSION['success']='Vous êtes connecté à votre compte';
       header('location:index.php');
    }//end if $data
    else {$error1= "wrong password";var_dump($data);}
  }//end if verif
  else{$error1= "wrong username";$user="";}
}//end if isset
//logout
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['name']);
  header('location:index-i.php');
}
function verif($value,$colom,$connection){
  $nouvelle = "SELECT `id`FROM `utilisateur` WHERE (`$colom`='$value')";
  $resultat = $connection->query($nouvelle);
  $data2 = ($resultat->fetchColumn() > 0) ? true:false;
  $resultat->closeCursor();return($data2);
 }
?>