
<?php

class ControladorUsuarios{

	/*=============================================
	INGRESO DE USUARIO
	=============================================*/

	static public function ctrIngresoUsuario(){

		if(isset($_POST["enterUsername"])){
			#permitir letras y numeros, para no haber ataques en el sistema
			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["enterUsername"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["enterPassword"])){

			   	$tabla = "usuarios";
				$item = "usuario";
				$valor = $_POST["enterUsername"];

				$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);
                
                // var_dump ($respuesta["perfil"]);

				if($respuesta["usuario"] == $_POST["enterUsername"] && $respuesta["password"] == $_POST["enterPassword"]){
					
					$_SESSION["iniciarSesion"] = "ok";

					echo '<script>
						window.location = "home";
					</script>';

				}else{
					echo '<br>
						<div class="alert alert-danger"> El usuario aún no está activado </div>';

				}

			}	

		}

	}#fin del metodo	

}#fin de la clase



	
