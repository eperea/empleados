<?php

class ControladorFormularios{

	/*=============================================
	Registro
	=============================================*/


	static public function ctrRegistro(){

		if(isset($_POST["nombre"])){

			$tabla = "empleado";

			$datos = array("nombre" => $_POST["nombre"],
				"email" => $_POST["email"],
				"sexo" => $_POST["sexo"],
				"area_id" => $_POST["area"],
				"descripcion" => $_POST["descripcion"],
				"boletin" => $_POST["boletin"]);

			$respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistros($item, $valor){

		$tabla = "empleado";

		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	Seleccionar Areas
	=============================================*/

	static public function ctrSeleccionarAreas($item, $valor){

		$tabla = "areas";

		$respuesta = ModeloFormularios::mdlSeleccionarAreas($tabla, $item, $valor);

		return $respuesta;

	}


	
	/*=============================================
	Actualizar Registro empleado
	=============================================*/
	static public function ctrActualizarRegistro(){

		if(isset($_POST["actualizarnombre"])){


			/*echo $_POST["actualizarid"]. $_POST["actualizarnombre"]. $_POST["actualizaremail"]. $_POST["actualizarsexo"]. $_POST["actualizararea"] .  $_POST["actualizardescripcion"] . $_POST["actualizarboletin"];*/

			
			$tabla = "empleado";

			$datos = array( "id" => $_POST["actualizarid"],
							"nombre" => $_POST["actualizarnombre"],
							"email" => $_POST["actualizaremail"],
							"sexo" => $_POST["actualizarsexo"],
							"area_id" => $_POST["actualizararea"],
							"descripcion" => $_POST["actualizardescripcion"],
							"boletin" => $_POST["actualizarboletin"]);

			$respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistro(){

		if(isset($_POST["eliminarRegistro"])){

			$tabla = "empleado";
			$valor = $_POST["eliminarRegistro"];

			$respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);

			if($respuesta == "ok"){

				echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

				window.location = "index.php?pagina=inicio";

				</script>';

			}

		}

	}


}