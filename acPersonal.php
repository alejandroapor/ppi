<?php
session_start();
if (!isset($_SESSION['id'])) {
   
    header("Location: vistas/login.php");
    exit();

}
include 'vistas/header.php';

include 'Model/conexionn.php';
$conn = conectarBaseDeDatos();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $idPersona = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $idCargo = $_POST['cargo'];

    $stmt = $conn->prepare("UPDATE public.personal 
                            SET nombre = ?, apellido = ?, cedula = ?, idcargo = ?
                            WHERE id = ?");
    $stmt->bindParam(1, $nombre);
    $stmt->bindParam(2, $apellido);
    $stmt->bindParam(3, $cedula);
    $stmt->bindParam(4, $idCargo);
    $stmt->bindParam(5, $idPersona);
    $stmt->execute();
    echo '<script>setTimeout(function() { window.location.href = "actualizarcpc.php?success=true"; }, 0001);</script>';
    
    exit();
}
  if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $idPersona = $_GET['id'];
    $stmt = $conn->prepare("SELECT id, nombre, apellido, cedula, idcargo  
    FROM public.personal  where id= ?;");
    $stmt->bindParam(1, $idPersona);
    $stmt->execute();
    $person = $stmt->fetch(PDO::FETCH_ASSOC);
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
                  <input type="hidden" name="id" value="<?php echo $person['id']; ?>">
                    <input type="text" class="form-control" name="nombre" value="<?php echo $person['nombre']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Apellido:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="apellido" value="<?php echo $person['apellido']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label" >Cedula:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="cedula" value="<?php echo $person['cedula']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Cargo</label>
                  <div class="col-sm-9">
                  <select class="form-select <?php echo (!empty($cargoError)) ? 'is-invalid' : ''; ?>" name="cargo" aria-label="Selecciona un cargo">
                    <?php if (isset($_GET['id']) && is_numeric($_GET['id'])) : ?>
                        <?php foreach ($cargos as $cargo) : ?>
                            <option value="<?php echo $cargo['id']; ?>" <?php echo ($cargo['id'] == $person['idcargo']) ? 'selected' : ''; ?>>
                                <?php echo $cargo['cargo']; ?>
                            </option>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <option value="" selected style="color: #999;">Selecciona un cargo..</option>
                        <?php foreach ($cargos as $cargo) : ?>
                            <option value="<?php echo $cargo['id']; ?>"><?php echo $cargo['cargo']; ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                  </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a class="btn btn-success" href="personal.php">Volver</a>
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
        </tr>
      </thead>
      <tbody>
      <?php foreach ($personas as $persona) : ?>
        <tr>
          <td><?php echo $persona['nombre']; ?></td>
          <td><?php echo $persona['apellido']; ?></td>
          <td><?php echo $persona['cedula']; ?></td>
          <td><?php echo $persona['cargo']; ?></td>
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
    document.addEventListener('DOMContentLoaded', function () {
        const urlParams = new URLSearchParams(window.location.search);
        const successParam = urlParams.get('success');
        if (successParam === 'true') {
            Swal.fire({
                icon: 'success',
                title: '¡Actualizado!',
                text: 'La actualización se realizó con éxito.',
                timer: 1500, // Mostrar durante 2 segundos
                showConfirmButton: false
            }).then(() => {
                window.location.href = 'personal.php'; // Redirigir después de cerrar la alerta
            });
        }
    });
</script>

