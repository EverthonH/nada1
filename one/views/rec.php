	<a href="?pagina=new_rec">Inserir Dados</a>

<table class="jogo">
	<tr>
		<th>ID</th>
		<th>Nick</th>
		<th>Id no jogo</th>
		<th>Delete</th>
		<th>Editar</th>

</tr>

<?php 
	 while ($dado_r= $con_r->fetch_array()){ ?>
		
			<td><?php echo $dado_r['ID'] ?></td>
			<td><?php echo $dado_r['NICK'] ?></td>
			<td><?php echo $dado_r['ID_JOGO'] ?></td>

			<td><a href="d_rec.php?ID=<?php echo $dado_r['ID']; ?>">Deletar</a></td></tr>

<?php } ?>
	</table>