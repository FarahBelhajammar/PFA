<form method="POST" action="index.php?controller=Commande&action=ConsulterCommande"> 
<fieldset> 
<legend>Consulter Commande </legend> 
<p> <label for="Commande_ID">Commande ID</label> : 
<input type="text" name="Commande_ID" id="Commande_ID" maxlength="8" required /> </p>
 <button type="submit" name="Envoyer" > Envoyer </button>
 <button type="rset" name="Annuler" >Annuler</button>
</fieldset> 
</form>