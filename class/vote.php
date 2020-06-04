<?php 
/**
 * 
 */
class vote 
{
  private $db;
  private $former_vote;//stocker le vote precedent
  public function __construct(PDO $db){
    $this->db = $db ;
  }
  private function existe($id_files,$id_user,$vote_val){
    $req=$this->db->prepare("SELECT COUNT(id_likes) FROM likes where (`id_files`= ? and `id_user`= ? and `value`= ?)");
    $req->execute(array($id_files,$id_user,$vote_val));
  }
  public function like($id_files,$id_user,$vote_val)
  {
    $req=$this->db->prepare("SELECT value FROM likes where (`id_files`= ? and `id_user`= ?)");
    $req->execute(array($id_files,$id_user));
    $val=$req->fetchColumn();
    if($val == $vote_val){
      $ins =$this->db->query("UPDATE likes SET `value`= '2' WHERE (id_files=$id_files and id_user=$id_user)");
      if ($val = 1) {
        $ins =$this->db->query("UPDATE files SET `likes_count`= {likes_count - 1} WHERE id=$id_files");
      }else{$ins =$this->db->query("UPDATE files SET `dislikes_count`= {dislikes_count - 1} WHERE id=$id_files ");}
    }
    elseif(empty($val)){
      $ins = $this->db->prepare("INSERT INTO likes (id_files, id_user,value) VALUES (?,?,?) ");
      $ins->execute(array($id_files,$id_user,$vote_val));
    }
    else{
      $del = $this->db->query("UPDATE likes SET `value`= {$vote_val} WHERE id_files=$id_files and id_user=$id_user");}
    if ($vote_val = 1) {
        $ins =$this->db->query("UPDATE files SET likes_count = likes_count + 1 WHERE id=$id_files ");
      }else{$ins =$this->db->query("UPDATE files SET dislikes_count = dislikes_count + 1 WHERE id=$id_files ");}
    return true;
  }
  //permet de definir un class css like ou dislike
  public static function getclass($vote){
    if ($vote==1) {return 'like';}
    elseif ($vote== -1) {return 'dislike';}
    else { return null ;}
  }
  public function update_count($id_files){
    $req = $this->db->prepare("SELECT COUNT(id_likes) as count ,value from likes WHERE id_files = ? GROUP BY value");
    $req->execute([$id_files]);
    $votes=$req->fetchAll(PDO::FETCH_ASSOC);
    $counts=['-1'=>0,'1'=>0];
    foreach ($votes as $v => $val) { $counts[$val['value']] = $val['count']; }
  $req =$this->db->query("UPDATE files SET likes_count={$counts[1] },dislikes_count={$counts[-1] } WHERE id = $id_files ");
  return true ;
  }
}
 ?>