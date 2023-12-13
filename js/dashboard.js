//Funcion despliegue del perfil:
function toggleDropdown() {
    var dropdown = document.getElementById("profileDropdown");
    dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
}

//barra de busqueda menu lateral:
document.addEventListener("DOMContentLoaded", function () {
    const searchBar = document.querySelector('.search-bar input');
    const menuItems = document.querySelectorAll('.menu li a');

    searchBar.addEventListener('input', function () {
        const searchTerm = searchBar.value.toLowerCase();

        menuItems.forEach(item => {
            const text = item.textContent.toLowerCase();
            const parent = item.parentElement;

            if (text.includes(searchTerm)) {
                parent.style.display = 'block';
            } else {
                parent.style.display = 'none';
            }
        });
    });
});


//aGREGAR USUARIO

function openAddModalU() {
    var modal = document.getElementById('modalU');
    modal.style.display = 'block';
}

function closeModalU() {
    var modal = document.getElementById('modalU');
    modal.style.display = 'none';
}

// Función para guardar la compra (a implementar)
function saveUsuario() {
    var nombre = document.getElementById('nombre').value;
    var correo = document.getElementById('correo').value;
    var estado = document.getElementById('estado').value;
    var fecha = document.getElementById('fecha_registro').value;
    // Crear una nueva fila en la tabla
    var table = document.getElementById('Table');
    var newRow = table.insertRow(table.rows.length);

    // Insertar celdas con los datos ingresados
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    // Agregar los valores a las celdas
    cell1.innerHTML = nombre;
    cell2.innerHTML = correo;
    cell3.innerHTML = estado;
    cell4.innerHTML = fecha;
    cell5.innerHTML = '<button class="editar" onclick="openModal()">Editar</button>';

    closeModalU(); // Cerrar el modal después de guardar
}

//Categoria insumo agregar
// Función para abrir el modal de compra
function openAddModalPerdida() {
    var modal = document.getElementById('modalCompra');
    modal.style.display = 'block';
}

// Función para cerrar el modal de compra
function closeCompraModal() {
    var modal = document.getElementById('modalCompra');
    modal.style.display = 'none';
}

// Función para guardar la compra (a implementar)
function saveCompra() {
    var nombre = document.getElementById('nombreCompra').value;
    var estado = document.getElementById('estadoCompra').value;

    // Crear una nueva fila en la tabla
    var table = document.getElementById('Table');
    var newRow = table.insertRow(table.rows.length);

    // Insertar celdas con los datos ingresados
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);

    // Agregar los valores a las celdas
    cell1.innerHTML = nombre;
    cell2.innerHTML = estado;
    cell3.innerHTML = '<button class="editar" onclick="openModal()">Editar</button>';
  

    closeCompraModal(); // Cerrar el modal después de guardar
}

//Agregar Insumo
// Función para abrir el modal de compra
function openAddModal() {
    var modal = document.getElementById('modal');
    modal.style.display = 'block';
}

// Función para cerrar el modal de compra
function closeModal() {
    var modal = document.getElementById('modal');
    modal.style.display = 'none';
}

// Función para guardar la compra (a implementar)
function saveInsumo() {
    var categoria = document.getElementById('categoriaInsumo').value;
    var nombre = document.getElementById('nombreInsumo').value;
    var unidad = document.getElementById('unidadInsumo').value;
    var descripcion = document.getElementById('descripcionInsumo').value;
    var stock = document.getElementById('stockInsumo').value;
    var precio = document.getElementById('precioInsumo').value;
    var estado = document.getElementById('estadoInsumo').value;

    // Crear una nueva fila en la tabla
    var table = document.getElementById('Table');
    var newRow = table.insertRow(table.rows.length);

    // Insertar celdas con los datos ingresados
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);
    var cell7 = newRow.insertCell(6);
    var cell8 = newRow.insertCell(7);
    // Agregar los valores a las celdas
    cell1.innerHTML = categoria;
    cell2.innerHTML = nombre;
    cell3.innerHTML = unidad;
    cell4.innerHTML = descripcion;
    cell5.innerHTML = stock;
    cell6.innerHTML = precio;
    cell7.innerHTML = estado;
    cell8.innerHTML = '<button class="editar" onclick="openModal()">Editar</button>';
  

    closeModal(); // Cerrar el modal después de guardar
}
//editar
// Variable global para almacenar temporalmente el índice del insumo que se está editando





//agregar proveedor
function openAddModalP() {
    var modal = document.getElementById('modalProveedor');
    modal.style.display = 'block';
}

function closeModalProveedor() {
    var modal = document.getElementById('modalProveedor');
    modal.style.display = 'none';
}

