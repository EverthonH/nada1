<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir um novo Jogo</h1>

<form method="post" action="p_game.php">
	<label>Nome do Jogo</label> <br/>
	<input type="text" name="NOME" placeholder="Inserir o Nome do jogo">
	<br/><br/>
	<label>Tipo do Jogo</label> <br/>
	<input type="text" name="TIPO" placeholder="Inserir o Tipo do jogo"> <br/> <br/>
	<input type="submit" value="INSERIR JOGO">
</form>


<?php } else { ?>
	<?php while($dado = $con->fetch_array()){ ?>
		<?php if($dado['ID'] == $_GET['editar']){ ?>

			<h1>Editar Jogos</h1>
			<form method="post" action="e_jogos.php">
				<input type="hidden" name="ID" value="<?php echo $dado['ID']; ?>">
				<br>
				<label >Nome do jogo:</label><br>
				<input type="text" name="NOME" placeholder="Insira o nome do Jogo" value="<?php echo $dado['NOME']; ?>">
				<br><br>

				<label >Tipo do jogo</label><br>
				<input type="text" name="TIPO" placeholder="Insira a Tipo do Jogo"  value="<?php echo $dado['TIPO']; ?>"><br><br>
				
				<input type="submit" value="Editar jogo">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>


