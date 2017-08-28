<?php

  require('conector.php');
  session_start(); 
  
 $cod = $_SESSION['session_id_user'];
 
  if ($response['conexion']=='OK') {
    $resultado_consulta = $con->consultar(['eventos'],['*'], ' WHERE cod_usuario="'.$cod.'"');

    if ($resultado_consulta->num_rows != 0) {	
	$i=0;			
		while($resul = $resultado_consulta->fetch_assoc()){	
						
		$response['eventos'][$i]['id'] = $resul['id'];
		$response['eventos'][$i]['title'] = $resul['titulo'];
		$sw= $resul['allDay'];
		if($sw=='true'){
			$response['eventos'][$i]['start'] = $resul['start_date'];			
		}else{	
		$response['eventos'][$i]['start'] = $resul['start_date']."T".$resul['start_hour'];
		$response['eventos'][$i]['end'] = $resul['end_date']."T".$resul['end_hour'];		
				
			}
		$i++;		
		}		
        $response['msg'] = 'OK';
		 
    }else if($cod){ 
	$response['msg'] = 'OK';
	}	
  }
  echo json_encode($response);

  $con->cerrarConexion();

 ?>