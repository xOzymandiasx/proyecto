<?php

try{
    $base = new  PDO('mysql:host=localhost:3306; dbname=scaautom_sca', 'scaautom_scaadmin', 'admin');
    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   //la flechita es LLAMAR....
    $base ->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $base -> exec("SET CHARACTER SET utf8");        //si no esta hecha la base con utf8 no va a reconocery dara error
    
}catch(PDOException $e){
    die('error: ' . $e ->getMessage());
    echo "linea de error: " . $e ->getLine();
}


?>