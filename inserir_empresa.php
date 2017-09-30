<?php
require('src/Empresa.php');
require('header.php');

$dado = [
	'nome' => '',
	'cnpj' => '',
	'telefone' => '',
	'endereco' => '',
	'ajuda' => '',
];

if (empty($_POST) && array_key_exists('id', $_GET)) {
	$empresa = new Empresa;
	$dado = $empresa->buscar($_GET['id']);
} if (!empty($_POST) && array_key_exists('id', $_GET)) {
	$empresa = new Empresa;
	$empresa->atualizar($_POST);
} if (!empty($_POST) && !array_key_exists('id', $_GET)) {
}

?>

<div class="row">
	<div class="col-md-6">
		<form method="post">
			<div class="form-group">
				<label>Nome</label>
				<input type="text" name="nome" value="<?php echo $dado['nome']; ?>" class="form-control" placeholder="Nome">
			</div>
			<div class="form-group">
				<label>Cnpj</label>
				<input type="text" name="cnpj" value="<?php echo $dado['cnpj']; ?>" class="form-control" placeholder="Cnpj">
			</div>
			<div class="form-group">
				<label>Telefone</label>
				<input type="text" name="telefone" value="<?php echo $dado['telefone']; ?>" class="form-control" placeholder="Telefone">
			</div>
			<div class="form-group">
				<label>Endereço</label>
				<input type="text" name="endereco" value="<?php echo $dado['endereco']; ?>" class="form-control" placeholder="Endereço">
			</div>
			<div class="form-group">
				<label>Ajuda</label>
				<input type="text" name="ajuda" value="<?php echo $dado['ajuda']; ?>" class="form-control" placeholder="Ajuda">
			</div>

			<button type="submit" class="btn btn-primary">Salvar</button>
		</form>
	</div>
</div>

<?php require('footer.php'); ?>