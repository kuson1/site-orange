<br>
<h3>Ajout d'un Client</h3>
<form method="post">
	<table>
		<tr>
			<td> Nom du Client : </td>
			<td> <input type="text" name="nom" 
				value="<?= ($leClient==null)?'':$leClient['nom'] ?>"></td>
		</tr>

		<tr>
			<td> Prénom du Client : </td>
			<td> <input type="text" name="prenom"
				value="<?= ($leClient==null)?'':$leClient['prenom'] ?>"></td>
		</tr>

		<tr>
			<td> Adresse Client : </td>
			<td> <input type="text" name="adresse"
				value="<?= ($leClient==null)?'':$leClient['adresse'] ?>"></td>
		</tr>

		<tr>
			<td> Email Client : </td>
			<td> <input type="text" name="email"
				value="<?= ($leClient==null)?'':$leClient['email'] ?>"></td>
		</tr>

		<tr>
			<td> Tel Client : </td>
			<td> <input type="text" name="telephone"
				value="<?= ($leClient==null)?'':$leClient['tel'] ?>"></td>
		</tr>

		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td>
			<td> <input type="submit" 

				<?= ($leClient==null)? ' name="Valider" value="Valider" ' : 
				' name ="Modifier" value ="Modifier" ' ?>

				></td>
		</tr>
		<?= ($leClient==null)? '' : '<input type="hidden" name ="idclient" 
		value="'.$leClient['idclient'].'" >' ?>

	</table>
</form>








