<?php 
class MvcControlador{

/* ------------------------------------------------------------
	llamado de la plantilla principal
------------------------------------------------------------ */
	public function llamandoPlantilla(){
		require_once("Vistas/Plantilla.php");
	}#llamandoPlantilla cierre

/* ------------------------------------------------------------
	interaccion del usuario con las vistas
------------------------------------------------------------ */
	public function interaccionVistasCtlr(){
		if (isset($_GET["action"])) {
			$rutaCtlr=$_GET["action"];				
		}else{
			$rutaCtlr="inicio";
		}
		$respuesta=MvcModelo::interaccionVistasMdl($rutaCtlr);
		#var_dump($respuesta);
		include_once($respuesta);
	}#interaccionVistasCtlr cierre

/* ------------------------------------------------------------
	enviar 1 mail
------------------------------------------------------------ */
	public function enviar1mailCtlr(){
		if (isset($_POST["titulo"]) && isset($_POST["correo"]) ) {
			$asunto=$_POST["titulo"];
			$correo=$_POST["correo"];
			$cuerpoMensaje=$_POST["cuerpoMensaje"];
			if (mail($correo, $asunto, $cuerpoMensaje)) {
				echo '<script type="text/javascript">
						  Swal.fire(
						  "Good job!",
						  "You clicked the button!",
						  "success")
					  </script>';
			}else{
				echo '<script type="text/javascript">
						Swal.fire({
							icon: "error",
							title: "Oops...",
							text: "Something went wrong!",
							footer: "<a href="">Why do I have this issue?</a>"
						});
					</script>';
			}			
		}
	}#enviar1mailCtlr Cierre

}#MvcControlador cierre



 ?>
