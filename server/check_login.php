<?php
 require('./conector.php');
 session_start();

  if ($response['conexion']=='OK') {
    $resultado_consulta = $con->consultar(['usuarios'],['*'], 'WHERE user="'.$_POST['username'].'" AND pass="'.sha1(md5($_POST['password'])).'"');

    if ($resultado_consulta->num_rows != 0) {
		
		while($resul = $resultado_consulta->fetch_assoc()){			
		$_SESSION['session_id_user'] = $resul['id'];
		$_SESSION['session_nombre_user'] = $resul['nombre_completo'];	
		}		
        $response['msg'] = 'OK';
		 
    }else $response['msg'] = 'Rechazado';
  }

  echo json_encode($response);

  $con->cerrarConexion();


 ?>