<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Visitantes - Gestion de Visitantes</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    .img-logo {
      display: block;
      margin-left: auto;
      margin-right: auto;
      max-width: 30%;
      height: auto;
    }
  </style>
</head>

<body>

  <!-- Header navbar -->
  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <a href="#" class="navbar-brand">Gestion de Visitantes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="<?php echo base_url() . '' ?>" class="nav-link">Inicio</a>
        </li>
        <li>
          <a href="<?php echo base_url() . '/index.php/visitors' ?>" class="nav-link active">Visitantes</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Buttons and data table -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="col-md-12">
          <h1>Listado y Registro de Visitantes<br>
            <div class="float-right">
              <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#addPersonaModal"><span class="fa fa-plus"></span> Agregar Persona</a>
              <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#addVisitModal"><span class="fa fa-plus"></span> Registrar Visita</a>
              <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#addDesemModal"><span class="fa fa-plus"></span> Registrar Salida</a>
            </div>
            <br>
          </h1>
        </div>
        <table class="table table-striped" id="clientListing">
          <thead>
            <tr>
              <!-- Table header fields: -->
              <th>Cédula</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th style="text-align:center">Telefono</th>
              <th style="text-align:center">Placa Vehiculo</th>
              <th style="text-align: right;">Acciones</th>
            </tr>
          </thead>
          <tbody id="listRecords">
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Add Visitor form -->
  <form id="savePersonaForm" method="post">
    <div class="modal fade" id="addPersonaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Visitante</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Cédula*</label>
              <div class="col-md-10">
                <input type="text" maxlength="11" name="cedula" id="cedula" class="form-control" placeholder="00100000001" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-2 col-form-label">Nombre*</label>
              <div class="col-md-10">
                <input type="text" maxlength="30" name="nombre" id="nombre" class="form-control" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Correo*</label>
              <div class="col-md-10">
                <input type="text" maxlength="30" name="correo" id="correo" class="form-control" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Telefono*</label>
              <div class="col-md-10">
                <input type="number" min="8000000000" max="84999999999" name="telefono" id="telefono" class="form-control" placeholder="8091234567" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Fecha de Nacimiento*</label>
              <div class="col-md-9">
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Placa del Vehiculo*</label>
              <div class="col-md-9">
                <input type="text" maxlength="7" name="placa_vehiculo" id="placa_vehiculo" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </div>
        <!-- success and error message: -->
        <div class="alert alert-success" id="success" style="max-width: 50%; margin: 0 auto; display:none;">
          <center><strong>Exito!</strong> Registro Guardado Correctamente</center>
        </div>
        <div class="alert alert-danger" id="failed" style="max-width: 50%; margin: 0 auto; display:none;">
          <center><strong>Error!</strong> No se pudo Guardar, Revise los datos e intente de nuevo. </center>
        </div>
      </div>
    </div>
  </form>

  <!-- Modify Visitor form -->
  <form id="editPersonaForm" method="post">
    <div class="modal fade" id="editPersonaModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Modificar Cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Cédula*</label>
              <div class="col-md-10">
                <input type="text" maxlength="11" name="visitanteCedula" id="visitanteCedula" class="form-control" placeholder="Codigo" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Nombre*</label>
              <div class="col-md-10">
                <input type="text" maxlength="30" name="visitanteNombre" id="visitanteNombre" class="form-control" placeholder="Nombre" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Correo*</label>
              <div class="col-md-10">
                <input type="text" maxlength="30" name="visitanteCorreo" id="visitanteCorreo" class="form-control" placeholder="Correo" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Telefono*</label>
              <div class="col-md-10">
                <input type="text" maxlength="10" name="visitanteTelefono" id="visitanteTelefono" class="form-control" placeholder="Telefono" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Fecha de Nacimiento*</label>
              <div class="col-md-10">
                <input type="date" name="visitanteBirth" id="visitanteBirth" class="form-control" placeholder="Fecha_Nacimiento" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Placa del Vehiculo*</label>
              <div class="col-md-10">
                <input type="text" maxlength="7" name="visitantePlaca" id="visitantePlaca" class="form-control" placeholder="Telefono" required>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="clientId" id="clientId" class="form-control">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
        </div>
        <!-- success and error message: -->
        <div class="alert alert-success" id="success" style="max-width: 50%; margin: 0 auto; display:none;">
          <center><strong>Exito!</strong> Registro Actualizado Correctamente</center>
        </div>
        <div class="alert alert-danger" id="failed" style="max-width: 50%; margin: 0 auto; display:none;">
          <center><strong>Error!</strong> No se pudo Guardar, Revise los datos e intente de nuevo. </center>
        </div>
      </div>
    </div>
  </form>

  <!-- View Visitor form -->
  <form id="viewPersonForm" method="post">
    <div class="modal fade" id="viewPersonModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewModalLabel">Consultar Cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <div class="form-row">
              <div class="col">
                <label for="cedula">Cédula</label>
                <input type="text" class="form-control" id="viewCedula" name="viewCedula" placeholder="Cédula">
              </div>
              <div class="col-md-6 mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="viewNombre" name="nombre" placeholder="Nombre">
              </div>
              <div class="col">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" id="viewTelefono" name="viewTelefono" placeholder="Teléfono">
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <label for="placa">Placa del Vehiculo</label>
                <input type="text" class="form-control" id="viewPlaca" name="Placa" placeholder="Placa">
              </div>
              <div class="col">
                <label for="correo">Correo</label>
                <input type="text" class="form-control" id="viewCorreo" name="correo" placeholder="Correo">
              </div>
              <div class="col">
                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                <input type="text" class="form-control" id="viewFecha" name="fecha_nacimiento" placeholder="Fecha de Nacimiento">
              </div>
            </div>
            
            <div class="modal-footer">

              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <!-- Remove client form -->
  <form id="deletePersonaForm" method="post">
    <div class="modal fade" id="deletePersonaModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Borrar Visitante</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <strong>Esta seguro que desea borrar este Visitante?</strong>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="deletePersonaId" id="deletePersonaId" class="form-control">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="submit" class="btn btn-primary">Yes</button>
          </div>
        </div>
      </div>
    </div>
  </form>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo base_url().'/js/crud_operation.js'?>"></script>
</body>

</html>