<div class="profile">
  <h3 class="profile-title">toutes les ventes de <span class="blue"><em><?php echo $userinfo['name'].' '.$userinfo['surname']; ?></em></span></h3>
  <div class="items">
   <?php


   $getactivity = $bdd->prepare('SELECT * FROM article WHERE seller = ? ORDER BY id DESC');
   $getactivity->execute(array($userinfo['id']));

   while($activity = $getactivity->fetch()){ ?>
   <a href="<?= '../details/?id='.$activity['id']; ?>" class="nodeco"><div class="item">
    <img src="shellshop/<?= $activity['image'];?>" alt="item" class="item-img">
     <h4 class="item-title"><?= $activity['title']; ?></h4>
      <p class="item-description"><?= $activity['description']; ?></p>
    </div>
   </a>
    <?php } ?>
  </div>
</div>