<div class="details">
 <h3 class="details-title">Description de l'article vendu <span class="float-right">Prix : <?= $userinfo['price']; ?> €</span></h3>
  <div class="details-date">Article mis en vente le <?= date('d/m/Y',strtotime($userinfo['date'])); ?> | Par <a href="<?php echo '//127.0.0.1/shellshop/profile/?id='.$userinfo['seller']; ?>"><?= $seller['name'].' '.$seller['surname'] ?></a></div>
   <div class="details-description">
    <p class="d-d-d">Description de l'article :</p>
    <p class="details-description-text"><?= nl2br($userinfo['description']); ?><br/></p>
    <p class="details-views">Vu <?= $userinfo['views']; ?> fois</p>
   </div>
</div>