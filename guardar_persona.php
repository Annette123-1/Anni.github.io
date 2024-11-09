<?php
    
    $nombre = $_POST['txt_nombre'];
    $ape_pa = $_POST['txt_ape_pa'];
    $ape_ma= $_POST['txt_ape_ma'];
    $edad = $_POST['txt_edad'];
    $fecha_nac = $_POST['txt_fecha_nac'];
    $sexo = $_POST['txt_sexo'];
    $clavep_test1= 1;

    $cn=new mysqli(hostname: "localhost",username: "root",password: "",database: "base_imc");

    
    if ($cn->connect_errno == 0) {
        echo("Conexión exitosa");

        
        $insertar = $cn->query(query: "insert into persona values(0,'".$nombre."', '".$ape_pa."', '".$ape_ma."', ".$edad.", '".$fecha_nac."', '".$sexo."', ".$clavep_test1.")");

        
        if ($insertar == 1) {
            header(header: "Location: form_imc.html");
            exit();
        }
         else {
            echo("No se guardó el registro: " . $cn->error . "<br>insertar = " . $insertar);
        }

        
        $cn->close();
    } else {
        
        echo("Fallo la Conexión: " . $cn->connect_errno . "<br>");
    }
?>
