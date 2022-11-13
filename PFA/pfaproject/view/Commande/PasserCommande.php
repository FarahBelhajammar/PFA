<form method="POST"action="index.php?controller=Commande&action=CommandePassee"> 
<fieldset> 
<legend>Ajout d'une commande </legend> 
<p> <label for="Commande_ID">Commande ID</label> : 
<input type="text" name="Commande_ID" id="Commande_ID" maxlength="8" required /> </p> 
<p> <label for="Product_Name">Product Name</label> :
<input type="text" name="Product_Name" id="Product_Name" required /> </p> 
<p> <label for="Quantity">Quantity </label> : 
<input type="text" name="Quantity" id="Quantity" required /> </p> 
<p> <label for="Adresse">Adresse</label> : 
<input type="text" name="Adresse" id="Adresse" required /> </p> 
<p> <label for="Email">Email</label> : 
<input type="email" name="Email" id="Email" required /> </p> 
<p> <label for="Tel">Tel</label> : 
<input type="tel" name="Tel" id="Tel" required /> </p> 
		 <p>
		<label> Mode de paiment</label><br/>
		<input type="radio" name="paiement" value="cash" id="montant total" required  /> 
        <label for=" montant total"> Cash </label><br />
		<input type="radio" name="paiement" value="2 parties" id=" 2 parties"  required /> 
        <label for=" 2 parties">Paiement sur 2 parties</label><br />
        <input type="radio" name="paiement" value="3 parties" id="3 parties"  required />
        <label for="3 parties">Paiement sur 3 parties</label><br />
		 <input type="radio" name="paiement" value="4 parties" id="4 parties" required  />
        <label for="4 parties">Paiment sur 4 parties</label><br />
		</p>
<p> <label for="Date_Livraison">Date Livraison</label> : 
<input type="date" name="Date_Livraison" id="Date_Livraison" required /> </p>
<p> <label for="NCIN"> NCIN Client </label> : 
<input type="text" name="NCIN" id="NCIN" required /> </p>  
 <button type="submit" name="Envoyer" > Envoyer </button>
 <button type="rset" name="Annuler" >Annuler</button>
</fieldset> 
</form>