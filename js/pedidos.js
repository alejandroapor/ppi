
    document.addEventListener('DOMContentLoaded', function () {
    var checkboxes = document.querySelectorAll('.seleccionarProducto');
    var tablaEditable = document.getElementById('editableTable');
    var botonAgregar = document.getElementById('agregarSeleccionados');
    var contadorRegistros = document.querySelectorAll('#editableTable tbody tr').length;
    var modal = new bootstrap.Modal(document.getElementById('modalDialogScrollable'));
    var productosAgregados = new Set();

    botonAgregar.addEventListener('click', function () {
        checkboxes.forEach(function (checkbox, index) {
            if (checkbox.checked) {
              var filaProducto = checkboxes[index].closest('tr');
                var productoId = filaProducto.querySelector('td:first-child').textContent;
             if (!productosAgregados.has(productoId)) {
                  agregarFilaDesdeSeleccion(index);
                  productosAgregados.add(productoId); 
              }else {
                    Swal.fire({
                        title: 'Producto ya registrado',
                        text: 'Por favor, seleccione otro producto.',
                        icon: 'warning',
                        confirmButtonText: 'Aceptar'
                    });
                    checkbox.checked = false;
                }
            }
        });
        modal.hide();
    });
    

    tablaEditable.addEventListener('keydown', function (event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            agregarFila();
        }
    });
    tablaEditable.addEventListener('click', function (event) {
    if (event.target.tagName === 'TD' && event.target.closest('tr')) {
        event.target.closest('tr').classList.toggle('fila-seleccionada');
    }
});

    document.addEventListener('keydown', function (event) {
    if ((event.key === 'Delete' || event.key === 'Del') && document.activeElement.tagName !== 'TD') {
        var filasSeleccionadas = document.querySelectorAll('.fila-seleccionada');
        filasSeleccionadas.forEach(function (fila) {
          var productoId = fila.querySelector('td:first-child').textContent;
            productosAgregados.delete(productoId);  // Eliminar del conjunto
            fila.remove();
        });

        // Actualizar numeración después de eliminar filas
        actualizarNumeracion();
    }
});


    function agregarFila() {
        var fila = tablaEditable.insertRow();  
        var idCell = fila.insertCell();
        idCell.style.display = 'none';
        idCell.textContent = '';  // Puedes ajustar según tus necesidades

        // Añadir el número de fila
        var numeroFilaCell = fila.insertCell();
        numeroFilaCell.textContent = obtenerProximoNumero();
        numeroFilaCell.setAttribute('contenteditable', 'false'); 

        fila.insertCell().textContent = '';
        fila.insertCell().textContent = '';
        fila.insertCell().textContent = '';
        fila.insertCell().textContent = '';

        actualizarNumeracion();  // Actualizar números de fila
    }

    function agregarFilaDesdeSeleccion(index) {
        var fila = tablaEditable.insertRow(0);
        var idCell = fila.insertCell();
        idCell.style.display = 'none';
        idCell.textContent = checkboxes[index].closest('tr').querySelectorAll('td')[0].textContent;

        // Añadir el número de fila
        var numeroFilaCell = fila.insertCell();
        numeroFilaCell.textContent = obtenerProximoNumero();
        numeroFilaCell.setAttribute('contenteditable', 'false'); 

        fila.insertCell().textContent = checkboxes[index].closest('tr').querySelectorAll('td')[2].textContent;  // Codigo
        fila.insertCell().textContent = checkboxes[index].closest('tr').querySelectorAll('td')[3].textContent;  // Nombre
        fila.insertCell().textContent = '';
        fila.insertCell().textContent = '';

        actualizarNumeracion();

        checkboxes[index].checked = false;
        productosAgregados.add(idCell.textContent);    
    }

    function obtenerProximoNumero() {
        contadorRegistros++;
        return contadorRegistros;
    }

    function actualizarNumeracion() {
        var filas = tablaEditable.querySelectorAll('tbody tr');
        filas.forEach(function (fila, index) {
            fila.querySelector('td:nth-child(2)').textContent = index + 1;
        });
    }

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            actualizarNumeracion();
        });
    });
});
   
      $(document).ready(function() {
          $('#filtroCodigo, #filtroNombre').on('input', function() {
              var codigo = $('#filtroCodigo').val().toLowerCase();
              var nombre = $('#filtroNombre').val().toLowerCase();
              $('tbody tr').each(function() {
                  var fila = $(this);
                  var codigoFila = fila.find('td:eq(2)').text().toLowerCase();
                  var nombreFila = fila.find('td:eq(3)').text().toLowerCase();

                  if (codigoFila.includes(codigo) && nombreFila.includes(nombre)) {
                      fila.show();
                  } else {
                      fila.hide();
                  }
                  });
              });
          });
          
          $(document).ready(function() {
            $('.table').DataTable();
        });
     
