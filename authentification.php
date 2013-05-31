<?include("connexion.php");
//connexion
if(isset($_POST["Valider"]) && $_POST["Valider"]==""
		{

		}
		?>
		<html>
		<head><title>Authentification</title></head>
		<body>
		<!--formumaire d'authentification-->
		<form>
		<fieldset>
		<legend><h3>Formulaire d'authentification</h3></legend>
		<table>
		<tr>
		<td>Login:</td><td><input type="text" id="idMedi" value=""></td>
		</tr>
		<tr>
		<td>Mot de passe:</td><td><input type="password" id="pwMedi" value=""></td>
		</tr>
		<tr>
		<td><input type="submit" id="authentifier" method="POST" value="Valider"></td>
</tr>
</table>
</fieldset>
</form
</body>
</html>
<?
?>
