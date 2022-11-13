<form method="POST" action="index.php?controller=Productstock&action=ProduitEnregistre"> 
<fieldset> 
<legend>Enregistrer Produit</legend> 
<p> <label for="Product_Stock_ID"> Product Stock ID</label> : 
<input type="text" name="Product_Stock_ID" id="Product_Stock_ID" maxlength="8" required /> </p> 
<p> <label for="Product_Name">Product Name</label> :
<input type="text" name="Product_Name" id="Product_Name" required /> </p> 
<p> <label for="Product_Quantity">Product Quantity</label> : 
<input type="text" name="Product_Quantity" id="Product_Quantity" required /> </p> 
<p> <label for="Stock_Min">Stock Min</label> : 
<input type="text" name="Stock_Min" id="Stock_Min" required /> </p> 
<p> <label for="Date_Mise_A_Jour">Date Mise A Jour</label> : 
<input type="date" name="Date_Mise_A_Jour" id="Date_Mise_A_Jour" required /> </p> 
<button type="submit" name="Envoyer" > Enregister </button>
 <button type="rset" name="Annuler" >Annuler</button>
</fieldset> 
</form>