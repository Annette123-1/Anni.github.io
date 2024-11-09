<?php
     
    $fecha=$_POST['fechatxt'];   
    $resultado=$_POST['resultadotxt']; 
    $clavep_plan_salud1= 4;

    $cn=new mysqli(hostname: "localhost",username: "root",password: "",database: "base_imc");


    
    if( $cn->connect_errno==0 ) {
        echo("Conexión exitosa");
        

        $insertar=$cn->query("insert into test values(0,'".$fecha."','".$resultado."','".$clavep_plan_salud1."')"); 
        
        if($insertar==1){          
          header(header: "Location: form_persona.html");
          exit();
        }
        else{
           echo("No se guardo el registro".$cn->error."insertar=".$insertar); 
        }
        $cn->close();  
    }
    else 
      echo("Fallo la Conexión".$cn->connect_errno); 
      
      
?>