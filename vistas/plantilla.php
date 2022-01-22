<!DOCTYPE html>
<html>
<head>

	<!-- Required meta tags -->

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>empleados</title>

	<!--=====================================
	PLUGINS DE CSS
	======================================-->	

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!--=====================================
	PLUGINS DE JS
	======================================-->	

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<!-- Latest compiled Fontawesome-->
	<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>

	<!-- SweetAlert 2 -->
	<script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
	
  <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

</head>

<body>

	<!--TITULO -->

	<div class="container-fluid">

		<h3 class="text-center py-3">FORMULARIO EMPLEADOS</h3>


	</div>


	<!--BOTONES -->


	<div class="container-fluid bg-light">

		<div class="container">

			<ul class="nav nav-justified py-2 nav-pills">


				<?php if (isset($_GET["pagina"])): ?>

					<?php if ($_GET["pagina"] == "formulario"): ?>

						<li class="nav-item">
							<a class="nav-link active" href="index.php?pagina=formulario">Formulario</a>
						</li>

					<?php else: ?>

						<li class="nav-item">
							<a class="nav-link" href="index.php?pagina=formulario">Formulario</a>
						</li>

					<?php endif ?>

					<?php if ($_GET["pagina"] == "inicio"): ?>

						<li class="nav-item">
							<a class="nav-link active" href="index.php?pagina=inicio">Lista Empleados</a>
						</li>

					<?php else: ?>

						<li class="nav-item">
							<a class="nav-link" href="index.php?pagina=inicio">Lista Empleados</a>
						</li>

					<?php endif ?>


				<?php else: ?>

					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=formulario">Formulario</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=inicio">Lista</a>
					</li>

				<?php endif ?>

			</ul>			


		</div>

	</div>


	<!--LISTA EMPLEADOS -->

	<div class="container-fluid">

		<div class="container py-5">


			<?php 


			if(isset($_GET["pagina"])){

				if($_GET["pagina"] == "formulario" ||
					$_GET["pagina"] == "inicio"){


					include "paginas/".$_GET["pagina"].".php";
			}else{

				include "paginas/error404.php";
			}



		}else{

			include "paginas/formulario.php";

		}




		?>



	</div>

</div>

</body>
</html>