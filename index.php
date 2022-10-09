<?php
    require_once "./config/database.php";
    require_once "./controllers/IdentificacionPaciente/ListadoExpedientesController.php";

    $control = new ListadoExpedientesController();
    $control->index();
?>
