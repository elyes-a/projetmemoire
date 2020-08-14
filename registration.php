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
  <title>Inscription</title>
  <style>
    @media only screen and (max-width: 425px){
    .form .message {font-size: 17px;}
    .form input{
      margin: 0 0 10px;
      padding: 3%;
      font-size: 14px}
    .form button{
      padding: 10px;
      margin: 0.4rem 0;}
    }
  </style>
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

<div class="register-page container">
 <div class="form">
  <h1>Inscrivez-Vous</h1>
  <div class=" alert-danger">
    <strong><?php echo $error1.$error2;?></strong> 
  </div>
	<form class="register-form" action="registration.php" method="post" enctype="multipart/form-data">
	 <input type="text" placeholder="Nom d'utilisateur" id="name" name="name" value="<?=$name?>" required />
	 <input type="email" id="email" placeholder="Email" name="email" value="<?=$email?>"required />
   <input type="password" id="password" placeholder="choisier un mot de passe" name="password" autocomplete="new-password" required />
   <div class="avatar"><label>Choisir un photo de profil: </label><input type="file" name="avatar"accept="image/*" /><!--accept definie le type des fichier a afficher  lorsque on choisie nos fichier-->
    </div>
	 <button name="create" type="submit" id="create">créer mon compte</button>
   <b class="message">Vous avez déjà un compte? <a href="signin.php">Connecter</a></b>
	</form>
</div>
</div>
<footer id="footer">
    <b>&copy; 2019-2020 le portail de la physique en tunis 2 &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></b>
  </footer>

<script type="text/javascript" src="jquery-3.4.1.min.js
"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<!--lier la page html et instruction javascript
<script type="text/javascript" src="register.js"></script>-->
</body>
</html>