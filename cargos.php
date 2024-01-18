<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['id'])) {
    // Si no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: vistas/login.php");
    exit();

}

include 'vistas/header.php';

include 'Model/conexionn.php';
$conn = conectarBaseDeDatos();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['cargo']) && !empty($_POST['cargo'])) {
      $cargo = $_POST['cargo'];

      if (!empty($cargo)) {
        $stmt = $conn->prepare("INSERT INTO public.cargos(cargo) VALUES (?)");
        $stmt->bindParam(1, $cargo);
    } else {
        echo "El campo 'cargo' no puede estar vacío.";
    }
      
  }
}

if (isset($_GET['eliminar']) && is_numeric($_GET['eliminar'])) {
  $idEliminar = $_GET['eliminar'];
  $stmtEliminar = $conn->prepare("DELETE FROM public.cargos WHERE id = ?");
  $stmtEliminar->bindParam(1, $idEliminar);
  $resultadoEliminar = $stmtEliminar->execute();
  if ($resultadoEliminar === true) {
    

  }
}

$stmt = $conn->prepare("SELECT id, cargo FROM public.cargos");
$stmt->execute();
$cargos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Cargos</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Directorios</li>
          <li class="breadcrumb-item active">Cargos</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-5">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Agregar Cargos</h5>

              <!-- General Form Elements -->
              <form action="cargos.php" method="post">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Cargo:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="cargo">
                  </div>
                </div>
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
        
        <div class="col-lg-7">

            <div class="card">
            <div class="card-body">
            <h5 class="card-title">Listado</h5>
                <!-- Table with stripped rows -->
                <table class="table datatable table-hover">
                <thead>
                    <tr>
                    <th>Codigo</th>
                    <th>Cargo</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($cargos as $cargo) : ?>
                    <tr>
                    <td><?php echo $cargo['id']; ?></td>
                    <td><?php echo $cargo['cargo']; ?></td>
                    <td>
                    <a class="btn btn-danger" href="#"onclick="confirmarEliminar(<?php echo $cargo['id']; ?>)">🗑️</a>
                    </td>
                    <?php endforeach; ?>
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
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
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
                window.location.href = 'cargos.php?eliminar=' + id;
            }
        });
    }
</script>

