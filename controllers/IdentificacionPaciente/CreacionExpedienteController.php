<?php

    class CreacionExpedientesController {
        
        public function registrarExpediente(){
            
            $data["Titulo"] = "Registro de Expediente";
            require_once "views/IdentificacionPaciente/RegistrarExpediente.php";

            
        }
    }


?>