<?php
require('src/Empresa.php');
require('header.php');

$empresas = new Empresa;

?>

<div class="row">
	<div class="col-md-12">
		<a href="inserir_empresa.php" class="btn btn-primary">Novo</a>
		
		<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Cnpj</th>
				<th>Telefone</th>
				<th>Ações</th>
			</tr>
			<?php foreach ($empresas->all() as $empresa) : ?>
				<tr>
					<td><?php echo $empresa['id']; ?></td>
					<td><?php echo $empresa['nome']; ?></td>
					<td><?php echo $empresa['cnpj']; ?></td>
					<td><?php echo $empresa['telefone']; ?></td>
					<td><a href="inserir_empresa.php?id=<?php echo $empresa['id']; ?>">editar</a></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>

<?php require('footer.php'); ?>