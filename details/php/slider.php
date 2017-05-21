 <div class="details-slider">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="shellshop/<?= $getImg['name']; ?>" alt="<?= $userinfo['name']; ?>" class="details-slided">
      <div class="carousel-caption">
        <?= $userinfo['title']; ?>
      </div>
    </div>
    <?php while($showImg = $articleImg->fetch()){ ?>
    <div class="item">
      <img src="shellshop/<?= $showImg['name']; ?>" alt="example" class="details-slided">
      <div class="carousel-caption">
        <?= $userinfo['title']; ?>
      </div>
    </div>
    <?php } ?>
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>