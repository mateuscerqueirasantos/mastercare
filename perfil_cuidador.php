<?php  
include_once 'includes/header_cuidador.php';
?>



<!DOCTYPE html>
<html>
<head>
	<title>MaterCare</title>

<style type="text/css">
	
	.forma_background{
		display: table;
	
		width: 100%;
	}
    .forma_img{
    width:200px;
	height: 200px;
    display: table;	
  	background: #99E8CD;	
  	float: left;
  	display: table; 
    margin: 20px;
    border-radius:50%;
    
   
    }
    .forma_txt{
    	float: left;
  	    display: table; 
        padding-left: 30px;
    }
</style>
</head>
<body>


<!-- Background perfil-->	
<div class="forma_background">
     <!-- Div imagem perfil-->	
    
     <div class="forma_img">
     	<h4 align="center">Perfil</h4>

     	<div align="center"><img width="100" height="100" src="img/perfil_teste.png"></div>
     </div>
	
	<!--Div texto -->
	 <div class="forma_txt">
	 	<h5>Nome </h5> <input type="text" name="campo" value="<?php echo $dados['nome_usuario'];  ?> " readonly>
	 	<h5>Telefone </h5> <input type="text" name="campo" value="<?php echo $dados['tel_usuario'];?>" readonly>
	 	<h5>E-mail </h5> <input type="text" name="campo" value="<?php echo $dados['email_usuario'];?>" readonly>
	 	<h5>Sexo</h5> <input type="text" name="campo" value="<?php echo $dados['sexo_usuario'];?>" readonly>
	 	<h5>Data de Nascimento </h5> <input type="text" name="campo" value="<?php echo $dados['dtn_usuario'];?>" readonly>
	 	<h5>CPF </h5> <input type="text" name="campo" value="<?php echo $dados['cpf_usuario'];?>" readonly>
         <br><br>
	 	<a href="editar_perfil_cuidador.php" class="btn">Editar</a>
	 	 <br><br>

	 </div>
	
</div>



</body>
</html>



<?php  
include_once 'includes/footer.php';
?>