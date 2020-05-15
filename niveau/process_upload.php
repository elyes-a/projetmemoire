<?php 
require '../includes/connect_db.php';
$erreur=$mes=$mes2=""; $indication="/";
$nom_prof=$email=$classe=$type=$titre=$annee_scolaire=$description="";
if (isset($_FILES['fichier'])) {
$file_tmp_name = $_FILES['fichier']['tmp_name'];
//le fichier a-t-été correctement uploader
if(is_uploaded_file($file_tmp_name) ) 
{
  $file_name      = $_FILES['fichier']['name'];
  $nom_prof       =$_POST['nom_prof'];
  $email          =$_POST['email'];
  $classe         =$_POST['classe'];
  $type           =$_POST['type'];//utile pour la destination d'envoie
  $titre          =$_POST['titre'];
  $annee_scolaire =$_POST['annee_scolaire'];
  $description    =$_POST['description'];
  //The strchr() function searches for the first occurrence of a string inside another string.
  $file_extension=strtolower(strchr($file_name, "."));
  $extension_autorisee = array('.pdf','.doc','.docx');
  //le type est -il autoriséé
  if(in_array($file_extension, $extension_autorisee))
  {
   //creation du nom fichier
   $type1=strchr($type, "-",true);$type2=strchr($type, "-");
   $file_name=$type1."-".$titre."-".$type2;
   $nom_prof=verifnom($nom_prof);
   $annee_scolaire=verifnom($annee_scolaire);
   $file_name=verifnom($file_name);
   $file_name=$file_name."_".$annee_scolaire."(".$nom_prof.")".$file_extension;
   //existe -t-il deja ou non
   if ($type1=="devoir") {$indication="/".$titre."/";}
    $file_dest ='files/'.$classe.'/'.$type.$indication.$file_name;
   if (is_file($file_dest)) {$mes="le fichier est déja existant";}
   else{
     if (move_uploaded_file($file_tmp_name,$file_dest) ) 
       {/*stocker info.du fichier"connect_db"*/
       $req=$db->prepare('INSERT INTO files(nom_prof,email,nom,titre,classe,type,file_dest,annee,description)VALUES(?,?,?,?,?,?,?,?,?)');
       $req->execute(array($nom_prof,$email,$file_name,$titre,$classe,$type,$file_dest,$annee_scolaire,$description));
       $mes= "fichier: ' ".$file_name."' envoyer avec succés";
           /*test execution requet*/
       if ($req) {
         $mes2=" et enregistrer";
         $nom_prof=$email=$titre=$annee_scolaire=$type="";}
       else{$mes2=" mais non enregistrer dans la base de donnée";}
       }
       else { $erreur="une erreur est survenu lors du déplacement du fichier";}
        }
 }
   else { $erreur="seul les fichiers pdf/doc/docx autorisés";}
} 
else{$erreur= "erreur lors du téléchargement du fichier";}
}
unset($_POST);
function verif($value,$colom,$connection){
  $nouvelle = "SELECT `id`FROM `utilisateur` WHERE (`$colom`='$value')";
  $resultat = $connection->query($nouvelle);
  $data2 = ($resultat->fetchColumn() > 0) ? true:false;
  $resultat->closeCursor();return($data2);
 }
function verifnom($text)
{
  // replace non letter or digits by '-'
  $text=preg_replace('~[^\pL\d]+~u','-',$text);
  // changer d'encodage
  $text=iconv('utf-8','us-ascii//TRANSLIT',$text);
  // remove unwanted characters
  $text=preg_replace('~[^-\w]+~','',$text);
  // retirer les '-'du debut et fin
  $text=trim($text,'-');
  // remove duplicate -
  $text=preg_replace('~-+~','-',$text);
  // lowercase
  $text=strtolower($text);
  if (empty($text)) {return 'n-a';}
  return $text;
}
?>
