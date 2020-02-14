
	<a href="?pagina=new_game">Inserir novo Jogo</a>
	<table class="jogo" >
		<tr>
		
			<th>Nome do jogo</th>
			<th>Tipo do jogo</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>

	<?php 
	 while ($dado = $con->fetch_array()){ ?>
		
			<td><?php echo $dado['NOME'] ?></td>
			<td><?php echo $dado['TIPO'] ?></td>

			
			<td><a href="?pagina=new_game&editar=<?php echo $dado['ID']; ?>"><img src="img/lapis.png" class="lapis"></a></td>

			<td><a href="d_jogos.php?ID=<?php echo $dado['ID']; ?>"><img src="img/lixeira.png" class="lixeira"></a></td></tr>


<?php } ?>
	</table>