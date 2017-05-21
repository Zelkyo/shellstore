<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ShellShop - Vérification de votre compte</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Sansita" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/style.max.css">
	<link rel="stylesheet" href="css/verify.css">
	<link rel="stylesheet" href="../css/responsive.css">
	<link rel="stylesheet" href="../css/phone.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/important.css">
</head>
<body>
<div class="site-container">
<?php 
if(isset($_GET['verify'])){
	require("php/verify.php"); 
}else{
	echo '<h3 align="center"><br/><br/><br/>Cette page vous est inaccesiible</h3>';
	echo '<br/><a href="../" class="v-btn">Continuer ma navigation</a>';
}
?>
</div>
</body>
</html>
<script>document.write('<script src="http://' + (location.host || '127.0.0.1').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>