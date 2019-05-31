<?php
include_once 'includes/header_adm.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>MasterCare</title>
	<style type="text/css">
		.formato{  
         
         float: left;
         padding-left:70px;  
        
         }
         .tudo{
         	display:table; 
         }
	</style>
</head>
<body>
<div class="tudo">
  <!--Perfil--> 
	<div class="formato" class="col s8 m7" >
    <h4 class="header">Gerenciar usuários</h4>
    <div class="card horizontal">
      <div class="card-image">
        <img height="100" width="50" src="img\conf.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Gerencia de usuários cadastrados no sistema. </p>
        </div>
        <div class="card-action">
          <a href="gerencia.php">Click aqui</a>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>
</html>





<?php
// Header
include_once 'includes/footer.php';
?>