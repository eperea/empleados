<!DOCTYPE html>
<html>
<head>

	<!-- Required meta tags -->

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>empleados</title>

	<!--PLUGINS CSS  -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


	<!--PLUGINS JS  -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


	<!--PLUGINS FONT AWESOME  -->

	<script src="https://use.fontawesome.com/dc37d4a9d2.js"></script>


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
					<a class="nav-link" href="index.php?pagina=formulario">Formulario</a>
				</li>

				<li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=inicio">Lista</a>
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
}



			}else{

				include "paginas/formulario.php";

			}

				


			?>


			
		</div>

	</div>

</body>
</html>