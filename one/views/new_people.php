<?php if(!isset($_GET['editar'])){ ?>

 
<h1>Inserir um novo Membro</h1>

<form method="post" action="p_people.php">
	<label>Nome do Membro</label>
	<br/>
	<input type="text" name="NICK" placeholder="Inserir o Nome ">
	<br>
	<br/>
	<label>ID do Membro</label>
	<br/>
	<input type="text" name="ID_JOGO" placeholder="Inserir o ID">
<br/>
<br/>
<label>Nivel Membro</label>
	<br/>
	<input type="text" name="NIVEL" placeholder="Inserir o Nivel">
<br/>
	<input type="submit" value="INSERIR MEMBRO">
</form>


<?php } else { ?>
	<?php while($dado_m = $con_m->fetch_array()){ ?>

		<?php if($dado_m['ID'] == $_GET['editar']){ ?>

			<h1>Editar Jogos</h1>
			<form method="post" action="e_people.php">
				<input type="hidden" name="ID" value="<?php echo $dado_m['ID']; ?>">
				<br>
				<label >Nome Do Membro:</label><br>
				<input type="text" name="NICK" placeholder="Insira o nome do Jogo" value="<?php echo $dado_m['NICK']; ?>">
				<br><br>

				<label >Nivel Do membro</label><br>
				<input type="text" name="NIVEL" placeholder="Insira a Tipo do Jogo"  value="<?php echo $dado_m['NIVEL']; ?>"><br><br>
				
				<label >ID No jogo</label><br>
				<input type="text" name="ID_JOGO" placeholder="Insira a ID_JOGO do Jogo"  value="<?php echo $dado_m['ID_JOGO']; ?>"><br><br>
				
				<input type="submit" value="Editar jogo">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>


