<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - FUGAZ-RETRO</title>
    <link rel="stylesheet" href="/Fugaz_Retro/css/dashboard.css"> <!-- Enlaza tu archivo CSS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Enlace a Chart.js -->
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
    <div class="content">
        <h1 id="adm">Bienvenido al Panel de Administración</h1>

        <div class="info-container">
            <div class="info-box green-box">
                <div class="value">$2,500</div>
            </div>

            <div class="info-box blue-box">
                <div class="value">$3,800</div>
            </div>

            <div class="info-box green-box">
                <div class="value">$1,200</div>
            </div>

            <div class="info-box blue-box">
                <div class="value">$4,600</div>
            </div>
        </div>

        <!-- Lienzos para los gráficos -->       
        
        <div class="chart-container canvas-bar">
            <canvas id="barChart" width="1100" height="900"></canvas>
            
        </div>
        <div class="chart-container canvas-pie">
            <canvas id="pieChart" width="400" height="200"></canvas>
        </div>
    </div>

    <script src="/Fugaz_Retro/js/dashboard.js"></script>
</body>
</html>