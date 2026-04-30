<?php 
//Clase para conectarse con la base de datos.
Class Database{

    //Guardamos la conexion con el modificador de acceso STATIC
    //El ? significado de la variable puede ser le tipo PDO o NULL.
    private static ?PDO $connection = null;

    //Este metodo devuelte la conexion a la base de datos
    public static function getConnection(): PDO{
        //si en caso no encuentras la conexion
        if(selt::$connection === null){
            //armamos la conexion con los datos de .ENV  + + + + +
            $dns="mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME."charset=utf8mb4";
            //Creamos la conexion de PDO
            selt::$connection = new PDO($dsn, DB_USER, DB_PASS[  

            ]);
        }
    }

}