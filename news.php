<?php 
$title="Actualités";
require_once 'modele_page_cour/head2.php' ;
?>
 <link href='news.php' rel='canonical'/>
 <link href="https://getbootstrap.com/docs/4.4/examples/carousel/carousel.css" rel="stylesheet">
 <link rel="stylesheet" href="css/styleindex.css">

<main role="main" class="container" style="
    padding: 2% 2% 1px 2%;
    margin-bottom: 10px;
    max-width:unset;
    width:unset;
">
  <div id="myCarousel" class="carousel slide" data-interval="false" data-ride="carousel" data-pause="hover" style="margin-bottom: 2%;">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="" style="background-color: blue;"></li>
      <li data-target="#myCarousel" data-slide-to="1" class="active" style="background-color: blue;" ></li>
      <li data-target="#myCarousel" data-slide-to="2" class="" style="background-color: blue;"></li>
    </ol>
    <div class="carousel-inner">
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

  <div class="container marketing" style="
    background-color: white;
    margin:0 0;
    padding: 12px 7px;
     max-width: unset; 
">

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
  
</main>
<!-- FOOTER -->
  <footer>
    <b>© 2019-2020 le portail de la physique en tunis 2 · <a href="#">Privacy</a> · <a href="#">Terms</a></b>
  </footer>
<button onclick="topFunction()" id="myBtn" title="Go to top" style="display: none;"><svg class="bi bi-arrow-up" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
  <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z" clip-rule="evenodd"></path>
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



</body>
</html>