function saveProveedor() {
    var tipoProveedor = document.getElementById('tipoProveedor').value;
    var rut = document.getElementById('rut').value;
    var representanteLegal = document.getElementById('representanteLegal').value;
    var nombreCompleto = document.getElementById('nombreCompleto').value;
    var documento = document.getElementById('documento').value;
    var telefono = document.getElementById('telefono').value;
    var direccion = document.getElementById('direccion').value;
    var estadoProveedor = document.getElementById('estadoProveedor').value;

    // Aquí puedes realizar acciones con estos datos, como enviarlos a un servidor o guardarlos localmente

    var table = document.getElementById('Table');
    var newRow = table.insertRow(table.rows.length);

    // Insertar celdas con los datos ingresados
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);
    var cell7 = newRow.insertCell(6);
    var cell8 = newRow.insertCell(7);
    var cell9 = newRow.insertCell(8);

    // Agregar los valores a las celdas
    cell1.innerHTML = tipoProveedor;
    cell2.innerHTML = rut;
    cell3.innerHTML = representanteLegal;
    cell4.innerHTML = nombreCompleto;
    cell5.innerHTML = documento;
    cell6.innerHTML = telefono;
    cell7.innerHTML = direccion;
    cell8.innerHTML = estadoProveedor;
    cell9.innerHTML = '<button class="editar" onclick="openModal()">Editar</button>';
  
    

    closeModalProveedor(); // Cierra el modal después de guardar
}

//agregarcompra
function openAddModalC() {
    var modal = document.getElementById('modal1');
    modal.style.display = 'block';
}

// Función para cerrar el modal de compra
function closeModalC() {
    var modal = document.getElementById('modal1');
    modal.style.display = 'none';
}

// Función para guardar la compra (a implementar)
function saveCompra1() {
    var fecha = document.getElementById('fechaCompra').value;
    var metodo = document.getElementById('metodoCompra').value;
    var subtotal = document.getElementById('subtotalCompra').value;
    var iva = document.getElementById('ivaCompra').value;
    var descuento = document.getElementById('descuentoCompra').value;
    var insumo = document.getElementById('insumoCompra').value;
    var proveedor = document.getElementById('proveedorCompra').value;
    var precio = document.getElementById('precioCompra').value;
    // Crear una nueva fila en la tabla
    var table = document.getElementById('Table');
    var newRow = table.insertRow(table.rows.length);

    // Insertar celdas con los datos ingresados
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);
    var cell7 = newRow.insertCell(6);
    var cell8 = newRow.insertCell(7);
    var cell9 = newRow.insertCell(8);
    // Agregar los valores a las celdas
    cell1.innerHTML = fecha;
    cell2.innerHTML = metodo;
    cell3.innerHTML = subtotal;
    cell4.innerHTML = iva;
    cell5.innerHTML = descuento;
    cell6.innerHTML = insumo;
    cell7.innerHTML = proveedor;
    cell8.innerHTML = precio;
    cell9.innerHTML = '<button class="eliminar" onclick="anularProveedor(this)">Anular</button>';

    closeModalC(); // Cerrar el modal después de guardar
}


//busqueda categoria:
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search_Input');
    const rows = document.querySelectorAll('#Table tbody tr');

    searchInput.addEventListener('input', function(event) {
        const searchText = event.target.value.toLowerCase();

        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            if (text.includes(searchText)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
});

//anular Compra
function anularCompra(button) {
    var confirmation = confirm('¿Seguro que deseas anular esta compra?');

    if (confirmation) {
        var row = button.parentNode.parentNode;
        row.style.display = 'none'; // Oculta la fila de la tabla
        alert('Compra anulada exitosamente');
    } else {
        // No hacer nada si se cancela la anulación
    }
}



// Datos para el gráfico de barras (ficticios)
const barChartData = {
    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
    datasets: [{
        label: 'Ventas',
        backgroundColor: 'rgba(54, 162, 235, 0.6)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1,
        data: [65, 59, 80, 81, 56, 55],
    }]
};

// Configuración del gráfico de barras
const barCtx = document.getElementById('barChart').getContext('2d');
const myBarChart = new Chart(barCtx, {
    type: 'bar',
    data: barChartData,
    options: {
        // Aquí puedes añadir más opciones de personalización si lo deseas
    }
});

// Datos para el gráfico circular (ficticios)
const pieChartData = {
    labels: ['Ventas', 'Inventario', 'Gastos'],
    datasets: [{
        label: 'Datos',
        data: [300, 500, 200],
        backgroundColor: [
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
        ],
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
        ],
        borderWidth: 1,
    }]
};

// Configuración del gráfico circular
const pieCtx = document.getElementById('pieChart').getContext('2d');
const myPieChart = new Chart(pieCtx, {
    type: 'doughnut',
    data: pieChartData,
    options: {
        // Aquí puedes añadir más opciones de personalización si lo deseas
    }
});

