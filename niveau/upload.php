<?php require "process_upload.php" ;
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova">
<head>
 <link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F200973675497571" title="oEmbed Form">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
 <link href="css/styles_upload/form.css" rel="stylesheet" type="text/css" />
 <link type="text/css" rel="stylesheet" href="css/styles_upload/nova.css" />
 <link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.16749" />
 <!--nessesaire pou le navbar-->
 <link rel="icon" href="../css/logo site.png">
 <link type="text/css" rel="stylesheet" href="css/styles_upload/autre.css" />
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="../modele_page_cour/stylemod2.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--fin link from head 2-->
 <title> Partagez Vos Fichiers</title>
</head>

<body>
<div class="head">
  <a href="../niveau/upload.php" class="btn btn-info" role="button"><span class="glyphicon glyphicon-cloud"></span>  partagez vos fichiers</a>
    <center>
      <img src="../css/Tunisia_240-animated-flag-gifs.gif" width="100" height="40" alt="république tunisienne" class="img_rep_tun" ></center>
    <!--Animated flag gif may be downloaded free of charge in this web-->
    <center > <small>la république tunisienne|miministère de l'éducation</small></center>
    <!--titre et sous titre-->
  <h1>
  <span class="titre"> <center> <strong> <a href="../index-i.php">le portail de la physique en tunis 2</a></strong> </center> </span>
  <!--<span class="sous-titre"><center> <h3>Le lien entre l’enseignant et l’élève</h3> </center> </span>-->
  </h1>
</div>
<!-- navbar -->
<nav class="navbar navbar-inverse "><!--pour fixer  le navbar on ajoute la class"navbar-fixed-top" a la balise <nav> et pour le justifier la classe "nav-justified" -->
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ab" >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="navbar-collapse collapse" id="ab">
      <ul class="nav navbar-nav">
        <li>
          <form class="navbar-form " role="search">
        <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-search"></i></button>
        <div id="demo" class="collapse "> 
          <input type="text" class="form-control" placeholder="chercher un document">
        </div>
        </form>
        </li>
        <li><a href="../signin.php"><span class="glyphicon glyphicon-user"></span> connexion</a></li>
        <li class="active"><a href="../index-i.php"><span class="glyphicon glyphicon-home"></span> acceuil</a></li>
        <li class="dropdown " ><!-- la liste espace eleve-->
          <a href ="#" class="dropdown-toggle" data-toggle="dropdown">espace élève<span class="caret"></span>
          </a><!--le dropdown menu necesite bootsrap.js -->
          <ul class="dropdown-menu">
            <!--college-->
            <li class="hoverme"><a>collège<span class="caret"></span></a>
              <div class="submenu2">
                <ul>
                  <li ><a  href="../niveau/7eme-annee.php">7ème de base</a></li>
                  <li ><a  href="../niveau/8eme-annee.php">8ème de base</a></li>
                  <li><a  href="../niveau/9eme-annee.php">9ème de base</a></li>
                </ul>
              </div>
            </li>

            <li><a  href="../niveau/1ere-annee.php">1ère secondaire</a></li>
                 <!--2eme-->
            <li class="hoverme"><a>2ème secondaire<span class="caret"></span></a>
              <div class="submenu2">
                <ul>
                  <li><a href="../niveau/2i.php">Technologie de l’informatique</a></li> 
                  <li><a href="../niveau/2s.php">Sciences</a></li> 
                </ul>
              </div>
            </li>
                 <!--3eme-->
            <li class="hoverme"><a>3ème secondaire<span class="caret"></span></a>
              <div class="submenu2" id="up">
                <ul>
                  <li><a  href="../niveau/3i.php">science informatique</a></li> 
                  <li><a  href="../niveau/3m.php">mathématique</a></li> 
                  <li><a  href="../niveau/3t.php">Technique</a></li> 
                  <li><a  href="../niveau/3s.php">Sciences exprimentales</a></li>
                </ul>
              </div>
            </li>
                 <!--bac-->
            <li class="hoverme"><a>4ème secondaire<span class="caret"></span></a>
              <div class="submenu2" id="up">
                <ul>
                  <li><a  href="../niveau/4i.php">science informatique</a></li> 
                  <li><a  href="../niveau/4m.php">mathématique</a></li> 
                  <li><a  href="../niveau/4t.php">Technique</a></li> 
                  <li><a  href="../niveau/4s.php">Sciences exprimentales</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="dropdown"><!-- la liste espace prof-->
          <a href ="#" class="dropdown-toggle" data-toggle="dropdown">espace enseignant<span class="caret"></span>
          </a><!--le dropdown menu necesite bootsrap.js -->
          <ul class="dropdown-menu">
            <li><a  href="../document-pédagogique.php">document pédagogique</a></li>
                 <!--college-->
            <li class="hoverme"><a>collège<span class="caret"></span></a>
              <div class="submenu2">
                <ul>
                  <li ><a  href="../niveau/7eme-annee.php">7ème de base</a></li>
                  <li ><a  href="../niveau/8eme-annee.php">8ème de base</a></li>
                  <li><a  href="../niveau/9eme-annee.php">9ème de base</a></li>
                </ul>
              </div>
            </li>

            <li><a  href="../niveau/1ere-annee.php">1ère secondaire</a></li>
                 <!--2eme-->
            <li class="hoverme"><a>2ème secondaire<span class="caret"></span></a>
              <div class="submenu2">
                <ul>
                  <li><a href="../niveau/2i.php">Technologie de l’informatique</a></li> 
                  <li><a href="../niveau/2s.php">Sciences</a></li> 
                </ul>
              </div>
            </li>
                 <!--3eme-->
            <li class="hoverme"><a>3ème secondaire<span class="caret"></span></a>
              <div class="submenu2" id="up">
                <ul>
                  <li><a  href="../niveau/3i.php">science informatique</a></li> 
                  <li><a  href="../niveau/3m.php">mathématique</a></li> 
                  <li><a  href="../niveau/3t.php">Technique</a></li> 
                  <li><a  href="../niveau/3s.php">Sciences exprimentales</a></li>
                </ul>
              </div>
            </li>
                 <!--bac-->
            <li class="hoverme"><a>4ème secondaire<span class="caret"></span></a>
              <div class="submenu2" id="up">
                <ul>
                  <li><a  href="../niveau/4i.php">science informatique</a></li> 
                  <li><a  href="../niveau/4m.php">mathématique</a></li> 
                  <li><a  href="../niveau/4t.php">Technique</a></li> 
                  <li><a  href="../niveau/4s.php">Sciences exprimentales</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li><a href="../contact/contact.php"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li>
        <li><a href="../news.php"><span class="glyphicon glyphicon-info-sign"></span>actualités</a></li>
      </ul>
    </div>
  </div>
