<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=shellshop', 'root', '');
	$reqpages = $bdd->prepare("SELECT * FROM article WHERE title LIKE '".$_GET['result']."%'");
    $reqpages->execute(array($_GET['result']));
    $pages = $reqpages->rowCount(); ?>
 <h1 class="s-title">Voici les résultats de votre recherche :</h1>
 <h2 class="s-research">"<em><?= $_GET['result']; ?></em>"<?php if($_GET['min'] > 0 AND $_GET['max'] > 0){ echo ', de '.$_GET['min'].'à'.$_GET['max'].' €'; } ?></h2><br/><br/>
 <?php $much = $pages/10; echo $pages.' résultats sur '.intval($much+1).' pages<br/>'; ?><?php
	if(isset($_GET['page'])){
		$page = intval($_GET['page']);
	}else{
		$page = 0;
	}
	$next = $page + 1;
	$previous = $page - 1;
	$limit = $page * 10;
	$requser = $bdd->prepare("SELECT * FROM article WHERE title LIKE '".$_GET['result']."%' ORDER BY id DESC LIMIT ".$limit.",10");
    $requser->execute(array($_GET['result']));
    $reqpages = $bdd->prepare("SELECT * FROM article WHERE title LIKE '".$_GET['result']."%'");
    $reqpages->execute(array($_GET['result']));
    $pages = $reqpages->rowCount();
    while($res = $requser->fetch()){ ?>
	<a href="<?= '../details/?id='.$res['id']; ?>" class="nodeco"><div class="item">
		<img src="shellshop/<?= $res['image'];?>" alt="item-image" class="item-img">
		  <h4 class="item-title"><?= $res['title']; ?></h4>
		  <p class="item-description"><?= $res['description']; ?></p>
	   </div>
	  </a>
	<?php } ?>
     <br/><br/>
    <?php if($page > 0){ ?><a href="?result=<?= $_GET['result'] ?>&min=<?= $_GET['min'] ?>&max=<?= $_GET['max'] ?>&page=<?= $previous ?>" class="s-pagination left">&larr;&nbsp;&nbsp; Page précédente</a><?php }else{  } ?>
   <?php if($page <= intval($much-1)){ ?><a href="?result=<?= $_GET['result'] ?>&min=<?= $_GET['min'] ?>&max=<?= $_GET['max'] ?>&page=<?= $next ?>" class="s-pagination right">Page suivante &nbsp;&nbsp;&rarr;</a><br/><br/><br/><?php }else{  } ?>