<?php
class MvcModelo{


	public static function interaccionVistasMdl($rutaMdl){
		if ($rutaMdl == 	"inicio" ||
			$rutaMdl == 	"mails") {

			$pagina="Vistas/Paginas/".$rutaMdl.".php";			
		}

		else{

			$pagina="Vistas/Paginas/inicio.php";

		}

		return $pagina;
		
	}


}


 ?>