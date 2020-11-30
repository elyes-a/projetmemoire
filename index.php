<?php 
require_once 'registration/processregis.php' ;
//var_dump(session_status());var_dump($_SESSION);
if (!isset($_SESSION['success'])){
  header('location:index-i.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Default Meta -->
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
    <meta content='width=device-width, initial-scale=1' name='viewport'/>
    <meta content='IE=edge' http-equiv='X-UA-Compatible'/>
  <!-- link -->
    <link href='index.php' rel='canonical'/>
    <link rel="icon" href="css/logo site.png">
    <!--stylesheet bootstrap 4 -->
    <!--Licensed under MIT (https://github.com/twbs/bootstrap 4 /blob/master/LICENSE)-->
      <link href='css/bootstrap.css' rel='stylesheet'/>
      <!-- exemple icon fontawasome <i class="fas fa-cloud"></i> The list of all Font Awesome icons can be found here: https://www.w3schools.com/icons/default.asp-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      <link href="https://getbootstrap.com/docs/4.4/examples/carousel/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styleindex.css">
  <!-- Title -->
    <title>le portail de la physique de tunis 2</title>
  <!--les sources javascript doit etre avant les script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
<?php 
  $username=$_SESSION['name'];
  $sql = "SELECT `image_url`  FROM `utilisateur` WHERE (`name`='$username')";
  $res = $db->query($sql);
  $data = $res->fetch();
?>
<?php if ($_SESSION['count']==1) :?>
  <?php $_SESSION['count']=++$_SESSION['count'] ; ?>
  <script type="text/javascript">
    Swal.fire(
    '<?php echo "Bienvenu!  ".$username ; ?>',
    '<?php echo $_SESSION['success'];?>',
    'success')
  </script>
<?php endif ?>
<div style="background-color:white;padding-bottom: 1rem;">
  <a href="niveau/upload.php" class="btn btn-info" role="button"><i class="fas fa-cloud"></i>  partagez vos fichiers</a>
  <center>
    <img src="css/Tunisia_240-animated-flag-gifs.gif" width="120" height="60" alt="république tunisienne" class="img_rep_tun"></center>
  <span><!--Animated flag gif may be downloaded free of charge in this web--><center> la république tunisienne|ministère de l'éducation </center></span>
  <!--titre et sous titre-->
  <h1>
    <span class="titre"> <center> <strong> le portail de la physique en tunis 2</strong> </center> </span>
    <span class="sous-titre"><center> <h3>Le lien entre l’enseignant et l’élève</h3> </center> </span>
  </h1>
  <!-- navbar -->
  <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class=" nav navbar-nav mr-auto ">
        <li class="nav-item dropdown"><!--profil-->
          <a class="navbar-brand dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="rounded-circle" src="<?php echo $data['image_url'] ?>" alt="user img" style="width:40px;">
           <?php echo $username ?></a>
          <ul class="dropdown-menu" aria-labelledby="dropdown1">
            <li class="dropdown-item" >
              <button class="nestedmenu btn btn-danger" href="index.php?logout='1'"> déconnection </button>
            </li>
          </ul>
        </li>
        <li class="nav-item active"><!--home-->
          <a class="nav-link" href="index.php"> 
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
                  <a class="nestedmenu" href="niveau/7eme-annee.php">7ème de base</a></li>
                <li class="dropdown-item">
                  <a class="nestedmenu" href="niveau/8eme-annee.php">8ème de base</a></li>
                <li class="dropdown-item">
                  <a class="nestedmenu" href="niveau/9eme-annee.php">9ème de base</a></li>
              </ul></li>
            <li class="dropdown-item" ><a class="nestedmenu" href="niveau/1ere-annee.php">1ère secondaire</a></li>
            <li class="dropdown-item dropdown"><!--2-->
              <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">2ème secondaire</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                <li class="dropdown-item">
                  <a class="nestedmenu" href="niveau/2i.php">Technologie de l’informatique</a></li>
                <li class="dropdown-item">
                  <a class="nestedmenu" href="niveau/2s.php">Sciences</a></li>
              </ul></li>
            <li class="dropdown-item dropdown"><!--3-->
              <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3ème secondaire</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                <li class="dropdown-item">
                  <a class="nestedmenu" href="niveau/3i.php">science informatique</a></li>
                <li class="dropdown-item">
                  <a class="nestedmenu" href="niveau/3m.php">mathématique</a></li>
                <li class="dropdown-item">
                  <a class="nestedmenu" href="niveau/3t.php">Technique</a></li>
                <li class="dropdown-item">
                  <a class="nestedmenu" href="niveau/3s.php">Sciences exprimentales</a></li>
              </ul></li>
            <li class="dropdown-item dropdown"><!--4-->
              <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">4ème secondaire</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                <li class="dropdown-item">
                  <a class="nestedmenu" href="niveau/4i.php">science informatique</a></li>
                <li class="dropdown-item"><a class="nestedmenu" href="niveau/4m.php">mathématique</a></li>
                <li class="dropdown-item"><a class="nestedmenu" href="niveau/4t.php">Technique</a></li>
                <li class="dropdown-item"><a class="nestedmenu" href="niveau/4s">Sciences exprimentales</a></li>
              </ul>
              </li>
          </ul><!--match can't be found because the lengith of the match-->
        </li>
        <li class='nav-item'><!--contact-->
          <a class="nav-link" href='contact/contact.php' title='contact'>contact </a></li>
        <li class="nav-item" ><!--document pédagogique-->
          <a class="nav-link" href="document-pédagogique.php">document pédagogique</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
      <input type="text" class="form-control" id="cherche" placeholder="  chercher un document">
      </form>
  </nav>
  </div>
<main role="main">
  <div id="myCarousel" class="carousel slide" data-interval="false" data-ride="carousel" data-pause="hover">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active" style="background-color: blue;"></li>
      <li data-target="#myCarousel" data-slide-to="1" style="background-color: blue;"></li>
      <li data-target="#myCarousel" data-slide-to="2" style="background-color: blue;"></li>
    </ol>
    <div class="carousel-inner" style="margin-left: 5%;
    margin-right: 5%;max-width: 100%;width: unset;">
      <div class="carousel-item">
        <img src="img/inscription_6eme2021.png" class="img-fluid">
        <div class="container">
          <div class="carousel-caption text-left" style=" top: 5%; left: 4%;">
            <p><a class="btn btn-lg btn-primary" href="http://www.six.edunet.tn/" target="_blank" role="button">voir le site</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <img src="img/inscription_9eme2021.png" class="img-fluid">
          <div class="carousel-caption text-left" >
            <p><a class="btn btn-lg btn-primary" href="http://www.neuf.edunet.tn/" target="_blank" role="button">voir le site</a></p>
        </div>
      </div>
      <div class="carousel-item ">
        <img src="img/inscri_bac2021.png" class="img-fluid">
          <div class="carousel-caption" style=" right: 32%; left: 7%; bottom: 4%">
            <p><a class="btn btn-lg btn-primary" href="http://www.inscription.edunet.tn/" target="_blank" role="button"> voir le site</a></p>
          </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing" style="background-color: white; margin-right: auto; margin-left: auto;">

        <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-8">
        <a href="https://www.unicef.org/tunisia/"><img class="bd-placeholder-img " width="100%" height="auto" preserveaspectratio="xMidYMid slice" focusable="false" role="img" src="img/enfant.png" alt="&copy; unicef tunisia"><figcaption></figcaption></a>
        <h2> la Journée mondiale de l’enfance</h2>
        <p>La Tunisie célèbre la Journée mondiale de l’enfance et le 31ème anniversaire de la Convention relative aux droits de l’enfant et annonce à cette occasion la création d’un Conseil supérieur de l’enfance</p>
        <p><a class="btn btn-secondary" href="https://www.unicef.org/tunisia/recits/la-tunisie-c%C3%A9l%C3%A8bre-la-journ%C3%A9e-mondiale-de-lenfance" role="button">voir détails </a></p>
      </div><!-- /.col-lg-8 -->
      <div class="col-lg-4" style="
    padding-left: 15px;
    padding-right: 15px;
    float: left;
">
        <aside id="linkcat-2" class="widget widget_links" style="
    width: 100%;
    margin-bottom: 30px;
"><h2 class="widget-title" style="
    background: #294a70 none repeat scroll 0 0;
    border-bottom: 0 solid #ffab1f;
    border-left: 20px solid #ffab1f;
    color: #ffffff;
    font-size: 16px;
    font-weight: normal;
    line-height: 1.5;
    padding: 5px 15px;
    position: relative;
    margin-bottom: 20px;
">Liens utiles</h2>
          <ul class="xoxo blogroll" style="">
            <li style="font-family: fontawesome;font-size: 2rem;margin-left: 5px;margin-right: 8px;"><a href="http://www.6web.edunet.tn/" target="_blank">Concours 6ème</a></li>
            <li style="font-family: fontawesome;font-size: 2rem;margin-left: 5px;margin-right: 8px;"><a href="http://www.9web.edunet.tn/" target="_blank">Concours 9ème</a></li>
            <li style="font-family: fontawesome;font-size: 2rem;margin-left: 5px;margin-right: 8px;"><a href="http://www.bacweb.tn/" target="_blank">Concours Bac</a></li>
          </ul>
        </aside>
      </div><!-- /.col-lg-4-->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Suivis état sanitaire  <hr><span class="text-muted">le 24 novembre</span></h2>
        <p class="lead"></p>
      </div>
      <div class="col-md-5">
        <a href="img/Suiv_EtatSanit20Nov.png" target="_blank">
          <img src="img/Suiv_EtatSanit24Nov.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" preserveaspectratio="xMidYMid slice" focusable="false" role="img" aria-label="Suivis état sanitaire 20 nov">
        </a>
      </div>
    </div>
    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
  <!-- FOOTER -->
  <footer >
    <b>&copy; 2019-2020 le portail de la physique en tunis 2 &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></b>
  </footer>
</main>
<button onclick="topFunction()" id="myBtn" title="Go to top"><svg class="bi bi-arrow-up" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z" clip-rule="evenodd"/>
</svg> </button>
 </div>
<!--drop down submenu function-->
<script type="text/javascript">
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

window.open(url, '_self');

});
</script>
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
</body>
</html>
