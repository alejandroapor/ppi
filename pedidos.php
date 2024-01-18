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
$stmt1 = $conn->prepare("SELECT id, nombre, codigo FROM public.productocpc");
$stmt1->execute();
$productos = $stmt1->fetchAll(PDO::FETCH_ASSOC);
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
        <div class="col-lg-12">
        <div style="width: 250px; padding-bottom: 10px;">
        <button id="mostrarFormularioBtn" class="btn btn-success btn-auto" data-bs-toggle="tooltip" data-bs-placement="top" title="Mostrar/Ocultar formulario">Nuevo +</button>
        <button id="mostrarFormularioBtn" class="btn btn-success btn-auto"  data-bs-toggle="tooltip" data-bs-placement="top" title="Mostrar/Ocultar formulario">Editar</button>    
        </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title ">PEDIDOS</h5>

              <!-- General Form Elements -->
              <form class="row g-3">
              <div class="col-md-3">
                  <label for="inputText" class="form-label"><b>Numero Partida:</b></label>
                  <input class="form-control" ></input>
                </div>
              <div class="col-md-3" >
                  <label for="inputDate" class="form-label"><b>FECHA</b></label>
                  <div class="col-sm-12">
                    <input type="date" class="form-control">
                  </div>
                </div>
                  <div  class="col-md-3">
                  <label for="inputText" class="form-label"><b>Tipo de compra</b></label>
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>seleccione...</option>
                      <option value="1">CATALOGO</option>
                      <option value="2">INFIMA</option>
                    </select>
                  </div>
                  </div>
                  <div  class="col-md-2">
                  <label for="inputText" class="form-label"><b>Clase de Pedido:</b></label>
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>seleccione...</option>
                      <option value="1">BIEN</option>
                      <option value="2">SERVICIO</option>
                      <option value="3">OBRA</option>
                    </select>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <label for="inputText" class="form-label"><b>Nombre Partida:</b></label>
                  <input class="form-control" ></input>
                </div>
                <div  class="col-md-2">
                  <label for="inputText" class="form-label"><b>Solicita:</b></label>
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>seleccione...</option>
                      <option value="1">Oficina</option>
                      <option value="2">Otro</option>
                    </select>
                  </div>
                  </div>
                  <div></div>
                <div class="col-md-5">
                  <label for="inputText" class="form-label"><b>IDENTIFICACION OBJETO DE CONTRATACION:</b>
                </label>
                    <textarea class="form-control" style="height: 100px"></textarea>
                </div>
                <div class="col-md-5">
                  <label for="inputText" class="form-label"><b>Requerimiento cot:</b></label>
                  <textarea class="form-control" style="height: 100px"></textarea>
                </div>
                <div class="col-md-5">
                  <div class="col-sm-10">
                    <button  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable">Agregar Productos</button>
                  </div>
                </div>
                 <!--modal tabla produc-->
                
              <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">PRODUCTOS CPC</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-header">
                      <div class="col-md-3">
                      <label for="filtroCodigo" class="form-label"><b>codigo:</b></label>
                      <input id="filtroCodigo" class="form-control filtro"></input>
                      </div>
                      <div class="col-md-3">
                      <label for="inputText" class="form-label"><b>Nombre:</b></label>
                      <input id="filtroNombre" class="form-control filtro" ></input>
                      </div>
                      <button type="button" class="btn btn-primary" id="agregarSeleccionados">agregar</button>
                      <from>
                    </div>
                    <div class="modal-body">
                    <table class="table table-hover" >
                    <thead>
                      <tr >
                      <th style="display:none;">ID</th>
                      <th></th>
                        <th>Codigo</th>
                        <th>Producto</th>
                      
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($productos as $producto) : ?>
                      <tr class="filtro">
                      <td style="display:none;"><?php echo $producto['id']; ?></td>
                      <td><input type="checkbox" class="seleccionarProducto"></td>
                     
                      <td><?php echo $producto['codigo']; ?></td>
                      <td><?php echo $producto['nombre']; ?></td>
                      
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                      
                     
                    </div>
                    
                  </div>
                </div>
              </div>
                 <!--end tabla-->
                <div class="col-md-12">
                  <div class="col-sm-12">
                  <table class="table table-hover"  >
                    <thead>
                      <tr>
                      <th style="display:none;">ID</th>
                      <th>N#</th>
                        <th>Codigo</th>
                        <th>Producto</th>
                        <th>unidad</th>
                        <th>Cantidad</th>
                      </tr>
                    </thead>
                    <tbody contenteditable="true" id="editableTable">
                   
                      <tr>
                      <td style="display:none;"></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td> </td>
                      <td></td>
                      </tr>
                    </tbody>
                  </table>
                  </div>
                </div>
                
                <div class="col-md-4">
                  <label for="inputText" class="form-label"><b>Unidad Requerirente:</b></label>
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>seleccione...</option>
                      <option value="1">Oficina</option>
                      <option value="2">Otro</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="inputText" class="form-label"><b>Area Requerirente:</b></label>
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>seleccione...</option>
                      <option value="1">Oficina</option>
                      <option value="2">Otro</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="inputText" class="form-label"><b>Administrador de la OC:</b></label>
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>seleccione...</option>
                      <option value="1">Oficina</option>
                      <option value="2">Otro</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="inputText" class="form-label"><b>Responsable del Requerimiento:</b></label>
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>seleccione...</option>
                      <option value="1">Oficina</option>
                      <option value="2">Otro</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="inputText" class="form-label"><b>Quien Genero la necesidad:</b></label>
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>seleccione...</option>
                      <option value="1">Proyecto CDI MIES</option>
                      <option value="2">Otro</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="inputText" class="form-label"><b>Fun. no intervino la OC:</b></label>
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>seleccione...</option>
                      <option value="1">Proyecto CDI MIES</option>
                      <option value="2">Otro</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="inputText" class="form-label"><b>Area Financiera:</b></label>
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>seleccione...</option>
                      <option value="1">Proyecto CDI MIES</option>
                      <option value="2">Otro</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="inputText" class="form-label"><b>Res. Compras P.:</b></label>
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>seleccione...</option>
                      <option value="1">Proyecto CDI MIES</option>
                      <option value="2">Otro</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="inputText" class="form-label"><b>Memos:</b></label>
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>seleccione...</option>
                      <option value="1">Proyecto CDI MIES</option>
                      <option value="2">Otro</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-sm-12 text-md-end">
                  <button type="button" class="btn btn-primary" >Guardar</button>     
                  </div>
                </div>
              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
        </div>
        </div>
    </section>
  </main>
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
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/pedidos.js"></script>
   