<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - FUGAZ-RETRO</title>
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

    <div class="content1" >
        <!-- Contenido específico para la gestión de roles -->
        
        <div class="search-box">
        <h1>Gestión de Usuarios</h1>
        <div class="search">
            <input type="text" id="search_Input" placeholder="Buscar...">
            <span class="search-icon"><i class="bi bi-search"></i></span>
        </div>
    </div>
       <!-- <button class="btn btn-primary agregar" data-bs-toggle="modal" data-bs-target="#modal">Agregar Usuario</button-->

    <button class="agregar" onclick="OpenAddUsModal()">Agregar Usuario</button>

         <!-- Modal para agregar compra -->
         <div id="modalUs" class="modal" style="display: none;">
            <div class="modal-content">
                <span class="close" onclick="closeUsModal()">&times;</span>
                <h2>Agregar Usuario</h2>
                <form id="addCompraForm">
                    <label for="nombre" class="form-label">Nombre de Usuario:</label>
                    <br>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                    <br>
                    <label for="correo" class="form-label">Correo:</label>
                    <br>
                    <input type="email" class="form-control" id="correo" name="correo" required>
                    <br>
                    <label for="contrasena" class="form-label">Contraseña:</label>
                    <br>
                    <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                    <br>
                    <label for="estado" class="form-label">Estado:</label>
                        <select class="form-select" id="estado" name="estado" required>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                        <br>
                    <label for="fecha" class="form-label">Fecha de Registro:</label>
                    <br>
                    <input type="date" class="form-control" id="fecha" name="fecha" required>

                    <button type="button" onclick="saveUsr()">Guardar</button>
                </form>
            </div>
        </div>
        <!-- Tabla para mostrar las categorías -->
        <table id="Table">
            <thead>
                <tr>
                    <th>Nombre de Usuario</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Estado</th>
                    <th>Fecha de registro</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Neider Higuita</td>
                    <td>neiderhiguita13@gmail.com</td>
                    <td>********</td>
                    <td>Activo</td>
                    <td>13/12/2023</td>
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                </tr>
                <tr>
                    <td>Sara Mesa</td>
                    <td>sarlmesa@misena.com</td>
                    <td>********</td>
                    <td>Inactivo</td>
                    <td>14/12/2023</td>
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                </tr>
                <!--<tr>
                    <td>Carolina Mazo</td>
                    <td>mazocaro14@gmail.com</td>
                    <td>********</td>
                    <td>Activo</td>
                    <td>14/12/2023</td>
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                </tr>-->
            </tbody>
        </table>
    </div>
    <button class="report-button">Generar Reporte</button>
    </div>
</body>

</html>