<?php

class ControladorFormularios{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistro(){

		if(isset($_POST["nombre"])){

			return "ok";
			

			$tabla = "empleado";

			$datos = array("nombre" => $_POST["nombre"],
				           "email" => $_POST["email"],
				           "sexo" => $_POST["sexo"],
				           "area" => $_POST["area"],
				           "descripcion" => $_POST["descripcion"],
				           "boletin" => $_POST["boletin"]
				         );

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
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistro(){

		if(isset($_POST["actualizarNombre"])){

			if($_POST["actualizarPassword"] != ""){			

				$password = $_POST["actualizarPassword"];

			}else{

				$password = $_POST["passwordActual"];
			}

			$tabla = "registros";

			$datos = array("id" => $_POST["idUsuario"],
							"nombre" => $_POST["actualizarNombre"],
				           "email" => $_POST["actualizarEmail"],
				           "password" => $password);

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