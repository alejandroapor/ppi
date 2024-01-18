<?php
ob_start(); 
  include 'vistas/header.php';
  include 'Model/conexionn.php';
$conn = conectarBaseDeDatos();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['nombre']) && isset($_POST['codigo']) && isset($_POST['id'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $codigo = $_POST['codigo'];
    

    $stmt = $conn->prepare("UPDATE public.productocpc SET nombre = ?, codigo = ? WHERE id = ?");
    $stmt->bindParam(1, $nombre);
    $stmt->bindParam(2, $codigo);
    $stmt->bindParam(3, $id);
    $stmt->execute();
    echo '<script>setTimeout(function() { window.location.href = "actualizarcpc.php?success=true"; }, 0001);</script>';
    
    exit();
        
    }
}
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $idProducto = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM public.productocpc WHERE id = ?");
    $stmt->bindParam(1, $idProducto);
    $stmt->execute();
    $producto = $stmt->fetch(PDO::FETCH_ASSOC);
}
$stmt = $conn->prepare("SELECT * FROM public.productocpc");
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
        <div class="col-lg-7">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Actualizar Productos</h5>

              <!-- General Form Elements -->
              <form method="post" action="actualizarcpc.php">
                        <div class="row mb-3">
                        <label for="inputText" class="col-sm-3 col-form-label">Nombre:</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                            <input type="text" class="form-control" name="nombre" value="<?php echo $producto['nombre']; ?>">
                        </div>
                        </div>
                         <div class="row mb-3">
                         <label for="inputText" class="col-sm-3 col-form-label">Codigo:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="codigo" value="<?php echo $producto['codigo']; ?>">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <a class="btn btn-success" href="productosCPC.php">Volver</a>
                        </div>
                    </div>
                </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        <div class="col-lg-12">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Datatables</h5>
    <p>Producto</p>

    <!-- Table with stripped rows -->
    <table class="table datatable">
      <thead>
        <tr>
          <th>
            <b>N</b>ame
          </th>
          <th>Codigo</th>
          <th>Descripcion</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($productos as $product) : ?>
        <tr>
        <td><?php echo $product['nombre']; ?></td>
        <td><?php echo $product['codigo']; ?></td>
        <td></td>
        </tr>
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
   <!--felcha que redirije hacie arriba-->
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                window.location.href = 'productosCPC.php'; // Redirigir después de cerrar la alerta
            });
        }
    });
</script>
