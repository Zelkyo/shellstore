<header id="top">
 <div class="topper">
  <a href="#" class="topper-log"></a>
  <div class="topper-container">
   <a href="//127.0.0.1/shellshop/"><div class="topper-left">
    <img src="../img/shell.png" alt="shellshop-logo" class="topper-img">
     <h1 class=topper-title>ShellShop</h1>
      <p class="topper-description">Plateforme de vente de coquillages en ligne</p>
       </div></a>
        <div class="topper-right">
         <?php if(isset($_SESSION['id'])){
          echo '<a href="//127.0.0.1/shellshop/profile/?id='.$_SESSION['id'].'" class="topper-btn">'.$_SESSION['name'].' '.$_SESSION['surname'].'</a>';
          echo '<a href="//127.0.0.1/shellshop/php/deconnect.php" class="topper-btn-reverse">Se déconnecter</a>'; 
          }else{ 
            echo '<a href="//127.0.0.1/shellshop/connexion/" class="topper-btn">Se connecter</a>';
            echo '<a href="//127.0.0.1/shellshop/inscription/" class="topper-btn-reverse">S\'inscire</a>';}?>
           </div>
          </div>
         </div>
         <nav class="menu">
        <form  action="search/" method="get">
         <p class="menu-title">Rechercher sur ShellShop</p>
        <input type="search" class="menu-input" placeholder="Rechercher un coquillage" name="result">
           <input type="text" class="menu-price" placeholder="Prix min." name="min">
            <input type="text" class="menu-price" placeholder="Prix max." name="max">
             <input type="submit" class="menu-submit" value="Rechercher" name="submit">
            </form>
             </nav>
          </header>
