 <?php require "../includes/connect_db.php" ;
  ?>
  <!--source html https://getbootstrap.com/docs/3.4/examples/justified-nav/#-->

 <link rel="stylesheet" type="text/css" href="css/style_classe.css">
 <style type="text/css">
   .head h1{margin-top: auto;}
blockquote{
padding: 1px 20px;
margin: 0 0 10px;}
.jumbotron p{
margin-bottom: 0px;
    
}

    .jumbotron .btn {
    padding: 8px 8px;
    font-size: 14px;
}
.card-header{
  color: #007bff;
  cursor:pointer;
}

.jumbotron{
  margin: 0px 13px;
}
.navbar {
    margin-bottom: 12px;}

    .head {
    padding-bottom: 1%;}
    img{
    width:70px;height:30px;
    }
    small {
    font-size: 83%;}
.col-md-4{
  margin-bottom: 0.5rem;
}
.card-body{
  padding: 0.25rem;
}
@media (max-width: 425px){
  .jumbotron {
    padding: 0;
    margin: 0px 5px;
  }
  .jumbotron p {
    font-size: 0.95rem;
  }
  .jumbotron span {
    font-size: 12px;
  }
  .jumbotron h4 {
    font-size: 1rem;
  }
  h4 {
    font-size: 1.1rem;
  }
  .blockquote {
    margin-bottom: 0rem;
    font-size: 0.78rem;
  }
}
</style>

  <div class="jumbotron">
    <h1><?php echo $title;?></h1>
    <p class="lead"> On Fournit tous les documents dont l'élève tunisien a besoin: cour, devoir, séries exercices ... etc.</p>
    <strong>Inscrivez Vous pour avoir un contenu approprié .</strong>
    <p><a class="btn btn-lg btn-success" href="../registration.php" role="button">inscription</a></p>
    <blockquote class="blockquote">
    <h4>“Nous sommes frères par la nature, mais étrangers par l'éducation.”
    </h4>
    <h5 class="blockquote-footer"><cite title="Source Title"> confucius</cite></h5> 
    </blockquote>
  </div><!--end jumbotron -->
<div class="container-fluid">
    <div class="row">
      <?php  
        $type=array("cour", "devoir", "exercices");
        $j=1;
        foreach ($type as $v) {//on affiche 3 col-4:cour /devoir ...
          ++$j;
          echo '
          <div class="col-md-4">
            <div class="">
              <div class="card">
                <div  data-toggle="collapse" href="#collapse'.$j.'">
                    <h4 class="card-header">'.$v.'  <span title="le nombre des meilleurs documents" class="badge badge-pill badge-dark"> 3</span>
                  </h4>
                      
                  </div>
                  <div id="collapse'.$j.'" class="card-body panel-collapse collapse">
                    <ul class="list-group list-group-flush">';//affiche liste des fichier..
                     $classe=strchr($title, " ",true);
                     $classe=$classe.$section;
                     $v=$v."-";
                     $v1=$v;
                     if ($v=="devoir-" or $v=="exercices-") {$v1=$v."avec-correction";}
                     $sql="SELECT nom ,file_dest ,nom_prof ,annee FROM files where (`classe`= '$classe' and `type`= '$v1')";
                     $req = $db->query($sql);
                     $i=0;
                     while($i<3 and $data = $req->fetch()){
                      ++$i;
                      $nom_fichier=strchr($data['nom'], "_",true);
                      $extension=strchr($data['nom'], ".");
                      $nom_fichier=$nom_fichier.$extension;
                      echo'
                      <li class="list-group-item">
                        <h5 class="card-title">
                          <a class="card-link" href="'.$data['file_dest'].'" target="_blank"><strong>'.$nom_fichier.'</strong></a>
                        </h5>
                        <p class="card-text">
                            <i class="fa fa-user" aria-hidden="true"></i> '.$data['nom_prof'].'
                            <i class="fa fa-calendar" aria-hidden="true"></i> '.$data['annee'] .'
                            <span class="badge badge-secondary"> 145 <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            </span>
                        </p>
                        
                      </li>';
                     } 
                     echo'
                    </ul>
                </div>
                <div class="card-footer">
                    <form action="affiche_file.php" method="get" >
                      <input name="classe" type="hidden" value="'.$classe.'" />
                      <input name="trim" type="hidden" value="controle n1" />
                      <input name="title" type="hidden" value="'.$title.'" />
                      <button class="btn btn-primary" name="type" type="submit" value="'.$v.'">voir plus &raquo; <span title="le nombre total des documents" class="badge badge-pill badge-dark"> 100</span></button>
                    </form>
                  </div>
              </div>
            </div>
          </div><!--end cl-->';
          }
      ?>
    </div><!--end row-->
  </div><!--end container fluid-->
