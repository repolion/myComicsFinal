
</br></br>
  <form id="form" title="Modif table comics" name="form" action="index.php?page=config&pagesec=table_comics" onsubmit="return valider_new_comic(this)" method="post" class="form">
    
    <label for="user">Titre</label>
    <input type="text" name="titre" id="titre" /><span id="form_titre"></span><br/><br/>

    <label>Tome</label>
    <input type="text" name="tome" id="tome"><span id="form_tome"></span><br/><br/>

    <label>Collection</label>
    <input type="text" name="collection" id="collection"><span id="form_collection"></span><br/><br/>

    <label>Cover</label>
    <input type="text" name="cover" id="cover"><span id="form_cover"></span><br/><br/>

    <label>Description</label>
    <input type="text" name="description" id="description"><span id="form_description"></span><br/><br/>

    <label>Mots clés</label>
    <input type="text" name="mots_cles" id="mots_cles"><span id="form_mots_cles"></span><br/><br/>

    <input type='hidden' name='change' value="ajouter"> 

    <div id="bouton">
      <input id="ajouter" type="submit" value="Ajouter"/></div><br/><br/>
  </form>