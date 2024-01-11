<?php
session_start();
if (!isset($_SESSION['id'])) {
   
    header("Location: vistas/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gad Palmales</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/escudo_are.png" rel="icon">
  <link href="img/escudo_are.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<?php
  include 'vistas/header.php';
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
              <h5 class="card-title">Agregar Productos</h5>

              <!-- General Form Elements -->
              <form>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nombre:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Codigo:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control">
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
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
    
        <tr>
          <td>Kelly Cameron</td>
          <td>4836</td>
          <td>Fontaine-Valmont</td>
          <td><a class="btn btn-warning" href="#">📝</a>
          <a class="btn btn-danger" href="#">🗑️</a>
          </td>
        </tr>
        <tr>
          <td>Kyra Moses</td>
          <td>3796</td>
          <td>Quenast</td>
          <td><a class="btn btn-warning" href="#">📝</a>
          <a class="btn btn-danger" href="#">🗑️</a>
          </td>
        </tr>
        <tr>
          <td>Grace Bishop</td>
          <td>8340</td>
          <td>Rodez</td>
          <td><a class="btn btn-warning" href="#">📝</a>
          <a class="btn btn-danger" href="#">🗑️</a>
          </td>
        </tr>
        <tr>
          <td>Haviva Hernandez</td>
          <td>8136</td>
          <td>Suwałki</td>
          <td><a class="btn btn-warning" href="#">📝</a>
          <a class="btn btn-danger" href="#">🗑️</a>
          </td>
        </tr>
        <tr>
          <td>Alisa Horn</td>
          <td>9853</td>
          <td>Ucluelet</td>
          <td><a class="btn btn-warning" href="#">📝</a>
          <a class="btn btn-danger" href="#">🗑️</a>
          </td>
        </tr>
        <tr>
          <td>Zelenia Roman</td>
          <td>7516</td>
          <td>Redwater</td>
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

</body>

</html>