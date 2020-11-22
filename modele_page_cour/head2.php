<?php
//var_dump(session_status());var_dump(isset($_SESSION));
session_start();
//var_dump(session_status());var_dump($_SESSION);
$origin="";
 $a= htmlentities($_SERVER['PHP_SELF']);
 if((str_word_count($a,0,'0..9')>3)){$origin="../";}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <meta content='width=device-width, initial-scale=1' name='viewport'/>
 <meta content='IE=edge' http-equiv='X-UA-Compatible'/>
  <title><?php echo $title ?></title>
  <link rel="icon" href="<?php echo $origin ?>css/logo site.png">
  <!-- exemple icon fontawasome <i class="fas fa-cloud"></i>
 The list of all Font Awesome icons can be found here: https://www.w3schools.com/icons/default.asp-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $origin ?>modele_page_cour/stylemod2.css">
  <!--les sources javascript doit etre avant les script-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="head" style="padding-bottom: 1px;">
  <a  href="<?php echo $origin ?>niveau/upload.php" class="btn btn-info" role="button" title="cliquer sur ce bouton pour ajouter des documents à notre site" ><i class="fas fa-cloud"></i>partagez vos fichiers</a>
    <center>
      <img class="img_size" src="<?php echo $origin ?>css/Tunisia_240-animated-flag-gifs.gif"  alt="république tunisienne" ></center>
    <!--Animated flag gif may be downloaded free of charge in this web-->
    <center id="img-title">la république tunisienne|miministère de l'éducation</center>
    <!--titre et sous titre-->
    <h1>
    <span class="titre"> <center> <strong> le portail de la physique en tunis 2</strong> </center> </span>
    <?php 
      if ($origin=="") {
      echo '<center> <h3>Le lien entre l’enseignant et l’élève</h3> </center>';}
    ?>
    </h1>
</div>
<?php 
$li="<li class='nav-item'>
      <a class='nav-link' id='connect' href='".$origin."signin.php' title='connexion'><i class='fa fa-user-circle' aria-hidden='true'></i>
          connexion </a></li>";
$index="index-i.php";
if (isset($_SESSION['success'])) :?>
<?php 
require_once $origin.'includes/connect_db.php';
  $username=$_SESSION['name'];
  $sql = "SELECT `image_url`  FROM `utilisateur` WHERE (`name`='$username')";
  $res = $db->query($sql);
  $data = $res->fetch();
  $index="index.php";
  $li='<li class="nav-item dropdown"><!--profil-->
          <a class="navbar-brand dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="rounded-circle img_size" src="'. $origin.$data['image_url'] .' " alt="user img" style="width:40px;">'.$username .
          '</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown1">
            <li class="dropdown-item" >
              <button class="nestedmenu btn btn-danger" href="'. $origin .'/index.php?logout='. 1 .' "> déconnection </button>
            </li>
          </ul>
        </li>';
       ?>

<?php endif ?>

