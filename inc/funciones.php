<?php
    // funcion que nos permite mostrar una n cantidad de productos, cantidad = param
    function getProducts($cantidad = 1){
        include 'conexion_db.php'; // hacemos uso de la db

        try {
            $sql = "SELECT * FROM productos LIMIT $cantidad"; // consulta que traera los elementos dependiendo de la cantidad
            $resultado = $db -> query($sql); // peticion de la consulta a la db
        } catch (Exception $e) {
            echo $e -> getMessage();

            return array(); // siempre es buena idea retornar un arreglo vacio
        }

        return $resultado; // retornamos los datos consultados a la base de datos
    }
?>