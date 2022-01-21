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

		<input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" required>Masculino
		<label class="form-check-label" for="radio1"></label>
	</div>

	<div class="form-check">
		<input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Femenino
		<label class="form-check-label" for="radio2"></label>
	</div>	

	<!-- ENTRADA PARA EL AREA-->

	<label>Area *</label>

                              <select class="form-control" name="fechadestruccion"  >

                              <option value="">-- SELECCIONE --</option>

                              <option value="PAPEL">PAPEL</option>
                              <option value="ELECTRONICO">ELECTRONICO</option>
                              <option value="HIBRIDO">HIBRIDO</option>


                            </select>                    

	<!-- ENTRADA PARA EL OBSERVACIONES -->

	<div class="form-group">

		<label>Descripción *</label>

		<div class="input-group">

			
			<textarea class="form-control" name="nuevaObservacion" rows="2" placeholder="Descripción de la experiencia del empleado" required></textarea>


		</div>

	</div>

	<!-- ENTRADA PARA EL BOLETIN INFORMATIVO -->


	<div class="form-check mb-3">

		<label class="form-check-label">
			<input class="form-check-input" type="checkbox" name="remember" required=""> Deseo recibir boletin informativo
		</label>
	</div>

	<!-- ENTRADA PARA ROLES -->

	<label>Roles *</label>

	<div class="form-check">
		<input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
		<label class="form-check-label" for="check1">Option 1</label>
	</div>
	<div class="form-check">
		<input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
		<label class="form-check-label" for="check2">Option 2</label>
	</div>
	<div class="form-check">
		<input type="checkbox" class="form-check-input">
		<label class="form-check-label">Option 3</label>
	</div>

	<br>

	$formulario = ControladorFormularios::ctrformulario();

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
