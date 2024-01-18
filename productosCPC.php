<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['id'])) {
   
    header("Location: vistas/login.php");
    exit();
}

  include 'vistas/header.php';

  include 'Model/conexionn.php';
$conn = conectarBaseDeDatos();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nombre']) && isset($_POST['codigo'])) {
        $nombre = $_POST['nombre'];
        $codigo = $_POST['codigo'];

        $stmt = $conn->prepare("INSERT INTO public.productocpc(codigo, nombre) VALUES (?, ?)");
        $stmt->bindParam(1, $codigo);
        $stmt->bindParam(2, $nombre);
        $stmt->execute();
        
    }
}

if (isset($_GET['eliminar']) && is_numeric($_GET['eliminar'])) {
    $idEliminar = $_GET['eliminar'];
    $stmtEliminar = $conn->prepare("DELETE FROM public.productocpc WHERE id = ?");
    $stmtEliminar->bindParam(1, $idEliminar);
    $resultadoEliminar = $stmtEliminar->execute();
    if ($resultadoEliminar === true) {
      

    }
}

$stmt = $conn->prepare("SELECT id, nombre, codigo FROM public.productocpc");
$stmt->execute();
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Productos CPC</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Bodega</li>
          <li class="breadcrumb-item active">Productos</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div style="width: 250px; padding: 20px">
        <button id="mostrarFormularioBtn" class="btn btn-success btn-auto"  data-bs-toggle="tooltip" data-bs-placement="top" title="Mostrar/Ocultar formulario">Nuevo +</button>
        </div>
      <div id="formularioAgregar" style="display:none;">
        <div class="col-lg-7">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Agregar Productos</h5>

              <!-- General Form Elements -->
              <form method="post" action="forms-elements.php">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nombre:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nombre">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Codigo:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="codigo">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
        </div>

        <div class="col-lg-12">

<div class="card">
  <div class="card-body">
    <h1></h1>
    <p>Producto</p>
    <div style="overflow-x: auto;">
    <!-- Table with stripped rows -->
    <table class="table table-striped table-bordered datatable" >
      <thead>
        <tr>
          <th>Codigo</th>
          <th>Descripcion</th>
          <th>otros</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($productos as $producto) : ?>
        <tr>
        <td><?php echo $producto['codigo']; ?></td>
        <td><?php echo $producto['nombre']; ?></td>
        <td></td>
        <td>
        <a class="btn btn-warning" href="actualizarcpc.php?id=<?php echo $producto['id']; ?>">📝</a>
        <a class="btn btn-danger" href="#" onclick="confirmarEliminar(<?php echo $producto['id']; ?>)">🗑️</a>
        </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    </div>
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
   <!--felcha que redirije hacie arriba-->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 <!--alerta-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                window.location.href = 'productosCPC.php?eliminar=' + id;
            }
        });
    }
</script>
<script>
    document.getElementById('mostrarFormularioBtn').addEventListener('click', function() {
        var formulario = document.getElementById('formularioAgregar');
        formulario.style.display = (formulario.style.display === 'none' || formulario.style.display === '') ? 'block' : 'none';
    });
</script>
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
  <script src="js/pedidos.js"></script>
