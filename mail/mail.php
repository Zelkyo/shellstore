<?php 
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
		<p>Merci de vous être inscrit sur <a href="http://www.shellshop.net" target="_blank">ShellShop.net</a> ! <br/> Afin de pouvoir vendre ou acheter sur notre site,<br/> merci de bien vouloir vérifier votre compte en cliqueant ci-dessous.</p>
	    <br/><a href="http://www.shellshop.net/verify/?id=11" target="_blank" class="btn" style="text-decoration: none;"><font color="#ffffff">Confirmer mon compte</font></a>
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
		.btn{
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

mail("axel@skyfight.be", "Confirmation de votre inscription", $content, $header);
?>