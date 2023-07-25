<?php
$username = "root";
$password = "toor";
$database = "tics";
$host = "localhost";
$port = "3306";

$usuariosDatos = [];
$todosUsuarios = [];
$conexion_bd = new PDO("mysql:host=$host;dbname=$database;charset=utf8; port=$port", $username, $password);
?>

<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<?php include "head.php" ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dar de Alta /</span> IP</h4>

          <div class="row">
            <div class="col-md-12">
              <div class="card mb-4">
                <h5 class="card-header">Usuario</h5>
                <hr class="my-0" />
                <div class="card-body">
                  <form id="formAccountSettings" method="POST" onsubmit="return false">
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label for="nombreCompleto" class="form-label">Nombre Completo</label>
                        <select id="nombreCompleto" class="select2 form-select">
                          <option value="">Seleccione:</option>
                          <?php
                          $query = $conexion_bd->prepare("
                            Select e.idEmpleado, uc.Id_empleado, p.Nombre_persona, uc.Usuario_Conagua, uc.Numero_Extension, uc.Correo_Conagua, p.CURP, pu.NombrePuesto, g.NombreGerencia, a.NombreArea from empleado e
                            inner join persona p on p.idPersona = e.idPersona
                            inner join usuarioconagua uc on uc.idUsuarioConagua= e.idUsuarioConagua
                            inner join puesto pu on pu.idPuesto= e.idPuesto
                            inner join area a on a.idArea = e.idArea
                            inner join gerencia g on g.idGerencia= e.idGerencia
                            order by p.Nombre_persona;
                            ");
                          $query->execute();
                          $data = $query->fetchAll();

                          foreach ($data as $valores) :
                            echo '<option value="' . $valores[0] . '">' . $valores[2] . '</option>';
                            array_push($usuariosDatos, $valores);
                          endforeach;

                          ?>
                        </select>
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
                  </form>
                </div>
              </div>
              <div class="card mb-4">
                <h5 class="card-header">Equipo</h5>
                <hr class="my-0" />
                <div class="card-body">
                  <form id="formAccountSettings" method="POST" onsubmit="return false">
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label class="form-label"># Serie</label>
                        <select id="serie" class="select2 form-select">
                          <option value="">Seleccione:</option>
                          <?php
                          $query = $conexion_bd->prepare("Select e.idEquipo, td.Nombre, td.Descripcion,de.Marca, de.Modelo, d.Host_Name, d.Numero_Serie, d.Id_CONAGUA from equipo e
                            inner join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
                            inner join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
                            inner join dispositivo d on d.idDispositivo= e.idDispositivo;");
                          $query->execute();
                          $data = $query->fetchAll();

                          foreach ($data as $valores) :
                            echo '<option value="' . $valores[0] . '">' . $valores[6] . '</option>';
                          endforeach;
                          ?>
                        </select>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="hostname" class="form-label">HOST NAME</label>
                        <input class="form-control" type="text" id="hostname" name="hostname" />
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

</body>

<?php include "scripts.php" ?>

</html>