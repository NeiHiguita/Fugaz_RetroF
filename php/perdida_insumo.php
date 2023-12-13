<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Fugaz_Retro/css/dashboard.css">
    <script src="/Fugaz_Retro/js/dashboard.js"></script>
    <title>Dashboard - FUGAZ-RETRO</title>
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
        <h1>Perdida insumo</h1>
        <div class="search">
            <input type="text" id="search_Input" placeholder="Buscar...">
            <span class="search-icon"><i class="bi bi-search"></i></span>
        </div>
    </div>

        <button class="agregar" onclick="OpenAddpiModal()">Agregar Perdida insumo</button>

        <div id="modalPi" class="modal" style="display: none;">
            <div class="modal-content">
                <span class="close" onclick="closepidModal()">&times;</span>
                <h2>Agregar Rol</h2>
                <form id="addCompraForm">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                        <label for="unidad_medida" class="form-label">Unidad de medida:</label>
                        <input type="text" class="form-control" id="unidad_medida" name="unidad_medida" required>
                        <label for="Cantidad" class="form-label">Cantidad:</label>
                        <input type="text" class="form-control" id="Cantidad" name="Cantidad" required>
                        <label for="Fecha_perdida" class="form-label">Fecha de perdida:</label>
                        <input type="date" class="form-control" id="Fecha_perdida" name="Fecha_perdida" required>
                    <button type="button" onclick="saveperdida()">Guardar</button>
                </form>
            </div>
        </div>

        <!-- Tabla para mostrar las categorías -->
        <table id="Table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Unidad de medida</th>
                    <th>Cantidad</th>
                    <th>Fecha de peridda</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Hilo</td>
                    <td>metros</td>
                    <td>2</td>
                    <td>13/12/2023</td>
                    <td>
                        <button class="eliminar" onclick="anularperdida(this)">Anular</button>
                    </td>
                </tr>
                <tr>
                    <td>Tela satin</td>
                    <td>centimetros</td>
                    <td>4</td>
                    <td>14/12/2023</td>
                    <td>
                        <button class="eliminar" onclick="anularperdida(this)">Anular</button>
                    </td>
                </tr>
             
            </tbody>
        </table>
    </div>
    <button class="report-button">Generar Reporte</button>
    </div>

</body>

</html>