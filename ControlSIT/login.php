<?php
@session_start();
$_SESSION["pagina"] = "login";
?>

<?php if (isset($_SESSION['autentica'])) {
    header("Location: index.php");
} else { ?>
    <!DOCTYPE html>
    <html class="light-style customizer-hide">

    <?php include "head.php" ?>

    <body>
        <div class="container-xxl">
            <div class="authentication-wrapper authentication-basic container-p-y">
                <div class="authentication-inner">
                    <div class="card">
                        <div class="card-body">
                            <div class="app-brand justify-content-center">
                                <span class="app-brand-text demo text-body fw-bolder">Control SIT</span>
                            </div>

                            <h4 class="mb-2">Bienvenido! 👋</h4>
                            <p class="mb-4"></p>
                            <form class="mb-3" action="" method="POST">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" id="email" name="usuario" placeholder="Ingresa tu nombre de usuario" autofocus required />
                                </div>
                                <div class="mb-3 form-password-toggle">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="password" name="password">Contraseña</label>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary d-grid w-100" type="submit" name="login">Iniciar sesión</button>
                                </div>
                            </form>
                            <div id="logerror" style="color: red;text-align: center;">
                                <?php
                                if (isset($_POST['login'])) {
                                    $link = mysqli_connect("172.29.60.126:3306", "Cesar", "cesartic");
                                    mysqli_select_db($link, "tics");

                                    $myusuario = mysqli_query($link, "SELECT Usuario_Conagua FROM usuarioconagua WHERE Usuario_Conagua = '" . $_POST['usuario'] . "'");
                                    $nmysuario = mysqli_num_rows($myusuario);

                                    if ($nmysuario != 0) {
                                        $sql = "SELECT idUsuario, us.Contasena, p.Nombre_persona, uc.Usuario_Conagua, uc.Correo_Conagua FROM usuario us inner join empleado e on e.idEmpleado = us.idEmpleado inner join persona p on p.idPersona = e.idPersona inner join usuarioconagua uc on uc.idUsuarioConagua= e.idUsuarioConagua inner join puesto pu on pu.idPuesto= e.idPuesto inner join area a on a.idArea = e.idArea inner join gerencia g on g.idGerencia= e.idGerencia where uc.Usuario_Conagua =  '" . $_POST['usuario'] . "' and us.Contasena = '" . $_POST['password'] . "'";
                                        $myclave = mysqli_query($link, $sql);
                                        $nmyclave = mysqli_num_rows($myclave);
                                        $row = $myclave->fetch_row();
                                        if ($nmyclave != 0) {
                                            session_start();
                                            $_SESSION["autentica"] = "SIP";
                                            $_SESSION["Nombre_persona"] = $row[2];
                                            $_SESSION["Usuario_Conagua"] = $row[3];
                                            $_SESSION["Correo_Conagua"] = $row[4];

                                            header("Location: index.php");
                                        } else {
                                            echo  "Contraseña Incorrecta.";
                                        }
                                    } else {
                                        echo  "El usuario ingresado es incorrecto.";
                                    }
                                    mysqli_close($link);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="libs/jquery/jquery.js"></script>
        <script src="libs/popper/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/main.js"></script>
        <script src="js/pages-account-settings-account.js"></script>
        <script src="js/config.js"></script>

    </body>

    </html>

<?php } ?>