
	<a href="?pagina=new_people">Inserir novo Membro</a>
<table class="jogo">
	<tr>
		<th>ID</th>
		<th>Nome no jogo</th>
		<th>Nivel no jogo</th>
		<th>ID no jogo</th>
		<th>Deletar</th>
		<th>Editar</th>

</tr>

<?php 
	 while ($dado_m = $con_m->fetch_array()){ ?>
		
			<td><?php echo $dado_m['ID'] ?></td>
			<td><?php echo $dado_m['NICK'] ?></td>
			<td><?php echo $dado_m['NIVEL'] ?></td>
			<td><?php echo $dado_m['ID_JOGO'] ?></td>

			<td><a href="d_membros.php?ID=<?php echo $dado_m['ID']; ?>">Deletar</a></td></tr>

<?php } ?>
	</table>