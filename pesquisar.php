<?php require_once 'php_action/db_connect.php';

$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
$result = "SELECT * FROM usuarios id_perfil_usuario";
$resultado_usuarios = mysqli_query($connect, $result);
$total_usuarios = mysqli_num_rows($resultado_usuarios);

$quantidade_pg = 6;
$num_pagina = ceil($total_usuarios/$quantidade_pg);

$incio = ($quantidade_pg*$pagina)-$quantidade_pg;

$result = "SELECT * FROM usuarios where id_perfil_usuario in (2,3,4)limit $incio, $quantidade_pg";
$resultado_usuarios = mysqli_query($connect, $result);
$total_usuarios = mysqli_num_rows($resultado_usuarios);


?>

<?php
// Header
include_once 'includes/header_home.php';
?>


		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<h1>Cuidadores</h1>
					</div>
					<div class="col-sm-6 col-md-6">
						Tipo de Cuidador
					</div>
				</div>
			</div>
			<div class="row">
				<?php while($rows_usuarios = mysqli_fetch_assoc($resultado_usuarios)){ ?>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<i class="large material-icons">account_circle</i>
							<div class="caption text-center">
								<h3><?php echo $rows_usuarios['nome_usuario']; ?></h3></a>
								<p><a href="#" class="btn btn-primary" role="button">Solicitar</a> </p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<?php
				//Verificar a pagina anterior e posterior
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
			?>
			<nav class="text-center">
				<ul class="pagination">
					<li>
						<?php
						if($pagina_anterior != 0){ ?>
							<a href="pesquisar.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&laquo;</span>
					<?php }  ?>
					</li>
					<?php 
					//Apresentar a paginacao
					for($i = 1; $i < $num_pagina + 1; $i++){ ?>
						<li><a href="pesquisar.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					<li>
						<?php
						if($pagina_posterior <= $num_pagina){ ?>
							<a href="pesquisar.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&raquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&raquo;</span>
					<?php }  ?>
					</li>
				</ul>
			</nav>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		
<?php
// Footer
include_once 'includes/footer.php';
?>
