<?php

    class ListadoExpedientesController {
        public function index() {

            require_once "models/IdentificacionPaciente/ListadoExpedientesModel.php";
            $pacientes = new ListadoExpedientesModel();
            $data ["Titulos"] = "Listado de Expedientes";
            $data ["Pacientes"] = $pacientes->getExpedientes();

            require_once "views/IdentificacionPaciente/ListadoExpedientes.php";
        }
    }

?>