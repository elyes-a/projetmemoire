<?php 
require '../includes/connect_db.php';
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  http_response_code(403);
  die();
}
require '../class/vote.php';
$vote= new vote($db);
if (isset($_GET['t'],$_GET['id'])) {
  $id_files=(int) $_GET['id'];
  $t=(int) $_GET['t'];
  $id_user=$_GET['id_user'];
  //if (isset($_SESSION['id'])) {
   //$id_user=$_SESSION['id'];
  //}else{$id_user=getIp();}//on peut utiliser simplement $_SERVER['REMOTE_ADDR']au lieu de cet fonction'getIp()' voir plus(https://waytolearnx.com/2019/07/comment-recuperer-ladresse-ip-de-lutilisateur-en-php.html)
  $vote->like($id_files,$id_user,$t);
  header('location: '.$_SERVER['HTTP_REFERER']);
}else{ exit('erreur fatale');}
      $vote->update_count($id_files);
function getIp(){
  if(!empty($_SERVER['HTTP_CLIENT_IP'])){$ip = $_SERVER['HTTP_CLIENT_IP'];}
  elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];}
  else{$ip = $_SERVER['REMOTE_ADDR'];}
  return $ip;
}