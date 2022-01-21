<div class="d-flex justify-content-center" >

	<form class="py-5 bg-light" method="post" style="width:80%;">

		<!-- ENTRADA PARA EL NOMBRE-->


		<div class="mb-3 mt-3">
			<label for="nombre" class="form-label">Nombre completo *</label>
			<input type="text" class="form-control" id="nombre" placeholder="Nombre completo del empleado" name="nombre" required>
		</div>

		<!-- ENTRADA PARA EL CORREO-->

		<div class="mb-3 mt-3">
			<label for="email" class="form-label">Correo electrónico *</label>
			<input type="email" class="form-control" id="email" placeholder="Correo electrónico" name="email" required>
		</div>

		<!-- ENTRADA PARA SEXO-->

		<label>Sexo *</label>

		<div class="form-check">

			<input type="radio" class="form-check-input" id="radio1" name="sexo" value="M" required>Masculino
			<label class="form-check-label" for="radio1"></label>
		</div>

		<div class="form-check">
			<input type="radio" class="form-check-input" id="radio2" name="sexo" value="F">Femenino
			<label class="form-check-label" for="radio2"></label>
		</div>	

		<!-- ENTRADA PARA EL AREA-->

		<label>Area *</label>

		<select class="form-control" name="area"  >

			<option value="">-- Seleccione --</option>

			<?php

			$item = null;

			$valor = null;

			$areas = ControladorFormularios::ctrSeleccionarAreas($item, $valor);

			foreach ($areas as $key => $value) {

				echo '<option value="'.$value["id"].'">'. $value["nombre"].'</option>';

			}


			?>

		</select>                    

		<!-- ENTRADA PARA EL Descripción -->

		<div class="form-group">

			<label>Descripción *</label>

			<div class="input-group">


				<textarea class="form-control" name="descripcion" rows="2" placeholder="Descripción de la experiencia del empleado" required></textarea>


			</div>

		</div>

		<!-- ENTRADA PARA EL BOLETIN INFORMATIVO -->


		<div class="form-check mb-3">

			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="boletin" value="1" required=""> Deseo recibir boletin informativo
			</label>
		</div>

		<!-- ENTRADA PARA ROLES 

		<label>Roles *</label>

		<div class="form-check">
			<input type="checkbox" class="form-check-input" id="check1" value="Profesional de proyectos - Desarrollador">
			<label class="form-check-label" for="check1">Option 1</label>
		</div>

		<div class="form-check">
			<input type="checkbox" class="form-check-input" id="check2" value="something">
			<label class="form-check-label" for="check2">Option 2</label>
		</div>
		<div class="form-check" id="check3" value="something">
			<input type="checkbox" class="form-check-input">
			<label class="form-check-label">Option 3</label> 
		</div>
-->
		<br>


		<?php

		$formulario = ControladorFormularios::ctrRegistro();

		

		if($formulario == "ok"){

			echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

			</script>';

			echo '<div class="alert alert-success">El usuario ha sido registrado</div>';

		}

	?>

	<button type="submit" class="btn btn-primary">Enviar</button>

</form>

</div>
