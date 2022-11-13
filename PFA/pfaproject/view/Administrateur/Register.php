<form method="POST" 
action="index.php?controller=Administrateur&action=Registred"> 
<fieldset> 
<legend>Ajout d'un admin </legend> 
<p> <label for="Admin_ID">NCIN</label> : 
<input type="text" name="Admin_ID" id="Admin_ID" maxlength="8" required /> </p> 
<p> <label for="Admin_firstname">Admin firstname</label> :
<input type="text" name="Admin_firstname" id="Admin_firstname" required /> </p> 
<p> <label for="Admin_lastname">Admin lastname</label> : 
<input type="text" name="Admin_lastname" id="Admin_lastname" required /> </p> 
<p> <label for="Fonction">Fonction</label> : 
<input type="text" name="Fonction" id="Fonction" required /> </p> 
<p> <label for="Salary">Salary</label> : 
<input type="text" name="Salary" id="Salary" required /> </p> 
<p> <label for="Admin_Hire_Date">Admin Hire Date</label> : 
<input type="text" name="Admin_Hire_Date" id="Admin_Hire_Date" required /> </p> 
<p> <label for="Login">Login</label> : 
<input type="text" name="Login" id="Login" required /> </p> 
<p> <label for="PWD">Password</label> : 
<input type="text" name="PWD" id="PWD" required /> </p> 
 <button type="submit" name="Envoyer" > Créer </button>
 <button type="rset" name="Annuler" >Annuler</button>
</fieldset> 
</form>