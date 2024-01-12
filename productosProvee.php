<?php
session_start();
if (!isset($_SESSION['id'])) {
   
    header("Location: vistas/login.php");
    exit();
}
?>
<?php
  include 'vistas/header.php';
  ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Productos prov</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Directorios</li>
          <li class="breadcrumb-item active">Productos Proveedores</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
       <!-- End General Form Elements  ==colores: amarillo= warning, 
              azul= primary, verde= success, gris= secondary, rojo= danger -->
        <div class="col-lg-12">

        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Productos de Proveedores</h5>
            <!-- Table with stripped rows -->
            <table class="table datatable table-hover">
            <thead>
                <tr>
                <th>
                    <b>N</b>ombre
                </th>
                <th>Apellido</th>
                <th>Cedula</th>
                <th>Direccion</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
            
                <tr>
                <td>Kelly Cameron</td>
                <td>4836</td>
                <td>Fontaine-Valmont</td>
                <td>24%</td>
                <td><a class="btn btn-warning" href="#">📝</a>
                <a class="btn btn-danger" href="#">🗑️</a>
                </td>
                
                </tr>
                <tr>
                <td>Zelenia Roman</td>
                <td>7516</td>
                <td>Redwater</td>
                <td>31%</td>
                <td><a class="btn btn-warning" href="#">📝</a>
                <a class="btn btn-danger" href="#">🗑️</a>
                </td>
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
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</html>