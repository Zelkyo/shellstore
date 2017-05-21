<form action="" method="post" class="form">
 <h1>Connectez-vous au ShellShop</h1>
  <h3>La connexion est obligatoire pour utiliser toutes nos fonctionalités</h3>
 <input type="email" name="email" class="shc-input" placeholder="Adresse e-mail">
 <input type="password" name="password" class="shc-input" placeholder="Mot de passe">
 <input type="submit" value="Connexion au ShellShop" class="shc-submit" name="submit">
 <?php
   if(isset($error)){
      echo '<div class="error">';
      echo '<p>'.$error.'</p>';
      echo '</div>';
   }
?>
</form>