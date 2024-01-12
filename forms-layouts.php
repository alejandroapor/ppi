<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['id'])) {
    // Si no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: vistas/login.php");
    exit();
}
?>
  <!-- ======= Header ======= -->
 <?php
 include 'vistas/header.php'
 ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Productos Bodega</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Bodega</li>
          <li class="breadcrumb-item active">Productos Bodega</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>N</b>ame
                    </th>
                    <th>Ext.</th>
                    <th>City</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                    <th>Completion</th>
                  </tr>
                </thead>
                <tbody>
              
                  <tr>
                    <td>Kelly Cameron</td>
                    <td>4836</td>
                    <td>Fontaine-Valmont</td>
                    <td>1999/02/07</td>
                    <td>24%</td>
                  </tr>
                  <tr>
                    <td>Kyra Moses</td>
                    <td>3796</td>
                    <td>Quenast</td>
                    <td>1998/07/07</td>
                    <td>68%</td>
                  </tr>
                  <tr>
                    <td>Grace Bishop</td>
                    <td>8340</td>
                    <td>Rodez</td>
                    <td>2012/02/10</td>
                    <td>4%</td>
                  </tr>
                  <tr>
                    <td>Haviva Hernandez</td>
                    <td>8136</td>
                    <td>Suwałki</td>
                    <td>2000/30/01</td>
                    <td>16%</td>
                  </tr>
                  <tr>
                    <td>Alisa Horn</td>
                    <td>9853</td>
                    <td>Ucluelet</td>
                    <td>2007/01/11</td>
                    <td>39%</td>
                  </tr>
                  <tr>
                    <td>Zelenia Roman</td>
                    <td>7516</td>
                    <td>Redwater</td>
                    <td>2012/03/03</td>
                    <td>31%</td>
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
  include 'vistas/footer.php'
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