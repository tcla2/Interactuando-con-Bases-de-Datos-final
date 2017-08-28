<?php

  include('conector.php');
     
  if ($response['conexion']=='OK') {  
        
  $datos_user_1['user'] = "'"."test_1@mail.com"."'";
  $datos_user_1['nombre_completo'] = "'"."Harold Diaz"."'";
  $datos_user_1['pass'] = "'".sha1(md5(12345))."'";
  $datos_user_1['fecha_nacimiento'] = "'"."1990/07/02"."'";  
  $query = $con->insertData('usuarios', $datos_user_1);	
	
  $datos_user_2['user'] = "'"."test_2@mail.com"."'";
  $datos_user_2['nombre_completo'] = "'"."Luna isabel"."'";
  $datos_user_2['pass'] = "'".sha1(md5(12345))."'";
  $datos_user_2['fecha_nacimiento'] = "'"."2000/12/12"."'";  
  $query = $con->insertData('usuarios', $datos_user_2);	
  
  $datos_user_3['user'] = "'"."test_3@mail.com"."'";
  $datos_user_3['nombre_completo'] = "'"."Tifany Lucia"."'";
  $datos_user_3['pass'] = "'".sha1(md5(12345))."'";
  $datos_user_3['fecha_nacimiento'] = "'"."1978/12/24"."'";  
  $query = $con->insertData('usuarios', $datos_user_3);	 
 
   if ($query) {
      echo "Los datos de crearon correctamente!! </br>";
    }else {
      echo "Los datos no se pueden duplicar </br>";
    }	
 
 	  $con->cerrarConexion();  
  }
  
  echo "usuario 1: test_1@mail.com contraseña: 12345 </br>";
  echo "usuario 2: test_2@mail.com contraseña: 12345 </br>";
  echo "usuario 3: test_3@mail.com contraseña: 12345 </br>";
  
    echo "<a href='".$_SERVER['HTTP_REFERER']."'>Volver a Login</a>"

 ?>
