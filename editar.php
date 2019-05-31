<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header_home.php';

?>


<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar  </h3>
		<form action="php_action/update.php" method="POST" id="editar" >
			<input type="hidden" name="id_usuario" value="<?php echo $dados['id_usuario'];?>">
			
			<div class="input-field col s12">
				<input type="text" name="nome_usuario" id="nome_usuario" value="<?php echo $dados['nome_usuario'];?>"required >
				<label for="nome_usuario">Nome</label>
			</div>
					
			<div class="input-field col s12">
				<input pattern="[\d.-]{11}" type="text" name="cpf_usuario" id="cpf_usuario" value="<?php echo $dados['cpf_usuario'];?>" maxlength="11"  size="11"required>
				<label for="cpf_usuario">CPF</label>
			</div>
					
			<div class="input-field col s12">
				<input type="text" name="dtn_usuario" id="dtn_usuario" value="<?php echo $dados['dtn_usuario'];?>" required>
				<label for="dtn_usuario">Data de Nascimento</label>
			</div>
			
					
			<div class="input-field col s12">
				<input type="text" name="tel_usuario" id="tel_usuario" value="<?php echo $dados['tel_usuario'];?>" required>
				<label for="tel_usuario">Telefone</label>
			</div>
					
			<div class="input-field col s12">
				<input type="text" name="rua_usuario" id="rua_usuario" value="<?php echo $dados['rua_usuario'];?>" required>
				<label for="rua_usuario">Endereço</label>
			</div>
			
											
			<div class="input-field col s12">
				<input type="email" name="email_usuario" id="email_usuario" value="<?php echo $dados['email_usuario'];?>" required>
				<label for="email_usuario">Email</label>
			</div>
					
		
			<button type="submit" name="btn-editar" class="btn"> Atualizar</button>
			
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
