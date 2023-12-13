<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Encabezado y enlaces a CSS y otros archivos -->
    <link rel="stylesheet" href="/Fugaz_Retro/css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
<div class="sidebar">
        <div class="search-bar">
        <div class="logo">
                <h2>FUGAZ RETRO</h2>
            </div>
            <div class="search">
    <input type="text" placeholder="Buscar..." id="searchInput">
    <span class="search-icon"><i class="bi bi-search"></i></span>
</div>
        </div>
        <ul class="menu">
            <li>
                <a href="/Fugaz_Retro/php/dashboard.php">
                <i class="bi bi-gear"></i>Configuración</a>
                <ul class="submenu">
                    <li><a href="/Fugaz_Retro/php/roles.php">Roles</a></li>
                </ul>
            </li>
            <li><a href="/Fugaz_Retro/php/usuario.php">
            <i class="bi bi-people"></i> Usuarios</a></li>
            <li>
                <a href="#">
                <i class="bi bi-cart4"></i>Compras</a>
                <ul class="submenu">
                    <li><a href="categoria.php">Categoría insumo</a></li>
                    <li><a href="insumo.php">Insumo</a></li>
                    <li><a href="proveedor.php">Proveedores</a></li>
                    <li><a href="compras.php">Compras</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                <i class="bi bi-cash-coin"></i>Ventas</a>
                <ul class="submenu">
                    <li><a href="clientes.php">Clientes</a></li>
                    <li><a href="pedido.php">Pedido</a></li>
                    <li><a href="producto.php">Producto</a></li>
                    <li><a href="perdida_insumo.php">Perdida insumo</a></li>
                    <li><a href="venta.php">Ventas</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="topbar">
        <div class="navigation">
        <a href="dashboard.php" class="dashboard-link">
            <h2>Dashboard</h2>
        </div>
        <div class="profile">
    <!-- Utilizando Bootstrap para un círculo -->
    <div class="dropdown">
        <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;" id="dropdownMenuButton" onclick="toggleDropdown()" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-person-fill text-white"></i>
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="profileDropdown" style="display: none;">
            <a class="dropdown-item" href="#">Carolina Mazo</a>
            <a class="dropdown-item" href="index.php">Cerrar sesión</a>
        </div>
    </div>
</div>
</div>

    <div class="content1">
        <!-- Contenido principal del dashboard -->
        <div class="search-box">
        <h1>Insumos</h1>
        <div class="search">
            <input type="text" id="search_Input" placeholder="Buscar...">
            <span class="search-icon"><i class="bi bi-search"></i></span>
        </div>
    </div>

        <button class="agregar" onclick="openAddModal()">Agregar Insumo</button>

         <!-- Modal para agregar compra -->
         <div id="modal" class="modal" style="display: none;">
            <div class="modal-content1">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Agregar Insumo</h2>
                <form id="addInsumoForm">
                    <label for="categoriaInsumo">Categoría de insumo:</label>
                    <select id="categoriaInsumo" name="categoriaInsumo">
                            <option value="Tela tejido de punto">Tela tejido de punto</option>
                            <option value="Hilos">Hilos</option>
                        </select><br><br>
                    <label for="nombreInsumo">Nombre:</label>
                    <input type="text" id="nombreInsumo" name="nombreInsumo"><br><br>
                    <label for="unidadInsumo">Unidad de medida:</label>
                    <input type="text" id="unidadInsumo" name="unidadInsumo"><br><br>
                    <label for="descripcionInsumo">Descripcion:</label>
                    <input type="text" id="descripcionInsumo" name="descripcionInsumo"><br><br>
                    <label for="stockInsumo">Stock:</label>
                    <input type="number" id="stockInsumo" name="stockInsumo"><br><br>
                    <label for="precioInsumo">Precio unitario:</label>
                    <input type="text" id="precioInsumo" name="precioInsumo"><br><br>
                    <label for="estadoInsumo">Estado:</label>
                    <select id="estadoInsumo" name="estadoInsumo">
                        <option value="Disponible">Disponible</option>
                        <option value="Agotado">Agotado</option>
                    </select><br><br>
                    <button type="button" onclick="saveInsumo()">Guardar</button>
                </form>
            </div>
        </div>
        <!-- ... (código previo) ... -->

<!-- Modal para editar insumo -->
<div id="modal" class="modal" style="display: none;">
    <div class="modal-content1">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Editar Insumo</h2>
        <form id="editInsumoForm">
            <label for="categoriaInsumo">Categoría de insumo:</label>
            <input type="text" id="categoriaInsumo" name="categoriaInsumo" readonly><br><br>
            <label for="nombreInsumo">Nombre:</label>
            <input type="text" id="nombreInsumo" name="nombreInsumo"><br><br>
            <label for="unidadInsumo">Unidad de medida:</label>
            <input type="text" id="unidadInsumo" name="unidadInsumo"><br><br>
            <label for="descripcionInsumo">Descripción:</label>
            <input type="text" id="descripcionInsumo" name="descripcionInsumo"><br><br>
            <label for="stockInsumo">Stock:</label>
            <input type="number" id="stockInsumo" name="stockInsumo"><br><br>
            <label for="precioInsumo">Precio unitario:</label>
            <input type="text" id="precioInsumo" name="precioInsumo"><br><br>
            <label for="estadoInsumo">Estado:</label>
            <select id="estadoInsumo" name="estadoInsumo">
                <option value="Disponible">Disponible</option>
                <option value="Agotado">Agotado</option>
            </select><br><br>
            <button type="button" onclick="saveEditedInsumo()">Guardar</button>
        </form>
    </div>
</div>

<!-- ... (código posterior) ... -->


        <!-- Tabla para mostrar las categorías -->
        <table id="Table">
            <thead>
                <tr>
                    <th>Categoría insumo</th>
                    <th>Nombre</th>
                    <th>Unidad de medida</th>
                    <th>Descripcion</th>
                    <th>Stock</th>
                    <th>Precio unitario</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Hilos</td>
                    <td>Hilo seda</td>
                    <td>Calibre/Yardas</td>
                    <td>Hilo color negro</td>
                    <td>5</td>
                    <td>$ 8.000</td>
                    <td>Disponible</td>
                    <td>
                    <button class="editar" onclick="openEditModal(0)">Editar</button>
                    </td>
                </tr>
                <tr>
                    <td>Telas tejido de punto</td>
                    <td>Tela satín</td>
                    <td>Metros</td>
                    <td>Tela satín color rojo</td>
                    <td>30</td>
                    <td>$ 12.000</td>
                    <td>Agotado</td>
                    <td>
                    <button class="editar" onclick="openEditModal(0)">Editar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
      
        <button class="report-button">Generar Reporte</button>


        <script src="/Fugaz_Retro/js/dashboard.js"></script>
    
</body>
</html>
