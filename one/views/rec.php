	<a href="?pagina=new_rec">Inserir Dados</a>

<table class="jogo">
	<tr>
		
		<th>Nick</th>
		<th>Id no jogo</th>
		<th>Editar</th>
		<th>Delete</th>

</tr>

<?php 
	 while ($dado_r= $con_r->fetch_array()){ ?>
		
		
			<td><?php echo $dado_r['NICK'] ?></td>
			<td><?php echo $dado_r['ID_JOGO'] ?></td>


			<td><a href="?pagina=new_rec&editar=<?php echo $dado_r['ID']; ?>">Editar</a></td>
			<td><a href="d_rec.php?ID=<?php echo $dado_r['ID']; ?>">Deletar</a></td></tr>

<?php } ?>
	</table>