<form method="POST" 
action="index.php?controller=Productstock&action=ProduitTrouve"> 
<fieldset> 
<legend>Recherche Produit</legend> 
<p> <label for="Product_Stock_ID">Product Stock ID</label> : 
<input type="text" name="Product_Stock_ID" id="Product_Stock_ID" maxlength="8" required /> </p>  
 <button type="submit" name="Envoyer" > Rechercher</button> 
 <input type="reset" name="Annuler" > Annuler</button> 
</fieldset> 
</form>