</nav>
<script>
$(document).ready(function(){
  $("#demo").click(function(){
    $(".collapse").collapse('toggle');
  });
  /*$(".collapse").on('shown.bs.collapse', function(){
    alert('The collapsible content is now fully shown.');
  });*/
  $("#demo").on("show.bs.collapse", function(){
    $(".btn-default").css('background-color: red;');
  });
});
</script>
<form class="jotform-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" name="form_200973675497571" id="200973675497571" accept-charset="utf-8" autocomplete="on">
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_10" class="form-input-wide">
        <div class="form-header-group  header-default">
          <div class="header-text httac htvam">
            <h2 id="header_10" class="form-header" data-component="header">Envoyez nous votre document!</h2>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_12">
        <div id="cid_12" class="form-input-wide">
          <div id="text_12" class="form-html" data-component="text">
            <table style="width: 381.4px; border-color: green;" border="1">
              <tbody>
                <tr>
                  <td style="width: 388.4px;">
                    Ce formulaire est uniquement destiné aux matières suivants: Physique et Chimie .
                    Vous pouvez ajouter des fichiers WORD ou PDF de taille inférieure à 20MB.
                    Veuillez remplir ce formulaire avec soin pour obtenir le plus possible d'informations  sur le fichier envoyé. Merci
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </li>
      <span style=";color: #155724;"><center><?php  echo $mes.$mes2 ?></center></span> 
      <span style="color: red;"><center><?php  echo $erreur ?></center></span> 
      <li class="form-line" data-type="control_textbox" id="id_9"><!--nom prof-->
        <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9"> Votre Nom Complet* </label>
        <div id="cid_9" class="form-input">
          <input type="text" id="input_9" name="nom_prof" data-type="input-textbox" class="form-textbox" size="20" value="<?= $nom_prof ?>" data-component="textbox" aria-labelledby="label_9" required placeholder="Nom Prenom" />
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_5"><!--email-->
        <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5"> Votre E-mail* </label>
        <div id="cid_5" class="form-input">
          <input type="email" id="input_5" name="email" class="form-textbox validate[Email]" size="30"data-component="email" value="<?= $email ?>" aria-labelledby="label_5" required/>
        </div>
      </li>
      <li class="form-line" data-type="control_dropdown" id="id_7"><!--classe-->
        <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7"> Classes* </label>
        <div id="cid_7" class="form-input">
          <select class="form-dropdown" id="input_7" name="classe" data-component="dropdown" aria-labelledby="label_7" required >
            <option></option>
            <optgroup label=">─── Enseignement de Base ───<">
              <option value="7">7éme de Base</option>
              <option value="8">8éme de Base</option>
              <option value="9">9éme de Base</option>
            </optgroup>
            <optgroup label=">─── Enseignement Secondaire ───<">
              <option value="1">1 ère année Secondaire</option>

              <optgroup label="2ème années Secondaire">
                <option value="2s">  2ème Sciences</option>
              <option value="2i"> 2ème Technologie de l’informatique</option>
              </optgroup>
              
              <optgroup label="3ème années Secondaire">
                <option value="3m">  3ème Mathématiques</option>
               <option value="3t"> 3ème Sciences Techniques</option>
              <option value="3i"> 3ème Sciences de l’informatique</option>
              <option value="3s"> 3ème Sciences expérimentales</option>
              </optgroup>

              <optgroup label="4ème années Secondaire">
              <option value="4m"> 4ème Mathématiques</option>
               <option value="4t"> 4ème Sciences Techniques</option>
              <option value="4i"> 4ème Sciences de l’informatique</option>
              <option value="4s"> 4ème Sciences expérimentales</option>
              </optgroup>

            </optgroup>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_dropdown" id="id_13"><!--type-->
        <label class="form-label form-label-left form-label-auto" id="label_13" for="input_13"> type* </label>
        <div id="cid_13" class="form-input">
          <select class="form-dropdown" id="input_13" name="type" style="width:150px" data-component="dropdown" aria-labelledby="label_13" required>
            <option ><?php echo $type ?></option>
            <option disabled="">Quelle est la nature de votre document ?</option>
            <option value="devoir-sans-correction">devoir sans correction</option>
            <option value="devoir-avec-correction">devoir avec correction</option>
            <option value="exercices-sans-correction">exercices sans correction</option>
            <option value="exercices-avec-correction">exercices avec correction</option>
            <option value="cour-">Cours</option>
            <option value="resume-">Résumé</option>
            <option value="TP-cour-">TP-cour</option>
            <option value="TP-cour-">TP-cour</option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_13"><!--titre-->
        <label class="form-label form-label-left form-label-auto" id="label_13" for="input_13"> titre* </label>
        <div id="cid_13" class="form-input">
          tapez pour ajouter d'autre
          <input  id="input_13" name="titre" value="<?= $titre ?>" class="form-textbox"  data-component="dropdown" aria-labelledby="label_13"placeholder="exemple:circuit RL/devoir"list="a" required/>
          <datalist id="a" >
            <option value="controle n1">devoir de contrôle n°1</option>
            <option value="controle n2">devoir de contrôle n°2</option>
            <option value="controle n3">devoir de contrôle n°3</option>
            <option value="synthese n1">devoir de synthèse n°1</option>
            <option value="synthese n2">devoir de synthèse n°2</option>
            <option value="synthese n3">devoir de synthèse n°3</option>
          </datalist>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_9"><!--annee scolaire-->
        <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9"> année scolaire* </label>
        <div id="cid_9" class="form-input">
          <input type="text" id="input_9" name="annee_scolaire" data-type="input-textbox" class="form-textbox" size="20" value="<?= $annee_scolaire ?>" data-component="textbox" aria-labelledby="label_9" placeholder="exemple:2018-2019" required />
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_8"><!--description sujet-->
        <label class="form-label form-label-left form-label-auto" id="label_8" for="input_8"> une description du sujet </label>
        <div id="cid_8" class="form-input">
          <textarea id="input_8" class="form-textarea" name="description" cols="35" rows="5" data-component="textarea" aria-labelledby="label_8"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_fileupload" id="id_6"><!--bouton upload file-->
        <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6"> Upload your files here </label>
        <div id="cid_6" class="form-input">
          <input type="file" id="input_6" name="fichier" class="form-upload btn btn-primary" accept=" application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document " data-file-maxsize="10240" data-file-minsize="0" data-file-limit="0" data-component="fileupload" required/>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2"><!--bouton submit-->
        <div id="cid_2" class="form-input-wide">
          <div style="text-align:center" data-align="center" class="form-buttons-wrapper  ">
            <button id="input_2" type="submit" class="form-submit-button" data-component="button" data-content="">
              Submit
            </button>
          </div>
        </div>
      </li>
    </ul>
  </div>
</form>
<div class="formFooter f6">
    <p>powered By <a href="https://www.jotform.com" target="_blank" class="formFooter-logoLink"><img class="formFooter-logo" src="https://cdn.jotfor.ms/assets/img/logo/logo-new@1x.png" alt="Jotform Logo" style="height: 44px;"></a></p>
     <b> &#169; le portail de la physique en tunis 2 </b>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/js/vendor/imageinfo.js?v=3.3.16749" type="text/javascript"></script>
<!--provoque un probleme avec head2
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>-->
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.16749" type="text/javascript"></script>
