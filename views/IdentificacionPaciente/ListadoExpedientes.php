<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title><?php echo $data["Titulos"]; ?></title>
</head>
<body>
    <div class="container">
        <nav class = "navbar">
            <div class="logo">
                dfv
            </div>
            <div class="navbar-menu">
                <!-- APARTADO DE MENÚ "Página Principal" --> 
                <div class = "navbar-brand-main">
                    <a href = "#" class = "navbar-item"> <svg class="navbar-icon" style="width:26px;height:26px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 5.69L17 10.19V18H15V12H9V18H7V10.19L12 5.69M12 3L2 12H5V20H11V14H13V20H19V12H22" />
                    </svg> Página Principal</a>
                </div>
                <!-- APARTADO DE MENÚ "Identificación Paciente" --> 
                <div class = "navbar-brand-main">
                    <a href = "#" class = "navbar-item"> <svg class=" navbar-icon" style="width:26px;height:26px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19,19H5V5H19M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16.5,16.25C16.5,14.75 13.5,14 12,14C10.5,14 7.5,14.75 7.5,16.25V17H16.5M12,12.25A2.25,2.25 0 0,0 14.25,10A2.25,2.25 0 0,0 12,7.75A2.25,2.25 0 0,0 9.75,10A2.25,2.25 0 0,0 12,12.25Z" />
                    </svg>
                    Identificacion Paciente
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M7,10L12,15L17,10H7Z" />
                    </svg>
                </a>
                    <div class = "navbar-brand-child">
                    <!-- APARTADO DE MENÚ HIJO "Búsqueda de expedente" --> 
                    <a href = "#" class = "navbar-item-child"> <svg class=" navbar-icon" style="width:26px;height:26px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M15.5,12C18,12 20,14 20,16.5C20,17.38 19.75,18.21 19.31,18.9L22.39,22L21,23.39L17.88,20.32C17.19,20.75 16.37,21 15.5,21C13,21 11,19 11,16.5C11,14 13,12 15.5,12M15.5,14A2.5,2.5 0 0,0 13,16.5A2.5,2.5 0 0,0 15.5,19A2.5,2.5 0 0,0 18,16.5A2.5,2.5 0 0,0 15.5,14M5,3H19C20.11,3 21,3.89 21,5V13.03C20.5,12.23 19.81,11.54 19,11V5H5V19H9.5C9.81,19.75 10.26,20.42 10.81,21H5C3.89,21 3,20.11 3,19V5C3,3.89 3.89,3 5,3M7,7H17V9H7V7M7,11H12.03C11.23,11.5 10.54,12.19 10,13H7V11M7,15H9.17C9.06,15.5 9,16 9,16.5V17H7V15Z" />
                    </svg> Búsqueda Expediente</a>
                    </div>
                    <!-- APARTADO DE MENÚ HIJO "Listado expedientes" --> 
                    <div class = "navbar-brand-child">
                    <a href = "#" class = "navbar-item-child"> <svg class=" navbar-icon" style="width:26px;height:26px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M7,5H21V7H7V5M7,13V11H21V13H7M4,4.5A1.5,1.5 0 0,1 5.5,6A1.5,1.5 0 0,1 4,7.5A1.5,1.5 0 0,1 2.5,6A1.5,1.5 0 0,1 4,4.5M4,10.5A1.5,1.5 0 0,1 5.5,12A1.5,1.5 0 0,1 4,13.5A1.5,1.5 0 0,1 2.5,12A1.5,1.5 0 0,1 4,10.5M7,19V17H21V19H7M4,16.5A1.5,1.5 0 0,1 5.5,18A1.5,1.5 0 0,1 4,19.5A1.5,1.5 0 0,1 2.5,18A1.5,1.5 0 0,1 4,16.5Z" />
                    </svg> Listado expedientes</a>
                    </div>
                </div>
                <!-- APARTADO DE MENÚ "Reportería" --> 
                <div class = "navbar-brand-main">
                    <a href = "#" class = "navbar-item"> 
                    </svg> <svg class=" navbar-icon" style="width:26px;height:26px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V8L14 2M18 20H6V4H13V9H18V20M9 13V19H7V13H9M15 15V19H17V15H15M11 11V19H13V11H11Z" />
                    </svg>
                    Reportería
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M7,10L12,15L17,10H7Z" />
                    </svg>
                </a>
                    <div class = "navbar-brand-child">
                    <!-- APARTADO DE MENÚ HIJO "Expedientes creados" --> 
                    <a href = "#" class = "navbar-item-child"> <svg class=" navbar-icon" style="width:26px;height:26px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M13 19C13 19.34 13.04 19.67 13.09 20H4C2.9 20 2 19.11 2 18V6C2 4.89 2.89 4 4 4H10L12 6H20C21.1 6 22 6.89 22 8V13.81C21.39 13.46 20.72 13.22 20 13.09V8H4V18H13.09C13.04 18.33 13 18.66 13 19M20 18V15H18V18H15V20H18V23H20V20H23V18H20Z" />
                    </svg> Expedientes creados</a>
                    </div>
                    <div class = "navbar-brand-child">
                    <!-- APARTADO DE MENÚ HIJO "Pacientes atendidos" --> 
                    <a href = "#" class = "navbar-item-child"> <svg class=" navbar-icon" style="width:26px;height:26px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10,3L8,5V7H5C3.85,7 3.12,8 3,9L2,19C1.88,20 2.54,21 4,21H20C21.46,21 22.12,20 22,19L21,9C20.88,8 20.06,7 19,7H16V5L14,3H10M10,5H14V7H10V5M11,10H13V13H16V15H13V18H11V15H8V13H11V10Z" />
                    </svg> Pacientes atendidos</a>
                    </div>
                </div>
                <!-- APARTADO DE MENÚ "Configuración" --> 
                <div class = "navbar-brand-main">
                    <a href = "#" class = "navbar-item"> <svg class=" navbar-icon" style="width:26px;height:26px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10M10,22C9.75,22 9.54,21.82 9.5,21.58L9.13,18.93C8.5,18.68 7.96,18.34 7.44,17.94L4.95,18.95C4.73,19.03 4.46,18.95 4.34,18.73L2.34,15.27C2.21,15.05 2.27,14.78 2.46,14.63L4.57,12.97L4.5,12L4.57,11L2.46,9.37C2.27,9.22 2.21,8.95 2.34,8.73L4.34,5.27C4.46,5.05 4.73,4.96 4.95,5.05L7.44,6.05C7.96,5.66 8.5,5.32 9.13,5.07L9.5,2.42C9.54,2.18 9.75,2 10,2H14C14.25,2 14.46,2.18 14.5,2.42L14.87,5.07C15.5,5.32 16.04,5.66 16.56,6.05L19.05,5.05C19.27,4.96 19.54,5.05 19.66,5.27L21.66,8.73C21.79,8.95 21.73,9.22 21.54,9.37L19.43,11L19.5,12L19.43,13L21.54,14.63C21.73,14.78 21.79,15.05 21.66,15.27L19.66,18.73C19.54,18.95 19.27,19.04 19.05,18.95L16.56,17.95C16.04,18.34 15.5,18.68 14.87,18.93L14.5,21.58C14.46,21.82 14.25,22 14,22H10M11.25,4L10.88,6.61C9.68,6.86 8.62,7.5 7.85,8.39L5.44,7.35L4.69,8.65L6.8,10.2C6.4,11.37 6.4,12.64 6.8,13.8L4.68,15.36L5.43,16.66L7.86,15.62C8.63,16.5 9.68,17.14 10.87,17.38L11.24,20H12.76L13.13,17.39C14.32,17.14 15.37,16.5 16.14,15.62L18.57,16.66L19.32,15.36L17.2,13.81C17.6,12.64 17.6,11.37 17.2,10.2L19.31,8.65L18.56,7.35L16.15,8.39C15.38,7.5 14.32,6.86 13.12,6.62L12.75,4H11.25Z" />
                    </svg>
                    Configuración
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M7,10L12,15L17,10H7Z" />
                    </svg>
                </a>
                    <div class = "navbar-brand-child">
                    <!-- APARTADO DE MENÚ HIJO "Creación de Usuario" --> 
                    <a href = "#" class = "navbar-item-child"> <svg class=" navbar-icon" style="width:26px;height:26px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M15,4A4,4 0 0,0 11,8A4,4 0 0,0 15,12A4,4 0 0,0 19,8A4,4 0 0,0 15,4M15,5.9C16.16,5.9 17.1,6.84 17.1,8C17.1,9.16 16.16,10.1 15,10.1A2.1,2.1 0 0,1 12.9,8A2.1,2.1 0 0,1 15,5.9M4,7V10H1V12H4V15H6V12H9V10H6V7H4M15,13C12.33,13 7,14.33 7,17V20H23V17C23,14.33 17.67,13 15,13M15,14.9C17.97,14.9 21.1,16.36 21.1,17V18.1H8.9V17C8.9,16.36 12,14.9 15,14.9Z" />
                    </svg> Creación Usuarios</a>
                    </div>
                    <div class = "navbar-brand-child">
                    <!-- APARTADO DE MENÚ HIJO "Configuración cuenta" --> 
                    <a href = "#" class = "navbar-item-child"> <svg class=" navbar-icon" style="width:26px;height:26px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10 4A4 4 0 0 0 6 8A4 4 0 0 0 10 12A4 4 0 0 0 14 8A4 4 0 0 0 10 4M10 6A2 2 0 0 1 12 8A2 2 0 0 1 10 10A2 2 0 0 1 8 8A2 2 0 0 1 10 6M17 12C16.84 12 16.76 12.08 16.76 12.24L16.5 13.5C16.28 13.68 15.96 13.84 15.72 14L14.44 13.5C14.36 13.5 14.2 13.5 14.12 13.6L13.16 15.36C13.08 15.44 13.08 15.6 13.24 15.68L14.28 16.5V17.5L13.24 18.32C13.16 18.4 13.08 18.56 13.16 18.64L14.12 20.4C14.2 20.5 14.36 20.5 14.44 20.5L15.72 20C15.96 20.16 16.28 20.32 16.5 20.5L16.76 21.76C16.76 21.92 16.84 22 17 22H19C19.08 22 19.24 21.92 19.24 21.76L19.4 20.5C19.72 20.32 20.04 20.16 20.28 20L21.5 20.5C21.64 20.5 21.8 20.5 21.8 20.4L22.84 18.64C22.92 18.56 22.84 18.4 22.76 18.32L21.72 17.5V16.5L22.76 15.68C22.84 15.6 22.92 15.44 22.84 15.36L21.8 13.6C21.8 13.5 21.64 13.5 21.5 13.5L20.28 14C20.04 13.84 19.72 13.68 19.4 13.5L19.24 12.24C19.24 12.08 19.08 12 19 12H17M10 13C7.33 13 2 14.33 2 17V20H11.67C11.39 19.41 11.19 18.77 11.09 18.1H3.9V17C3.9 16.36 7.03 14.9 10 14.9C10.43 14.9 10.87 14.94 11.3 15C11.5 14.36 11.77 13.76 12.12 13.21C11.34 13.08 10.6 13 10 13M18.04 15.5C18.84 15.5 19.5 16.16 19.5 17.04C19.5 17.84 18.84 18.5 18.04 18.5C17.16 18.5 16.5 17.84 16.5 17.04C16.5 16.16 17.16 15.5 18.04 15.5Z" />
                    </svg> Configuración cuenta</a>
                    </div>
                </div>
                <!-- APARTADO DE MENÚ "Cerrar sesión" --> 
                <div class = "navbar-brand-main">
                    <a href = "#" class = "navbar-item"> <svg class=" navbar-icon" style="width:26px;height:26px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M16,17V14H9V10H16V7L21,12L16,17M14,2A2,2 0 0,1 16,4V6H14V4H5V20H14V18H16V20A2,2 0 0,1 14,22H5A2,2 0 0,1 3,20V4A2,2 0 0,1 5,2H14Z" />
                    </svg> Cerrar Sesión</a>
                </div>
            </div>
        </nav>

        <!-- ENCABEZADO DEL SITIO -->
        <div class="content">
            <header class="main-header">
                <label>UNIDAD MEDICA</label>
                <label>USUARIO</label>
            </header>
            
        <div class="content-main">

            <!-- RUTA DE NAVEGACIÓN -->
            <div class="breadcrumb">
                <a href="#"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                <path fill="currentColor" d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z" />
                </svg></a>
                <label> / </label>
                <a href="#">Identificación paciente</a>
                <label> / </label>
                <a href="#">Listado de Expedientes</a>
            </div>
    
            <!-- BANNER INFORMATIVO -->
            <div class="banner">
                <svg class=" navbar-icon" style="width:26px;height:26px" viewBox="0 0 24 24">
                <path fill="currentColor" d="M7,5H21V7H7V5M7,13V11H21V13H7M4,4.5A1.5,1.5 0 0,1 5.5,6A1.5,1.5 0 0,1 4,7.5A1.5,1.5 0 0,1 2.5,6A1.5,1.5 0 0,1 4,4.5M4,10.5A1.5,1.5 0 0,1 5.5,12A1.5,1.5 0 0,1 4,13.5A1.5,1.5 0 0,1 2.5,12A1.5,1.5 0 0,1 4,10.5M7,19V17H21V19H7M4,16.5A1.5,1.5 0 0,1 5.5,18A1.5,1.5 0 0,1 4,19.5A1.5,1.5 0 0,1 2.5,18A1.5,1.5 0 0,1 4,16.5Z" />
                </svg>
                <h3>Listado de expedientes generados hasta la fecha</h3>
            </div>

            <h2><?php echo $data["Titulos"]; ?></h2>
                
            <table class="dataTable">
                    <thead>
                        <tr>
                            <th>Expediente</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Fecha Nacimiento</th>
                            <th>Edad</th>
                            <th>Documento</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                                foreach($data["Pacientes"] as $dato){
            
                                    $nombreCompleto = $dato["primer_nombre"]. " ". $dato["segundo_nombre"];
                                    $apellidoCompleto = $dato["primer_apellido"]. " ". $dato["segundo_apellido"];
            
                                    echo "<tr>";
                                    echo "<td>".$dato["id_expediente"]."</td>";
                                    echo "<td>".$nombreCompleto."</td>";
                                    echo "<td>".$apellidoCompleto."</td>";
                                    echo "<td>".$dato["fecha_nacimiento"]."</td>";
                                    echo "<td>".$dato["edad"]." años </td>";
                                    echo "<td>".$dato["numero_documento"]."</td>";
                                    echo "<td>"."<input type='button' value = 'Ver Expediente'/>"."</td>";
                                    echo "</tr>";
                                }
                            ?>
                    </tbody>    
            </table>

        </div>
        </div>
        </div>
    
</body>
<script src="./Scripts/main.js"></script>
</html>