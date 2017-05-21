<div class="verified">
 <h2>Votre est compte est maintenant vérifié, merci !</h2>
  <h3>Vous pouvez dès à présent acheter ou vendre sur ShellShop.net sans restriction, amusez-vous bien !<br/><br/></h3>
 <a href="../" class="v-btn">Continuer ma navigation</a>
</div>
<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=shellshop', 'root', '');

	if(isset($_GET['verify'])) {
	   $verify = htmlspecialchars($_GET['verify']);
	   $finduser = $bdd->prepare('SELECT * FROM users WHERE link = ?');
	   $finduser->execute(array($verify));
	   $user = $finduser->fetch();
	   $exist = $finduser->rowCount();

	   if($exist == 1){
	   	 $verified = $bdd->prepare('UPDATE users SET verified = "verified" WHERE link = ?');
	   	 $verified->execute(array($verify));
	   }else{
	   	 header('Location: ../verify/');
	   }
	}
?>