<?php
require 'conexion.php';

if(isset($_POST)){

	$nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '';
	$ciudad = isset($_POST['ciudad']) ? htmlspecialchars($_POST['ciudad']) : '';

	if(empty($nombre) || empty($ciudad)){

		echo 'Error en el formulario';

	}else{
		if(!is_numeric($nombre) && !is_numeric($ciudad)){


			$sql = "INSERT INTO registros (nombre, ciudad) VALUES('$nombre', '$ciudad');";
        	        $result = pg_query($db, $sql);

               	 	if($result){
                        	echo 'Registro almacenado';
                	}else{
                		echo 'Error al almacenar el registro';
			}
		}else{
			echo 'Error al almacenar el registro';
		}

	}

}else{
	echo 'Error en el formulario';
}

?>
