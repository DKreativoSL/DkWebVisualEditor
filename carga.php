<?php

//anidado
$json = '{"clase":"contenido", "contenido":[{"clase":"row", "contenido":[{"clase":"col-md-12", "contenido":[{"tipo":"baner_basico", "nombre":"undefined", "valor":" nuevaSeccion", "campos":"undefined"},{"clase":"row", "contenido":[{"clase":"col-md-12", "contenido":[]}]},{"tipo":"baner_basico", "nombre":"undefined", "valor":" nuevaSeccion", "campos":"undefined"}]}]}]}';

$matriz = json_decode ($json,true);

function recorro($matriz){
	$esClase = false; //
	
	foreach($matriz as $clave => $valor){
		
		if (!is_array($matriz[$clave])){
			if ($clave == "clase")
			{
				$esClase = true;
				echo '<div class="'.trim($valor).'">';
				
			}else{
				// es un tipo objeto así que reviso valores para añadir según el tipo		
				$esClase = false;
				switch ($valor)
				{
					case "baner_basico":
						echo "AQUÍ VA EL CÓDIGO PARA EL BANER";
						break;
				}
			} //fin if class
		}else{
			recorro($matriz[$clave]);
			//al salir de una matriz, compruebo si era clase para cerrar el anidado
			if 	($esClase == true)
			{
				echo '</div>';
			}
		}
	}

}

recorro($matriz);

?>


	
