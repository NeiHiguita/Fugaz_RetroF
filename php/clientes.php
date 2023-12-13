<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Encabezado y enlaces a CSS y otros archivos -->
    <link rel="stylesheet" href="/Fugaz_Retro/css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

 
    <script src="/Fugaz_Retro/js/dashboard.js"></script>
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
        <h1>Cliente
        </h1>
        <div class="search">
            <input type="text" id="search_Input" placeholder="Buscar...">
            <span class="search-icon"><i class="bi bi-search"></i></span>
        </div>
    </div>
        

        <button class="agregar" onclick="OpenAddClienteModal()">Registrar clientes</button>

         <!-- Modal para agregar compra -->
         <div id="modalCliente" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close" onclick="closeClienteModal()">&times;</span>
        <h2>Agregar Cliente</h2>
        <form id="addClientForm">
            <label for="Documento">Documento:</label>
            <input type="text" id="Documento" name="Documento" required><br><br>
            <label for="Direccion">Dirección:</label>
            <input type="text" id="Direccion" name="Direccion" required><br><br>
            <label for="Telefono">Teléfono:</label>
            <input type="text" id="Telefono" name="Telefono" required><br><br>
            <label for="Ciudad">Ciudad:</label>
            <input type="text" id="Ciudad" name="Ciudad" required><br><br>
            <button type="button" class="agregar" onclick="saveCliente()">Guardar</button>
        </form>
    </div>
</div>


        <!-- Tabla para mostrar las categorías -->
        <table id="Table">
            <thead>
                <tr>
                    <th>Documento</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Ciudad</th>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12345678</td>
                    <td>Calle b07</td>
                    <td>5722285</td>
                    <td>Medellín</td>
                    
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                    <td>
                    <button class="eliminar">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>1017234740</td>
                    <td>cra24a</td>
                    <td>3014199345</td>
                    <td>Calí</td>
                    
                
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                    <td>
                    <button class="eliminar">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>


        
    
</body>
</html>