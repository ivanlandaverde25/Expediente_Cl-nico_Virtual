<?php
    require_once "./config/config.php";
    require_once "./core/routes.php";
    require_once "./config/database.php";
    require_once "./controllers/IdentificacionPaciente/ListadoExpedientesController.php";

    // $control = new ListadoExpedientesController();
    // $control->index();

    if ( isset( $_GET['c' ] ) ) {
        $controlador = loadController($_GET['c']);

        if ( isset( $_GET['a'] ) ) {
            loadAction( $controlador, Accion_principal );
        }else{

        }

    }else{
        $controlador = loadController(Controlador_principal);
        loadAction( Controlador_principal, Accion_principal );
    }
?>
