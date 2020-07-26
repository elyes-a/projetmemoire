<?php 
require '../includes/connect_db.php';
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  http_response_code(403);
  die();
}
require '../class/vote.php';
$vote= new vote($db);
if (isset($_POST)) {
  $id_files=(int) $_POST['id_files'];
  $vote_type=(int) $_POST['vote_type'];
  $id_user=$_POST['id_user'];
  //{$id_user=getIp();}//on peut utiliser simplement $_SERVER['REMOTE_ADDR']au lieu de cet fonction'getIp()' voir plus(https://waytolearnx.com/2019/07/comment-recuperer-ladresse-ip-de-lutilisateur-en-php.html)
  $vote->like($id_files,$id_user,$vote_type);
}else{ exit('erreur fatale');}
      //var_dump($vote->update_count($id_files));
$req = $db->prepare("SELECT likes_count,dislikes_count from files WHERE id = ?");
    $req->execute([$id_files]);
    header('content-type:application/json');
    die(json_encode($req->fetch(PDO::FETCH_ASSOC)));
function getIp(){
  if(!empty($_SERVER['HTTP_CLIENT_IP'])){$ip = $_SERVER['HTTP_CLIENT_IP'];}
  elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];}
  else{$ip = $_SERVER['REMOTE_ADDR'];}
  return $ip;
}