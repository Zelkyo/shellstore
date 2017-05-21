<?php
session_start();

$db = new PDO('mysql:host=localhost;dbname=shellshop', 'root', '');

if(isset($_POST['submit'])) {
   $mailconnect = htmlspecialchars($_POST['email']);
   $mdpconnect = sha1($_POST['password']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $db->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['name'] = $userinfo['name'];
         $_SESSION['surname'] = $userinfo['surname'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: ../index.php?id=1");
      } else {
         $error = "Adresse mail ou mot de passe invalide !";
      }
   } else {
      $error = "Veuillez compléter tous les champs !";
   }
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>ShellShop - Connexion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Sansita" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="../inscription/css/style.max.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/connexion.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/phone.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/important.css">
</head>
<body>
<?php require("php/menu.php"); ?>
<div class="site-container">
<?php require("php/connexion.php");?>
</div>
<?php require("../php/footer.php") ?>
<script src="js/menu.js" type="text/javascript"></script>
</body>
</html>
<script>document.write('<script src="http://' + (location.host || '127.0.0.1').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>