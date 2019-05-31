<?php
// Conexão
require_once 'php_action/db_connect.php';

// Sessão
session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])):
	$erros = array();
	$email_usuario = mysqli_escape_string($connect, $_POST['email_usuario']);
	$senha_usuario = mysqli_escape_string($connect, $_POST['senha_usuario']);
	//$perfil_usuario = mysqli_escape_string($connect, 

	
	if(empty($email_usuario) or empty($senha_usuario)):
		$erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
	else:
	
		$sql = "SELECT email_usuario FROM usuarios WHERE email_usuario = '$email_usuario'";
		$resultado = mysqli_query($connect, $sql);		

		if(mysqli_num_rows($resultado) > 0):
		$senha_usuario = ($senha_usuario);       
		$sql = "SELECT * FROM usuarios WHERE email_usuario = '$email_usuario' AND senha_usuario = md5('$senha_usuario')";

		
		$resultado = mysqli_query($connect, $sql);

			if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($connect);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['id_usuario'];
				$_SESSION['id_perfil_usuario'] = $dados['id_perfil_usuario'];
               
						switch($dados['id_perfil_usuario'])
						{
							case '1':
							header('Location: home_cliente.php');
							break;
							case '5':
							header('Location: home_admin.php');
							break;
							default:
							header('Location: home_cuidador.php');
						}
			else:
				$erros[] = "<li> Usuário e senha não conferem </li>";
			endif;

		else:
			$erros[] = "<li> Usuário inexistente </li>";
		endif;

	endif;

endif;
?>

<?php
// Header
include_once 'includes/header.php';
?>


<h1> Login </h1>
<?php 
if(!empty($erros)):
	foreach($erros as $erro):
		echo $erro;
	endforeach;
endif;
?>
<hr>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Login: <input type="text" name="email_usuario" value="<?php echo isset($_COOKIE['email_usuario']) ? $_COOKIE['email_usuario'] : '' ?>"><br>
Senha: <input type="password" name="senha_usuario" value="<?php echo isset($_COOKIE['senha_usuario']) ? $_COOKIE['senha_usuario'] : '' ?>"><br>

<button type="submit" name="btn-entrar" class="btn"> Entrar </button>
</form>

<?php
// Footer
include_once 'includes/footer.php';
?>
