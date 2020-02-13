
<?php if (!isset($_GET['editar'])) { ?>
	

<h1>Inserir um novo Jogo</h1>

<form method="post" action="p_game.php">
	<label>Nome do Jogo</label>
	<br/>
	<input type="text" name="NOME" placeholder="Inserir o Nome do jogo">
	<br>
	<br/>
	<label>Tipo do Jogo</label>
	<br/>
	<input type="text" name="TIPO" placeholder="Inserir o Tipo do jogo">
<br/>
<br/>
	<input type="submit" value="INSERIR JOGO">
</form>

<?php else { 
	while ($dado = mysqli_fetch_array($consulta_jogos)) ?>


<h1>Inserir um novo Jogo</h1>

<form method="post" action="e_jogos.php">
	<label>Nome do Jogo</label>
	<br/>
	<input type="text" name="NOME" placeholder="Editar o Nome do jogo">
	<br>
	<br/>
	<label>Tipo do Jogo</label>
	<br/>
	<input type="text" name="TIPO" placeholder="Editar o Tipo do jogo">
<br/>
<br/>
	<input type="submit" value="EDITAR JOGO">
</form>

<?php } ?> 
