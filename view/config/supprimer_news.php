</br></br>
  <form id="form" title="Suppression news" name="form" action="index.php?page=news" onsubmit="return valider_suppression_news(this)" method="post" class="form">
    
    <label for="id">ID de la news</label>
    <input type="text" name="supp_news" id="supp_news" /><span id="form_sup_news"><?php if(isset($deleted) && $deleted==false){echo "mauvais id";}?></span><br/><br/>

      <input type='hidden' name='change' value="supprimer"> 

    <div id="bouton">
      <input id="supprimer" type="submit" value="Supprimer"/></div><br/><br/>
  </form>