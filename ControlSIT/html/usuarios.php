<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<?php include "head.php" ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include "menuLateral.php" ?>
      <div class="layout-page">
        <?php include "nav.php" ?>
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Buscar Usuario /</span> Usuarios</h4>

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
                          <input type="text" class="form-control" id="organization" name="organization">
                        </div>
                        <div class="mb-3 col-md-6">
                          <label class="form-label" for="phoneNumber">Extensión</label>
                          <div class="input-group input-group-merge">
                            <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="3304" />
                          </div>
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="address" class="form-label"># DID</label>
                          <input type="text" class="form-control" id="address" name="address" />
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="state" class="form-label">Gerencia</label>
                          <select id="country" class="select2 form-select">
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
                        <div class="mb-3 col-md-6">
                          <label for="zipCode" class="form-label">Area</label>
                          <select id="country" class="select2 form-select">
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
                        <div class="mb-3 col-md-6">
                          <label class="form-label" for="country">Puesto</label>
                          <select id="country" class="select2 form-select">
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
    </div>
  </div>

  <div class="layout-overlay layout-menu-toggle"></div>
  </div>
</body>

<?php include "scripts.php" ?>

</html>