<?php 
/**
 * 
 */
class vote 
{
  private $db;
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
      $this->update_count2($id_files,$vote_val,-1);
    }
    elseif(empty($val)){
      $ins = $this->db->prepare("INSERT INTO likes (id_files, id_user,value) VALUES (?,?,?) ");
      $ins->execute(array($id_files,$id_user,$vote_val));
      $this->update_count2($id_files,$vote_val,1);
    }
    else{
      $del = $this->db->query("UPDATE likes SET `value`= {$vote_val} WHERE id_files=$id_files and id_user=$id_user");
      $this->update_count2($id_files,$vote_val,1);
    }
    return true;
  }
  //permet de definir un class css like ou dislike
  public static function getclass($vote){
    if ($vote==1) {return 'is_liked';}
    elseif ($vote== -1) {return 'is_disliked';}
    else { return null ;}
  }
  private function update_count2($id_files,$vote_val,$add){
    if ($vote_val == 1) {
        $ins =$this->db->query("UPDATE files SET `likes_count` = `likes_count` + $add WHERE id=$id_files ");
      }else{$ins =$this->db->query("UPDATE files SET `dislikes_count` = `dislikes_count` + $add WHERE id=$id_files ");}
      return true ;
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