<form action="" method="post" class="form">
 <h1 class="sh-title">Inscrivez-vous gratuitement</h1>
  <h4 class="sh-subtitle">L'inscription est obligatoire pour poster une annonce sur le site</h4>
   <input type="text" name="firstname" class="sh-input-inline" placeholder="Prénom">	
    <input type="text" name="surname" class="sh-input-inline-2" placeholder="Nom">	
     <input type="text" name="land" class="sh-input-inline" placeholder="Pays du domicile">	
      <input type="text" name="city" class="sh-input-inline-2" placeholder="Ville">	
       <input type="password" name="pass" class="sh-input-inline" placeholder="Mot de passe">	
      <input type="password" name="repass" class="sh-input-inline-2" placeholder="Confirmer le mot de passe">	
     <input type="email" name="email" class="sh-input" placeholder="Adresse e-mail">
    <input type="submit" value="Confirmer l'inscription" class="sh-submit" name="submit">
   <p><input type="checkbox" id="GCU"/><label for="GCU"><span class="ui"></span><span class="phoned">J'ai lu et j'accepete les <a href="#">conditions générales d'utilisation</span></a></label></p>
 <?php 
 require("../php/pdo.php");

 if(isset($_POST['submit'])){
 	$firstname = htmlspecialchars($_POST['firstname']);
 	$surname = htmlspecialchars($_POST['surname']);
 	$land = htmlspecialchars($_POST['land']);
 	$city = htmlspecialchars($_POST['city']);
 	$pass = htmlspecialchars($_POST['pass']);
 	$repass = htmlspecialchars($_POST['repass']);
 	$email = htmlspecialchars($_POST['email']);
 	
 	if(!empty($_POST['firstname']) AND !empty($_POST['surname']) AND !empty($_POST['land']) AND !empty($_POST['city']) AND !empty($_POST['pass']) AND !empty($_POST['repass']) AND !empty($_POST['email'])){
 		if($firstname != $surname){
 			if($land != $city){
 				if($pass == $repass){
 					if(filter_var($email, FILTER_VALIDATE_EMAIL)){
               		 $reqmail = $db->prepare("SELECT * FROM users WHERE email = ?");
               		  $reqmail->execute(array($email));
              		   $mailexist = $reqmail->rowCount();
              			if($mailexist == 0){
              			 $password = sha1($repass);
                     $link = sha1($email);
                     	  $insertuser = $db->prepare("INSERT INTO users(name, surname, password, email, land, city, link) VALUES(?, ?, ?, ?, ?, ?, ?)");
                     	 $insertuser->execute(array($firstname, $surname, $password, $email, $land, $city, $link));
                       $header = "MIME-Version: 1.0\r\n";
                      $header.= 'From:"ShellShop.net"<noreply@shellshop.net>'."\n";
                      $header.= 'Content-Type:text/html; charset="utf-8"'."\n";
                      $header.= 'Content-Transfer-Encoding: 8bit';

                      $content = '
                      <html>
                        <head>
                           <link href="https://fonts.googleapis.com/css?family=Roboto|Sansita" rel="stylesheet">
                        </head>
                        <body>
                          <div class="topper">
                          <img src="https://skyfight.be/mailing/mail-banner.png">
                          </div>
                          <div align="center">
                          <p>Merci de vous être inscrit sur <a href="http://www.shellshop.net/verify/?verify='.$link.'" target="_blank">ShellShop.net</a> ! <br/> Afin de pouvoir vendre ou acheter sur notre site,<br/> merci de bien vouloir vérifier votre compte en cliqueant ci-dessous.</p>
                            <br/><a href="http://www.shellshop.net/verify/?id=11" target="_blank" class="tbtn" style="text-decoration: none;"><font color="#ffffff">Confirmer mon compte</font></a><br/><br/>
                            <p>(Si rien le bouton ne s\'affiche pas, cliquez <a href="http://www.shellshop.net/verify/?verify='.$link.'" target="_blank">Ici</a>)</p>
                          </div>
                          <style>
                          body{
                              margin: 0;
                              padding: 0;
                              padding-bottom: 500px;
                              background-color: rgba(0,0,0,0.05);
                          }
                            a{
                              color: white;
                              text-decoration:none;
                            }
                            p{
                              padding-top: 30px;
                              font-size: 16px;
                            }
                          .tbtn{
                            padding: 10px;
                            padding-bottom: 12px;
                            padding-right: 25px;
                            padding-left: 25px;
                            margin-top: 25px;
                            border-radius: 20px;
                            text-transform: uppercase;
                            text-decoration: none;
                            color: white;
                              font-size: 18px;
                            background-color: rgba(41, 128, 185,1.0);
                          }
                          .topper{
                            width: 100%;
                            padding: 0px;
                          }
                          .topper img{
                            width: 100%;
                          }
                          </style>
                        </body>
                      </html>
                      ';

                      mail($email, "Confirmation de votre inscription", $content, $header);
                       header("Location: ../connexion/");
              			}else{
              				$error = 'Adresse mail déjà utilisée !';
              			}
 					}else{
 						$error = 'Adresse e-mail invalide !';
 					}
 				}else{
 					$error = 'Vos mots de passe ne correspondent pas !';
 				}
 			}else{
 				$error = 'Votre pays et votre ville sont identiques !';
 			}
 		}else{
 			$error = 'Votre prénom et votre nom sont identiques !';
 		}
 	}else{
 		$error = 'Veuillez remplir tous les champs ci-dessus !';
 	}

 }

 ?>
 	<?php 
 		if(isset($error)){
 			echo '<div class="error">';
 			echo '<p>'.$error.'</p>';
 			echo '</div>';
 		}
 	?>
</form>