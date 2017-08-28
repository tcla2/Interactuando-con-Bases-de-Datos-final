<?php

  require('conector.php');
  session_start();
  $cod = $_POST['id'];  
  
  if ($response['conexion']=='OK') {
    if($con->eliminarRegistro('eventos','id="'.$cod.'"')){
		  $response['msg']="OK";
    }else {
      $response['msg']= "Hubo un error y los datos no han sido cargados";
    }
  }else {
    $response['msg']= "No se pudo conectar a la base de datos";
  }

  echo json_encode($response);


?>