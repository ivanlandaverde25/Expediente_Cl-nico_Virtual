<?php

    class ListadoExpedientesModel {
        private $db;
        private $pacientes;
        
        public function __construct() {
            $this->db = conectarBase::getConnection();
            $this->pacientes = array();
        }

        public function getExpedientes() {
            $sql = "SELECT * FROM mnt_paciente";
            $result = $this->db->query( $sql );
            
            // Obteniendo pacientes para la lista de registros
            while ( $row = $result->fetch_assoc() ) {
                $this->pacientes[] = $row;
            }
            return $this->pacientes;
        }
    }

?>
