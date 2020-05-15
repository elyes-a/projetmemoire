<?php 
require "../includes/connect_db.php" ;
$title1=$type1=$classe="x";$trim="";$style="display:none;";
if (!empty($_GET)) {
  $trim  =$_GET['trim'];
  $classe=$_GET['classe'];
  $type  =$_GET['type'];
  $title1=$_GET['title'];
  if ($type=="devoir-"){
    $trim=strchr($trim," ");
    $style="";
  }
  else{$trim="";}
  $type1=strchr($type, "-",true);
} 
$title=$type1." ".$title1;
include '../modele_page_cour/head2.php';
$Type=array("cour", "devoir", "exercices");
        switch ($type1) {
          case "cour":$i=1;$j=2; break;
          case "devoir":$i=2;$j=0;break;
          case "exercices":$i=0;$j=1;break;
        }
 ?>
 <!--stylesheet-->
 <link rel="stylesheet" href="css/style_affiche_file.css">
 <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Tangerine">
 <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
<style type="text/css">
#myTable .description{
  font-family:'Dancing Script', cursive;
  font-size: 1.5rem;
}
  h6 > a{
    font-family: 'Tangerine', serif;
    font-size: 3rem;
  text-shadow: 4px 4px 4px #aaa;
  }
  h1{margin-bottom: 1%;
}
.head h1{margin-top: auto;}
blockquote{
padding: 1px 20px;
margin: 0 0 10px;}
.jumbotron p{
margin-bottom: 0px;
    font-size: 19px;
    font-weight: 200;}

    .jumbotron .btn {
    padding: 8px 8px;
    font-size: 14px;
}
.jumbetron{
  margin: 0px 13px;
}
@media (min-width: 992px){
 #tab{
    width: 920px;}
.container {
    width:  625px;
}
  }
    .pager {
    margin: 0px 0;}
    .head {
    padding-bottom: 1%;}
    img{
    width:70px;height:30px;
    }
    small {
    font-size: 83%;}
    .page-link{
      margin-bottom: 5px;
      margin-left: 1px;
    }
    .pagination{position: fixed;}
    @media only screen and (max-width: 425px) {
  /* For mobile phones: */
  .btn-group {display: table-cell;float: none;}
  .col-lg-3{margin-left: 0;}
  .jumbotron p {font-size: 0.95rem;}
  .jumbotron span {font-size: 12px;}
  .jumbotron h4 {font-size: 1rem;}
  h4 {
    font-size: 1.1rem;
    margin-bottom: 0.2rem;
  }
  .blockquote {
    margin-bottom: 0rem;
    font-size: 0.78rem;
  }
  #trim{display: inherit;}
  #myBtn {bottom: 63px;}
}
@media only screen and (max-width: 425px) {
  .page-link{
      margin: 0;
      padding: .4rem .65rem;
    }
  #trim{
    display: block;
    justify-content: center;
  }
}
@media only screen and (max-width: 576px) {
.pagination {position: unset;}}
</style>
<div class="container-fluid">
  <div class="row justify-content-lg-center">
    <div class="col-sm-3" style="
    
    padding: 0px;
    background-color: black;
    background-image: url(../css/cadre-or.png);
    background-size: auto;
    background-repeat: round;
    height: fit-content;">
      <div class="jumbotron">
    <!--<h2>Vous cherchez :</h2>-->
    <h1><?php echo $title ?></h1>
    <p class="lead"> On met à votre disposition une collection de document.</p>
    <span>Inscrivez Vous pour avoir un contenu approprié .</span>
    <p><a class="btn btn-lg btn-success" href="../registration.php" role="button">inscription</a></p>
    <blockquote class="blockquote">
    <h4>“Children must be taught how to think, not what to think.”
    </h4>
    <h5 class="blockquote-footer"><cite title="Source Title"> Margaret Mead</cite></h5> 
    </blockquote>
  </div>
    </div>
    <div class="col-sm-1 order-sm-1">
      <nav aria-label="Page navigation">
<?php 
  echo '<form  action="'.htmlentities($_SERVER['PHP_SELF']).'" method="get">
  <ul class="pagination nav flex-lg-column ">
    <li class="page-item"><input name="classe" type="hidden" value="'.$classe.'" />
            <input name="title" type="hidden" value="'.$title1.'" />
            <input name="trim" type="hidden" value="controle n1" />
            <input name="type" type="hidden" value="devoir-" />
            <button name="type" type="submit" value="'.$Type[$i]."-".'" class="page-link"><i class="fa fa-chevron-left" aria-hidden="true"></i>'.$Type[$i].'</button>
          </li>';?>
    <div id="trim"style="<?php echo $style ?>">
    <li class="page-item" aria-current="page"><button type="submit" class="page-link" value="controle n1" name="trim">1 ére trim</button></li>

    <li class="page-item"><button type="submit" class="page-link" value="controle n2" name="trim">2éme trim</button></li>

    <li class="page-item"><button type="submit" class="page-link" value="controle n3" name="trim">3éme trim</button></li>
    </div>

    <?php
          echo'<li class="page-item">
              <button name="type" type="submit" value="'.$Type[$j]."-".'" class="page-link">'.$Type[$j].'<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
              </li></ul></form>';
      ?>
</nav>
    </div>
    <div class="col-sm-7">
      <?php
    //affichage des lien de telechargement
    $sql="SELECT nom , file_dest , nom_prof ,description,annee FROM files where (`classe`= '$classe' and (`type` LIKE '$type1%') and (`titre` LIKE '%$trim'))";
    $req = $db->query($sql);
    /*existe un probleme a corriger de taille il envoie les fichiers de faibles taille*/
  ?>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="chercher par mot clé.." title="Tapez un Titre">
  <table id="myTable" style="
    background-color: white;
    margin: 5px 0px;
    padding: 0;width: 100%;">
    <tr class="header">
      <th style="width:50%;">Titre</th>
      <th style="width:50%;">description</th>
    </tr>
  <?php  
    while($data = $req->fetch()){
    $nom_fichier1=strchr($data['nom'], "_",true);
    $nom_fichier2=strchr($data['nom'], ".");
    $nom_fichier=$nom_fichier1.$nom_fichier2;
    echo '<tr>

          <td>
            <h6><a href="'.$data['file_dest'].'" target="_blank"><strong>'.$nom_fichier.'</strong></a>
            <p><small>
              <i class="fa fa-user" aria-hidden="true"></i>'.$data['nom_prof'].'
              <i class="fa fa-calendar" aria-hidden="true"></i>'.$data['annee'] .'
              <span class="badge badge-secondary"> 145 <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            </span>
            </small></p>
            </h6>
            </td>
          <td class="description">'.$data['description'].'</td>
        </tr>';}
  ?>
  </table>
    </div>
    
    
  </div>
</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<button onclick="topFunction()" id="myBtn" title="Go to top"><svg class="bi bi-arrow-up" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z" clip-rule="evenodd"/>
</svg> </button>
<!--to up button script-->
<script type="text/javascript">
  //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

</script>
<?php include '../modele_page_cour/footer2.html'; ?>
