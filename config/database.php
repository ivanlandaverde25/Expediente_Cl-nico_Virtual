<?php 
    class conectarBase {

        public static function getConnection(){

            $servername = "localhost";
            $database   = "expediente_virtual";
            $username   = "root";
            $password   = "";

            $conexion = mysqli_connect($servername, $username, $password, $database);
            
            if ( !$conexion ) {
                die ("Could not connect to database: " . mysqli_connect_error());
            }else {
                echo "<script> console.log( 'Connecting to database.' ) </script>";
            }
            return $conexion;

        }
    }
?>