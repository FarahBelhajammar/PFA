<form method="POST" action="index.php?controller=Responsablestock&action=Registred"> 
<fieldset> 
<legend>Créer un nouveau compte</legend> 
<p> <label for="NCIN">NCIN</label> : 
<input type="text" name="NCIN" id="NCIN" maxlength="8" required /> </p> 
<p> <label for="Responsable_firstname">Responsable firstname</label> :
<input type="text" name="Responsable_firstname" id="Responsable_firstname" required /> </p> 
<p> <label for="Responsable_Lastname">Responsable Lastname</label> : 
<input type="text" name="Responsable_Lastname" id="Responsable_Lastname" required /> </p> 
<p> <label for="Salary">Salary</label> : 
<input type="text" name="Salary" id="Salary" required /> </p> 
<p> <label for="Responsable_Hire_Date">Responsable Hire Date</label> : 
<input type="date" name="Responsable_Hire_Date" id="Responsable_Hire_Date" required /> </p> 
<p> <label for="Login">Login</label> : 
<input type="text" name="Login" id="Login" required /> </p> 
<p> <label for="PWD">PWD</label> : 
<input type="password" name="PWD" id="PWD" required /> </p>
<p> <label for="Grade">Grade </label> : 
<input type="text" name="Grade" id="Grade" required /> </p>  
 <button type="submit" name="Envoyer" > Créer </button>
 <button type="rset" name="Annuler" >Annuler</button>
</fieldset> 
</form>