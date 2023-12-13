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
        <h1>Compras</h1>
        <div class="search">
            <input type="text" id="search_Input" placeholder="Buscar...">
            <span class="search-icon"><i class="bi bi-search"></i></span>
        </div>
    </div>

        <button class="agregar" onclick="openAddModalC()">Agregar compra</button>

         <!-- Modal para agregar compra -->
         <div id="modal1" class="modal1" style="display: none;">
            <div class="modal-content2">
                <span class="close2" onclick="closeModalC()">&times;</span>
                <h2>Agregar Compra</h2>
                <form id="addcompraForm">
                    <label for="fechaCompra">Compra:</label>
                    <input type="date" id="fechaCompra" name="fechaCompra"><br><br>
                    <label for="metodoCompra">Metodo de pago:</label>
                    <select id="metodoCompra" name="metodoCompra">
                            <option value="Efectivo">Efectivo</option>
                            <option value="Transferencia">Transferencia</option>
                        </select><br><br>
                    <label for="subtotalCompra">Subtotal :</label>
                    <input type="text" id="subtotalCompra" name="subtotalCompra"><br><br>
                    <label for="ivaCompra">IVA:</label>
                    <input type="text" id="ivaCompra" name="ivaCompra"><br><br>
                    <label for="descuentoCompra">Descuento:</label>
                    <input type="text" id="descuentoCompra" name="descuentoCompra"><br><br>
                    <label for="insumoCompra">Asociar insumo:</label>
                    <input type="text" id="insumoCompra" name="insumoCompra"><br><br>
                    <br><br>
                    <label for="proveedorCompra">Asociar proveedor:</label>
                    <input type="text" id="proveedorCompra" name="proveedorCompra"><br><br>
                    <br><br>
                    <label for="precioCompra">Precio total:</label>
                    <input type="text" id="precioCompra" name="precioCompra"><br><br>
                    <br><br>
                    <button type="button" onclick="saveCompra1()">Guardar</button>
                </form>
            </div>
        </div>

        <!-- Tabla para mostrar las categorías -->
        <table id="Table">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Metodo pago</th>
                    <th>Subtotal</th>
                    <th>Iva</th>
                    <th>Descuento</th>
                    <th>Insumo</th>
                    <th>Proveedor</th>
                    <th>Precio total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12/12/2023</td>
                    <td>Efectivo</td>
                    <td>$ 3.000</td>
                    <td>19%</td>
                    <td>0</td>
                    <td>Tela satin</td>
                    <td>Juan</td>
                    <td>$ 3.570</td>
                    <td>
                        <button class="eliminar" onclick="anularCompra(this)">Anular</button>
                    </td>

                </tr>
                <tr>
                    <td>11/12/2023</td>
                    <td>Transferencia</td>
                    <td>$ 12.000</td>
                    <td>19%</td>
                    <td>0</td>
                    <td>Luis</td>
                    <td>Hilo negro</td>
                    <td>$ 12.570</td>
                    <td>
                        <button class="eliminar" onclick="anularCompra(this)">Anular</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
      
        <button class="report-button">Generar Reporte</button>


        <script src="/Fugaz_Retro/js/dashboard.js"></script>
    
</body>
</html>
