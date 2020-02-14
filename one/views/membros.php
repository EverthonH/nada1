
	<a href="?pagina=new_people">Inserir novo Membro</a>
<table class="jogo">
	<tr>

		<th>Nome no jogo</th>
		<th>Nivel no jogo</th>
		<th>ID no jogo</th>
		<th>Editar</th>
		<th>Deletar</th>

</tr>

<?php 
	 while ($dado_m = $con_m->fetch_array()){ ?>

			<td><?php echo $dado_m['NICK'] ?></td>
			<td><?php echo $dado_m['NIVEL'] ?></td>
			<td><?php echo $dado_m['ID_JOGO'] ?></td>


			<td><a href="?pagina=new_people&editar=<?php echo $dado_m['ID']; ?>"><img src="img/lapis.png" class="lapis"></a></td>

			<td><a href="d_membros.php?ID=<?php echo $dado_m['ID']; ?>"><img src="img/lixeira.png" class="lixeiras"></a></a></td></tr>

<?php } ?>
	</table>