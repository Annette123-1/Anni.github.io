<?php
     
    $dieta=$_POST['txt_dieta'];   
    $recomendaciones=$_POST['txt_recomendaciones']; 
    require('conexion1.php');

    //Qué devuelve $cn->connect_errno, si la conexión es exitosa.
    //Devuelve 0 
    if( $cn->connect_errno==0 ) {
        echo("Conexión exitosa");
        //Sintaxis guia
        //insert into plan_salud values(0,'dieta equilibrada','realiza ejercicio,no fumar');  
        $insertar=$cn->query("insert into plan_salud values(0,'".$dieta."','".$recomendaciones."')"); 
        //Si la consulta se ejecuto correctamente $insertar vale 1     
        if($insertar==1){          
          header(header: "Location: form_test.html");
          exit();
        }
        else{
           echo("No se guardo el registro".$cn->error."insertar=".$insertar); //$insertar no devulve ningun valor cuando falla la consulta
        }
        $cn->close();  
    }
    else //2054 es el valor que devuelve $cn->connect_errno
         //Si la conexión falla 
      echo("Fallo la Conexión".$cn->connect_errno); 
      //Error(500) interno del servidor, checar sintaxis en php
      
?>