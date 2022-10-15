<?php

    class CreacionExpedientesModel {
        private String $db;

        public function __construct() {
            $this->db = conectarBase::getConnection();
        }

        public function insertarExpediente($id_expediente, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $fecha_nacimiento, $edad, $id_sexo, $id_pais_nacimiento, $id_deparatmento_nacimiento, $id_municipio_nacimiento, $id_tipo_documento, $numero_documento, $direccion, $id_departamento_domicilio, $id_municipio_domicilio, $telefono, $primer_nombre_acompaniante, $segundo_nombre_acompaniante, $primer_apellido_acompaniante, $segundo_apellido_acompaniante, $id_usuario) {

            $resultado = $this->db->query("CALL registra_paciente('$id_expediente', '$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$fecha nacimiento', '$edad', '$id_sexo', '$id_pais_nacimiento', '$id_departamento_nacimiento', '$id_municipio_nacimiento', '$id_tipo_documento, '$numero_documento', '$direccion', '$id_departamento_domicilio', '$id_municipio_domicilio', '$telefono', '$primer_nombre_acompaniante', '$segundo_nombre_acompaniante', '$primer_apellido_acompaniante', '$segundo_apellido_acompaniante', '$id_usuario' )"); 
        }
    }

?>
