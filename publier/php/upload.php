<?php
session_start();
require("../../php/pdo.php");

 if(isset($_POST['submit'])){
 	$title = htmlspecialchars($_POST['title']);
 	$description = htmlspecialchars($_POST['description']);
  $price = str_replace( ',', '.', $_POST['price']);
  $upload = 'no';
 	
 	if(!empty($_POST['title']) AND !empty($_POST['price']) AND !empty($_POST['description'])){
 		if($title != $description){
 			 if(strlen($title) <= 52){
            
          $bdd = new PDO('mysql:host=localhost;dbname=shellshop', 'root', '');

          $target = $bdd->prepare('SELECT * FROM article ORDER BY id DESC LIMIT 1');
          $target->execute();
          $targets = $target->fetch();
          $goto = $targets['id'] + 1;

          $seller = $_SESSION['id'];
          // $insertarticle = $db->prepare("INSERT INTO article(seller, title, price, description) VALUES(?, ?, ?, ?)");
          // $insertarticle->execute(array($seller, $title, $price, $description));
          header('Location: //127.0.0.1/shellshop/details/?id='.$goto);  
          $upload = 'ok';

        }else{
         	$error = 'Votre titre ne peut pas dépassez 52 caractères !';
        }
 	   }else{
         $error = 'Veuillez mieux décrire votre article !';
 	   }
     }else{
 	   $error = 'Veuillez remplir tous les champs ci-dessus !';
     }
 }

$total = count($_FILES['upload']['name']);

for($i=0; $i<$total; $i++) {

                $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

                if ($tmpFilePath != ""){

                  $extension = explode('.', basename( $_FILES['upload']['name'][$i]));
                  $newFilePath = "../../test/" . md5(uniqid()) . "." . $extension[count($extension)-1];
                  $imageFileType = pathinfo($newFilePath,PATHINFO_EXTENSION);

                    if($imageFileType = "jpg" && $imageFileType = "png" && $imageFileType = "jpeg" && $imageFileType = "gif" ) {

                      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                        if($upload = 'ok'){
                          $target = $db->prepare('SELECT * FROM article ORDER BY id DESC LIMIT 1');
                          $target->execute();
                          $targets = $target->fetch();
                          $goto = $targets['id'] + 1;

                          $insertImg = $db->prepare("INSERT INTO images(article, name) VALUES(?, ?)");
                          $insertImg->execute(array($goto, $newFilePath));
                        }
                  
                    }

                  }

                }
                
              }
if($upload == "ok"){
  $seller = $_SESSION['id'];
  $img = $db->prepare('INSERT INTO article(seller, title, price, description, image) VALUES(?, ?, ?, ?, ?)');
  $img->execute(array($seller, $title, $price, $description, $newFilePath));
  $last = time();
  $update = $db->prepare('UPDATE users SET last = ? WHERE id = ?');
  $update->execute(array($last, $_SESSION['id']));
}
if(isset($error) AND isset($_POST['submit'])){
  echo '<div class="error" id="error">';
  echo '<p>'.$error.'</p>';
  echo '</div>';
  echo '<script type="text/javascript">$("html, body").animate({ scrollTop: $(document).height() }, 100);</script>';
}
?>