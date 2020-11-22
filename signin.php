<?php
require 'registration/processregis.php';
/*inclure le fechier de connection "connect_db.php" a la base de donnée*/
?>
<!DOCTYPE html>
<!--  this html and css code is inspired from https://codepen.io/colorlib/pen/rxddKy</!-->
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
 <meta content="IE=edge" http-equiv="X-UA-Compatible">
 <link rel="icon" href="../css/logo site.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style_regi.css" type="text/css">
  <title>Connectez-Vous</title>
</head>
<body>

<div id="head"><!-- entete-->
  <center><!--Animated flag gif may be downloaded free of charge in this web-->
    <img src="css/Tunisia_240-animated-flag-gifs.gif"alt="république tunisienne" class="img_rep_tun" ></center>
    <small><center id="img-title"> la république tunisienne|miministère de l'éducation</center></small> 
  <h1 id="title"><!--titre et sous titre-->
     <center> <strong> <a href="index-i.php">le portail de la physique en tunis 2</a></strong> </center></h1>
  <h3 id="under-title"><center>Le lien entre l’enseignant et l’élève </center></h3>
</div>

<div class="login-page container">
 <div class="form">
  <h1> votre Compte!</h1>
  <div class=" alert-danger">
    <strong><?php echo $error1;?></strong> 
  </div>
  <form class="login-form" action="signin.php" method="post" >
      <input type="text" placeholder="Nom d'utilisateur" name="name"value="<?=$user?>" required/>
      <input name="password" type="password" placeholder="Mot de passe" required />
      <button name="login" type="submit">Connection</button>
      <b class="message">Vous n'avez pas de compte ?<a href="registration.php">Créer un Compte</a></b>
  </form>
</div>
</div> 
<footer >
  <b>&copy; 2019-2020 le portail de la physique en tunis 2 &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></b>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<!--lier la page html et instruction javascript
<script type="text/javascript" src="register.js"></script>-->
</body>
</html>