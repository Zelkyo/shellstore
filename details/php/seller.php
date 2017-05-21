<?php
  $getsells = $bdd->prepare('SELECT * FROM article WHERE seller = ?');
  $getsells->execute(array($seller['id']));
  $sells = $getsells->rowCount();
?>
<div class="seller">
 <h3 class="seller-title">informations sur le vendeur</h3>
  <div class="seller-infos">
    <div class="seller-info">
     <p class="seller-info-name">Nom du vendeur :</p>
      <span class="seller-answer"><a href="<?php echo '//127.0.0.1/shellshop/profile/?id='.$userinfo['seller']; ?>"><?= $seller['name'].' '.$seller['surname'] ?></a></span>
    </div>
   <div class="seller-info">
    <p class="seller-info-name">Avis des clients :</p>
   <?php if($seller['safety'] == "none"){ ?>
     <div class="progress">
      <div class="progress-bar progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
      Aucun retour
     </div>
    </div>
    <?php }elseif($seller['safety'] == "good"){ ?>
      <div class="progress">
       <div class="progress-bar progress-bar-striped progress-bar-success active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
      Vendeur sûr
      </div>
    </div>
    <?php }else{ ?>
      <div class="progress">
       <div class="progress-bar progress-bar-striped progress-bar-danger active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
       Mauvaise réputation
      </div>
    </div>
      <?php } ?>
   </div>
   <div class="seller-info">
     <p class="seller-info-name">Région du vendeur :</p>
      <span class="seller-answer"><?= $seller['city']; ?></span>
    </div>
    <div class="seller-info">
     <p class="seller-info-name">Nombre de ventes :</p>
      <span class="seller-answer"><?= $sells ?></span>
    </div>
    <div class="seller-info">
     <p class="seller-info-name">Date d'inscription :</p>
      <span class="seller-answer"><?= 'Le '.date('d/m/Y',strtotime($seller['date'])); ?></span>
    </div>
    <div class="seller-info">
     <p class="seller-info-name">Dernière vente :</p>
      <span class="seller-answer"><?php if($seller['last'] == 0){ echo 'Aucune vente'; }else{ echo 'Le '.date('d/m/Y',strtotime($seller['last'])); } ?></span>
    </div>
     <div class="seller-widgets">
      <a href="<?php echo '//127.0.0.1/shellshop/profile/?id='.$userinfo['seller']; ?>"><div class="seller-widget">
      	<span class="seller-widget-content"><i class="fa fa-user" aria-hidden="true"></i> Voir le profil du vendeur</span>
      </div></a>
      <a href="#"><div class="seller-widget">
      	<span class="seller-widget-content"><i class="fa fa-envelope" aria-hidden="true"></i> Envoyer un e-mail au vendeur</span>
      </div></a>
      <a href="#"><div class="seller-widget">
      	<span class="seller-widget-content"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Acheter l'article</span>
      </div></a>
     </div>
  </div>
</div>