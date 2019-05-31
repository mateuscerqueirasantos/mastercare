<?php  
include_once 'includes/header_adm.php';
include_once 'php_action/db_connect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>MasterCare</title>
        <style type="text/css">
 	       .dv1{
 	       	float:center;
 	       	display: table;

 	       }
 	       .dv2{
 	       	float:left;
 	       	display: table;
 	       	width: 500px;
 	       	height: 200px;
 	       	border:2px solid; 
 	       	border-radius: 30px;
 	       	margin-left: 40px;
 	       	margin-top: 20px;
 	       	margin-bottom:20px;
 	       	margin-right: 40px;  

 	       }
 	       .dv3{
 	       	float:left; 
 	       	margin-left:15px; 
 	       }
 	       .botao{
 	       	margin-left:10px;
 	       }

 	       h2{
 	       	margin-left:40px; 
 	       }
         </style>

</head>
<body>

	<div class="dv1">
		<h2>Usuários</h2><?php
          $sql = "SELECT* FROM usuarios";
          $resultado=mysqli_query($connect,$sql);
          while($dados=mysqli_fetch_array($resultado)):
	   	?>
	   <div class="dv2">

	   	
	   	  <h5>Nome </h5> <input type="text" name="campo" value="<?php echo $dados['nome_usuario'];  ?> " readonly>
	   	  <h5>E-mail </h5> <input type="text" name="campo" value="<?php echo $dados['email_usuario'];?>" readonly>
	   	  <h5>Status do usuário </h5> <input type="text" name="campo" value="<?php if ($dados['status_usuario']=='A') {echo "Desbloqueado"; }else { echo "Bloqueado";}?>" readonly>
          <h5>Perfil</h5> <input type="text" name="campo" value="
          <?php switch($dados['id_perfil_usuario'])
						{
							case '1':
							echo('Cliente');
							break;
							case '2':
							echo('Cuidador de idoso');
							break;
							case '3':
							echo('Cuidador de Criança');
							break;
							case '4':
							echo('Cuidador de idoso e criança');
							break;
							case '5':
							echo('Admistrador');
							break;
							
						}  ?> " readonly>


	   	       <div class="dv3"><a  class="btn-floating btn-large waves-effect waves-light green"><i class="botao"></i></a></div>
	   	       <div class="dv3"><a  class="btn-floating btn-large waves-effect waves-light red"><i class="botao"></i></a></div>
	   </div>	 
       <?php endwhile; ?>

	</div>

</body>
</html>




<?php  
include_once 'includes/footer.php';
?>