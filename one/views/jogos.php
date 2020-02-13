
	<a href="?pagina=new_game">Inserir novo Jogo</a>
	<table class="jogo" >
		<tr>
			<th>Id</th>
			<th>Nome do jogo</th>
			<th>Tipo do jogo</th>
			<th>Deletar</th>
			<th>Editar</th>
		</tr>

	<?php 
	 while ($dado = $con->fetch_array()){ ?>
		
			<td><?php echo $dado['ID'] ?></td>
			<td><?php echo $dado['NOME'] ?></td>
			<td><?php echo $dado['TIPO'] ?></td>

			
			<td><a href="?pagina=new_game&editar=<?php echo $dado['ID']; ?>">Editar</a></td>

			<td><a href="d_jogos.php?ID=<?php echo $dado['ID']; ?>">Deletar</a></td></tr>


<?php } ?>
	</table>