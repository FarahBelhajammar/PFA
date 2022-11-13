<form method="POST" 
action="index.php?controller=Productstock&action=StockMinModifie"> 
<fieldset> 
<legend>Modifier Stock Min</legend> 
<p> <label for="Product_Stock_ID">Product Stock ID</label> : 
<input type="text" name="Product_Stock_ID" id="Product_Stock_ID" maxlength="8" required /> </p> 
<p> <label for="Product_Quantity">Product Quantity</label> :
<input type="text" name="Product_Quantity" id="Product_Quantity" required /> </p> 
 <button type="submit" name="Envoyer" >  Modifier </button>
 <button  type="reset" name="Annuler" > Annuler </button>
</fieldset> 
</form>