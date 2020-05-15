<?php 
include('task.php');
$title="contact";
include '../modele_page_cour/head2.php';
 ?>
<link rel="stylesheet" type="text/css" href="style_contact.css">

 <div class="container">  
   <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <h3> Contacter nous!</h3>
    <h4>Merci d'envoyez vos commentaires et suggestions !</h4>
    <div class="mes"> <?php echo $mes ; ?> </div>
    <!--<fieldset>..</fieldset> sert a encadrer les fields tel que name etc-->
    <fieldset>
      <input placeholder="Votre nom" type="text" name="name"  value="<?= $name ?>" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Votre email adresse" name="email" type="email"  value="<?= $email ?>" required>
    </fieldset>
    <fieldset>
            <!--name="message" is the name of a coloum in the array $_POST-->
      <textarea placeholder="écrire votre message ici...." name="message" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
   </form>  </div>
<?php include '../modele_page_cour/footer2.html'; ?>
