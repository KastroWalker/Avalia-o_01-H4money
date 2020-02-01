<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Sistema de Gerênciamento de Clientes">
		<meta name="author" content="Victor Castro">
		<title>Clientes</title>

		<!-- Importando Bootstrap -->
		<link href="../lib/css/bootstrap.min.css" rel="stylesheet">
		<!-- Importando o estilo da página -->
		<link href="../lib/css/dashboard.css" rel="stylesheet">

		<style>
			.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
			}

			@media (min-width: 768px) {
				.bd-placeholder-img-lg {
				  font-size: 3.5rem;
				}
			}
		</style>

	</head>
  	<body>
		<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
			<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Minha Empresa</a>
			<ul class="navbar-nav px-3">
				<li class="nav-item text-nowrap">
				  <a class="nav-link" href="#">Sair</a>
				</li>
			</ul>
		</nav>

		<div class="container-fluid">
			<div class="row">
				<nav class="col-md-2 d-none d-md-block bg-light sidebar">
					<div class="sidebar-sticky">
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link active" href="../index.php">
									<span data-feather="home"></span>
									Dashboard <span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="clientes.php">
									<span data-feather="file"></span>
									Clientes
								</a>
							</li>
						</ul>
					</div>
				</nav>

				<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
						<h1 class="h2">Clientes</h1>
					</div>
					<div class="d-flex flex-column bd-highlight mb-3">
						<div class="d-flex justify-content-end">
							<a href="cadastro_cliente.php" class="btn">Cadastrar +</a>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table table-striped table-sm table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nome</th>
									<th>Email</th>
									<th>Endereço</th>
									<th>CPF</th>
									<th></th>
								</tr>	
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Leonardo</td>
									<td>leo@teste.com.br</td>
									<td>R teste 123</td>
									<td>111.222.333-78</td>
									<td>
										<button class="btn btn-primary">Editar</button>
										<button class="btn btn-danger">Apagar</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</main>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  	
	  	<script>window.jQuery || document.write('<script src="../lib/js/jquery-slim.min.js"><\/script>')</script>
	  	<script src="../lib/js/bootstrap.bundle.min.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
		
		<script src="../lib/js/dashboard.js"></script>
	</body>
</html>