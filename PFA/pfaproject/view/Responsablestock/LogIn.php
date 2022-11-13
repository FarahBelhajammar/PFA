<form method="POST" 
action="index.php?controller=Responsablestock&action=LogedIn"> 
<fieldset> 
<legend>Connexion Responsable Stock</legend> 
<p> <label for="username">Username</label> : 
<input type="text" name="username" id="username" maxlength="8" required /> </p> 
<p> <label for="password">password</label> :
<input type="password" name="password" id="password" required /> </p> 
<button type="submit" name="Envoyer" > Log in </button>
 <button type="rset" name="Annuler" >Annuler</button>
</fieldset> 
</form>