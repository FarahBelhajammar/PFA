<form method="POST" 
action="index.php?controller=Productstock&action=DisponibiliteVerifiee"> 
<fieldset> 
<legend>Verifier Disponibilité</legend> 
<p> <label for="Product_Stock_ID">Product Stock ID</label> : 
<input type="text" name="Product_Stock_ID" id="Product_Stock_ID" maxlength="8" required /> </p> 
<p> <label for="Commande_ID">Commande ID</label> : 
<input type="text" name="Commande_ID" id="Commande_ID" maxlength="8" required /></p>   
 <button type="submit" name="Envoyer" > Vérifier </button>
 <button type="reset" name="Annuler" > Annuler </button>
</fieldset> 
</form>