<!-- navbar -->
  <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class=" nav navbar-nav mr-auto ">
          <?php echo $li; ?>
        <li class="nav-item active"><!--home-->
          <a class="nav-link" href="<?php echo $origin.$index ?>"> 
            <svg class="bi bi-house-door" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 01.708 0l6 6a.5.5 0 01.146.354v7a.5.5 0 01-.5.5H9.5a.5.5 0 01-.5-.5v-4H7v4a.5.5 0 01-.5.5H2a.5.5 0 01-.5-.5v-7a.5.5 0 01.146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 01.5-.5h3a.5.5 0 01.5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"/>
            </svg>
            <span class="sr-only">(current)</span> accueil
          </a>
        </li>
        <li class="nav-item dropdown"><!--espace eleve-->
          <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">espace élève</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown1">
            <li class="dropdown-item dropdown"><!--college-->
              <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">collège</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                <li class="dropdown-item ">
                  <a class="nestedmenu"  href="<?php echo $origin ?>niveau/7eme-annee.php">7ème de base</a></li>
                <li class="dropdown-item">
                  <a class="nestedmenu"  href="<?php echo $origin ?>niveau/8eme-annee.php">8ème de base</a></li>
                <li class="dropdown-item">
                  <a class="nestedmenu"  href="<?php echo $origin ?>niveau/9eme-annee.php">9ème de base</a></li>
              </ul>
            </li>
            <li class="dropdown-item" ><a class="nestedmenu"  href="<?php echo $origin ?>niveau/1ere-annee.php">1ère secondaire</a></li>
            <li class="dropdown-item dropdown"><!--2-->
              <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">2ème secondaire</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                <li class="dropdown-item">
                  <a class="nestedmenu"  href="<?php echo $origin ?>niveau/2i.php">Technologie de l’informatique</a></li>
                <li class="dropdown-item">
                  <a class="nestedmenu"  href="<?php echo $origin ?>niveau/2s.php">Sciences</a></li>
              </ul></li>
            <li class="dropdown-item dropdown"><!--3-->
              <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3ème secondaire</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                <li class="dropdown-item">
                  <a class="nestedmenu"  href="<?php echo $origin ?>niveau/3i.php">science informatique</a></li>
                <li class="dropdown-item">
                  <a class="nestedmenu"  href="<?php echo $origin ?>niveau/3m.php">mathématique</a></li>
                <li class="dropdown-item">
                  <a class="nestedmenu"  href="<?php echo $origin ?>niveau/3t.php">Technique</a></li>
                <li class="dropdown-item">
                  <a class="nestedmenu"  href="<?php echo $origin ?>niveau/3s.php">Sciences exprimentales</a></li>
              </ul></li>
            <li class="dropdown-item dropdown"><!--4-->
              <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">4ème secondaire</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                <li class="dropdown-item">
                  <a class="nestedmenu"  href="<?php echo $origin ?>niveau/4i.php">science informatique</a></li>
                <li class="dropdown-item">
                  <a class="nestedmenu"  href="<?php echo $origin ?>niveau/4m.php">mathématique</a></li>
                <li class="dropdown-item">
                  <a class="nestedmenu"  href="<?php echo $origin ?>niveau/4t.php">Technique</a></li>
                <li class="dropdown-item">
                  <a class="nestedmenu"  href="<?php echo $origin ?>niveau/4s">Sciences exprimentales</a></li>
              </ul></li>
          </ul>
        </li>
        <li class='nav-item'><!--document-pédagogique-->
          <a class="nav-link" href='<?php echo $origin ?>document-pédagogique.php'> 
            document pédagogique 
          </a>
        </li>
        <li class='nav-item'><!--contact-->
          <a class="nav-link" href='<?php echo $origin ?>contact/contact.php' title='contact'> 
            contact 
          </a>
        </li>
        <li class='nav-item'><!-- news-->
          <a class="nav-link" href='<?php echo $origin ?>news.php'>
          <svg class="bi bi-info-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
          <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
          <circle cx="8" cy="4.5" r="1"/>
          </svg>
          actualités 
          </a>
        </li>
        <form class="form-inline my-2 my-sm-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="button" data-toggle="collapse" data-target="#demo" aria-expanded="false" aria-controls="collapseExample" title="cliquer pour chercher un document">chercher</button>
      <input class="form-control mr-sm-2 collapse" type="text" id="demo" placeholder="chercher un document" aria-label="Search">
    </form>
      </ul>
  </div>
  </nav>

<script type="text/javascript">/*drop down submenu function*/
  $(document).ready(function () {
    $('.navbar .dropdown-item').on('click', function (e) {
        var $el = $(this).children('.dropdown-toggle');
        var $parent = $el.offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if (!$parent.parent().hasClass('navbar-nav')) {
            if ($parent.hasClass('show')) {
                $parent.removeClass('show');
                $el.next().removeClass('show');
                $el.next().css({"top": -999, "left": -999});
            } else {
                $parent.parent().find('.show').removeClass('show');
                $parent.addClass('show');
                $el.next().addClass('show');
                $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
            }
            e.preventDefault();
            e.stopPropagation();
        }
    });
});
  /*this function for activating tne links by addtion of a class="nestedmenu" to <a> elt*/
$('.nestedmenu').on('click', function (e) {
e.preventDefault();

var url = $(this).attr('href');

window.open(url, '_self');/*onremplace "_self" par "_blank" to open in a new tab*/

});
</script>