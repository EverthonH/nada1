<?php if(!isset($_GET['editar'])){ ?>
 
<h1>Recrutamento</h1>

<form method="post" action="p_rec.php">
	<label>NICK</label>
	<br/>
	<input type="text" name="NICK" placeholder="Inserir o NICK ">
	<br>
	<br/>
	<label>ID</label>
	<br/>
	<input type="text" name="ID_JOGO" placeholder="Inserir o ID">
<br/>
<br/>
	<input type="submit" value="Enviar Recrutamento">
</form>


<?php } else { ?>
	<?php while($dado_r = $con_r->fetch_array()){ ?>
		<?php if($dado_r['ID'] == $_GET['editar']){ ?>

			<h1>Editar Recrutamento</h1>
			<form method="post" action="e_rec.php">
				<input type="hidden" name="ID" value="<?php echo $dado_r['ID']; ?>">
				<br>
				<label >Nome No Jogo:</label><br>
				<input type="text" name="NICK" placeholder="Insira o NICK do Jogo" value="<?php echo $dado_r['NICK']; ?>">
				<br><br>

				<label >ID No Jogo</label><br>
				<input type="text" name="ID_JOGO" placeholder="Insira a ID_JOGO do Jogo"  value="<?php echo $dado_r['ID_JOGO']; ?>"><br><br>
				
				<input type="submit" value="Editar jogo">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>