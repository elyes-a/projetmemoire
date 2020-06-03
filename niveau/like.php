<?php 
require '../includes/connect_db.php';
if (isset($_GET['t'],$_GET['id'])) {
  $id_files=(int) $_GET['id'];
  $t=(int) $_GET['t'];
  if (isset($_SESSION['id'])) {
    $id_user=$_SESSION['id'];
  }else{$id_user=getIp();}//on peut utiliser simplement $_SERVER['REMOTE_ADDR']au lieu de cet fonction'getIp()' voir plus(https://waytolearnx.com/2019/07/comment-recuperer-ladresse-ip-de-lutilisateur-en-php.html)
  if($t == 1 ){
    $req=$db->prepare("SELECT COUNT(id_likes) FROM likes where (`id_files`= ? and `id_user`= ?)");
    $req->execute(array($id_files,$id_user));
    if($req->fetchColumn() == 1){
      $del = $db->prepare("DELETE FROM likes WHERE id_files=? AND id_user=?");
      $del->execute(array($id_files,$id_user));}
    else{
      $ins = $db->prepare("INSERT INTO likes (id_files, id_user) VALUES (?,?) ");
      $ins->execute(array($id_files,$id_user));}
    $del = $db->prepare("DELETE FROM dislikes WHERE id_files=? AND id_user=?");
    $del->execute(array($id_files,$id_user));
  }
  else{
    $req=$db->prepare("SELECT COUNT(id_dislikes) FROM dislikes where (`id_files`= ? and `id_user`= ?)");
    $req->execute(array($id_files,$id_user));
    if($req->fetchColumn() == 1){
      $del = $db->prepare("DELETE FROM dislikes WHERE id_files=? AND id_user=?");
      $del->execute(array($id_files,$id_user));}
    else{
      $ins = $db->prepare("INSERT INTO dislikes (id_files, id_user) VALUES (?,?) ");
      $ins->execute(array($id_files,$id_user));}
    $del = $db->prepare("DELETE FROM likes WHERE id_files=? AND id_user=?");
    $del->execute(array($id_files,$id_user));
  }
  header('location: '.$_SERVER['HTTP_REFERER']);
}else{ exit('erreur fatale');}
function getIp(){
  if(!empty($_SERVER['HTTP_CLIENT_IP'])){$ip = $_SERVER['HTTP_CLIENT_IP'];}
  elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];}
  else{$ip = $_SERVER['REMOTE_ADDR'];}
  return $ip;
}