<?php

if(isset($_GET["id"])){

	$item = "id";
	$valor = $_GET["id"];

	$empleado = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);

	//echo '<pre>'; print_r($empleado); echo '</pre>';

}
// VALIDAMOS LA INFO QUE TRAE EL CAMPO SEXO

$gender = explode(',', $empleado["sexo"]);
$sexo = in_array('M', $gender);


// VALIDAMOS LA INFO QUE TRAE EL CAMPO BOLETIN

$boletin = explode(',', $empleado["boletin"]);
$bolet = in_array('M', $boletin);

?>


<div class="d-flex justify-content-center" >

	<form class="py-5 bg-light" method="post" style="width:80%;">

		<!-- ENTRADA PARA EL NOMBRE-->


		<div class="mb-3 mt-3">
			
			<input type="text" class="form-control" value="<?php echo $empleado["nombre"]; ?>" id="nombre" placeholder="Nombre completo del empleado" name="actualizarnombre" required>
		</div>

		<!-- ENTRADA PARA EL CORREO-->

		<div class="mb-3 mt-3">
			
			<input type="email" class="form-control" value="<?php echo $empleado["email"]; ?>"  id="email" placeholder="Correo electrónico" name="actualizaremail" required>
		</div>

		<!-- ENTRADA PARA SEXO-->

		

		<div class="form-check">

			<input type="radio" class="form-check-input" id="radio1" name="actualizarsexo" value="M" <?php if(in_array('M', $gender)){
				echo 'checked="checked"';
			} ?>  required>Masculino
			<label class="form-check-label" for="radio1"></label>
		</div>

		<div class="form-check">
			<input type="radio" class="form-check-input" id="radio2" name="actualizarsexo" value="F" <?php if(in_array('F', $gender)){
				echo 'checked="checked"';
			} ?>  required>Femenino
			<label class="form-check-label" for="radio2"></label>
		</div>	

		<br>

		<!-- ENTRADA PARA EL AREA-->

		
		<select class="form-control" name="actualizararea"  >

			<option ><?php echo $_GET["nombre"]; ?></option>

			<?php

			$item = null;

			$valor = null;

			$areas = ControladorFormularios::ctrSeleccionarAreas($item, $valor);

			foreach ($areas as $key => $value) {

				echo '<option value="'.$value["id"].'">'. $value["nombre"].'</option>';

			}


			?>

		</select>   

		<br>                 



		<!-- ENTRADA PARA EL Descripción -->

		<div class="form-group">

			

			<div class="input-group">


				<textarea class="form-control" name="actualizardescripcion" rows="2" placeholder="Descripción de la experiencia del empleado" required><?php echo $empleado["descripcion"]; ?></textarea>


			</div>

		</div>

		<!-- ENTRADA PARA EL BOLETIN INFORMATIVO -->


		<div class="form-check mb-3">

			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="actualizarboletin" value="1" <?php if(in_array('1', $boletin)){
				echo 'checked="checked"';
			} ?>> Deseo recibir boletin informativo

		

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


		$actualizar = ControladorFormularios::ctrActualizarRegistro();

		if($actualizar == "ok"){

			echo '<script>

			if ( window.history.replaceState ) {

				window.history.replaceState( null, null, window.location.href );

			}

			</script>';

			echo '<div class="alert alert-success">El empleado ha sido actualizado</div>

			<script>

				setTimeout(function(){
				
					window.location = "index.php?pagina=inicio";

				},3000);

			</script>
			

			';

		}

		?>


    <input class="form-check-input" type="hidden" name="actualizarid" value=" <?php echo $_GET['id']; ?>">

	<button type="submit" class="btn btn-primary">Actualizar</button>

</form>

</div>
