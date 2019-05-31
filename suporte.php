<?php  
include_once 'includes/header_home.php';
?>



<!DOCTYPE html>
<html>
<head>
	<title>MasterCare</title>
	<style type="text/css">
		.div_principal{
		display: table;	
		}
       .forma_suporte{
       	float: left;
       	margin-left:30px;
       }

	</style>
</head>
<body>
<div class="div_principal">
     <div class="forma_suporte">
	    <h2 >Suporte</h2>
        <img width="300" height="300" src="img/suporte.png">
     </div>

     <div class="forma_suporte">
	    <h5>Nome</h5>
	    <input type="text" name="nome">
	    <h5>E-mail</h5>
	    <input type="text" name="email">
	    <h5>Escreva sua mensagem...</h5>
	    <textarea name="comentário" rows="20" cols="60"></textarea>
	    <br><br>
	    <button type="submit" name="" class="btn"> Enviar </button>

     </div>
</div>

</body>
</html>


<?php
include_once'includes/footer.php';
?>