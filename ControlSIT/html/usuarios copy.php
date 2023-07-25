<?php 
$username="Cesar";
$password="cesartic";
$database="tics";
$host="172.29.60.126";
$port="3306";

$conexion_bd = new PDO("mysql:host=$host;dbname=$database;charset=utf8; port=$port", $username, $password);
?>

<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>ControlSIT</title>

  <meta name="description" content="" />

  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <script src="../assets/vendor/js/helpers.js"></script>

  <script src="../assets/js/config.js"></script>
</head>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Editar Usuario /</span> Usuario</h4>

            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4">
                  <h5 class="card-header">Usuario</h5>
                  <hr class="my-0" />
                  <div class="card-body">
                    <form id="formAccountSettings" method="POST" onsubmit="return false">
                      <div class="row">
                        <div class="mb-3 col-md-6">
                          <label for="firstName" class="form-label">Nombre Completo</label>
                          <input class="form-control" type="text" id="firstName" name="firstName" autofocus />
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="lastName" class="form-label">CURP</label>
                          <input class="form-control" type="text" name="lastName" id="lastName" />
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="email" class="form-label">Correo Electronico</label>
                          <input class="form-control" type="text" id="email" name="email" placeholder="tics@conagua.gob.mx" />
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="organization" class="form-label">ID Empleado</label>
                          <input type="text" class="form-control" id="organization" name="organization" >
                        </div>
                        <div class="mb-3 col-md-6">
                          <label class="form-label" for="phoneNumber">Extensión</label>
                          <div class="input-group input-group-merge">
                            <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                              placeholder="3304" />
                          </div>
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="address" class="form-label"># DID</label>
                          <input type="text" class="form-control" id="address" name="address"  />
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="state" class="form-label">Gerencia</label>
                          <select id="country" class="select2 form-select">
                            <option value="">Seleccione:</option>
                            <?php
                            $query = $conexion_bd->prepare("SELECT * FROM gerencia");
                            $query->execute();
                            $data = $query->fetchAll();

                            foreach ($data as $valores):
                              echo '<option value="'.$valores[0].'">'.$valores[1].'</option>';
                            endforeach;
                            ?>
                          </select>
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="zipCode" class="form-label">Area</label>
                          <select id="country" class="select2 form-select">
                            <option value="">Seleccione:</option>
                            <?php
                            $query = $conexion_bd->prepare("SELECT * FROM area");
                            $query->execute();
                            $data = $query->fetchAll();

                            foreach ($data as $valores):
                              echo '<option value="'.$valores[0].'">'.$valores[1].'</option>';
                            endforeach;
                            ?>
                          </select>
                        </div>
                        <div class="mb-3 col-md-6">
                          <label class="form-label" for="country">Puesto</label>
                          <select id="country" class="select2 form-select">
                            <option value="">Seleccione:</option>
                            <?php
                            $query = $conexion_bd->prepare("SELECT * FROM puesto");
                            $query->execute();
                            $data = $query->fetchAll();

                            foreach ($data as $valores):
                              echo '<option value="'.$valores[0].'">'.$valores[1].'</option>';
                            endforeach;
                            ?>
                          </select>
                        </div>
                      <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Guardar</button>
                        <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="content-backdrop fade"></div>
        </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
  </div>

  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../assets/vendor/js/menu.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/pages-account-settings-account.js"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>