<?php
// Header
include_once 'includes/header.php';
?>


<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Cadastrar </h3>
		<form action="php_action/create.php" method="POST" id="cadastro" autocomplete="off">
			<div class="input-field col s12">
				<input type="text" name="nome_usuario" id="nome_usuario" required>
				<label for="nome_usuario">Nome</label>
			</div>
					
			<div class="input-field col s12">
				<input pattern="[\d.-]{11}" type="text" name="cpf_usuario" id="cpf_usuario" maxlength="11"  size="11"required>
				<label for="cpf_usuario">CPF</label>
			</div>
					
			<div class="input-field col s12">
				<input type="text" name="dtn_usuario" id="dtn_usuario" required>
				<label for="dtn_usuario">Data Nascimento</label>
			</div>
			
			<div class="input-field col s12">
				<select name="sexo" id="sexo"  form="cadastro" required>
					<option value="" disabled selected>Selecione</option>
					<option value="M">Masculino</option>
					<option value="F">Feminino</option>
					
				</select>
				<label for="sexo">Sexo</label>
			</div>
			
			<div class="input-field col s12">
				<input type="text" name="tel_usuario" id="tel_usuario" required>
				<label for="tel_usuario">Telefone</label>
			</div>
					
			<div class="input-field col s12">
				<input type="text" name="rua_usuario" id="rua_usuario" required>
				<label for="rua_usuario">Endereço</label>
			</div>
			
			<div class="input-field col s12">
				<select name="bairro" id="bairro"  form="cadastro"  required>
					<option value="" disabled selected>Selecione</option>
					<option value="1">Brotas</option>
					<option value="2">Pituba</option>
					<option value="3">Barra</option>
					<option value="4">Ondina</option>
					<option value="5">Boca do Rio</option>
					<option value="6">Imbui</option>
					<option value="7">Paralela</option>
					<option value="8">Liberdade</option>
					<option value="9">Ribeira</option>
					<option value="10">Centro</option>
					<option value="11">Cabula</option>
					<option value="12">Costa Azul</option>
					<option value="13">Itapua</option>
					<option value="14">Piatã</option>
					<option value="15">Rio Vermelho</option>
					<option value="16">Vasco da Gama</option>
					<option value="17">São Caetano</option>
					<option value="18">Fazenda Grande</option>
				</select>
				<label for="bairro">Bairro</label>
			</div>	
								
			<div class="input-field col s12">
				<input type="email" name="email_usuario" id="email_usuario" required>
				<label for="email_usuario">Email</label>
			</div>
					
			<div class="input-field col s12">
				<input type="password" name="senha_usuario" id="senha_usuario" required>
				<label for="senha_usuario">Senha</label>
			</div>
			
			 <div class="input-field col s12">
				<select  name="perfil" id="perfil"  form="cadastro"  required>
					<option value="" disabled selected>Selecione</option>
					<option value="1">Cliente</option>
					<option value="2">Cuidador Idoso</option>
					<option value="3">Cuidador Criança</option>
					<option value="4">Cuidador Idoso e Criança</option>
				</select>
				<label for="perfil">Perfil</label>
			</div>


			
			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="index.php" class="btn green"> voltar </a>
		</form>
		
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
