<?php
    // conexion a la base de datos
    try {
        // realizando la conexion a la db
        $db = new mysqli('localhost', 'root', '', 'carolina_spa');
    } catch (Exception $e) {
        echo $e -> getMessage(); // en caso de que haya un error en la conexion a la db - mostrara el error
        exit;
    }

    // comprobando que la conexion a la db este todo correcto
    /* if ($db -> ping()) {
        echo "Todo correcto";
    }else{
        echo $db -> connect_error;
    } */
?>