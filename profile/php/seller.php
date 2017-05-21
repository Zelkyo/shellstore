<div class="seller">
 <h3 class="seller-title">informations</h3>
  <div class="seller-infos">
    <div class="seller-info">
     <p class="seller-info-name">Nom :</p>
      <span class="seller-answer"><a href="#"><?php echo $userinfo['name'].' '.$userinfo['surname']; ?></a></span>
    </div>
   <div class="seller-info">
   	<p class="seller-info-name">Avis des clients :</p>
   <?php if($userinfo['safety'] == "none"){ ?>
   	 <div class="progress">
      <div class="progress-bar progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
      Aucun retour
     </div>
    </div>
    <?php }elseif($userinfo['safety'] == "good"){ ?>
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
      <span class="seller-answer"><?= $userinfo['city']; ?></span>
    </div>
    <div class="seller-info">
     <p class="seller-info-name">Nombre de ventes :</p>
      <span class="seller-answer"><?= getSells($userinfo['id']); ?></span>
    </div>
    <div class="seller-info">
     <p class="seller-info-name">Date d'inscription :</p>
      <span class="seller-answer">Le <?= date('d/m/Y',strtotime($userinfo['date'])); ?></span>
    </div>
    <div class="seller-info">
     <p class="seller-info-name">Dernière vente :</p>
      <span class="seller-answer"><?php if($userinfo['last'] == 0){ echo 'Aucune vente'; }else{ echo 'Le '.date("d/m/Y", $userinfo['last']); } ?></span>
    </div>
     <div class="seller-widgets">
      <a href="#"><div class="seller-widget">
      	<span class="seller-widget-content"><i class="fa fa-envelope" aria-hidden="true"></i> Envoyer un e-mail au vendeur</span>
      </div></a>
     </div>
  </div>
</div>