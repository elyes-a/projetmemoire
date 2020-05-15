<?php 
$mes_body=$mes=$name=$email="";
//form is submetted with POST method
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  unset($_POST['submit']);
  foreach ($_POST as $key => $value) {$mes_body .= "$key: $value\n";}
$to='seylegita@hotmail.fr';
$subject='contact form submit';
$mes="message non envoyé";
if (mail($to,$subject,$mes_body)){$mes="Votre message est envoyé , merci .";$name=$mes_body=$email="";} 
}
 ?>