  
</br></br>
  <form id="form" title="Suppression" name="form" action="index.php?page=config&pagesec=table_comics" onsubmit="return valider_suppression(this)" method="post" class="form">
    
    <label for="id">ID du comics </label>
    <input type="text" name="id" id="id" /><span id="form_id"></span><br/><br/>

    <label for="col">collection </label>
    <input type="text" name="collection" id="collection" /><span id="form_collection"></span><br/><br/>

      <input type='hidden' name='change' value="supprimer"> 

    <div id="bouton">
      <input id="supprimer" type="submit" value="Supprimer"/></div><br/><br/>
  </form>