//Agregar Cliente
function OpenAddClienteModal() {
    var modal = document.getElementById('modalCliente');
    modal.style.display = 'block';
}

// Función para cerrar el modal de compra
function closeClienteModal() {
    var modal = document.getElementById('modalCliente');
    modal.style.display = 'none';
}

// Función para guardar la compra (a implementar)
function saveCliente() {
    var documento = document.getElementById('Documento').value;
    var direccion = document.getElementById('Direccion').value;
    var telefono = document.getElementById('Telefono').value;
    var ciudad = document.getElementById('Ciudad').value;

    // Crear una nueva fila en la tabla
    var table = document.getElementById('Table');
    var newRow = table.insertRow(table.rows.length);

    // Insertar celdas con los datos ingresados
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);

    // Agregar los valores a las celdas
    cell1.innerHTML = documento;
    cell2.innerHTML = direccion;
    cell3.innerHTML = telefono;
    cell4.innerHTML = ciudad;
    cell5.innerHTML = '<button class="editar" onclick="openModal()">Editar</button>';
  

    closeClienteModal(); // Cerrar el modal después de guardar
}

//agregar rol
function OpenAddRolModal() {
    var modal = document.getElementById('modalRol');
    modal.style.display = 'block';
}

// Función para cerrar el modal de compra
function closeRolModal() {
    var modal = document.getElementById('modalRol');
    modal.style.display = 'none';
}

// Función para guardar la compra (a implementar)
function saveRol() {
    var nombre = document.getElementById('nombre').value;
    var permios = document.getElementById('permisos').value;
    var estado = document.getElementById('estado').value;
   

    // Crear una nueva fila en la tabla
    var table = document.getElementById('Table');
    var newRow = table.insertRow(table.rows.length);

    // Insertar celdas con los datos ingresados
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);

    // Agregar los valores a las celdas
    cell1.innerHTML = nombre;
    cell2.innerHTML = permios;
    cell3.innerHTML = estado;
    cell4.innerHTML = '<button class="editar" onclick="openModal()">Editar</button>';
  

    closeRolModal(); // Cerrar el modal después de guardar
}
//agregar usuario
function OpenAddUsModal() {
    var modal = document.getElementById('modalUs');
    modal.style.display = 'block';
}

// Función para cerrar el modal de compra
function closeUsModal() {
    var modal = document.getElementById('modalUs');
    modal.style.display = 'none';
}

// Función para guardar la compra (a implementar)
function saveUsr() {
    var nombre = document.getElementById('nombre').value;
    var correo = document.getElementById('correo').value;
    var contraseña = document.getElementById('contrasena').value;
    var estado = document.getElementById('estado').value;
    var fecha = document.getElementById('fecha').value;

    // Crear una nueva fila en la tabla
    var table = document.getElementById('Table');
    var newRow = table.insertRow(table.rows.length);

    // Insertar celdas con los datos ingresados
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);

    // Agregar los valores a las celdas
    cell1.innerHTML = nombre;
    cell2.innerHTML = correo;
    cell3.innerHTML = contraseña;
    cell4.innerHTML = estado;
    cell5.innerHTML = fecha;
    cell6.innerHTML = '<button class="editar" onclick="openModal()">Editar</button>';
  

    closeUsModal(); // Cerrar el modal después de guardar
}
//agregar perdida de ususario
function OpenAddpiModal() {
    var modal = document.getElementById('modalPi');
    modal.style.display = 'block';
}

// Función para cerrar el modal de compra
function closepidModal() {
    var modal = document.getElementById('modalPi');
    modal.style.display = 'none';
}

// Función para guardar la compra (a implementar)
function saveperdida() {
    var nombre = document.getElementById('nombre').value;
    var unidad_medida = document.getElementById('unidad_medida').value;
    var Cantidad = document.getElementById('Cantidad').value;
    var Fecha_perdida = document.getElementById('Fecha_perdida').value;
    // Crear una nueva fila en la tabla
    var table = document.getElementById('Table');
    var newRow = table.insertRow(table.rows.length);

    // Insertar celdas con los datos ingresados
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);

    // Agregar los valores a las celdas
    cell1.innerHTML = nombre;
    cell2.innerHTML = unidad_medida;
    cell3.innerHTML = Cantidad;
    cell4.innerHTML = Fecha_perdida;
    cell5.innerHTML = '<button class="eliminar" onclick="anularperdida(this)">Anular</button>';
  

    closepidModal(); // Cerrar el modal después de guardar
}
//anular Compra
function anularperdida(button) {
    var confirmation = confirm('¿Seguro que deseas anular esta perdida de insumo?');

    if (confirmation) {
        var row = button.parentNode.parentNode;
        row.style.display = 'none'; // Oculta la fila de la tabla
        alert('Compra anulada exitosamente');
    } else {
        // No hacer nada si se cancela la anulación
    }
}