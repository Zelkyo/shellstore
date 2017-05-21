<h1>Poster une annonce sur ShellShop.com</h1>
<form action="php/upload.php" class="form" method="post" enctype="multipart/form-data">
 <input type="text" name="title" class="public-input" placeholder="Titre de votre annonce ( 50 caractères Max. )"><br/>
   <input type="text" name="price" class="public-input-inline" placeholder="Prix ( € )">
    <input type="file" name="upload[]"  multiple="multiple" class="inline input-file" id="my-file"/>
 	   <!-- <input class="inline input-file" name="upload[]" id="my-file" type="file" multiple=""> -->
      <label for="my-file" class="input-file-trigger" tabindex="0">Ajouter des images à votre annonces</label>
     <select name="region" class="selector">
       <option value="" disabled>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</option>
      <option value="">Région de provenance de l'article</option>
       <option value="" disabled>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</option>
   	    <option value="">Antlantique Nord</option>
   	     <option value="">Antlantique Sud</option>
   	    <option value="">Pacifique Nord</option>
   	   <option value="">Pacifique Sud</option>
   	  <option value="">Océan Indien</option>
   	 <option value="">Antlantique Nord</option>
   	<option value="">Antlantique Nord</option>
   </select>
   <p class="input-describor">Description de votre annonce, soyez complet !</p>
  <textarea name="description" placeholder="Description de votre article ( cette description est importante, appliquez-vous pour une vente plus rapide )" class="public-textarea"></textarea><br/>
 <input type="submit" name="submit" class="public-submit" value="Poster mon annonce !">
</form> 