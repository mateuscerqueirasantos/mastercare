<?php
// Conexão
require_once 'php_action/db_connect.php';

// Header
include_once 'includes/header_home.php';

?>

<div class="tudo">
  <!--Perfil--> 
	<div class="formato" class="col s8 m7" >
    <h4 class="header">Perfil</h4>
    <div class="card horizontal">
      <div class="card-image">
        <img height="100" width="50" src="img\perfil.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Visualize e edite seu perfil. </p>
        </div>
        <div class="card-action">
          <a href="perfil_cliente.php">Click aqui</a>
        </div>
      </div>
    </div>
  </div>
  <!--Pesquisa--> 
  <div class="formato"  class="col s8 m7" >
    <h4 class="header">Pesquisa</h4>
    <div class="card horizontal">
      <div class="card-image">
        <img height="100" width="50" src="img\pesquisa.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Pesquise cuidadores do seu interesse. </p>
        </div>
        <div class="card-action">
          <a href="pesquisar.php">Click aqui</a>
        </div>
      </div>
    </div>
  </div>
    <!--card3--> 
  <div class="formato"  class="col s8 m7" >
    <h4 class="header">Histórico</h4>
    <div class="card horizontal">
      <div class="card-image">
        <img height="100" width="50" src="img\historico.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Visualize seu histórico de serviços solicitados. </p>
        </div>
        <div class="card-action">
          <a href="#">Click aqui</a>
        </div>
      </div>
    </div>
  </div>
    <!--Suporte--> 
  <div class="formato"  class="col s8 m7" >
    <h4 class="header">Suporte</h4>
    <div class="card horizontal">
      <div class="card-image">
        <img height="100" width="50" src="img\suporte.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Entre em contato com a nossa equipe caso tenha dúvidas ou algum problema. </p>
        </div>
        <div class="card-action">
          <a href="suporte.php">Click aqui</a>
        </div>
      </div>
    </div>
  </div>
</div>



<?php
// Header
include_once 'includes/footer.php';
?>