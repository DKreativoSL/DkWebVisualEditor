<?php

function traeSecciones()
{
	echo '<option value="1">Seccion 1</option>';
	echo '<option value="2">Seccion 2</option>';
	echo '<option value="3">Seccion 3</option>';
	echo '<option value="4">Seccion 4</option>';
	echo '<option value="5">Seccion 5</option>';
	}

function traePublicaciones()
{
	echo '<option value="1">Publicacion 1</option>';
	echo '<option value="2">Publicacion 2</option>';
	echo '<option value="3">Publicacion 3</option>';
	echo '<option value="4">Publicacion 4</option>';
	echo '<option value="5">Publicacion 5</option>';
	}

	//Cargo los objetos que existan en la carpeta
	$dir = "./objetos/";
	$ruta = opendir($dir) or die("Error. No se han podido cargar los objetos");
 
	while ($file = readdir($ruta)) {

		if (is_dir($dir . $file) && $file!="." && $file!="..")
		{
			include($dir.$file."/editor.php");
		}
	}

?>