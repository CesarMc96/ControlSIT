<?php
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@session_start();
if (!$_SESSION['autentica']) {
    header('location: login.php');
} else {
    $_SESSION["pagina"] = "index";
    $nombrePersona = $_SESSION["Nombre_persona"];
    $usuarioConagua = $_SESSION["Usuario_Conagua"];
    $correoConagua = $_SESSION["Correo_Conagua"];
    $idUsuario = $_SESSION["idUsuario"];

    $usuariosDatos = [];
    $conexion_bd = new PDO("mysql:host=172.29.60.126;dbname=tics;charset=utf8; port=3306", "Cesar", "cesartic");
}
?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<?php include "head.php" ?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div id="logoMenuLateral" class="app-brand demo">
                    <a href="index.php" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
                                    <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
                                    <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
                                    <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
                                </defs>
                                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                        <g id="Icon" transform="translate(27.000000, 15.000000)">
                                            <g id="Mask" transform="translate(0.000000, 8.000000)">
                                                <mask id="mask-2" fill="white">
                                                    <use xlink:href="#path-1"></use>
                                                </mask>
                                                <use fill="#696cff" xlink:href="#path-1"></use>
                                                <g id="Path-3" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-3"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                                </g>
                                                <g id="Path-4" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-4"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                                </g>
                                            </g>
                                            <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                                <use fill="#696cff" xlink:href="#path-5"></use>
                                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Control SIT</span>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <li class="menu-item active" id="menuCompleto">
                        <a class="menu-link" onclick="cambiarBotones(1)">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div>Inicio</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase"></li>

                    <li class="menu-item" id="menuUsuarios">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div>Usuarios</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item" id="buscarUsuario">
                                <a class="menu-link" onclick="cambiarBotones(2);">
                                    <div>Buscar</div>
                                </a>
                            </li>
                            <li class="menu-item" id="actualizarUsuario">
                                <a class="menu-link" onclick="cambiarBotones(5);">
                                    <div>Actualizar </div>
                                </a>
                            </li>
                            <li class="menu-item" id="agregarUsuario">
                                <a class="menu-link" onclick="cambiarBotones(7);">
                                    <div>Agregar </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item" id="menuEquipos">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-laptop"></i>
                            <div data-i18n="Authentications">Equipos</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item" id="buscarEquipo">
                                <a class="menu-link" onclick="cambiarBotones(3);">
                                    <div>Buscar</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item" id="menuIPs">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-broadcast"></i>
                            <div>IP</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item" id="buscarIP">
                                <a class="menu-link" onclick="cambiarBotones(4);">
                                    <div>Buscar</div>
                                </a>
                            </li>
                            <li class="menu-item" id="actualizarIP">
                                <a class="menu-link" onclick="cambiarBotones(9);">
                                    <div>Actualizar</div>
                                </a>
                            </li>
                            <li class="menu-item" id="agregarIP">
                                <a class="menu-link" onclick="cambiarBotones(8);">
                                    <div>Agregar</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item" id="menuTelefonos">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-phone-call"></i>
                            <div data-i18n="Account Settings">Teléfonos</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item" id="buscarTelefono">
                                <a class="menu-link" onclick="cambiarBotones(6);">
                                    <div data-i18n="Account">Buscar Teléfono</div>
                                </a>
                            </li>
                            <li class="menu-item" id="actualizarTelefono">
                                <a class="menu-link" onclick="cambiarBotones(7);">
                                    <div data-i18n="Notifications">Actualizar </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-header small text-uppercase"></li>

                    <li class="menu-item" id="menuDocumentacion">
                        <a href="mantenimiento.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div data-i18n="Documentation">Documentación</div>
                        </a>
                    </li>
                </ul>
            </aside>

            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
                                            <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75zM7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116z" />
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0z" />
                                        </svg>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
                                                            <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75zM7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116z" />
                                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block"><?php echo $nombrePersona ?></span>
                                                    <small class="text-muted"><?php echo $usuarioConagua ?></small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalConfiguracion">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Configuración</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="logout.php">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Cerrar sesión</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="modal fade" id="modalConfiguracion">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h4 class="fw-bold">Configuración</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <h5><label><?php echo $nombrePersona ?></label></h5>
                                    <label class="form-label">Usuario</label>
                                    <label><?php echo $usuarioConagua ?></label>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Correo Electronico</label>
                                        <input class="form-control" type="text" value="<?php echo $correoConagua ?>" name="email" readonly />
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer" style="width: 100%;">
                                <button type="button" class="btn btn-light" style="padding: 0%;" onclick="mostarEquipoUsuario();"> Equipo &nbsp;
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </button>
                                <div id="pruebaEspacio" style="width: 68%;"></div>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="limpiarModalEquipoUsuario();">Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Content wrapper -->
                <div class="content-wrapper" id="mdlBuscarUsuario" style="display: none;">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Buscar /</span> Usuarios</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <div id="tabla" class="table-responsive text-nowrap">
                                            <table id="tblUsuarios" class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Usuario</th>
                                                        <th>Correo</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php
                                                    $link = mysqli_connect("172.29.60.126:3306", "Cesar", "cesartic");
                                                    mysqli_select_db($link, "tics");
                                                    $documentos = mysqli_query($link, "SELECT e.idEmpleado, p.Nombre_persona, uc.Usuario_Conagua, uc.Correo_Conagua from empleado e
                                                    inner join persona p on p.idPersona = e.idPersona 
                                                    inner join usuarioconagua uc on uc.idUsuarioConagua= e.idUsuarioConagua
                                                    order by p.Nombre_persona;");
                                                    while ($rows = mysqli_fetch_array($documentos)) {
                                                        echo '<tr>';
                                                        echo '<td> ' . '<i class="fab fa-angular fa-lg text-danger me-3"></i><strong>' . $rows[1] . '</strong>' . '</td>';
                                                        echo '<td> ' . $rows[2] . '</td>';
                                                        echo '<td> ' . $rows[3] . '</td>';
                                                        echo '<td> 
                                                        <a id="pruebaA" onclick="mostrarTodoUsuario(' . $rows[0] . ')" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#myModal"> 
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                        </svg>
                                                        </a> 
                                                        </td>';
                                                        echo '</tr>';;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <hr>
                                        </div>

                                        <div class="modal fade" id="myModal">
                                            <div id="mdlDialognUsEq" class="modal-dialog modal-dialog-centered">
                                                <div id="mdlPrincipalEquipoUsuario" class="modal-content">

                                                    <div class="modal-header">
                                                        <h3 class="modal-title"><label id="nombreTitulo"></label></h3>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="limpiarModalEquipoUsuario();"></button>
                                                    </div>

                                                    <div class="modal-body" id="infoUsuarioMdl">
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                                <label for="idEmpleado" class="form-label">ID Empleado</label>
                                                                <input type="text" class="form-control" id="idEmpleado" name="idEmpleado" readonly>
                                                            </div>

                                                            <div class="mb-3 col-md-6">
                                                                <label for="curp" class="form-label">CURP</label>
                                                                <input class="form-control" type="text" name="curp" id="curp" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="usuario" class="form-label">Usuario</label>
                                                                <input class="form-control" type="text" id="usuario" name="usuario" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="email" class="form-label">Correo Electronico</label>
                                                                <input class="form-control" type="text" id="email" name="email" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for="extension">Extensión</label>
                                                                <input type="text" id="extension" name="extension" class="form-control" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6" style="display: none;" id="divDidU">
                                                                <label for="did" class="form-label"># DID</label>
                                                                <input type="text" class="form-control" id="did" name="did" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="country">Puesto</label>
                                                                <input type="text" class="form-control" id="puesto" name="puesto" readonly>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="area" class="form-label">Area</label>
                                                                <input type="text" class="form-control" id="area" name="area" readonly>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="gerencia" class="form-label">Gerencia</label>
                                                                <input type="text" class="form-control" id="gerencia" name="gerencia" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-body" id="modlEquipoUsuario" style="display: none;">
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                                <label for="equipoU" class="form-label">Nombre</label>
                                                                <input class="form-control" type="text" name="equipoU" id="equipoU" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="marcaU" class="form-label">Marca</label>
                                                                <input class="form-control" type="text" name="marcaU" id="marcaU" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="modeloU" class="form-label">Modelo</label>
                                                                <input class="form-control" type="text" id="modeloU" name="modeloU" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="hostnameU" class="form-label">Host Name</label>
                                                                <input class="form-control" type="text" id="hostnameU" name="hostnameU" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for="numSerieU">Numero Serie</label>
                                                                <input type="text" id="numSerieU" name="numSerieU" class="form-control" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for="IPU">IP</label>
                                                                <input type="text" id="IPU" name="IPU" class="form-control" readonly />
                                                            </div>
                                                        </div>

                                                        <div style="display: none;" id="divEquipoDos">
                                                            <hr>
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="equipoU2" class="form-label">Nombre</label>
                                                                    <input class="form-control" type="text" name="equipoU2" id="equipoU2" readonly />
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="marcaU2" class="form-label">Marca</label>
                                                                    <input class="form-control" type="text" name="marcaU2" id="marcaU2" readonly />
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="modeloU2" class="form-label">Modelo</label>
                                                                    <input class="form-control" type="text" id="modeloU2" name="modeloU2" readonly />
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="hostnameU2" class="form-label">Host Name</label>
                                                                    <input class="form-control" type="text" id="hostnameU2" name="hostnameU2" readonly />
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label" for="numSerieU2">Numero Serie</label>
                                                                    <input type="text" id="numSerieU2" name="numSerieU2" class="form-control" readonly />
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label" for="IPU">IP</label>
                                                                    <input type="text" id="IPU2" name="IPU2" class="form-control" readonly />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer" style="width: 100%;">
                                                        <button type="button" class="btn btn-light" style="padding: 0%;" onclick="mostarEquipoUsuario();"> Equipo &nbsp;
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                            </svg>
                                                        </button>
                                                        <div id="pruebaEspacio" style="width: 68%;"></div>
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="limpiarModalEquipoUsuario();">Cerrar</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>

                <div class="content-wrapper" id="mdlActualizarUsuario" style="display: none;">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Actualizar /</span> Usuarios</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="nombreCompleto" class="form-label">Nombre</label>
                                                <select id="nombreCompleto" class="select2 form-select" style="color: black;">
                                                    <option value="">Seleccione:</option>
                                                    <?php
                                                    $query = $conexion_bd->prepare("
                                                    Select e.idEmpleado, p.Nombre_persona from empleado e
                                                    inner join persona p on p.idPersona = e.idPersona
                                                    order by p.Nombre_persona;
                                                    ");
                                                    $query->execute();
                                                    $data = $query->fetchAll();

                                                    foreach ($data as $valores) :
                                                        echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
                                                        array_push($usuariosDatos, $valores);
                                                    endforeach;

                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-6" style="display: none;">
                                                <input type="text" id="idUC" />
                                            </div>
                                            <div class="mb-3 col-md-6" style="display: none;">
                                                <input type="text" id="idEmC" />
                                            </div>
                                            <div class="mb-3 col-md-6" style="display: none;">
                                                <input type="text" id="idPer" />
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="idEmpleadoA" class="form-label">ID Empleado</label>
                                                <input type="number" class="form-control" id="idEmpleadoA" max="99999" name="idEmpleadoA" readonly style="color: black;" />
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="curpA" class="form-label">CURP</label>
                                                <input class="form-control" type="text" name="curpA" maxlength="18" id="curpA" readonly style="color: black; text-transform:uppercase;" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="nombreCompletoA" class="form-label">Nombre</label>
                                                <input class="form-control" type="text" name="nombreCompletoA" id="nombreCompletoA" readonly style="color: black; text-transform:uppercase;" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="usuarioA" class="form-label">Usuario</label>
                                                <input class="form-control" type="text" id="usuarioA" name="usuarioA" readonly style="color: black;" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="emailA" class="form-label">Correo Electronico</label>
                                                <input class="form-control" type="text" id="emailA" name="emailA" readonly style="color: black;" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="puestoA">Puesto</label>
                                                <select id="puestoA" class="select2 form-select" style="color: black;" disabled="true">
                                                    <option value="">Seleccione:</option>
                                                    <?php
                                                    $query = $conexion_bd->prepare("SELECT * FROM puesto");
                                                    $query->execute();
                                                    $data = $query->fetchAll();

                                                    foreach ($data as $valores) :
                                                        echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
                                                    endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="areaA" class="form-label">Area</label>
                                                <select id="areaA" class="select2 form-select" style="color: black;" disabled="true">
                                                    <option value="">Seleccione:</option>
                                                    <?php
                                                    $query = $conexion_bd->prepare("SELECT * FROM area");
                                                    $query->execute();
                                                    $data = $query->fetchAll();

                                                    foreach ($data as $valores) :
                                                        echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
                                                    endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="gerenciaA" class="form-label">Gerencia</label>
                                                <select id="gerenciaA" class="select2 form-select" style="color: black;" disabled="true">
                                                    <option value="">Seleccione:</option>
                                                    <?php
                                                    $query = $conexion_bd->prepare("SELECT * FROM gerencia");
                                                    $query->execute();
                                                    $data = $query->fetchAll();

                                                    foreach ($data as $valores) :
                                                        echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
                                                    endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mt-2" id="botonesActualizar" style="display: none; text-align: end;">
                                                <button type="submit" class="btn btn-primary me-2" onclick="actualizarUsuarioBD();">Guardar</button>
                                                <button type="reset" class="btn btn-outline-secondary" onclick="revertirUsuario();">Revetir</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>

                <div class="content-wrapper" id="mdlAgregarUsuario" style="display: none;">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Agregar /</span> Usuarios</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="nombreCompletoNew" class="form-label">Nombre</label>
                                                <input class="form-control" type="text" id="nombreCompletoNew" name="nombreCompletoNew" style="color: black; text-transform:uppercase;" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="curpNew" class="form-label">CURP</label>
                                                <input class="form-control" type="text" name="curpNew" maxlength="18" id="curpNew" style="color: black; text-transform:uppercase;" />
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label for="idEmpleadoNew" class="form-label">ID Empleado</label>
                                                <input type="number" class="form-control" id="idEmpleadoNew" name="idEmpleadoNew" style="color: black;" />
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label for="usuarioNew" class="form-label">Usuario</label>
                                                <input class="form-control" type="text" id="usuarioNew" name="usuarioNew" style="color: black;" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="emailNew" class="form-label">Correo Electronico</label>
                                                <input class="form-control" type="text" id="emailNew" name="emailNew" style="color: black;" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="puestoNew">Puesto</label>
                                                <select id="puestoNew" class="select2 form-select" style="color: black;">
                                                    <option value="">Seleccione:</option>
                                                    <?php
                                                    $query = $conexion_bd->prepare("SELECT * FROM puesto");
                                                    $query->execute();
                                                    $data = $query->fetchAll();

                                                    foreach ($data as $valores) :
                                                        echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
                                                    endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="areaNew" class="form-label">Area</label>
                                                <select id="areaNew" class="select2 form-select" style="color: black;">
                                                    <option value="">Seleccione:</option>
                                                    <?php
                                                    $query = $conexion_bd->prepare("SELECT * FROM area");
                                                    $query->execute();
                                                    $data = $query->fetchAll();

                                                    foreach ($data as $valores) :
                                                        echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
                                                    endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="gerenciaNew" class="form-label">Gerencia</label>
                                                <select id="gerenciaNew" class="select2 form-select" style="color: black;">
                                                    <option value="">Seleccione:</option>
                                                    <?php
                                                    $query = $conexion_bd->prepare("SELECT * FROM gerencia");
                                                    $query->execute();
                                                    $data = $query->fetchAll();

                                                    foreach ($data as $valores) :
                                                        echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
                                                    endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mt-2" id="botonesAgregar" style="text-align: end;">
                                                <button type="submit" class="btn btn-primary me-2" onclick="guardarUsuarioBD();">Guardar</button>
                                                <button type="reset" class="btn btn-outline-secondary" onclick="limpiarUsuarioNew();">Limpiar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>

                <div class="content-wrapper" id="mdlBuscarEquipo" style="display: none;">.
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Buscar /</span> Equipos</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <div id="tabla" class="table-responsive text-nowrap">
                                            <table id="tblEquipos" class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Host Name</th>
                                                        <th>Serie</th>
                                                        <th>UPS</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php
                                                    $link = mysqli_connect("172.29.60.126:3306", "Cesar", "cesartic");
                                                    mysqli_select_db($link, "tics");
                                                    $documentos = mysqli_query($link, "SELECT e.idEquipo, td.Nombre, td.Descripcion, de.Marca, de.Modelo, d.Host_Name, d.Numero_Serie, UPS_Serie from equipo e
                                                    inner join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
                                                    inner join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
                                                    inner join dispositivo d on d.idDispositivo= e.idDispositivo
                                                    where e.idTipoDispositivo != 20 and e.idTipoDispositivo != 16 and e.idTipoDispositivo !=17 
                                                    and e.idTipoDispositivo !=18 and e.idTipoDispositivo !=19 and e.idTipoDispositivo !=9 
                                                    and e.idTipoDispositivo !=8 and e.idTipoDispositivo !=7 and e.idTipoDispositivo !=13;");
                                                    while ($rows = mysqli_fetch_array($documentos)) {
                                                        echo '<tr>';
                                                        echo '<td> ' . '<i class="fab fa-angular fa-lg text-danger me-3"></i><strong>' . $rows[1] . '</strong>' . '</td>';
                                                        echo '<td> ' . $rows[5] . '</td>';
                                                        echo '<td> ' . $rows[6] . '</td>';
                                                        echo '<td> ' . $rows[7] . '</td>';
                                                        echo '<td> 
                                                        <a id="pruebaA" onclick="mostrarTodoEquipo(' . $rows[0] . ')" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#myModalEquipo"> 
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                        </svg>
                                                        </a> 
                                                        </td>';
                                                        echo '</tr>';;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <hr>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="myModalEquipo">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h3 class="modal-title"><label id="nombreTituloEquipo"></label></h3>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="row" id="mdlEquiMon">
                                                            <div class="mb-3 col-md-6">
                                                                <label for="marca" class="form-label">Marca</label>
                                                                <input class="form-control" type="text" name="marca" id="marca" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="modelo" class="form-label">Modelo</label>
                                                                <input class="form-control" type="text" id="modelo" name="modelo" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="hostname" class="form-label">Host Name</label>
                                                                <input class="form-control" type="text" id="hostname" name="hostname" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for="numSerie">Numero Serie</label>
                                                                <input type="text" id="numSerie" name="numSerie" class="form-control" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for="ups">UPS Serie</label>
                                                                <input type="text" id="ups" name="ups" class="form-control" readonly />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>

                <div class="content-wrapper" id="mdlBuscarIP" style="display: none;">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Buscar /</span> IP</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <div class="navbar-nav align-items-center">
                                            <div class="nav-item d-flex align-items-center">
                                                <i class="bx bx-search fs-4 lh-0"></i>
                                                <input id="buscarIp" type="text" class="form-control border-0 shadow-none" placeholder="Buscar..." aria-label="Search..." />
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0" />
                                    <!-- Info Usuario -->
                                    <div class="card-body" id="cardUsuario" style="display: none;">
                                        <div class="row">
                                            <h3 id="mdlTitle" class="modal-title" style="text-align: left;"><label id="ipEncontrada"></label></h3>
                                            <div class="mb-3 col-md-6" id="nomUsuarioIPdiv">
                                                <label for="nomUsuarioIP" class="form-label">Nombre</label>
                                                <input class="form-control" type="text" id="nomUsuarioIP" name="nomUsuarioIP" />
                                            </div>
                                            <div class="mb-3 col-md-6" id="equipoIPdiv">
                                                <label for="equipoIP" class="form-label">Equipo</label>
                                                <input type="text" class="form-control" id="equipoIP" name="equipoIP" />
                                            </div>
                                            <div class="mb-3 col-md-6" id="userConIPdiv">
                                                <label for="userConIP" class="form-label">Usuario</label>
                                                <input type="text" class="form-control" id="userConIP" name="userConIP">
                                            </div>
                                            <div class="mb-3 col-md-6" id="hostNameIPdiv">
                                                <label for="hostNameIP" class="form-label">Host Name Equipo</label>
                                                <input class="form-control" type="text" id="hostNameIP" name="hostNameIP" />
                                            </div>
                                            <div class="mb-3 col-md-6" id="empIDdiv">
                                                <label class="form-label" for="empID">ID Empleado</label>
                                                <input class="form-control" type="text" name="empID" id="empID" />
                                            </div>
                                            <div class="mb-3 col-md-6" id="numSerieIDdiv">
                                                <label for="numSerieID" class="form-label">Numero Serie</label>
                                                <input class="form-control" type="text" name="numSerieID" id="numSerieID" />
                                            </div>

                                        </div>
                                    </div>
                                    <hr class="my-0" />
                                    <!-- Info IP -->
                                    <div class="card-body" id="cardRed" style="display: none;">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="nodoRed" class="form-label">Nodo red</label>
                                                <input class="form-control" type="text" id="nodoRed" name="nodoRed" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="vlan" class="form-label">VLAN</label>
                                                <input class="form-control" type="text" name="vlan" id="vlan" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="puerto" class="form-label">Puerto</label>
                                                <input class="form-control" type="text" id="puerto" name="puerto" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="switch" class="form-label">Switch</label>
                                                <input type="text" class="form-control" id="switch" name="switch">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="rack">Rack</label>
                                                <input class="form-control" type="text" name="rack" id="rack" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="comentario" class="form-label">Comentario</label>
                                                <input type="text" class="form-control" id="comentario" name="comentario" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>

                <div class="content-wrapper" id="mdlActualizarIP" style="display: block;">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Actualizar /</span> IP</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <!--div id="tabla" class="table-responsive text-nowrap">
                                            <table id="tblIP" class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>IP</th>
                                                        <th>Usuario</th>
                                                        <th>Comentario</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php
                                                    $link = mysqli_connect("172.29.60.126:3306", "Cesar", "cesartic");
                                                    mysqli_select_db($link, "tics");
                                                    $documentos = mysqli_query($link, "SELECT idConcentrado, IP, Nombre_persona, Comentario from concentrado con
                                                    left join empleado emp on emp.idEmpleado = con.idUsuario
                                                    left join persona p on p.idPersona = emp.idPersona");
                                                    while ($rows = mysqli_fetch_array($documentos)) {
                                                        echo '<tr>';
                                                        echo '<td> ' . '<i class="fab fa-angular fa-lg text-danger me-3"></i><strong>' . $rows[1] . '</strong>' . '</td>';
                                                        echo '<td> ' . $rows[2] . '</td>';
                                                        echo '<td> ' . $rows[3] . '</td>';
                                                        echo '<td> 
                                                        <a id="pruebaA" onclick="mostrarTodoIP(' . $rows[0] . ')" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#myModal"> 
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                        </svg>
                                                        </a> 
                                                        </td>';
                                                        echo '</tr>';;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <hr>
                                        </div-->

                                        <div class="card-body" id="cardUsuarioIPnew" style="display: block;">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="buscarActIP" class="form-label">Usuario / Impresora / Otros</label>
                                                    <select id="buscarActIP" class="select2 form-select" style="color: black;;">
                                                        <option value="">-</option>
                                                        <optgroup label="USUARIOS">
                                                            <?php
                                                            $query = $conexion_bd->prepare("Select distinct p.Nombre_persona from empleado e 
                                                                inner join persona p on p.idPersona = e.idPersona 
                                                                right join concentrado con on con.idUsuario = e.idEmpleado where idEmpleado is not null;");
                                                            $query->execute();
                                                            $data = $query->fetchAll();

                                                            foreach ($data as $valores) :
                                                                echo '<option value="' . $valores[0] . '" style="text-transform: uppercase;">' . $valores[0] . '</option>';
                                                                array_push($usuariosDatos, $valores);
                                                            endforeach;
                                                            ?>
                                                        </optgroup>
                                                        <optgroup label="IMPRESORAS">
                                                            <?php
                                                            $query = $conexion_bd->prepare("SELECT distinct Comentario from concentrado con 
                                                                where Comentario is not null and Comentario like '%rea:%';");
                                                            $query->execute();
                                                            $data = $query->fetchAll();

                                                            foreach ($data as $valores) :
                                                                echo '<option value="' . $valores[0] . '" style="text-transform: uppercase;">' . $valores[0] . '</option>';
                                                                array_push($usuariosDatos, $valores);
                                                            endforeach;
                                                            ?>
                                                        </optgroup>
                                                        <optgroup label="OTROS">
                                                            <?php
                                                            $query = $conexion_bd->prepare("SELECT distinct Comentario from concentrado con 
                                                            where Comentario is not null and Comentario not like '%rea:%' and idUsuario is null;");
                                                            $query->execute();
                                                            $data = $query->fetchAll();

                                                            foreach ($data as $valores) :
                                                                echo '<option value="' . $valores[0] . '" style="text-transform: uppercase;">' . $valores[0] . '</option>';
                                                                array_push($usuariosDatos, $valores);
                                                            endforeach;
                                                            ?>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label id="IPActPadre" class="form-label">IP</label>
                                                    <!--select id="IPAct" class="select2 form-select" style="color: black;">
                                                        <option value="">Seleccione:</option>
                                                        <?php
                                                        $query = $conexion_bd->prepare("SELECT idConcentrado, Comentario from concentrado con where Comentario is not null;");
                                                        $query->execute();
                                                        $data = $query->fetchAll();

                                                        foreach ($data as $valores) :
                                                            echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
                                                            array_push($usuariosDatos, $valores);
                                                        endforeach;

                                                        ?>
                                                    </select-->
                                                </div>
                                                <div class="mb-3 col-md-3">
                                                    <label for="IPNew" class="form-label">IP</label>
                                                    <input class="form-control" type="text" id="IPNew" name="IPNew" />
                                                </div>
                                                <div class="mb-3 col-md-1">
                                                    <label for="nodoRedIPNew" class="form-label">Nodo red</label>
                                                    <input class="form-control" type="text" id="nodoRedIPNew" name="nodoRedIPNew" maxlength="5" style="color: black; text-transform:uppercase;" />
                                                </div>
                                                <div class="mb-3 col-md-1">
                                                    <label for="vlanIPNew" class="form-label">VLAN</label>
                                                    <input class="form-control" type="text" name="vlanIPNew" id="vlanIPNew" readonly />
                                                </div>
                                                <div class="mb-3 col-md-2">
                                                    <label for="puertoIPNew" class="form-label">Puerto</label>
                                                    <input class="form-control" type="text" id="puertoIPNew" name="puertoIPNew" maxlength="10" value="GE 0/0/" style="color: black; text-transform:uppercase;" />
                                                </div>
                                                <div class="mb-3 col-md-2">
                                                    <label for="switchIPNew" class="form-label">Switch</label>
                                                    <select id="switchIPNew" class="select2 form-select" style="color: black;">
                                                        <option value=""> Seleccione: </option>
                                                        <option value="172.33.42.3">172.33.42.3</option>
                                                        <option value="172.33.42.4">172.33.42.4</option>
                                                        <option value="172.33.42.5">172.33.42.5</option>
                                                        <option value="172.33.42.6">172.33.42.6</option>
                                                        <option value="172.33.42.7">172.33.42.7</option>
                                                        <option value="172.33.42.10">172.33.42.10</option>
                                                        <option value="172.33.42.11">172.33.42.11</option>
                                                        <option value="172.33.42.13">172.33.42.13</option>
                                                        <option value="172.33.42.14">172.33.42.14</option>
                                                        <option value="172.33.42.15">172.33.42.15</option>
                                                        <option value="172.33.42.21">172.33.42.21</option>
                                                        <option value="172.33.42.26">172.33.42.26</option>
                                                        <option value="172.33.42.27">172.33.42.27</option>
                                                        <option value="172.33.42.28">172.33.42.28</option>
                                                        <option value="172.33.42.29">172.33.42.29</option>
                                                        <option value="172.33.42.30">172.33.42.30</option>
                                                        <option value="172.33.42.254">172.33.42.254</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-3">
                                                    <label class="form-label" for="rackIPNew">Rack</label>
                                                    <input class="form-control" type="text" name="rackIPNew" id="rackIPNew" readonly />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="comentarioIPNew" class="form-label">Comentario</label>
                                                    <input type="text" class="form-control" id="comentarioIPNew" name="comentarioIPNew" />
                                                </div>

                                                <div class="mt-2" id="botonesAgregar" style="text-align: end;">
                                                    <button type="submit" class="btn btn-primary me-2" onclick="guardarIPUserBD();">Guardar</button>
                                                    <button type="reset" class="btn btn-outline-secondary" onclick="limpiarNuevaIP();">Limpiar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>

                <div class="content-wrapper" id="mdlAgregarIP" style="display: none;">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Agregar /</span> IP</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" style="cursor: pointer;" onclick="tipoIPAgregar(1);" id="IPUserAdd"><i class="bx bx-user me-1"></i> Usuario</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" style="cursor: pointer;" onclick="tipoIPAgregar(2);" id="IPPrinterAdd"><i class="bx bx-printer me-1"></i> Impresora</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" style="cursor: pointer;" onclick="tipoIPAgregar(3);" id="IPServerAdd"><i class="bx bx-data me-1"></i> Servidor</a>
                                    </li>
                                </ul>
                                <div class="card mb-4">
                                    <hr class="my-0" />

                                    <div class="card-body" id="cardUsuarioIPnew" style="display: block;">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="nombreCompletoIPNew" class="form-label">Nombre Usuario</label>
                                                <select id="nombreCompletoIPNew" class="select2 form-select" style="color: black;">
                                                    <option value="">Seleccione:</option>
                                                    <?php
                                                    $query = $conexion_bd->prepare("SELECT e.idEmpleado, p.Nombre_persona from empleado e
                                                    inner join persona p on p.idPersona = e.idPersona
                                                    order by p.Nombre_persona;");
                                                    $query->execute();
                                                    $data = $query->fetchAll();

                                                    foreach ($data as $valores) :
                                                        echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
                                                        array_push($usuariosDatos, $valores);
                                                    endforeach;

                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="hostEquipoIpNew" class="form-label">Host Name Equipo</label>
                                                <select id="hostEquipoIpNew" class="select2 form-select" style="color: black;">
                                                    <option value="">Seleccione:</option>
                                                    <?php
                                                    $query = $conexion_bd->prepare("SELECT distinct e.idEquipo, eq.idConcentrado, d.Host_Name from equipo e
                                                    inner join dispositivo d on d.idDispositivo= e.idDispositivo
                                                    left join concentrado eq on eq.equipoExt = e.idEquipo
                                                    where d.Host_Name is not null and eq.idConcentrado is null;");
                                                    $query->execute();
                                                    $data = $query->fetchAll();

                                                    foreach ($data as $valores) :
                                                        echo '<option value="' . $valores[0] . '">' . $valores[2] . '</option>';
                                                        array_push($usuariosDatos, $valores);
                                                    endforeach;

                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label for="IPNew" class="form-label">IP</label>
                                                <input class="form-control" type="text" id="IPNew" name="IPNew" />
                                            </div>
                                            <div class="mb-3 col-md-1">
                                                <label for="nodoRedIPNew" class="form-label">Nodo red</label>
                                                <input class="form-control" type="text" id="nodoRedIPNew" name="nodoRedIPNew" maxlength="5" style="color: black; text-transform:uppercase;" />
                                            </div>
                                            <div class="mb-3 col-md-1">
                                                <label for="vlanIPNew" class="form-label">VLAN</label>
                                                <input class="form-control" type="text" name="vlanIPNew" id="vlanIPNew" readonly />
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="puertoIPNew" class="form-label">Puerto</label>
                                                <input class="form-control" type="text" id="puertoIPNew" name="puertoIPNew" maxlength="10" value="GE 0/0/" style="color: black; text-transform:uppercase;" />
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="switchIPNew" class="form-label">Switch</label>
                                                <select id="switchIPNew" class="select2 form-select" style="color: black;">
                                                    <option value=""> Seleccione: </option>
                                                    <option value="172.33.42.3">172.33.42.3</option>
                                                    <option value="172.33.42.4">172.33.42.4</option>
                                                    <option value="172.33.42.5">172.33.42.5</option>
                                                    <option value="172.33.42.6">172.33.42.6</option>
                                                    <option value="172.33.42.7">172.33.42.7</option>
                                                    <option value="172.33.42.10">172.33.42.10</option>
                                                    <option value="172.33.42.11">172.33.42.11</option>
                                                    <option value="172.33.42.13">172.33.42.13</option>
                                                    <option value="172.33.42.14">172.33.42.14</option>
                                                    <option value="172.33.42.15">172.33.42.15</option>
                                                    <option value="172.33.42.21">172.33.42.21</option>
                                                    <option value="172.33.42.26">172.33.42.26</option>
                                                    <option value="172.33.42.27">172.33.42.27</option>
                                                    <option value="172.33.42.28">172.33.42.28</option>
                                                    <option value="172.33.42.29">172.33.42.29</option>
                                                    <option value="172.33.42.30">172.33.42.30</option>
                                                    <option value="172.33.42.254">172.33.42.254</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label class="form-label" for="rackIPNew">Rack</label>
                                                <input class="form-control" type="text" name="rackIPNew" id="rackIPNew" readonly />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="comentarioIPNew" class="form-label">Comentario</label>
                                                <input type="text" class="form-control" id="comentarioIPNew" name="comentarioIPNew" />
                                            </div>

                                            <div class="mt-2" id="botonesAgregar" style="text-align: end;">
                                                <button type="submit" class="btn btn-primary me-2" onclick="guardarIPUserBD();">Guardar</button>
                                                <button type="reset" class="btn btn-outline-secondary" onclick="limpiarNuevaIP();">Limpiar</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body" id="cardImpresoraIPnew" style="display: none;">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="impresoraName" class="form-label">Impresora</label>
                                                <select id="impresoraName" class="select2 form-select" style="color: black;">
                                                    <option value="">Seleccione:</option>
                                                    <?php
                                                    $query = $conexion_bd->prepare("SELECT e.idEquipo, CONCAT ('Modelo: ', de.Modelo, ' / Serie: ', d.Numero_Serie) Impresora from equipo e
                                                    inner join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
                                                    inner join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
                                                    inner join dispositivo d on d.idDispositivo= e.idDispositivo
                                                    left join concentrado eq on eq.equipoExt = e.idEquipo
                                                    where e.idTipoDispositivo between 16 and 19 and eq.idConcentrado is null;");
                                                    $query->execute();
                                                    $data = $query->fetchAll();

                                                    foreach ($data as $valores) :
                                                        echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
                                                        array_push($usuariosDatos, $valores);
                                                    endforeach;

                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="comentarioIPNewPrint" class="form-label">Área</label>
                                                <input type="text" class="form-control" id="comentarioIPNewPrint" name="comentarioIPNewPrint" />
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label for="IPNewPrint" class="form-label">IP</label>
                                                <input class="form-control" type="text" id="IPNewPrint" name="IPNewPrint" />
                                            </div>
                                            <div class="mb-3 col-md-1">
                                                <label for="nodoRedIPNewPrint" class="form-label">Nodo red</label>
                                                <input class="form-control" type="text" id="nodoRedIPNewPrint" name="nodoRedIPNewPrint" maxlength="5" style="color: black; text-transform:uppercase;" />
                                            </div>
                                            <div class="mb-3 col-md-1">
                                                <label for="vlanIPNewPrint" class="form-label">VLAN</label>
                                                <input class="form-control" type="text" name="vlanIPNewPrint" id="vlanIPNewPrint" readonly />
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="puertoIPNewPrint" class="form-label">Puerto</label>
                                                <input class="form-control" type="text" id="puertoIPNewPrint" name="puertoIPNewPrint" maxlength="9" value="GE 0/0/" style="color: black; text-transform:uppercase;" />
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="switchIPNewPrint" class="form-label">Switch</label>
                                                <select id="switchIPNewPrint" class="select2 form-select" style="color: black;">
                                                    <option value=""> Seleccione: </option>
                                                    <option value="172.33.42.3">172.33.42.3</option>
                                                    <option value="172.33.42.4">172.33.42.4</option>
                                                    <option value="172.33.42.5">172.33.42.5</option>
                                                    <option value="172.33.42.6">172.33.42.6</option>
                                                    <option value="172.33.42.7">172.33.42.7</option>
                                                    <option value="172.33.42.10">172.33.42.10</option>
                                                    <option value="172.33.42.11">172.33.42.11</option>
                                                    <option value="172.33.42.13">172.33.42.13</option>
                                                    <option value="172.33.42.14">172.33.42.14</option>
                                                    <option value="172.33.42.15">172.33.42.15</option>
                                                    <option value="172.33.42.21">172.33.42.21</option>
                                                    <option value="172.33.42.26">172.33.42.26</option>
                                                    <option value="172.33.42.27">172.33.42.27</option>
                                                    <option value="172.33.42.28">172.33.42.28</option>
                                                    <option value="172.33.42.29">172.33.42.29</option>
                                                    <option value="172.33.42.30">172.33.42.30</option>
                                                    <option value="172.33.42.254">172.33.42.254</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label class="form-label" for="rackIPNewPrint">Rack</label>
                                                <input class="form-control" type="text" name="rackIPNewPrint" id="rackIPNewPrint" readonly />
                                            </div>

                                            <div class="mt-2" id="botonesAgregar" style="text-align: end;">
                                                <button type="submit" class="btn btn-primary me-2" onclick="guardarIPPrintBD();">Guardar</button>
                                                <button type="reset" class="btn btn-outline-secondary" onclick="limpiarNuevaIP();">Limpiar</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body" id="cardServerIPnew" style="display: none;">
                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <label for="comentarioIPNewServer" class="form-label">Nombre Servidor</label>
                                                <input type="text" class="form-control" id="comentarioIPNewServer" name="comentarioIPNewServer" />
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label for="IPNewServer" class="form-label">IP</label>
                                                <input class="form-control" type="text" id="IPNewServer" name="IPNewServer" />
                                            </div>
                                            <div class="mb-3 col-md-1">
                                                <label for="nodoRedIPNewServer" class="form-label">Nodo red</label>
                                                <input class="form-control" type="text" id="nodoRedIPNewServer" name="nodoRedIPNewServer" maxlength="5" style="color: black; text-transform:uppercase;" />
                                            </div>
                                            <div class="mb-3 col-md-1">
                                                <label for="vlanIPNewServer" class="form-label">VLAN</label>
                                                <input class="form-control" type="text" name="vlanIPNewServer" id="vlanIPNewServer" readonly />
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="puertoIPNewServer" class="form-label">Puerto</label>
                                                <input class="form-control" type="text" id="puertoIPNewServer" name="puertoIPNewServer" maxlength="10" value="GE 0/0/" style="color: black; text-transform:uppercase;" />
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="switchIPNewServer" class="form-label">Switch</label>
                                                <select id="switchIPNewServer" class="select2 form-select" style="color: black;">
                                                    <option value=""> Seleccione: </option>
                                                    <option value="172.33.42.3">172.33.42.3</option>
                                                    <option value="172.33.42.4">172.33.42.4</option>
                                                    <option value="172.33.42.5">172.33.42.5</option>
                                                    <option value="172.33.42.6">172.33.42.6</option>
                                                    <option value="172.33.42.7">172.33.42.7</option>
                                                    <option value="172.33.42.10">172.33.42.10</option>
                                                    <option value="172.33.42.11">172.33.42.11</option>
                                                    <option value="172.33.42.13">172.33.42.13</option>
                                                    <option value="172.33.42.14">172.33.42.14</option>
                                                    <option value="172.33.42.15">172.33.42.15</option>
                                                    <option value="172.33.42.21">172.33.42.21</option>
                                                    <option value="172.33.42.26">172.33.42.26</option>
                                                    <option value="172.33.42.27">172.33.42.27</option>
                                                    <option value="172.33.42.28">172.33.42.28</option>
                                                    <option value="172.33.42.29">172.33.42.29</option>
                                                    <option value="172.33.42.30">172.33.42.30</option>
                                                    <option value="172.33.42.254">172.33.42.254</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label class="form-label" for="rackIPNewServer">Rack</label>
                                                <input class="form-control" type="text" name="rackIPNewServer" id="rackIPNewServer" readonly />
                                            </div>

                                            <div class="mt-2" id="botonesAgregar" style="text-align: end;">
                                                <button type="submit" class="btn btn-primary me-2" onclick="guardarIPServerBD();">Guardar</button>
                                                <button type="reset" class="btn btn-outline-secondary" onclick="limpiarNuevaIP();">Limpiar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>

                <div class="content-wrapper" id="mdlBuscarTelefono" style="display: none;">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Buscar /</span> Teléfonos</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <div id="tabla" class="table-responsive text-nowrap">
                                            <table id="tblTelefonos" class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>IP</th>
                                                        <th>Modelo</th>
                                                        <th>Numero Serie</th>
                                                        <th>Extension</th>
                                                        <th>Usuario</th>
                                                        <th>Comentarios</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php
                                                    $link = mysqli_connect("172.29.60.126:3306", "Cesar", "cesartic");
                                                    mysqli_select_db($link, "tics");
                                                    $documentos = mysqli_query($link, "SELECT idconcentradoTelefonos, ipTelefono, Modelo, Numero_Serie, Numero Extension, p.Nombre_persona, ct.Comentarios FROM tics.concentradotelefonos ct
                                                    left join equipo e on e.idEquipo = ct.idEquipo
                                                    left join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
                                                    left join extension ext on ext.idExtension= ct.idExtension
                                                    left join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
                                                    left join dispositivo d on d.idDispositivo= e.idDispositivo
                                                    left join empleado em on em.idEmpleado= ct.idEmpleado
                                                    left join persona p on p.idPersona = em.idPersona ;");
                                                    while ($rows = mysqli_fetch_array($documentos)) {
                                                        echo '<tr>';
                                                        echo '<td> ' . '<i class="fab fa-angular fa-lg text-danger me-3"></i><strong>' . $rows[1] . '</strong>' . '</td>';
                                                        echo '<td> ' . $rows[2] . '</td>';
                                                        echo '<td> ' . $rows[3] . '</td>';
                                                        echo '<td> ' . $rows[4] . '</td>';
                                                        echo '<td> ' . $rows[5] . '</td>';
                                                        echo '<td> ' . $rows[6] . '</td>';
                                                        echo '<td> 
                                                        <a id="pruebaA" onclick="mostrarTodoTelefono(' . $rows[0] . ');" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#modlUpdateTel"> 
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                        </svg>
                                                        </a> 
                                                        </td>';
                                                        echo '</tr>';;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <hr>
                                        </div>

                                        <div class="modal fade" id="modlUpdateTel">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h3 class="modal-title"><label id="nombreTituloTel"></label></h3>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="limpiarModalEquipoUsuario();"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6" style="display: none;">
                                                                <input type="text" id="idconcentradoTelefonos" />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="modeloTel" class="form-label">Modelo</label>
                                                                <input class="form-control" type="text" name="modeloTel" id="modeloTel" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="SerieTel" class="form-label">Número Serie</label>
                                                                <input class="form-control" type="text" id="SerieTel" name="SerieTel" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="extTel" class="form-label">Extensión</label>
                                                                <input class="form-control" type="text" id="extTel" name="extTel" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for="userTel">Usuario</label>
                                                                <select id="userTel" class="select2 form-select" style="color: black;">
                                                                    <option value="0">Seleccione:</option>
                                                                    <?php
                                                                    $query = $conexion_bd->prepare("
                                                                    Select e.idEmpleado, p.Nombre_persona from empleado e
                                                                    inner join persona p on p.idPersona = e.idPersona
                                                                    order by p.Nombre_persona;
                                                                    ");
                                                                    $query->execute();
                                                                    $data = $query->fetchAll();

                                                                    foreach ($data as $valores) :
                                                                        echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
                                                                        array_push($usuariosDatos, $valores);
                                                                    endforeach;

                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="comTel" class="form-label">Comentarios</label>
                                                                <input class="form-control" type="text" id="comTel" name="comtTel" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer" style="width: 100%;">
                                                        <div id="pruebaEspacio" style="width: 68%;"></div>
                                                        <button type="button" class="btn btn-secundary" onclick="actualizarTelefono();">Guardar</button>
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
</body>

<?php include "scripts.php" ?>
<?php include "datatable.php" ?>

</html>