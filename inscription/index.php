<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=shellshop', 'root', '');

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>ShellShop - Plateforme de vente de coquillages en ligne</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Sansita" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/style.max.css">
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="../connexion/css/menu.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/phone.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/important.css">
</head>
<body>
<?php require("php/menu.php"); ?>
<div class="site-container">
<?php require("php/form.php"); ?>
</div>
<?php require("../php/footer.php") ?>
<script src="../js/menu.js" type="text/javascript"></script>
</body>
</html>
<script>document.write('<script src="http://' + (location.host || '127.0.0.1').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>