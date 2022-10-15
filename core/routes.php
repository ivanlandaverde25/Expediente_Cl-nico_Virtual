<?php
    function loadController( $controller ){
        $nameController =  ucwords( $controller )."Controller";
        $fileController = 'controllers/IdentificacionPaciente/'.ucwords( $controller ).'.php';
    
        if( !is_file( $fileController ) ){
            $fileController = 'controllers/IdentificacionPaciente/'.Controlador_principal.'.php';
        }

        echo $fileController;
        require_once $fileController ;
        $control = new $nameController();
        return $control;
    }

    function loadAction( $controller, $action ){
        if( isset( $action ) && method_exists( $controller, $action ) ){
            $controller->$action();
        }else{
             $controller->Accion_principal();
        }
    }
?>