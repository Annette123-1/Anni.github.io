<?php
     
    $peso=$_POST['txt_peso'];   
    $altura=$_POST['txt_altura']; 
    $calc_imc=$_POST['txt_calc_imc']; 
    $clavep_persona1=1; 

    $cn=new mysqli(hostname: "localhost",username: "root",password: "",database: "base_imc");


    
    if( $cn->connect_errno==0 ) {
        echo("Conexión exitosa");
        

        $insertar=$cn->query("insert into imc values(0,'".$peso."','".$altura."','".$calc_imc."','".$clavep_persona1."')"); 
        
        if($insertar==1){          
          header(header: "Location: despedida.html");
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