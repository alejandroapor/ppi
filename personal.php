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
              <form>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nombre:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Apellido:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Cedula:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Cargo</label>
                  <div class="col-sm-9">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                    <button type="submit" class="btn btn-success">Actualizar</button>
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
    <!-- Table with stripped rows -->
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