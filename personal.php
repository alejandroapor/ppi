<?php
session_start();
if (!isset($_SESSION['id'])) {
   
    header("Location: vistas/login.php");
    exit();

}
include 'vistas/header.php';

include 'Model/conexionn.php';
$conn = conectarBaseDeDatos();

$nombreError = $apellidoError = $cedulaError = $cargoError = $mensajeError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $validacionExitosa = true;

    if (empty($_POST['nombre'])) {
        $nombreError = "El nombre es obligatorio";
        $validacionExitosa = false;
    } else {
        $nombre = $_POST['nombre'];
    }

    if (empty($_POST['apellido'])) {
        $apellidoError = "El apellido es obligatorio";
        $validacionExitosa = false;
    } else {
        $apellido = $_POST['apellido'];
    }

    if (empty($_POST['cedula'])) {
        $cedulaError = "La cédula es obligatoria";
        $validacionExitosa = false;
    } else {
        $cedula = $_POST['cedula'];
    }

    if (empty($_POST['cargo'])) {
        $cargoError = "El cargo es obligatorio";
        $validacionExitosa = false;
    } else {
        $idCargo = $_POST['cargo'];
    }

    if (!$validacionExitosa) {
        $mensajeError = "Por favor, rellene todos los campos obligatorios.";
    } else {
        $stmt = $conn->prepare("INSERT INTO public.personal(nombre, apellido, cedula, idcargo) VALUES (?, ?, ?, ?);");
        $stmt->bindParam(1, $nombre);
        $stmt->bindParam(2, $apellido);
        $stmt->bindParam(3, $cedula);
        $stmt->bindParam(4, $idCargo);
        $stmt->execute();
    }
}


if (isset($_GET['eliminar']) && is_numeric($_GET['eliminar'])) {
  $idEliminar = $_GET['eliminar'];
  $stmtEliminar = $conn->prepare("DELETE FROM public.personal WHERE id = ?");
  $stmtEliminar->bindParam(1, $idEliminar);
  $resultadoEliminar = $stmtEliminar->execute();
  if ($resultadoEliminar === true) {
    

  }
}

$stmt = $conn->prepare("SELECT p.id, p.nombre, p.apellido, p.cedula, c.cargo  
FROM public.personal as p
Inner Join cargos as c ON p.idcargo = c.id;");
$stmt->execute();
$personas = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmtCargos = $conn->prepare("SELECT id, cargo FROM public.cargos");
$stmtCargos->execute();
$cargos = $stmtCargos->fetchAll(PDO::FETCH_ASSOC);
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Personal De empresa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Directorios</li>
          <li class="breadcrumb-item active">Personal</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Agregar Personal</h5>

              <!-- General Form Elements -->
              <form method="POST" action="">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Nombre:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?php echo (!empty($nombreError)) ? 'is-invalid' : ''; ?>" name="nombre">
                                    <span class="text-danger"><?php echo $nombreError; ?></span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Apellido:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?php echo (!empty($apellidoError)) ? 'is-invalid' : ''; ?>" name="apellido">
                                    <span class="text-danger"><?php echo $apellidoError; ?></span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-3 col-form-label">Cedula:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?php echo (!empty($cedulaError)) ? 'is-invalid' : ''; ?>" name="cedula">
                                    <span class="text-danger"><?php echo $cedulaError; ?></span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Cargo</label>
                                <div class="col-sm-9">
                                    <select class="form-select <?php echo (!empty($cargoError)) ? 'is-invalid' : ''; ?>" name="cargo" aria-label="Selecciona un cargo">
                                        <option value="" selected style="color: #999;">Selecciona un cargo..</option>
                                        <?php foreach ($cargos as $cargo) : ?>
                                            <option value="<?php echo $cargo['id']; ?>"><?php echo $cargo['cargo']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="text-danger"><?php echo $cargoError; ?></span>
                                </div>
                            </div>
                            <span class="text-danger"><?php echo $mensajeError; ?></span>
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Agregar</button> 
                                </div>
                            </div>
                        </form><!-- End General Form Elements  ==colores: amarillo= warning, 
              azul= primary, verde= success, gris= secondary, rojo= danger -->

            </div>
          </div>

        </div>

        <div class="col-lg-12">

<div class="card">
  <div class="card-body">
  <div style="padding-top: 20px">  <div>
    <table class="table datatable table-hover">
      <thead>
        <tr>
          <th>
            <b>N</b>ombre
          </th>
          <th>Apellido</th>
          <th>Cedula</th>
          <th>Cargo</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($personas as $persona) : ?>
        <tr>
          <td><?php echo $persona['nombre']; ?></td>
          <td><?php echo $persona['apellido']; ?></td>
          <td><?php echo $persona['cedula']; ?></td>
          <td><?php echo $persona['cargo']; ?></td>
          <td><a class="btn btn-warning" href="acPersonal.php?id=<?php echo $persona['id']; ?>">📝</a>
          <a class="btn btn-danger" href="#" onclick="confirmarEliminar(<?php echo $persona['id']; ?>)">🗑️</a>
          </td>
          <?php endforeach; ?>
        </tr>
        
      </tbody>
    </table>
    

  </div>
</div>

</div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include 'vistas/footer.php';
  ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    function confirmarEliminar(id) {
        Swal.fire({
            title: '¿Estás seguro de eliminar este producto?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sí',
            cancelButtonText: 'No',
        }).then((result) => {
            if (result.isConfirmed) {
                // Si el usuario hace clic en "Sí", redirige
                window.location.href = 'personal.php?eliminar=' + id;
            }
        });
    }
</script>




