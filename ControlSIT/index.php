<?php
@session_start();
if (!$_SESSION['autentica']) {
    header('location: login.php');
} else {
    $_SESSION["pagina"] = "index";
    $nombrePersona = $_SESSION["Nombre_persona"];
    $usuarioConagua = $_SESSION["Usuario_Conagua"];
    $correoConagua = $_SESSION["Correo_Conagua"];

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
                <div class="app-brand demo">
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

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <li class="menu-item active" id="menuCompleto">
                        <a class="menu-link" onclick="cambiarBotones(1)">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Inicio</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase"></li>
                    <li class="menu-item" id="menuUsuarios">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Usuarios</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item" id="buscarUsuario">
                                <a class="menu-link" onclick="cambiarBotones(2);">
                                    <div data-i18n="Account">Buscar Usuario</div>
                                </a>
                            </li>
                            <li class="menu-item" id="actualizarUsuario">
                                <a class="menu-link" onclick="cambiarBotones(5);">
                                    <div data-i18n="Notifications">Actualizar </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item" id="menuEquipos">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                            <div data-i18n="Authentications">Equipos</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item" id="buscarEquipo">
                                <a class="menu-link" onclick="cambiarBotones(3);">
                                    <div data-i18n="Basic">Buscar</div>
                                </a>
                            </li>
                            <!--
                            <li class="menu-item">
                                <a href="auth-register-basic.html" class="menu-link" target="_blank">
                                    <div data-i18n="Basic">Actualizar</div>
                                </a>
                            </li>
                            -->
                        </ul>
                    </li>

                    <li class="menu-item" id="menuIPs">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                            <div data-i18n="Misc">IP</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item" id="buscarIP">
                                <a class="menu-link" onclick="cambiarBotones(4);">
                                    <div data-i18n="Error">Buscar</div>
                                </a>
                            </li>
                            <!--
                            <li class="menu-item">
                                <a href="auth-register-basic.html" class="menu-link" target="_blank">
                                    <div data-i18n="Basic">Actualizar</div>
                                </a>
                            </li>
                            -->
                        </ul>
                    </li>

                    <li class="menu-item" id="menuTelefonos">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Account Settings">Teléfonos</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item" id="buscarUsuario">
                                <a class="menu-link" onclick="cambiarBotones(6);">
                                    <div data-i18n="Account">Buscar Teléfono</div>
                                </a>
                            </li>
                            <li class="menu-item" id="actualizarUsuario">
                                <a class="menu-link" onclick="cambiarBotones(7);">
                                    <div data-i18n="Notifications">Actualizar </div>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <!-- Components -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
                    <!-- Cards -->
                    <li class="menu-item">
                        <a href="cards-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic">Cards</div>
                        </a>
                    </li>
                    <!-- User interface -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="User interface">User interface</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="ui-accordion.html" class="menu-link">
                                    <div data-i18n="Accordion">Accordion</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-alerts.html" class="menu-link">
                                    <div data-i18n="Alerts">Alerts</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-badges.html" class="menu-link">
                                    <div data-i18n="Badges">Badges</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-buttons.html" class="menu-link">
                                    <div data-i18n="Buttons">Buttons</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-carousel.html" class="menu-link">
                                    <div data-i18n="Carousel">Carousel</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-collapse.html" class="menu-link">
                                    <div data-i18n="Collapse">Collapse</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-dropdowns.html" class="menu-link">
                                    <div data-i18n="Dropdowns">Dropdowns</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-footer.html" class="menu-link">
                                    <div data-i18n="Footer">Footer</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-list-groups.html" class="menu-link">
                                    <div data-i18n="List Groups">List groups</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-modals.html" class="menu-link">
                                    <div data-i18n="Modals">Modals</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-navbar.html" class="menu-link">
                                    <div data-i18n="Navbar">Navbar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-offcanvas.html" class="menu-link">
                                    <div data-i18n="Offcanvas">Offcanvas</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                                    <div data-i18n="Pagination &amp; Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-progress.html" class="menu-link">
                                    <div data-i18n="Progress">Progress</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-spinners.html" class="menu-link">
                                    <div data-i18n="Spinners">Spinners</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-tabs-pills.html" class="menu-link">
                                    <div data-i18n="Tabs &amp; Pills">Tabs &amp; Pills</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-toasts.html" class="menu-link">
                                    <div data-i18n="Toasts">Toasts</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-tooltips-popovers.html" class="menu-link">
                                    <div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-typography.html" class="menu-link">
                                    <div data-i18n="Typography">Typography</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Extended components -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-copy"></i>
                            <div data-i18n="Extended UI">Extended UI</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                                    <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-text-divider.html" class="menu-link">
                                    <div data-i18n="Text Divider">Text Divider</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="icons-boxicons.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-crown"></i>
                            <div data-i18n="Boxicons">Boxicons</div>
                        </a>
                    </li>

                    <!-- Forms & Tables -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp; Tables</span></li>
                    <!-- Forms -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Form Elements">Form Elements</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="forms-basic-inputs.html" class="menu-link">
                                    <div data-i18n="Basic Inputs">Basic Inputs</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-input-groups.html" class="menu-link">
                                    <div data-i18n="Input groups">Input groups</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Form Layouts">Form Layouts</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="form-layouts-vertical.html" class="menu-link">
                                    <div data-i18n="Vertical Form">Vertical Form</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="form-layouts-horizontal.html" class="menu-link">
                                    <div data-i18n="Horizontal Form">Horizontal Form</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Tables -->
                    <li class="menu-item">
                        <a href="tables-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-table"></i>
                            <div data-i18n="Tables">Tables</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase"><span class="menu-header-text"></span></li>
                    <li class="menu-item">
                        <a href="mantenimiento.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div data-i18n="Documentation">Documentación</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
                                            <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75zM7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116z" />
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0z" />
                                        </svg>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
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
                                        <a class="dropdown-item" href="logout.php">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>

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
                                                        <th>Extension</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php
                                                    $link = mysqli_connect("172.29.60.126:3306", "Cesar", "cesartic");
                                                    mysqli_select_db($link, "tics");
                                                    $documentos = mysqli_query($link, "SELECT e.idEmpleado, p.Nombre_persona, uc.Usuario_Conagua, uc.Numero_Extension, uc.Correo_Conagua from empleado e
                                                    inner join persona p on p.idPersona = e.idPersona
                                                    inner join usuarioconagua uc on uc.idUsuarioConagua= e.idUsuarioConagua
                                                    inner join puesto pu on pu.idPuesto= e.idPuesto
                                                    inner join area a on a.idArea = e.idArea
                                                    inner join gerencia g on g.idGerencia= e.idGerencia
                                                    order by e.idEmpleado;");
                                                    while ($rows = mysqli_fetch_array($documentos)) {
                                                        echo '<tr>';
                                                        echo '<td> ' . '<i class="fab fa-angular fa-lg text-danger me-3"></i><strong>' . $rows[1] . '</strong>' . '</td>';
                                                        echo '<td> ' . $rows[2] . '</td>';
                                                        echo '<td> ' . $rows[4] . '</td>';
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
                                                            <div class="mb-3 col-md-6">
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
                                                        <div class="row" id="mdlEquiMon">
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
                                                                <label class="form-label" for="upsU">UPS Serie</label>
                                                                <input type="text" id="upsU" name="upsU" class="form-control" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for="IPU">IP</label>
                                                                <input type="text" id="IPU" name="IPU" class="form-control" readonly />
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
                                            <div class="mb-3 col-md-6">
                                                <label for="idEmpleadoA" class="form-label">ID Empleado</label>
                                                <input type="text" class="form-control" id="idEmpleadoA" name="idEmpleadoA" readonly style="color: gray;" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="curpA" class="form-label">CURP</label>
                                                <input class="form-control" type="text" name="curpA" id="curpA" readonly style="color: gray;" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="usuarioA" class="form-label">Usuario</label>
                                                <input class="form-control" type="text" id="usuarioA" name="usuarioA" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="emailA" class="form-label">Correo Electronico</label>
                                                <input class="form-control" type="text" id="emailA" name="emailA" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="extensionA">Extensión</label>
                                                <input type="text" id="extensionA" name="extensionA" class="form-control" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="didA" class="form-label"># DID</label>
                                                <input type="text" class="form-control" id="didA" name="didA" />
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
                                            <div class="mt-2" id="botonesActualizar" style="display: none;">
                                                <button type="submit" class="btn btn-primary me-2" onclick="actualizarUsuarioBD();">Guardar</button>
                                                <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
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
                                                    inner join dispositivo d on d.idDispositivo= e.idDispositivo;");
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

                <div class="content-wrapper" id="mdlBuscarTelefono" style="display: block;">
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
                                                                <input type="text"id="idconcentradoTelefonos"  />
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