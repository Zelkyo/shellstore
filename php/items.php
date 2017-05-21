<div class="items">
 <h2 class="items-title">Dernière annonces postées</h2>

         <div class="wpub">
           <img src="http://placehold.it/970x90" alt="shellshop-pub" class="w-pub">
          </div>
   <?php 
   while($item = $items->fetch()){ ?>
    <a href="<?= 'details/?id='.$item['id']; ?>" class="nodeco"><div class="item">
     <img src="shellshop/shellshop/<?= $item['image'];?>" alt="item" class="item-img">
      <h4 class="item-title"><?= $item['title']; ?></h4>
       <span class="item-price"><em><?= $item['price']; ?></em> €</span>
       <p class="item-description"><?= $item['description']; ?></p>
    </div>
   </a>
   <?php } ?>
    <h2 class="items-title">Les annonces les plus populaires</h2>
     <div class="populares">
		<?php 
		while($popular = $populars->fetch()){ ?>
		<a href="<?= 'details/?id='.$popular['id']; ?>" class="nodeco"><div class="popular">
	  	 <img src="<?= 'shellshop/shellshop/'.$popular['image'];?>" alt="popular-img" class="popular-img">
	  	  <span class="popular-price"><?= $popular['price']; ?> €</span>
	      <h4 class="popular-title"><?= $popular['title']; ?></h4>
		   <h5 class="popular-visits"><?= $popular['views']; ?> vues</h5>
		  <p class="popular-description"><?= $popular['description']; ?></p>
		 </div></a>
		<?php } ?>
		</div>
	   </div>