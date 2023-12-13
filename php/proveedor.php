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
        <h1>Proveedores</h1>
        <div class="search">
            <input type="text" id="search_Input" placeholder="Buscar...">
            <span class="search-icon"><i class="bi bi-search"></i></span>
        </div>
    </div>

        <button class="agregar" onclick="openAddModalP()">Agregar Proveedor</button>

        <div id="modalProveedor" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close" onclick="closeModalProveedor()">&times;</span>
        <h2>Agregar Proveedor</h2>
        <form id="addProveedorForm">
            <label for="tipoProveedor">Tipo proveedor:</label>
            <select id="tipoProveedor" name="tipoProveedor">
                <option value="Natural">Natural</option>
                <option value="Empresa">Empresa</option>
            </select><br><br>
            <label for="rut">Rut:</label>
            <input type="text" id="rut" name="rut"><br><br>
            <label for="representanteLegal">Representante legal:</label>
            <input type="text" id="representanteLegal" name="representanteLegal"><br><br>
            <label for="nombreCompleto">Nombre completo:</label>
            <input type="text" id="nombreCompleto" name="nombreCompleto"><br><br>
            <label for="documento">Documento:</label>
            <input type="text" id="documento" name="documento"><br><br>
            <label for="telefono">Télefono:</label>
            <input type="text" id="telefono" name="telefono"><br><br>
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion"><br><br>
            <label for="estadoProveedor">Estado:</label>
            <select id="estadoProveedor" name="estadoProveedor">
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select><br><br>
            <button type="button" onclick="saveProveedor()">Guardar</button>
        </form>
    </div>
</div>
        <!-- Tabla para mostrar las categorías -->
        <table id="Table">
            <thead>
                <tr>
                    <th>Tipo proveedor</th>
                    <th>Rut</th>
                    <th>Representante legal</th>
                    <th>Nombre completo</th>
                    <th>Documento</th>
                    <th>Télefono</th>
                    <th>Dirección</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Natural</td>
                    <td></td>
                    <td></td>
                    <td>Juan Goméz</td>
                    <td>1098903</td>
                    <td>3024338696</td>
                    <td>Cll 99 AA</td>
                    <td>Activo</td>
                    <td>
                    <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                    
                </tr>
                <tr>
                    <td>Empresa</td>
                    <td>2345678</td>
                    <td>Sandra López</td>
                    <td></td>
                    <td></td>
                    <td>23456789</td>
                    <td>Cll B23#</td>
                    <td>Inactivo</td>
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                    
                </tr>
            </tbody>
        </table>
    </div>
      <!-- Modal para agregar proveedores -->


        


        <script src="/Fugaz_Retro/js/dashboard.js"></script>
    
</body>
</html>
